<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactFormRequest;
use App\Jobs\SendLeadEmailJob;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactFormController extends Controller
{
    public function submitContact(StoreContactFormRequest $request)
    {
        $leadType = $request->input('lead_type') === 'project_enquiry' ? 'ProjectEnquiry' : 'ContactForm';

        $contact = ContactForm::create($request->validated());

        try {
            $response = Http::connectTimeout(3)->timeout(5)->post('https://flow.zoho.in/60069463164/flow/webhook/incoming?zapikey=1001.0b9702156501bd94d7d4bd0b27eafb69.2417d5b6f9f2cedb335ce441b2aa075b&isdebug=false', [
                "name" => $request->name,
                "phone" => $request->phone ?? '',
                "email" => $request->email,
                "company_name" => $request->company_name ?? '',
                "message" => $request->message
            ]);

            if (!$response->successful()) {
                Log::warning('Zoho Flow webhook failed', [
                    'status' => $response->status(),
                    'contact_id' => $contact->id,
                ]);
            }
        } catch (\Throwable $e) {
            Log::error('Zoho Flow webhook error', [
                'error' => $e->getMessage(),
                'contact_id' => $contact->id,
            ]);
        }

        try {
            SendLeadEmailJob::dispatch($contact, $leadType);
        } catch (\Throwable $e) {
            Log::error('Email job dispatch failed', [
                'error' => $e->getMessage(),
                'contact_id' => $contact->id,
            ]);
        }

        return response()->json([
            'success' => true,
            'redirect' => route('thank-you'),
        ]);
    }

    public function index()
    {
        $contact_forms = ContactForm::latest()->paginate(15);

        return view('admin.mainform.index', compact('contact_forms'));
    }

    public function retryEmail(ContactForm $contact)
    {
        $contact->resetEmailStatus();
        SendLeadEmailJob::dispatch($contact, 'ContactForm');

        return back()->with('success', 'Email re-queued for delivery.');
    }
}
