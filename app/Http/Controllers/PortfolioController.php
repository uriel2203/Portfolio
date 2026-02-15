<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Certificate;
use App\Models\Profile;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        $certificates = Certificate::all();
        $projects = \App\Models\Project::all();
        $profile = Profile::first() ?? new Profile();
        
        return view('welcome', compact('experiences', 'certificates', 'projects', 'profile'));
    }

    // Experience
    public function storeExperience(Request $request) {
        $data = $request->validate([
            'role' => 'required|string',
            'company' => 'required|string',
            'year' => 'required|string',
            'description' => 'required|string',
        ]);
        Experience::create($data);
        return back()->with('success', 'Experience added!');
    }

    public function updateExperience(Request $request, Experience $experience) {
        $data = $request->validate([
            'role' => 'required|string',
            'company' => 'required|string',
            'year' => 'required|string',
            'description' => 'required|string',
        ]);
        $experience->update($data);
        return back()->with('success', 'Experience updated!');
    }

    public function deleteExperience(Experience $experience) {
        $experience->delete();
        return back()->with('success', 'Experience deleted!');
    }

    // Certificate
    // Certificates
    public function storeCertificate(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'year' => 'required|string',
            'administered_by' => 'nullable|string',
            'language' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // 2MB Max
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('certificates', 'public');
            $data['image'] = '/storage/' . $path;
        }

        Certificate::create($data);
        return back()->with('success', 'Certificates added!');
    }

    public function updateCertificate(Request $request, Certificate $certificate) {
        $data = $request->validate([
            'title' => 'required|string',
            'year' => 'required|string',
            'administered_by' => 'nullable|string',
            'language' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists and is not a default asset
            if ($certificate->image && str_starts_with($certificate->image, '/storage/')) {
                 $oldPath = str_replace('/storage/', '', $certificate->image);
                 \Illuminate\Support\Facades\Storage::disk('public')->delete($oldPath);
            }

            $path = $request->file('image')->store('certificates', 'public');
            $data['image'] = '/storage/' . $path;
        }

        $certificate->update($data);
        return back()->with('success', 'Certificates updated!');
    }

    public function deleteCertificate(Certificate $certificate) {
        $certificate->delete();
        return back()->with('success', 'Certificates deleted!');
    }

    // Project
    public function storeProject(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('projects', 'public');
            $data['image'] = '/storage/' . $path;
        }

        \App\Models\Project::create($data);
        return back()->with('success', 'Project added!');
    }

    public function updateProject(Request $request, \App\Models\Project $project) {
        $data = $request->validate([
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists and is not a default asset
            if ($project->image && str_starts_with($project->image, '/storage/')) {
                 $oldPath = str_replace('/storage/', '', $project->image);
                 \Illuminate\Support\Facades\Storage::disk('public')->delete($oldPath);
            }

            $path = $request->file('image')->store('projects', 'public');
            $data['image'] = '/storage/' . $path;
        }

        $project->update($data);
        return back()->with('success', 'Project updated!');
    }

    public function deleteProject(\App\Models\Project $project) {
        $project->delete();
        return back()->with('success', 'Project deleted!');
    }

    // Profile
    public function updateProfile(Request $request) {
        $profile = Profile::first() ?? new Profile();
        
        $data = $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'bio' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'cv_link' => 'nullable|string',
            'facebook_link' => 'nullable|string',
            'instagram_link' => 'nullable|string',
            'linkedin_link' => 'nullable|string',
            'github_link' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if it exists and is stored in our disk
            if ($profile->image && str_starts_with($profile->image, '/storage/')) {
                $oldPath = str_replace('/storage/', '', $profile->image);
                \Illuminate\Support\Facades\Storage::disk('public')->delete($oldPath);
            }
            $path = $request->file('image')->store('profile', 'public');
            $data['image'] = '/storage/' . $path;
        }

        $profile->fill($data);
        $profile->save();

        return back()->with('success', 'Profile updated!');
    }
}
