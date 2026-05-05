<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\webinar;
use App\Services\ImageService;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    public function __construct(
        private ImageService $imageService
    ) {}

    private function textToArray(?string $text): ?array
    {
        if (empty($text)) {
            return null;
        }

        $lines = array_filter(array_map('trim', explode("\n", $text)), function ($line) {
            return ! empty($line);
        });

        return ! empty($lines) ? array_values($lines) : null;
    }

    public function index()
    {
        $webinars = Webinar::orderBy('start_date', 'desc')->paginate(15);

        return view('admin.webinars.index', compact('webinars'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'start_time' => 'required',
            'timezone' => 'nullable|string|max:50',
            'duration' => 'nullable|string|max:50',
            'meeting_link' => 'nullable|url|max:500',
            'speaker_name' => 'required|string|max:255',
            'speaker_designation' => 'nullable|string|max:255',
            'host_name' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:10240',
            'resources' => 'nullable|string|max:500',
            'status' => 'required|in:upcoming,past,cancelled',
            'is_active' => 'boolean',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $data['image'] = $this->handleImageUpload($request->file('image'));
        }

        $data['is_active'] = $request->boolean('is_active', true);

        if ($request->filled('why_attend_text')) {
            $data['why_attend'] = $this->textToArray($request->input('why_attend_text'));
        }
        if ($request->filled('features_text')) {
            $data['features'] = $this->textToArray($request->input('features_text'));
        }
        if ($request->filled('what_you_get_text')) {
            $data['what_you_get'] = $this->textToArray($request->input('what_you_get_text'));
        }

        Webinar::create($data);

        return redirect()->route('admin.webinars.index')->with('success', 'Webinar added successfully!');
    }

    public function edit($id)
    {
        $webinar = Webinar::findOrFail($id);

        return view('admin.webinars.edit', compact('webinar'));
    }

    public function update(Request $request, $id)
    {
        $webinar = Webinar::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'start_time' => 'required',
            'timezone' => 'nullable|string|max:50',
            'duration' => 'nullable|string|max:50',
            'meeting_link' => 'nullable|url|max:500',
            'speaker_name' => 'required|string|max:255',
            'speaker_designation' => 'nullable|string|max:255',
            'host_name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            'resources' => 'nullable|string|max:500',
            'status' => 'required|in:upcoming,past,cancelled',
            'is_active' => 'boolean',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $this->deleteImageFile($webinar->image);
            $data['image'] = $this->handleImageUpload($request->file('image'));
        }

        $data['is_active'] = $request->boolean('is_active', true);

        if ($request->filled('why_attend_text')) {
            $data['why_attend'] = $this->textToArray($request->input('why_attend_text'));
        }
        if ($request->filled('features_text')) {
            $data['features'] = $this->textToArray($request->input('features_text'));
        }
        if ($request->filled('what_you_get_text')) {
            $data['what_you_get'] = $this->textToArray($request->input('what_you_get_text'));
        }

        $webinar->update($data);

        return redirect()->route('admin.webinars.index')->with('success', 'Webinar updated successfully!');
    }

    public function destroy($id)
    {
        $webinar = Webinar::findOrFail($id);

        $this->deleteImageFile($webinar->image);

        $webinar->delete();

        return redirect()->route('admin.webinars.index')->with('success', 'Webinar deleted successfully!');
    }

    private function handleImageUpload($file): string
    {
        $path = $this->imageService->upload($file, 'webinar');

        if ($path) {
            return $path;
        }

        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('assets/admin/image/webinar'), $filename);

        return $filename;
    }

    private function deleteImageFile(?string $path): void
    {
        if (! $path) {
            return;
        }

        $this->imageService->delete($path);

        if (str_starts_with($path, 'assets/')) {
            $fullPath = public_path($path);
            if (file_exists($fullPath)) {
                unlink($fullPath);
            }

            return;
        }

        $oldPath = public_path('assets/admin/image/webinar/'.$path);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }
    }

    public function registrations($id)
    {
        $webinar = Webinar::findOrFail($id);
        $registrations = $webinar->registrations()->latest()->paginate(15);

        return view('admin.webinars.registrations', compact('webinar', 'registrations'));
    }
}
