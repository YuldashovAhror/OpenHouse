<?php 

namespace App\Http\Controllers\Dashboard;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends BaseController
{
    public function index()
    {
        $partners = Partner::orderBy('id', 'desc')->get();
        return view('dashboard.partner.index', [
            'partners'=>$partners
        ]);
    }


    public function create()
    {
        return view('dashboard.partner.create');
    }

    public function store(Request $request)
    {
        $request = $request->toArray();
        
        if (!empty($request['photo'])){
            $request['photo'] = $this->photoSave($request['photo'], 'image/partner');
        }
        if (!empty($request['people_photo'])){
            $request['people_photo'] = $this->photoSave($request['people_photo'], 'image/partner');
        }
        Partner::create($request);
        return redirect()->route('partner.index');
    }

    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('dashboard.partner.edit', [
            'partner'=>$partner
        ]);
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);
        if($request->file('photo')){
            if(is_file(public_path($partner->photo))){
                unlink(public_path($partner->photo));
            }
            $partner['photo'] = $this->photoSave($request->file('photo'), 'image/partner');
        }

        if($request->file('people_photo')){
            if(is_file(public_path($partner->people_photo))){
                unlink(public_path($partner->people_photo));
            }
            $partner['people_photo'] = $this->photoSave($request->file('people_photo'), 'image/partner');
        }
        $partner->name_uz = $request->name_uz;
        $partner->name_ru = $request->name_ru;
        $partner->name_en = $request->name_en;
        $partner->discription_uz = $request->discription_uz;
        $partner->discription_ru = $request->discription_ru;
        $partner->discription_en = $request->discription_en;
        $partner->position_uz = $request->position_uz;
        $partner->position_ru = $request->position_ru;
        $partner->position_en = $request->position_en;
        $partner->save();
        return redirect()->route('partner.index');
    }

    public function destroy($id)
    {
        $partner = Partner::find($id);
        if(is_file(public_path($partner->photo))){
            unlink(public_path($partner->photo));
        }

        if(is_file(public_path($partner->people_photo))){
            unlink(public_path($partner->people_photo));
        }
        $partner->delete();
        return redirect()->back();
    }
}