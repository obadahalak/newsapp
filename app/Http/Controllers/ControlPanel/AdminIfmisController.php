<?php

namespace App\Http\Controllers\ControlPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\IfmisRequest;
use App\Http\Traits\Translate;
use App\Models\IfmisMember;

class AdminIfmisController extends Controller
{
    public function IFMISMembersView()
    {
        $listOfIfmisMembers = IfmisMember::latest()->get();
        return  view('Information.IFMISMembers', compact('listOfIfmisMembers'));
    }
    public function createIfmis(IfmisRequest $request)
    {

        $name_ar = $request->get('name_ar');

        $country_en = $request->get('country');

        $translate = new Translate();

        $name_en = $translate->translateSpcific('ar', 'en', $name_ar);

        $country_ar = $translate->translateSpcific('en', 'ar', $country_en);

        IfmisMember::create($request->validated() + [
            'name' => $name_en,
            'country_ar' => $country_ar,
            'imageProfile' => $request->imageProfile->store('membersProfile', 'public'),
            'imageFlag' => $request->imageFlag->store('membersFlag', 'public'),
     ]);
     toastr()->success('تم الأضافة بنجاح');
     return redirect()->back();
    }



    public function deleteIfmisById($id)
    {
        $getMember= IfmisMember::find($id);

        unlink('storage/'. $getMember->imageFlag);
        unlink('storage/'. $getMember->imageProfile);
        $getMember->delete();
        toastr()->warning('تم حذف العضو بنجاح');
        return redirect()->back();
    }
}
