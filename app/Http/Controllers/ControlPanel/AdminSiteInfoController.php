<?php

namespace App\Http\Controllers\ControlPanel;

use Toastr;
use Validator;
use App\Models\User;
use App\Models\Baner;
use App\Models\SiteInfo;
use App\Models\ContactUs;
use App\Models\ReportUser;
use App\Models\GlobalVisits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Auth\Events\Validated;

class AdminSiteInfoController extends Controller
{

    public function getReports(){
        $reports=ReportUser::with('user')->latest()->get();
        return view('reports',compact('reports'));
    }
    public function blockUser($id){
        User::destroy($id);
        return redirect()->back();
    }
    public function visits()
    {
        GlobalVisits::create();
        // return response()->json([],200);
    }

    public function CountOfvisits()
    {
        $Count = GlobalVisits::count();
        return response()->json(['Count' => $Count], 200);
    }
    public function getBanersImage()
    {
        $bannerImage = Baner::latest()->paginate(10);
        return view('Banners', compact('bannerImage'));
    }

    public function deleteBannerImage($id)
    {
        $banner = Baner::findOrFail($id);
        if (File::exists('public/storage/'.$banner->image)) {

            unlink('public/storage/' . $banner->image);
        }

        $banner->delete();
        return redirect()->back();
    }
    public function createBannerImage(Request $request)
    {
        $rule = [
            'upload' => 'mimes:jpg,bmp,png'
        ];
        $validation = Validator::make(['upload' => $request->upload], $rule);
        if ($validation->fails()) {
            return redirect()->back();
        }
        Baner::create([
            'image' => $request->upload->store('BannerImage', 'public')
        ]);
        return redirect()->back();
    }

    ///////////////////////
    public function PrivacyPolicy()
    {

        $privacyPolicy = SiteInfo::where('name', 'privacy policy')->first();
        return view('Information.PrivacyPolicy', compact('privacyPolicy'));
    }
    public function PrivacyPolicyEdit(Request $req)
    {

        $privacyPolicy = SiteInfo::where('name', 'privacy policy')->first();
        $privacyPolicy->update([
            'value' => $req->value,
            'value_ar' => $req->value_ar,
        ]);
        toastr()->success('تم التعديل');
        return redirect()->back();
    }

    /////////////////
    public function vision()
    {
        $vison = SiteInfo::where('name', 'Vision, Mission and Objective')->first();
        return view('Information.Visions', compact('vison'));
    }
    public function visinEdit(Request $request)
    {
        $vison = SiteInfo::where('name', 'Vision, Mission and Objective')->first();
        $vison->update([
            'value' => $request->value,
            'value_ar' => $request->value_ar,
        ]);
        toastr()->success('تم التعديل');
        return redirect()->back();
    }


    ///////////

    public function BecomeMember()
    {
        $data = SiteInfo::where('name', 'Conditions for obtaining membership')->first();
        return view('Information.BecomeMember', compact('data'));
    }
    public function BecomeMemberEdit(Request $request)
    {
        $data = SiteInfo::where('name', 'Conditions for obtaining membership')->first();

        $data->update([
            'value' => $request->value,
            'value_ar' => $request->value_ar,
        ]);
        toastr()->success('تم التعديل');
        return redirect()->back();
    }
    ////////////
    public function IntellectualPropertyRights()
    {

        $data = SiteInfo::where('name', 'intellectual property rights')->first();
        return view('Information.IntellectualPropertyRights', compact('data'));
    }

    public function PropertyRightsEdit(Request $request)
    {

        $data = SiteInfo::where('name', 'intellectual property rights')->first();
        $data->update([
            'value' => $request->value,
            'value_ar' => $request->value_ar,
        ]);
        toastr()->success('تم التعديل');
        return redirect()->back();
    }

    ////////////////

    public function EvacuationResponsibilaty()
    {
        $data = SiteInfo::where('name', 'Evacuation responsibility')->first();
        return view('Information.EvacuationResponsibilaty', compact('data'));
    }


    public function ResponsibilatyEdit(Request $request)
    {

        $data = SiteInfo::where('name', 'Evacuation responsibility')->first();
        $data->update([
            'value' => $request->value,
            'value_ar' => $request->value_ar,
        ]);
        toastr()->success('تم التعديل');
        return redirect()->back();
    }

    public function ContactUs()
    {
        $data = ContactUs::select('value')->first();
        $contact = json_decode($data->value);
        return view('Information.ContactUs', compact('contact'));
    }
    public function ContactUsEdit(Request $request)
    {
        $data = ContactUs::find(1);
        $contact = json_decode($data->value);
        $contact->email = $request->email;
        $contact->phone = $request->phone;

        $data->update([
            'value' =>  json_encode($contact),
        ]);

        toastr()->success('تم التعديل ');
        return redirect()->back();
    }
}
