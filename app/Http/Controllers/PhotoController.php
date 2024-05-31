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
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'age' => 'required|integer',
            'location' => 'required',
            'profession' => 'required',
        ]);

        $imagePath = $request->file('image')->store('photos', 'public');

        Photo::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath,
            'age' => $request->age,
            'location' => $request->location,
            'profession' => $request->profession,
        ]);

        return redirect()->route('photos.index')->with('success', 'Photo uploaded successfully.');
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
}
