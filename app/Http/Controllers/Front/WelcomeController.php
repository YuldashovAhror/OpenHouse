<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Build;
use App\Models\Partner;
use App\Models\Plan;

class WelcomeController extends Controller
{
    public function index()
    {
        $builds = Build::all();
        $plans = Plan::all();
        $partners = Partner::all();
        $popular = Plan::where('popular', '1')->get();
        return view('welcome', [
            'plans'=>$plans,
            'partners'=>$partners,
            'popular'=>$popular,
            'builds'=>$builds,
        ]);
    }
}