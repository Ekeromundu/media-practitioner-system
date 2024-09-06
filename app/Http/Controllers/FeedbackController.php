<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\UserFeedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FeedbackController extends Controller
{
    public function create($id, $user_id)
    {
        Log::debug('Creating');
        Log::debug($id);
        Log::debug($user_id);

        return view('public_feedback.create', [
            'id' => $id,
            'user_id' => $user_id
        ]);
    }

    public function createPRO($id, $user_id)
    {
        Log::debug('Creating');
        Log::debug($id);
        Log::debug($user_id);

        return view('public_feedback.create', [
            'id' => $id,
            'user_id' => $user_id
        ]);
    }

    public function storePro(Request $request, $id, $user_id)
    {
        $validated = $request->validate([
            'id' => 'required',
            'user_id' => 'required',
            'title' => 'required',
            'body' => 'required',
            'rating' => 'required',
        ]);
        Log::debug($validated);

        UserFeedback::create([
            'user_id' => $validated['user_id'],
            'practitioner' => $validated['id'],
            'title' => $validated['title'],
            'body' => $validated['body'],
            'rating' => $validated['rating'],
        ]);

        return redirect()->route('feedback.show')->with('success', 'Feedback submitted.');
    }

    public function storeMedia(Request $request, $id, $user_id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        UserFeedback::create([
            'user_id' => $user_id,
            'practitioner_id' => $id,
            'title' => $validated['title'],
            'body' => $validated['body'],
            'rating' => $validated['rating'],
        ]);

        $all = UserFeedback::all();

       return redirect('/feedback/show');
    }
    public function show()
    {
        $feedbacks = UserFeedback::all();
        return view('public_feedback.show', [
            'feedbacks' => $feedbacks
        ]);
    }
}
