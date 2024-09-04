<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MediaPractitioner;

class AdminController extends Controller
{
    public function index()
    {
        $practitioners = MediaPractitioner::where('status', 'pending')->get();
        return view('admin.index', compact('practitioners'));
    }

    public function approve($id)
    {
        $practitioner = MediaPractitioner::findOrFail($id);
        $practitioner->update(['status' => 'approved']);

        return redirect()->route('admin.index')->with('success', 'Practitioner approved.');
    }

    public function reject($id)
    {
        $practitioner = MediaPractitioner::findOrFail($id);
        $practitioner->update(['status' => 'rejected']);

        return redirect()->route('admin.index')->with('success', 'Practitioner rejected.');
    }
}


