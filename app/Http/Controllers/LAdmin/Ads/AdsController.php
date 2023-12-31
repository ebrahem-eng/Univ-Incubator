<?php

namespace App\Http\Controllers\LAdmin\Ads;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\College;
use App\Models\LAdminUniversity;
use App\Models\University;
use App\Models\UniversityAds;
use App\Models\universityAdsCollege;
use App\Models\UniversityCollege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
{

    //عرض صفحة جدول الاعلانات

    public function index()
    {
        $ads = Ads::all();
        return view('LocalAdmin.Ads.index', compact('ads'));
    }

    //عرض صفحة اضافة اعلان جديد

    public function create()
    {

        return view('LocalAdmin.Ads.create');
    }

    //تخزين بيانات الاعلان في قاعدة البيانات 

    public function store(Request $request)
    {
        $image = $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('AdsImage', $image, 'Image');

        Ads::create([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'details' => $request->input('details'),
            'created_by' => Auth::guard('ladmin')->user()->id,
            'img' => $path,
        ]);

        return redirect()->route('ladmin.ads.index')->with('success_message', 'Ads Created Successfully');
    }

    //عرض صفحة تعديل بيانات الاعلان 

    public function edit(Request $request, $id)
    {
        $ads = Ads::findOrfail($id);
        return view('LocalAdmin.Ads.edit', compact('ads'));
    }

    //تحديث بيانات الاعلان

    public function update(Request $request, $id)
    {
        $ads = Ads::findOrFail($id);

        if ($request->file('img') == null) {
            $ads->update([
                'name' => $request->input('name'),
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'details' => $request->input('details'),
            ]);

            return redirect()->route('ladmin.ads.index')->with('success_message', 'Ads Updated Successfully');
        } else {
            if ($ads->img != null) {
                Storage::disk('Image')->delete($ads->img);
                $image = $request->file('img')->getClientOriginalName();
                $path = $request->file('img')->storeAs('AdsImage', $image, 'Image');

                $ads->update([
                    'name' => $request->input('name'),
                    'title' => $request->input('title'),
                    'body' => $request->input('body'),
                    'details' => $request->input('details'),
                    'img' => $path,
                ]);

                return redirect()->route('ladmin.ads.index')->with('success_message', 'Ads Updated Successfully');
            } else {

                $image = $request->file('img')->getClientOriginalName();
                $path = $request->file('img')->storeAs('AdsImage', $image, 'Image');

                $ads->update([
                    'name' => $request->input('name'),
                    'title' => $request->input('title'),
                    'body' => $request->input('body'),
                    'details' => $request->input('details'),
                    'img' => $path,
                ]);


                return redirect()->route('ladmin.ads.index')->with('success_message', 'Ads Updated Successfully');
            }
        }
    }

    //عرض جدول الاعلان

    public function archive()
    {
        $ads = Ads::onlyTrashed()->get();
        return view('LocalAdmin.Ads.archive', compact('ads'));
    }

    //حذف الاعلان ونقله للارشيف

    public function softDelete($id)
    {
        $ads = Ads::findOrfail($id);
        $ads->delete();
        return redirect()->route('ladmin.ads.index')->with('success_message', 'Ads Deleted Successfully');
    }

    //استعادة الاعلان المحذوف

    public function restore($id)
    {
        Ads::withTrashed()->where('id', $id)->restore();
        return redirect()->route('ladmin.ads.index')->with('success_message', 'Ads Restored Successfully');
    }

    //حذف الاعلان بشكل نهائي

    public function forceDelete($id)
    {
        $ads = Ads::withTrashed()->where('id', $id)->first();
        if ($ads) {
            Storage::disk('Image')->delete($ads->img);
            $ads->forceDelete();

            return redirect()->route('ladmin.ads.archive')->with('success_message', 'Ads Deleted Successfully');
        } else {
            return redirect()->back()->with('error_message', 'Ads Not Found');
        }
    }

    //عرض صفحة الجامعات لهذا الاعلان 

    public function adsUniversity($id)
    {
        $adsID = $id;

        $universityID = UniversityAds::where('adsID', $adsID)->pluck('universityID');
        $universities = University::whereIn('id', $universityID)->get();

        return view('LocalAdmin.Ads.university', compact('universities', 'adsID'));
    }

    //عرض صفحة اختيار جامعة جديدة لهذا الاعلان

    public function chooseUniversity($id)
    {
        $adsID = $id;
        $ladminID = Auth::guard('ladmin')->user()->id;

        $universityIDs = LAdminUniversity::where('ladminID', $ladminID)->pluck('universityId');

        $universities = University::whereIn('id', $universityIDs)->get();

        return view('LocalAdmin.Ads.chooseUniversity', compact('universities', 'adsID'));
    }

    //تخزين الجامعة المختارة في قاعدة البيانات

    public function storeChooseUniversity(Request $request, $id)
    {
        $universityID = $id;
        $adsID = $request->input('adsID');


        $existingRecord = UniversityAds::where('universityID', $universityID)
            ->where('adsID', $adsID)
            ->first();

        if (!$existingRecord) {

            UniversityAds::create([
                'universityID' => $universityID,
                'adsID' => $adsID,
            ]);

            return redirect()->route('ladmin.ads.index')->with('success_message', 'University Added To Ads Successfully');
        } else {

            return redirect()->route('ladmin.ads.index')->with('error_message', 'The university is already associated with the selected ad');
        }
    }

    //سحب جامعة من اعلان

    public function revokeUniversity(Request $request, $id)
    {
        $universityID = $id;
        $adsID = $request->input('adsID');

        $universityAds = UniversityAds::where('universityID', $universityID)->where('adsID', $adsID)->first();

        if ($universityAds) {
            if ($universityAds->delete()) {
                return redirect()->route('ladmin.ads.index')->with('success_message', 'University Deleted Successfully');
            } else {
                return redirect()->route('ladmin.ads.index')->with('error_message', 'Failed to delete the University');
            }
        } else {
            return redirect()->route('ladmin.ads.index')->with('error_message', 'The University is not associated with the selected ad');
        }
    }

    //عرض صفحة الكليات المعنية بالاعلان ان وجد

    public function adsCollegeUniversity(Request $request, $id)
    {
        $universityID = $id;
        $adsID = $request->input('adsID');
        $universityAdsID = UniversityAds::where('universityID', $universityID)->where('adsID', $adsID)->value('id');
        $collegeIDs = universityAdsCollege::where('universityAdsID', $universityAdsID)->pluck('collegeID');

        $colleges = College::whereIn('id', $collegeIDs)->get();

        return view('LocalAdmin.Ads.college', compact('colleges', 'universityAdsID', 'universityID'));
    }

    //عرض صفحة اختيار كلية جديدة للاعلان

    public function adsChooseCollegeUniversity(Request $request, $id)
    {
        $universityAdsID = $id;

        $universityID = $request->input('universityID');

        $collegeIDs  = UniversityCollege::where('universityId', $universityID)->pluck('collegeId');

        $colleges = College::whereIn('id', $collegeIDs)->get();

        return view('LocalAdmin.Ads.chooseCollege', compact('universityAdsID', 'colleges'));
    }

    //تخزين الكلية المختارة في قاعدة البيانات

    public function adsStoreChooseCollegeUniversity(Request $request, $id)
    {
        $collegeID = $id;
        $universityAdsID = $request->input('universityAdsID');

        $existingRecord = UniversityAdsCollege::where('universityAdsID', $universityAdsID)
            ->where('collegeID', $collegeID)
            ->first();

        if (!$existingRecord) {

            UniversityAdsCollege::create([
                'universityAdsID' => $universityAdsID,
                'collegeID' => $collegeID,
            ]);

            return redirect()->route('ladmin.ads.index')->with('success_message', 'College Added To Ads Successfully');
        } else {

            return redirect()->route('ladmin.ads.index')->with('error_message', 'The college is already associated with the selected ad');
        }
    }

    //سحب كلية من اعلان

    public function adsCollegeUniversityRevoke(Request $request, $id)
    {
        $collegeID = $id;
        $universityAdsID = $request->input('universityAdsID');

        universityAdsCollege::where('universityAdsID', $universityAdsID)->where('collegeID', $collegeID)->delete();

        return redirect()->route('ladmin.ads.index')->with('success_message', 'College Revoked From Ads Successfully');
    }
}
