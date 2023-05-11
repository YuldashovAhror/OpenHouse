<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::orderBy('id', 'desc')->get();

        return view('dashboard.feedback.index', [
            'feedbacks'=>$feedbacks
        ]);
    }

    public function destroy($id)
    {
        Feedback::find($id)->delete();
        return back();
    }
}