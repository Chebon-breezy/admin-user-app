<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Hire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('admin.photos.index', compact('photos'));
    }

    public function create()
    {
        return view('admin.photos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'job_type' => 'required|string|max:255',
            'availability' => 'required|string|max:255',
            'expected_salary' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Photo::create([
            'full_name' => $request->full_name,
            'age' => $request->age,
            'job_type' => $request->job_type,
            'availability' => $request->availability,
            'expected_salary' => $request->expected_salary,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('photos.index')
            ->with('success', 'Photo added successfully.');
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('photos.index')->with('success', 'Photo deleted successfully.');
    }

    public function show()
    {
        $photos = Photo::all();
        return view('photos.show', compact('photos'));
    }

    public function hire(Photo $photo)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to log in to hire.');
        }

        // Create the hire request
        Hire::create([
            'photo_id' => $photo->id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('photos.show')->with('success', 'Photo hired successfully.');
    }

    public function showHired()
    {
        $hires = Hire::with(['user', 'photo'])->get();
        return view('admin.photos.hired', compact('hires'));
    }
}
