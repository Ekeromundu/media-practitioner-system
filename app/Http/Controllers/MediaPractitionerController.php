<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MediaPractitioner;

class MediaPractitionerController extends Controller
{
    public function create()
    {
        return view('media_practitioners.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:media_practitioners',
            'phone' => 'required',
            'media_house' => 'required',
            'credentials' => 'required|file|mimes:pdf,jpg,png',
        ]);

        // Handle file upload
        if ($request->hasFile('credentials')) {
            $path = $request->file('credentials')->store('credentials');
            $validated['credentials'] = $path;
        }

        MediaPractitioner::create($validated);

        return redirect()->route('media_practitioners.create')->with('success', 'Registration submitted successfully.');
    }

    public function index()
    {
        $practitioners = MediaPractitioner::get();
        return view('media_practitioners.index', [
            'practitioners' => $practitioners
        ]);
    }

    public function single()
    {
        $practitioners = MediaPractitioner::get();
        return view('media_practitioners.single');
    }
}
