<?php

namespace App\Http\Controllers\LAdmin\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventImage;
use App\Models\LAdminUniversity;
use App\Models\UniversityCollege;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    //عرض صفحة جدول الفعاليات

    public function index()
    {
        $events = Event::all();
        return view('LocalAdmin.Event.index', compact('events'));
    }

    //عرض صفحة اضافة فعالية جديدة

    public function create()
    {
        $univLAdmin = LAdminUniversity::where('ladminID', Auth::guard('ladmin')->user()->id)->pluck('universityId');
        $universityColleges = UniversityCollege::whereIn('universityId', $univLAdmin)->get();
        return view('LocalAdmin.Event.create', compact('universityColleges'));
    }

    //تخزين بيانات الفعالية في قاعدة البيانات 

    public function store(Request $request)
    {
        $ladminID = Auth::guard('ladmin')->user()->id;
        Event::create([
            'name' => $request->input('name'),
            'dayName' => $request->input('dayName'),
            'eventDate' => $request->input('dateEvent'),
            'eventTime' => $request->input('eventTime'),
            'details' => $request->input('details'),
            'status' => $request->input('status'),
            'univercityCollegeID' => $request->input('univercityCollegeID'),
            'created_by' => $ladminID,
        ]);

        return redirect()->route('ladmin.event.index')->with('success_message', 'Event Created Successfully');
    }

    //عرض صفحة تعديل بيانات الفعالية 

    public function edit(Request $request, $id)
    {
        $event = Event::findOrfail($id);
        $univLAdmin = LAdminUniversity::where('ladminID', Auth::guard('ladmin')->user()->id)->pluck('universityId');
        $universityColleges = UniversityCollege::whereIn('universityId', $univLAdmin)->get();
        return view('LocalAdmin.Event.edit', compact('event', 'universityColleges'));
    }

    //تحديث بيانات الفعالية

    public function update(Request $request, $id)
    {
        $event = Event::findOrfail($id);

        $event->update([
            'name' => $request->input('name'),
            'dayName' => $request->input('dayName'),
            'eventDate' => $request->input('dateEvent'),
            'eventTime' => $request->input('eventTime'),
            'details' => $request->input('details'),
            'status' => $request->input('status'),
            'univercityCollegeID' => $request->input('univercityCollegeID'),
        ]);

        return redirect()->route('ladmin.event.index')->with('success_message', 'Event Updated Successfully');
    }

    //عرض جدول ارشيف الفعالية

    public function archive()
    {
        $events = Event::onlyTrashed()->get();
        return view('LocalAdmin.Event.archive', compact('events'));
    }

    //حذف الفعاليات ونقله للارشيف

    public function softDelete($id)
    {
        $event = Event::findOrfail($id);
        $event->delete();
        return redirect()->route('ladmin.event.index')->with('success_message', 'Event Deleted Successfully');
    }

    //استعادة الفعالية المحذوف

    public function restore($id)
    {
        Event::withTrashed()->where('id', $id)->restore();
        return redirect()->route('ladmin.event.index')->with('success_message', 'Evant Restored Successfully');
    }

    //حذف الفعالية بشكل نهائي

    public function forceDelete($id)
    {
        $event = Event::withTrashed()->where('id', $id)->first();
        if ($event) {
            $event->forceDelete();

            return redirect()->route('ladmin.event.archive')->with('success_message', 'Event Deleted Successfully');
        } else {
            return redirect()->back()->with('error_message', 'Event Not Found');
        }
    }


    //جعل الفعالية تمت لنستطيع وضع الصور

    public function done($id)
    {
        $event = Event::findOrfail($id);

        $event->update([
            'status' => '1',
        ]);

        return redirect()->route('ladmin.event.index')->with('success_message', 'Event Done Successfully');
    }

    //الغاء الفعالية

    public function cancel($id)
    {
        $event = Event::findOrfail($id);

        $event->update([
            'status' => '2',
        ]);

        return redirect()->route('ladmin.event.index')->with('success_message', 'Event Canceled Successfully');
    }


    public function eventImageIndex($id)
    {
        $eventID = $id;

        $eventImages = EventImage::where('eventID' , $eventID)->get();

        return view('LocalAdmin.Event.Image.index' , compact('eventImages' , 'eventID'));
        
    }

    public function eventImageCreate($id)
    {
        $eventID = $id;

        return view('LocalAdmin.Event.Image.create' , compact('eventID'));
    }

    public function eventImageStore(Request $request )
    {
        $image = $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('EventImage', $image, 'Image');

        EventImage::create([
            'details' => $request->input('details'),
            'img' => $path,
            'eventID' => $request->input('eventID'),
        ]);

        return redirect()->route('ladmin.event.index')->with('success_message', 'Event Image Created Successfully');
    }

    public function eventImageDelete($id)
    {

        $eventImage = EventImage::where('id', $id)->first();
        if ($eventImage) {
            Storage::disk('Image')->delete($eventImage->img);
            $eventImage->delete();
            return redirect()->route('ladmin.event.index')->with('success_message', 'Event Image Deleted Successfully');
        } else {
            return redirect()->back()->with('error_message', 'Event Image Not Found');
        }

    }
}
