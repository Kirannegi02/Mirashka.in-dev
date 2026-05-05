<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use App\Services\CaseStudyMediaService;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CaseStudyController extends Controller
{
    public function __construct(
        private CaseStudyMediaService $mediaService,
        private ImageService $imageService
    ) {}

    public function index()
    {
        $caseStudies = CaseStudy::with('media')->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.casestudies.index', compact('caseStudies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'client_name' => 'required',
            'industry' => 'required',
            'featured_image' => 'nullable|image|max:10240',
            'gallery_images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
        ]);

        $imageName = null;
        $imageOne = null;
        $imageTwo = null;
        $imageThree = null;
        $imageFour = null;

        if ($request->hasFile('featured_image')) {
            $imageName = $this->handleImageUpload($request->file('featured_image'), 'case-study');
        }

        if ($request->hasFile('image_one')) {
            $imageOne = $this->handleImageUpload($request->file('image_one'), 'case-study');
        }

        if ($request->hasFile('image_two')) {
            $imageTwo = $this->handleImageUpload($request->file('image_two'), 'case-study');
        }

        if ($request->hasFile('image_three')) {
            $imageThree = $this->handleImageUpload($request->file('image_three'), 'case-study');
        }

        if ($request->hasFile('image_four')) {
            $imageFour = $this->handleImageUpload($request->file('image_four'), 'case-study');
        }

        $caseStudy = CaseStudy::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'client_name' => $request->client_name,
            'industry' => $request->industry,
            'short_description' => $request->short_description,
            'challenge' => $request->challenge,
            'solution' => $request->solution,
            'strategy' => $request->strategy,
            'results' => $request->results,
            'impact_highlights' => $request->impact_highlights,
            'media_coverage' => $request->media_coverage,
            'reach' => $request->reach,
            'featured_image' => $imageName,
            'image_one' => $imageOne,
            'image_two' => $imageTwo,
            'image_three' => $imageThree,
            'image_four' => $imageFour,
            'status' => $request->status,
        ]);

        $this->mediaService->store($request, $caseStudy);

        return redirect()->back()->with('success', 'Case study added successfully!');
    }

    public function edit($id)
    {
        $caseStudy = CaseStudy::with('media')->findOrFail($id);

        return response()->json($caseStudy);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gallery_images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
        ]);

        $caseStudy = CaseStudy::findOrFail($id);

        $imageName = $caseStudy->featured_image;
        $imageOne = $caseStudy->image_one;
        $imageTwo = $caseStudy->image_two;
        $imageThree = $caseStudy->image_three;
        $imageFour = $caseStudy->image_four;

        if ($request->hasFile('featured_image')) {
            $this->deleteOldImage($caseStudy->featured_image);
            $imageName = $this->handleImageUpload($request->file('featured_image'), 'case-study');
        }

        if ($request->hasFile('image_one')) {
            $this->deleteOldImage($caseStudy->image_one);
            $imageOne = $this->handleImageUpload($request->file('image_one'), 'case-study');
        }

        if ($request->hasFile('image_two')) {
            $this->deleteOldImage($caseStudy->image_two);
            $imageTwo = $this->handleImageUpload($request->file('image_two'), 'case-study');
        }

        if ($request->hasFile('image_three')) {
            $this->deleteOldImage($caseStudy->image_three);
            $imageThree = $this->handleImageUpload($request->file('image_three'), 'case-study');
        }

        if ($request->hasFile('image_four')) {
            $this->deleteOldImage($caseStudy->image_four);
            $imageFour = $this->handleImageUpload($request->file('image_four'), 'case-study');
        }

        $caseStudy->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'client_name' => $request->client_name,
            'industry' => $request->industry,
            'short_description' => $request->short_description,
            'challenge' => $request->challenge,
            'solution' => $request->solution,
            'strategy' => $request->strategy,
            'results' => $request->results,
            'impact_highlights' => $request->impact_highlights,
            'media_coverage' => $request->media_coverage,
            'reach' => $request->reach,
            'featured_image' => $imageName,
            'image_one' => $imageOne,
            'image_two' => $imageTwo,
            'image_three' => $imageThree,
            'image_four' => $imageFour,
            'status' => $request->status,
        ]);

        $this->mediaService->store($request, $caseStudy);

        return redirect()->back()->with('success', 'Case study updated successfully!');
    }

    public function destroy($id)
    {
        $caseStudy = CaseStudy::findOrFail($id);

        $this->mediaService->deleteByCaseStudy($id);

        $images = [
            $caseStudy->featured_image,
            $caseStudy->image_one,
            $caseStudy->image_two,
            $caseStudy->image_three,
            $caseStudy->image_four,
        ];

        foreach ($images as $img) {
            $this->deleteOldImage($img);
        }

        $caseStudy->delete();

        return redirect()->back()->with('success', 'Case study deleted successfully!');
    }

    public function deleteMedia($id)
    {
        $deleted = $this->mediaService->delete($id);

        if ($deleted) {
            return back()->with('success', 'Image deleted successfully');
        }

        return back()->with('error', 'Image not found');
    }

    public function filter(Request $request)
    {
        $industry = $request->industry;

        $caseStudies = CaseStudy::where('status', 1)
            ->with('media')
            ->when($industry, function ($query) use ($industry) {
                $query->where('industry', $industry);
            })
            ->latest()
            ->get();

        return view('frontend.partials.case-study-cards', compact('caseStudies'))->render();
    }

    private function handleImageUpload($file, string $context): string
    {
        $path = $this->imageService->upload($file, $context);

        if ($path) {
            return $path;
        }

        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('assets/admin/image/case-study'), $filename);

        return $filename;
    }

    private function deleteOldImage(?string $path): void
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

        $oldPath = public_path('assets/admin/image/case-study/'.$path);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }
    }
}
