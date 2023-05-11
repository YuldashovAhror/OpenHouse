<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;


class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $feedback = new Feedback();
        $feedback->first_name = $request->name;
        $feedback->phone = $request->phone;
        $feedback->save();
        return back();
    }
}