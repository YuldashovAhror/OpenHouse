<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Plan;

class WelcomeController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        $partners = Partner::all();
        return view('welcome', [
            'plans'=>$plans,
            'partners'=>$partners,
        ]);
    }
}