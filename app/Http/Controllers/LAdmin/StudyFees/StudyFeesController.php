<?php

namespace App\Http\Controllers\LAdmin\StudyFees;

use App\Http\Controllers\Controller;
use App\Models\LAdminUniversity;
use App\Models\studyFees;
use App\Models\UniversityCollege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudyFeesController extends Controller
{
    
       //عرض صفحة جدول الرسوم الدراسية

       public function index()
       {
           $studyFeeses = studyFees::all();
           return view('LocalAdmin.StudyFees.index', compact('studyFeeses'));
       }
   
       //عرض صفحة اضافة رسوم دراسية جديدة
   
       public function create()
       {
           $univLAdmin = LAdminUniversity::where('ladminID', Auth::guard('ladmin')->user()->id)->pluck('universityId');
           $universityColleges = UniversityCollege::whereIn('universityId', $univLAdmin)->get();
           return view('LocalAdmin.StudyFees.create', compact('universityColleges'));
       }
   
       //تخزين بيانات رسوم دراسية في قاعدة البيانات 
   
       public function store(Request $request)
       {
           $ladminID = Auth::guard('ladmin')->user()->id;
           studyFees::create([
               'annualFees' => $request->input('annualFees'),
               'annualFeesNumber' => $request->input('annualFeesNumber'),
               'details' => $request->input('details'),
               'annualFeesDate' => $request->input('annualFeesDate'),
               'univercityCollegeID' => $request->input('univercityCollegeID'),
           ]);
   
           return redirect()->route('ladmin.studyFees.index')->with('success_message', 'StudyFees Created Successfully');
       }
   
       //عرض صفحة تعديل بيانات الرسوم الدراسية 
   
       public function edit(Request $request, $id)
       {
           $studyFees = studyFees::findOrfail($id);
           $univLAdmin = LAdminUniversity::where('ladminID', Auth::guard('ladmin')->user()->id)->pluck('universityId');
           $universityColleges = UniversityCollege::whereIn('universityId', $univLAdmin)->get();
           return view('LocalAdmin.StudyFees.edit', compact('studyFees', 'universityColleges'));
       }
   
       //تحديث بيانات الرسوم الدراسية
   
       public function update(Request $request, $id)
       {
           $studyFees = studyFees::findOrfail($id);
   
           $studyFees->update([
            'annualFees' => $request->input('annualFees'),
            'annualFeesNumber' => $request->input('annualFeesNumber'),
            'details' => $request->input('details'),
            'annualFeesDate' => $request->input('annualFeesDate'),
            'univercityCollegeID' => $request->input('univercityCollegeID'),
           ]);
   
           return redirect()->route('ladmin.studyFees.index')->with('success_message', 'StudyFees Updated Successfully');
       }
   
       //عرض جدول ارشيف الرسوم الدراسية
   
       public function archive()
       {
           $studyFeeses = studyFees::onlyTrashed()->get();
           return view('LocalAdmin.StudyFees.archive', compact('studyFeeses'));
       }
   
       //حذف الرسوم الدراسية ونقله للارشيف
   
       public function softDelete($id)
       {
           $studyFees = studyFees::findOrfail($id);
           $studyFees->delete();
           return redirect()->route('ladmin.studyFees.index')->with('success_message', 'StudyFees Deleted Successfully');
       }
   
       //استعادة الرسوم الدراسية المحذوفة
   
       public function restore($id)
       {
           studyFees::withTrashed()->where('id', $id)->restore();
           return redirect()->route('ladmin.studyFees.index')->with('success_message', 'StudyFees Restored Successfully');
       }
   
       //حذف الرسوم الدراسية بشكل نهائي
   
       public function forceDelete($id)
       {
           $studyFees = studyFees::withTrashed()->where('id', $id)->first();
           if ($studyFees) {
               $studyFees->forceDelete();
   
               return redirect()->route('ladmin.studyFees.archive')->with('success_message', 'StudyFees Deleted Successfully');
           } else {
               return redirect()->back()->with('error_message', 'StudyFees Not Found');
           }
       }

}
