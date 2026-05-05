<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Services\ImageService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __construct(
        private ImageService $imageService
    ) {}

    public function index()
    {
        $banners = Banner::latest()->paginate(15);

        return view('admin.banner.index', compact('banners'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'sub_heading' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:10240',
            'status' => 'required|in:active,disabled',
        ]);

        if ($request->hasFile('image')) {
            $path = $this->imageService->upload($request->image, 'banners');

            if ($path) {
                $data['image'] = $path;
            } else {
                $filename = time().'_'.$request->image->getClientOriginalName();
                $request->image->move(public_path('assets/admin/image/banner'), $filename);
                $data['image'] = $filename;
            }
        }

        Banner::create($data);

        return redirect()->back()->with('success', 'Banner added successfully!');
    }

    public function edit($id)
    {
        return response()->json(Banner::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'sub_heading' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            'status' => 'required|in:active,disabled',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteOldImage($banner->image);

            $path = $this->imageService->upload($request->image, 'banners');

            if ($path) {
                $data['image'] = $path;
            } else {
                $filename = time().'_'.$request->image->getClientOriginalName();
                $request->image->move(public_path('assets/admin/image/banner'), $filename);
                $data['image'] = $filename;
            }
        }

        $banner->update($data);

        return redirect()->back()->with('success', 'Banner updated successfully!');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        $this->deleteOldImage($banner->image);

        $banner->delete();

        return redirect()->back()->with('success', 'Banner deleted successfully!');
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

        $oldPath = public_path('assets/admin/image/banner/'.$path);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }
    }
}
