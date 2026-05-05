<?php

namespace App\Services;

use App\Models\CaseStudyMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CaseStudyMediaService
{
    private string $publicPath = 'assets/admin/image/case-study/media';

    public function store(Request $request, $caseStudy): array
    {
        $uploaded = [];

        if ($request->hasFile('gallery_images')) {
            $images = $request->file('gallery_images');
            $sortOrder = $caseStudy->media()->max('sort_order') ?? 0;
            $imageService = app(ImageService::class);

            foreach ($images as $image) {
                if ($image->isValid()) {
                    $path = $imageService->upload($image, 'case-study-gallery');

                    if (! $path) {
                        $path = $this->fallbackUpload($image);
                    }

                    $sortOrder++;

                    $media = CaseStudyMedia::create([
                        'case_study_id' => $caseStudy->id,
                        'image' => $path,
                        'sort_order' => $sortOrder,
                    ]);

                    $uploaded[] = $media;
                }
            }
        }

        return $uploaded;
    }

    public function delete(int $mediaId): bool
    {
        $media = CaseStudyMedia::find($mediaId);

        if (! $media) {
            return false;
        }

        $this->deleteFile($media->image);
        $media->delete();

        return true;
    }

    public function deleteByCaseStudy(int $caseStudyId): int
    {
        $mediaItems = CaseStudyMedia::where('case_study_id', $caseStudyId)->get();
        $count = $mediaItems->count();

        foreach ($mediaItems as $media) {
            $this->deleteFile($media->image);
        }

        CaseStudyMedia::where('case_study_id', $caseStudyId)->delete();

        return $count;
    }

    private function fallbackUpload($image): string
    {
        $fileName = time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
        $directory = public_path($this->publicPath);

        if (! File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $image->move($directory, $fileName);

        return $fileName;
    }

    private function deleteFile(?string $path): void
    {
        if (! $path) {
            return;
        }

        if (str_starts_with($path, 'uploads/')) {
            app(ImageService::class)->delete($path);

            return;
        }

        if (str_starts_with($path, 'assets/')) {
            $fullPath = public_path($path);
            if (File::exists($fullPath)) {
                File::delete($fullPath);
            }

            return;
        }

        $fullPath = public_path($this->publicPath.'/'.$path);
        if (File::exists($fullPath)) {
            File::delete($fullPath);
        }
    }

    public function getMedia(int $caseStudyId)
    {
        return CaseStudyMedia::where('case_study_id', $caseStudyId)
            ->orderBy('sort_order')
            ->get();
    }
}
