<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Build;
use Illuminate\Http\Request;

class BuildController extends BaseController
{
    public function index()
    {
        $builds = Build::all();
        return view('dashboard.build.crud', [
            'builds'=>$builds
        ]);
    }

    public function store(Request $request)
    {
        $request = $request->toArray();
        
        if (!empty($request['photo'])){
            $request['photo'] = $this->photoSave($request['photo'], 'image/build');
        }
        Build::create($request);
        return redirect()->route('build.index');
    }

    public function update(Request $request, $id)
    {
        $request = $request->toArray();
        
        if (!empty($request['photo'])){
            $this->fileDelete('\Build', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'image/build');
        }
        Build::find($id)->update($request);
        return redirect()->route('build.index');
    }

    public function destroy($id)
    {
        $this->fileDelete('\Build', $id, 'photo');
        Build::find($id)->delete();
        return back();
    }
}