<?php

namespace App\Http\Controllers\LAdmin\University;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\College;
use App\Models\LAdminUniversity;
use App\Models\Specialization;
use App\Models\univercityCollegeSpecialization;
use App\Models\University;
use App\Models\UniversityCollege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UniversityController extends Controller
{

    //عرض صفحة جدول الجامعات

    public function index()
    {
        $ladminID = Auth::guard('ladmin')->user()->id;
        $universityIDs = LAdminUniversity::where('ladminID', $ladminID)->pluck('universityId');
        $universities = University::whereIn('id', $universityIDs)->get();
        return view('LocalAdmin.University.index', compact('universities'));
    }

    //عرض صفحة تعديل موقع الجامعة 

    public function editAddress($id)
    {
        $university = University::findOrfail($id);
        return view('LocalAdmin.University.editAddress', compact('university'));
    }

    //تحديث بيانات الموقع الخاص بالجامعة

    public function updateAddress(Request $request, $id)
    {
        $university = University::findOrfail($id);
        $address = Address::where('id', $university->address_id);
        $address->update([
            'city' => $request->input('city'),
            'region' => $request->input('region'),
            'street' => $request->input('street'),
            'near' => $request->input('near'),
            'another_details' => $request->input('details'),
            'longitude' => $request->input('longitude'),
            'latitude' => $request->input('latitude'),
        ]);
        return redirect()->route('ladmin.university.index')->with('success_message', 'University Address Updated Successfully');
    }

    //عرض صفحة كليات الجامعة

    public function universityCollegeIndex($id)
    {
        $universityID = $id;
        $collegeIDs = UniversityCollege::where('universityId', $id)->pluck('collegeId');
        $colleges = College::whereIn('id', $collegeIDs)->get();
        return view('LocalAdmin.University.College.index', compact('colleges', 'universityID'));
    }

    //عرض صفحة اختيار كلية جديدة للجامعة

    public function chooseUniversityCollegeIndex($id)
    {
        $universityID = $id;
        $collegeUniversityIDs = UniversityCollege::where('universityId', $universityID)->pluck('collegeId');
        $colleges = College::whereNotIn('id', $collegeUniversityIDs)->get();
        return view('LocalAdmin.University.College.chooseCollege', compact('colleges', 'universityID'));
    }

    //تخزين الكلية والجامعة في قاعدة البيانات 

    public function storeChooseUniversityCollegeIndex(Request $request, $id)
    {
        $collegeID = $id;
        $universityID = $request->input('universityID');
        UniversityCollege::create([
            'universityId' => $universityID,
            'collegeId' => $collegeID
        ]);
        return redirect()->back()->with('success_message', 'University College Added Successfully');
    }

    //سحب كلية من الجامعة

    public function UniversityCollegeRevoke(Request $request, $id)
    {
        $collegeID = $id;
        $universityID = $request->input('universityID');

        UniversityCollege::where('universityId', $universityID)->where('collegeId', $collegeID)->delete();

        return redirect()->back()->with('success_message', 'University College Revoked Successfully');
    }

    //عرض الاختصاصات داخل الكلية الموجودة في الجامعة المحددة 

    public function UniversityCollegeSpecializationIndex(Request $request, $id)
    {
        $collegeID = $id;
        $universityID = $request->input('universityID');
        $universityCollege = UniversityCollege::where('collegeId', $collegeID)->where('universityId', $universityID)->value('id');
        $specializationIDs = univercityCollegeSpecialization::where('univercityCollegeID', $universityCollege)->pluck('specializationID');
        $specializations = Specialization::whereIn('id', $specializationIDs)->get();
        return view('LocalAdmin.University.College.Specialization.index', compact('specializations', 'universityID', 'universityCollege'));
    }

    //عرض صفحة اختيار اختصاص جديد لكلية للجامعة

    public function chooseUniversityCollegeSpecialization($id)
    {
        $universityCollege = $id;
        $specializations = Specialization::all();
        return view('LocalAdmin.University.College.Specialization.chooseSpecialization', compact('specializations', 'universityCollege'));
    }

    //تخزين الاختصاص لكلية الجامعة في قاعدة البيانات 
    public function storeChooseUniversityCollegeSpecialization(Request $request, $id)
    {

        $specializationID = $id;
        $universityCollegeID = $request->input('universityCollege');


        $existingRelation = univercityCollegeSpecialization::where('specializationID', $specializationID)
            ->where('univercityCollegeID', $universityCollegeID)
            ->first();

        if (!$existingRelation) {

            univercityCollegeSpecialization::create([
                'specializationID' => $specializationID,
                'univercityCollegeID' => $universityCollegeID,
            ]);

            return redirect()->back()->with('success_message', 'Specialization College Added Successfully');
        } else {

            return redirect()->back()->with('error_message', 'The relationship already exists');
        }
    }

    //سحب اختصاص كلية من الجامعة

    public function UniversityCollegeSpecializationRevoke(Request $request, $id)
    {
        $specializationID = $id;
        $univercityCollegeID = $request->input('universityCollege');

        univercityCollegeSpecialization::where('specializationID', $specializationID)->where('univercityCollegeID', $univercityCollegeID)->delete();
        return redirect()->route('ladmin.university.index')->with('success_message', 'Specialization College Revoked Successfully');
    }
}
