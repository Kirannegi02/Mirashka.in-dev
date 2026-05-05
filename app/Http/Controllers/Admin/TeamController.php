<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\TeamAchievement;
use App\Models\TeamGallery;
use App\Models\TeamSocialLink;
use App\Models\TeamVision;
use App\Services\ImageService;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct(
        private ImageService $imageService
    ) {}

    public function index()
    {
        $teams = Team::with(['social', 'vision', 'achievements', 'galleries'])
            ->latest()
            ->paginate(15);

        return view('admin.teams.index', compact('teams'));
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        if ($request->hasFile('image')) {
            $data['image'] = $this->handleImageUpload($request->file('image'), 'team');
        }

        $team = Team::create($data);
        $this->saveRelations($request, $team);

        return back()->with('success', 'Team member created successfully!');
    }

    public function update(Request $request, $id)
    {
        $team = Team::with(['vision', 'achievements', 'galleries'])->findOrFail($id);
        $data = $this->validateData($request);

        if ($request->hasFile('image')) {
            $this->deleteFile($team->image);
            $data['image'] = $this->handleImageUpload($request->file('image'), 'team');
        }

        $team->update($data);
        $this->saveRelations($request, $team);

        return back()->with('success', 'Team member updated successfully!');
    }

    private function saveRelations($request, $team)
    {
        TeamSocialLink::updateOrCreate(
            ['team_id' => $team->id],
            $request->only(['facebook', 'instagram', 'linkedin', 'twitter'])
        );

        $visionImage = $team->vision->image ?? null;

        if ($request->hasFile('vision_image')) {
            $this->deleteFile($visionImage);
            $visionImage = $this->handleImageUpload($request->file('vision_image'), 'team-vision');
        }

        TeamVision::updateOrCreate(
            ['team_id' => $team->id],
            [
                'image' => $visionImage,
                'content' => $request->vision_content,
            ]
        );

        TeamAchievement::where('team_id', $team->id)->delete();

        if ($request->achievement_content) {
            foreach ($request->achievement_content as $key => $content) {
                $img = null;
                if ($request->hasFile("achievement_image.$key")) {
                    $img = $this->handleImageUpload($request->file("achievement_image.$key"), 'team-achievement');
                }
                TeamAchievement::create([
                    'team_id' => $team->id,
                    'image' => $img,
                    'content' => $content,
                ]);
            }
        }

        if ($request->delete_gallery) {
            foreach ($request->delete_gallery as $id) {
                $gallery = TeamGallery::find($id);
                if ($gallery) {
                    $this->deleteFile($gallery->image);
                    $gallery->delete();
                }
            }
        }

        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $file) {
                TeamGallery::create([
                    'team_id' => $team->id,
                    'image' => $this->handleImageUpload($file, 'team-gallery'),
                ]);
            }
        }
    }

    private function validateData($request)
    {
        return $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'nullable',
            'short_tagline' => 'nullable',
            'contact_cta_link' => 'nullable',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'linkedin' => 'nullable',
            'twitter' => 'nullable',
            'status' => 'required|in:0,1',
        ]);
    }

    private function handleImageUpload($file, string $context): string
    {
        $path = $this->imageService->upload($file, $context);

        if ($path) {
            return $path;
        }

        $name = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('assets/admin/image/team'), $name);

        return $name;
    }

    private function deleteFile(?string $path): void
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

        $oldPath = public_path('assets/admin/image/team/'.$path);
        if (file_exists($oldPath)) {
            unlink($oldPath);
        }
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $this->deleteFile($team->image);

        $team->delete();

        return back()->with('success', 'Team member deleted successfully!');
    }
}
