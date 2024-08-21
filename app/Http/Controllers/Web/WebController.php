<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\CollegeAds;
use App\Models\CollegeEvent;
use App\Models\CollegeFees;
use App\Models\CollegeSpecialization;
use App\Models\Event;
use App\Models\TeachingStaff;
use App\Models\University;
use App\Models\UniversityAds;
use App\Models\UniversityCollege;
use App\Models\UnivEvent;
use App\Models\UserQuestion;
use App\Models\UserS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebController extends Controller
{
    //

    public function index()
    {
        $universities = University::all();
        return view('Web.index', compact('universities'));
    }

    public function universityDetails($id)
    {

        $universityID = $id;

        $university = University::findOrfail($universityID);

        $universityLocationID = $university->address_id;

        $location = Address::findOrfail($universityLocationID);

        $colleges = UniversityCollege::where('universityId', $universityID)->get();

        $univEventIDs = UnivEvent::where('universityID', $universityID)->pluck('eventID');

        $univEvents = Event::whereIn('id', $univEventIDs)->get();

        $universityCollegeID = UniversityCollege::where('universityId', $universityID)->pluck('id');

        $feesColleges = CollegeFees::whereIn('univCollegeID', $universityCollegeID)->get();

        $universityAds = UniversityAds::where('universityID', $universityID)->get();

        return view('Web.universityDetails', compact('university', 'colleges', 'univEvents', 'location', 'feesColleges', 'universityAds'));
    }

    public function collegeDetails($id)
    {
        $univCollegeID = $id;

        $universityCollege = UniversityCollege::findOrfail($univCollegeID);

        $teachingStaffs = TeachingStaff::where('univercityCollegeID', $univCollegeID)->get();

        $specializationColleges = CollegeSpecialization::where('univCollegeID', $univCollegeID)->get();

        $collegeAds = CollegeAds::where('univCollegeID', $univCollegeID)->get();

        $collegeEvents = CollegeEvent::where('univCollegeID', $univCollegeID)->get();

        return view('Web.collegeDetails', compact('universityCollege', 'teachingStaffs', 'specializationColleges', 'collegeAds', 'collegeEvents'));
    }

    public function userLogin()
    {
        return view('Web.User.login');
    }

    public function storeLogin(Request $request)
    {
        $check = $request->all();
        if (Auth::guard('userS')->attempt([
            'email' => $check['email'],
            'password' => $check['password']
        ])) {

            return redirect()->route('web.index');
        } else {
            return redirect()->route('web.login')->with('login_error_message', 'error login please enter valid username and password');
        }
    }


    public function logoutUser()
    {
        Auth::guard('userS')->logout();
        return redirect()->route('web.index');
    }

    public function userRegister()
    {
        return view('Web.User.register');
    }

    public function storeRegister(Request $request)
    {
        $password = $request->input('password');
        $image = $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('UserSImage', $image, 'Image');

        UserS::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'status' => '1',
            'password' => Hash::make($password),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'img' => $path,
        ]);

        return redirect()->route('web.index')->with('success_message', 'Account Created Successfully');
    }

    public function storeQuestion(Request $request)
    {
        if (Auth::guard('userS')->user()) {
            UserQuestion::create([
                'question' => $request->input('question'),
                'details' => $request->input('details'),
                'userID' => Auth::guard('userS')->user()->id,
            ]);

            return redirect()->route('web.index')->with('success_message', 'Question Created Successfully');
        }

        return redirect()->route('web.index')->with('error_message', 'Please Login To Can Add Question');
    }

    public function questionIndex()
    {
        $userQuestions = UserQuestion::where('userID', Auth::guard('userS')->user()->id)->get();
        return view('Web.User.questionTable', compact('userQuestions'));
    }

    public function searchUniversity(Request $request)
    {
        $universities = University::where('name', 'like', '%' . $request->input('universityName') . '%')
            ->where('type', $request->input('type'))
            ->get();

        if ($universities->isNotEmpty()) {
            return redirect()->route('web.index')->with('search_result', $universities);
        }

        return redirect()->route('web.index')->with('error_message', 'No Results Found');
    }
}
