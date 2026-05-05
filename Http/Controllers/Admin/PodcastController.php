<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use App\Services\ImageService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function __construct(
        private ImageService $imageService
    ) {}

    public function index(): Factory|View
    {
        $podcasts = Podcast::orderBy('publish_date', 'desc')->paginate(15);

        return view('admin.podcasts.index', compact('podcasts'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tittle' => 'required|string|max:255',
            'description' => 'nullable|string',
            'publish_date' => 'required|date',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:10240',
            'audio' => 'required|mimes:mp3,wav|max:20000',
            'status' => 'required|in:active,disabled',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->handleImageUpload($request->file('image'), 'podcast');
        }

        if ($request->hasFile('audio')) {
            $file = $request->file('audio');
            $audioName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('assets/admin/audio/podcast'), $audioName);
            $data['audio'] = $audioName;
        }

        Podcast::create($data);

        return redirect()->route('admin.podcasts.index')->with('success', 'Podcast added successfully!');
    }

    public function edit($id)
    {
        return response()->json(Podcast::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $podcast = Podcast::findOrFail($id);

        $data = $request->validate([
            'tittle' => 'required|string|max:255',
            'description' => 'nullable|string',
            'publish_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
            'audio' => 'nullable|mimes:mp3,wav|max:20000',
            'status' => 'required|in:active,disabled',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteOldImage($podcast->image);
            $data['image'] = $this->handleImageUpload($request->file('image'), 'podcast');
        }

        if ($request->hasFile('audio')) {
            if ($podcast->audio && file_exists(public_path('assets/admin/audio/podcast/'.$podcast->audio))) {
                unlink(public_path('assets/admin/audio/podcast/'.$podcast->audio));
            }
            $audio = time().'_'.$request->audio->getClientOriginalName();
            $request->audio->move(public_path('assets/admin/audio/podcast'), $audio);
            $data['audio'] = $audio;
        }

        $podcast->update($data);

        return redirect()->route('admin.podcasts.index')->with('success', 'Podcast updated successfully!');
    }

    public function destroy($id)
    {
        $podcast = Podcast::findOrFail($id);

        $this->deleteOldImage($podcast->image);

        if ($podcast->audio && file_exists(public_path('assets/admin/audio/podcast/'.$podcast->audio))) {
            unlink(public_path('assets/admin/audio/podcast/'.$podcast->audio));
        }

        $podcast->delete();

        return redirect()->route('admin.podcasts.index')->with('success', 'Podcast deleted successfully!');
    }

    private function handleImageUpload($file, string $context): string
    {
        $path = $this->imageService->upload($file, $context);

        if ($path) {
            return $path;
        }

        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('assets/admin/image/podcast'), $filename);

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

        $oldPath = public_path('assets/admin/image/podcast/'.$path);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }
    }
}
