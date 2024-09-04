<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicRelationsOfficer;
class PublicRelationsOfficerController extends Controller
{
       public function create()
    {
        return view('public_relations_officers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:public_relations_officers',
            'phone' => 'required',
            'department' => 'required',
            'credentials' => 'required|file|mimes:pdf,jpg,png',
            'professional_history' => 'nullable|string',
        ]);

        // Handle file upload
        if ($request->hasFile('credentials')) {
            $path = $request->file('credentials')->store('credentials');
            $validated['credentials'] = $path;
        }

        PublicRelationsOfficer::create($validated);

        return redirect()->route('public_relations_officers.create')->with('success', 'Registration submitted successfully.');
    }

    public function index()
    {
        $pros = PublicRelationsOfficer::where('status', 'approved')->get();
        return view('public_relations_officers.index', compact('pros'));
    }

    public function show($id)
    {
        $pro = PublicRelationsOfficer::findOrFail($id);
        return view('public_relations_officers.show', compact('pro'));
    }
}

