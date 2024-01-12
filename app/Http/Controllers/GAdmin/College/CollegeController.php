<?php

namespace App\Http\Controllers\GAdmin\College;

use App\Http\Controllers\Controller;
use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CollegeController extends Controller
{

    //عرض صفحة جدول الكليات

    public function index()
    {
        $colleges = College::all();
        return view('GlobalAdmin.College.index', compact('colleges'));
    }

    //عرض صفحة اضافة كلية

    public function create()
    {
        return view('GlobalAdmin.College.create');
    }

    //تخزين بيانات كلية في قاعدة البيانات 

    public function store(Request $request)
    {
        $image = $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('CollegeImage', $image, 'Image');

        College::create([
            'name' => $request->input('name'),
            'img' => $path,
            'created_by' => Auth::guard('gadmin')->user()->id,
        ]);

        return redirect()->route('gadmin.college.index')->with('success_message', 'College Created Successfully');
    }

    //عرض صفحة تعديل بيانات كلية

    public function edit(Request $request, $id)
    {
        $college = College::findOrfail($id);
        return view('GlobalAdmin.College.edit', compact('college'));
    }


    //تحديث بيانات كلية

    public function update(Request $request, $id)
    {
        $college = College::findOrFail($id);

        if ($request->file('img') == null) {
            $college->update([
                'name' => $request->input('name'),
            ]);

            return redirect()->route('gadmin.college.index')->with('success_message', 'College Updated Successfully');
        } else {
            if ($college->img != null) {
                Storage::disk('Image')->delete($college->img);
                $image = $request->file('img')->getClientOriginalName();
                $path = $request->file('img')->storeAs('CollegeImage', $image, 'Image');

                $college->update([
                    'name' => $request->input('name'),
                    'img' => $path,
                ]);

                return redirect()->route('gadmin.college.index')->with('success_message', 'College Updated Successfully');
            } else {

                $image = $request->file('img')->getClientOriginalName();
                $path = $request->file('img')->storeAs('CollegeImage', $image, 'Image');

                $college->update([
                    'name' => $request->input('name'),
                    'img' => $path,
                ]);


                return redirect()->route('gadmin.college.index')->with('success_message', 'College Updated Successfully');
            }
        }
    }

    //عرض جدول الارشيف

    public function archive()
    {
        $colleges = College::onlyTrashed()->get();
        return view('GlobalAdmin.College.archive', compact('colleges'));
    }

    //حذف كلية ونقلها للارشيف

    public function softDelete($id)
    {
        $college = College::findOrfail($id);
            $college->delete();
            return redirect()->route('gadmin.college.index')->with('success_message', 'College Deleted Successfully');

    }

    //استعادة  كلية محذوفة 

    public function restore($id)
    {
        College::withTrashed()->where('id', $id)->restore();
        return redirect()->route('gadmin.college.index')->with('success_message', 'College Restored Successfully');
    }

    //حذف كلية بشكل نهائي

    public function forceDelete($id)
    {
        $college = College::withTrashed()->find($id);
    
        if ($college) {
            try {
                if ($college->forceDelete()) {
                    // Delete associated image if it exists
                    if (Storage::disk('Image')->exists($college->img)) {
                        Storage::disk('Image')->delete($college->img);
                    }
    
                    return redirect()->route('gadmin.college.archive')->with('success_message', 'College Deleted Successfully');
                }
            } catch (\Illuminate\Database\QueryException $e) {
                // Check for foreign key constraint violation error
                if ($e->getCode() == 23000) {
                    return redirect()->back()->with('error_message', 'Cannot delete college. It is referenced in another table.');
                } else {
                    return redirect()->back()->with('error_message', 'Failed to delete college');
                }
            }
        } else {
            return redirect()->back()->with('error_message', 'College Not Found');
        }
    }
    
    
}
