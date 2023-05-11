<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\BaseController;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends BaseController
{
    public function index()
    {
        $plans = Plan::orderBy('id', 'desc')->get();
        return view('dashboard.plan.index', [
            'plans'=>$plans
        ]);
    }

    public function create(Request $request)
    {
        return view('dashboard.plan.create');
    }


    public function store(Request $request)
    {
        $request = $request->toArray();
        
        if (!empty($request['photo'])){
            $request['photo'] = $this->photoSave($request['photo'], 'image/plan');
        }
        if (!empty($request['popular'])){
            $request['popular'] = 1;
        }
        Plan::create($request);
        return redirect()->route('plan.index');
    }


    public function edit($id)
    {
        $plan = Plan::find($id);
        return view('dashboard.plan.edit', [
            'plan'=>$plan
        ]);
    }

    public function update(Request $request, $id)
    {
        if (!empty($request['photo'])){
            $this->fileDelete('\Plan', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'image/plan');
        }
        if (!empty($request['popular'])){
            $request['popular'] = 1;
        }
        if (empty($request['popular'])){
            $request['popular'] = 0;
        }
        Plan::find($id)->update($request->all());
        return redirect()->route('plan.index');
    }

    public function destroy($id)
    {
        $this->fileDelete('\Plan', $id, 'photo');
        Plan::find($id)->delete();
        return back();
    }
}