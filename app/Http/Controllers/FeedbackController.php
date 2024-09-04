<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\UserFeedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
        public function create()
    {
        return view('public_feedback.create');
    }

    public function store(Request $request, $pro_id)
    {
        $validated = $request->validate([
            'feedback' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        UserFeedback::create([
            'pro_id' => $pro_id,
            'feedback' => $validated['feedback'],
            'rating' => $validated['rating'],
        ]);

        return redirect()->route('pro.show', $pro_id)->with('success', 'Feedback submitted.');
    }
    public function show()
    {
        $feedbacks = UserFeedback::all();
        return view('public_feedback.show',[
            'feedbacks' => $feedbacks
        ]);
    }
}

