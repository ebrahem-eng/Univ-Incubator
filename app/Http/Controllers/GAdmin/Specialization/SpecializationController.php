<?php

namespace App\Http\Controllers\GAdmin\Specialization;

use App\Http\Controllers\Controller;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SpecializationController extends Controller
{

    //عرض صفحة جدول الاختصاصات

    public function index()
    {
        $specializations = Specialization::all();
        return view('GlobalAdmin.Specialization.index', compact('specializations'));
    }

    //عرض صفحة اضافة اختصاص

    public function create()
    {
        return view('GlobalAdmin.Specialization.create');
    }

    //تخزين بيانات اختصاص في قاعدة البيانات 

    public function store(Request $request)
    {
        $image = $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('SpecializationImage', $image, 'Image');

        Specialization::create([
            'name' => $request->input('name'),
            'img' => $path,
            'created_by' => Auth::guard('gadmin')->user()->id,
        ]);

        return redirect()->route('gadmin.specialization.index')->with('success_message', 'Specialization Created Successfully');
    }

    //عرض صفحة تعديل بيانات اختصاص

    public function edit(Request $request, $id)
    {
        $specialization = Specialization::findOrfail($id);
        return view('GlobalAdmin.Specialization.edit', compact('specialization'));
    }


    //تحديث بيانات اختصاص

    public function update(Request $request, $id)
    {
        $specialization = Specialization::findOrFail($id);

        if ($request->file('img') == null) {
            $specialization->update([
                'name' => $request->input('name'),
            ]);

            return redirect()->route('gadmin.specialization.index')->with('success_message', 'Specialization Updated Successfully');
        } else {
            if ($specialization->img != null) {
                Storage::disk('Image')->delete($specialization->img);
                $image = $request->file('img')->getClientOriginalName();
                $path = $request->file('img')->storeAs('SpecializationImage', $image, 'Image');

                $specialization->update([
                    'name' => $request->input('name'),
                    'img' => $path,
                ]);

                return redirect()->route('gadmin.specialization.index')->with('success_message', 'Specialization Updated Successfully');
            } else {

                $image = $request->file('img')->getClientOriginalName();
                $path = $request->file('img')->storeAs('SpecializationImage', $image, 'Image');

                $specialization->update([
                    'name' => $request->input('name'),
                    'img' => $path,
                ]);


                return redirect()->route('gadmin.specialization.index')->with('success_message', 'Specialization Updated Successfully');
            }
        }
    }

    //عرض جدول الارشيف

    public function archive()
    {
        $specializations = Specialization::onlyTrashed()->get();
        return view('GlobalAdmin.Specialization.archive', compact('specializations'));
    }

    //حذف اختصاص ونقله للارشيف

    public function softDelete($id)
    {
        $specialization = Specialization::findOrfail($id);
        $specialization->delete();
        return redirect()->route('gadmin.specialization.index')->with('success_message', 'Specialization Deleted Successfully');
    }

    //استعادة  اختصاص محذوف

    public function restore($id)
    {
        Specialization::withTrashed()->where('id', $id)->restore();
        return redirect()->route('gadmin.specialization.index')->with('success_message', 'Specialization Restored Successfully');
    }

    //حذف اختصاص بشكل نهائي

    public function forceDelete($id)
    {
        $specialization = Specialization::withTrashed()->find($id);

        if ($specialization) {
            try {
                if ($specialization->forceDelete()) {
                    // Delete associated image if it exists
                    if (Storage::disk('Image')->exists($specialization->img)) {
                        Storage::disk('Image')->delete($specialization->img);
                    }

                    return redirect()->route('gadmin.specialization.archive')->with('success_message', 'Specialization Deleted Successfully');
                }
            } catch (\Illuminate\Database\QueryException $e) {
                // Check for foreign key constraint violation error
                if ($e->getCode() == 23000) {
                    return redirect()->back()->with('error_message', 'Cannot delete Specialization. It is referenced in another table.');
                } else {
                    return redirect()->back()->with('error_message', 'Failed to delete Specialization');
                }
            }
        } else {
            return redirect()->back()->with('error_message', 'Specialization Not Found');
        }
    }
}
