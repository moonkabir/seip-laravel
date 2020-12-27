<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\seipregistration;

class userController extends Controller
{
    public function Home()
    {
        return view('frontend.home');
    }
    public function CourseDetails()
    {
        return view('frontend.course-details');
    }
    public function CourseOutline()
    {
        return view('frontend.course-outline');
    }
    public function AdmissionProcess()
    {
        return view('frontend.admission-process');
    }
    public function RegistrationForm()
    {
        return view('frontend.registration-form');
    }
    public function subDistricts()
    {
        return view('frontend.sub-districts');
    }
    public function districts()
    {
        return view('frontend.districts');
    }
    public function store(Request $request)
    {
        $request->validate([
            'FirstCourse' => 'required',
            'SecondCourse' => 'required',
            'ThirdCourse' => 'required',
            'name' => ['required','regex:/^[a-zA-Z .]+$/'],
            'fatherName' => ['required','regex:/^[a-zA-Z .]+$/'],
            'motherName' => ['required','regex:/^[a-zA-Z .]+$/'],
            'gender' => 'required',
            'ethnic_group' => 'required',
            'religion' => 'required',
            'nid' => ['required','regex:/^(?:\0-9)?(?:\d{10}|\d{13}|\d{17})$/'],
            'birthday' => 'required',
            'mobileNumber' => ['required', 'regex:/^(?:\\+88|88)?(01[3-9]\\d{8})$/'],
            'email' => ['required', 'regex:/\S+@\S+\.\S+/'],
            'employee' => 'required',
            'preAddress' => ['required','regex:/^[a-zA-Z0-9 ,.-]+$/'],
            'preCity' => ['required','regex:/^[a-zA-Z ,.-]+$/'],
            'prePostCode' => ['required','regex:/^[0-9]*$/'],
            'preDivision' => 'required',
            'preDistrict' => 'required',
            'preSubDistrict' => 'required',
            'perAddress' => ['required','regex:/^[a-zA-Z0-9 ,.-]+$/'],
            'perCity' => ['required','regex:/^[a-zA-Z ,.-]+$/'],
            'perPostCode' => ['required','regex:/^[0-9]*$/'],
            'perDivision' => 'required',
            'perDistrict' => 'required',
            'perSubDistrict' => 'required',
            'education' => ['required',"regex:/^[a-zA-Z ',.-]+$/"],
            'institute' => ['required','regex:/^[a-zA-Z ,.-]+$/'],
            'subject' => ['required','regex:/^[a-zA-Z ,.-]+$/'],
            'year' => ['required','regex:/^[0-9]*$/'],
            'file' => ['required','image'],
            // 'code' => 'required',
        ]);
// image modification to save data
        $studentImage = $request->file('file');
        $imageName = date('Y-M-D-H-i-s').'-'.$studentImage->getClientOriginalName();
        $directory = 'assets/img/student-images/';
        $imageUrl = $directory.$imageName;
        $studentImage->move($directory,$imageName);
        // return 'success';

        // seipregistration::create($request->all());
        // return redirect('/');

        $seipregistration = new seipregistration;
        $seipregistration->FirstCourse = $request->FirstCourse;
        $seipregistration->SecondCourse = $request->SecondCourse;
        $seipregistration->ThirdCourse = $request->ThirdCourse;
        $seipregistration->name = $request->name;
        $seipregistration->fatherName = $request->fatherName;
        $seipregistration->motherName = $request->motherName;
        $seipregistration->gender = $request->gender;
        $seipregistration->ethnic_group = $request->ethnic_group;
        $seipregistration->religion = $request->religion;
        $seipregistration->nid = $request->nid;
        $seipregistration->birthday = $request->birthday;
        $seipregistration->mobileNumber = $request->mobileNumber;
        $seipregistration->email = $request->email;
        $seipregistration->employee = $request->employee;
        $seipregistration->preAddress = $request->preAddress;
        $seipregistration->preCity = $request->preCity;
        $seipregistration->prePostCode = $request->prePostCode;
        $seipregistration->preDivision = $request->preDivision;
        $seipregistration->preDistrict = $request->preDistrict;
        $seipregistration->preSubDistrict = $request->preSubDistrict;
        $seipregistration->perAddress = $request->perAddress;
        $seipregistration->perCity = $request->perCity;
        $seipregistration->perPostCode = $request->perPostCode;
        $seipregistration->perDivision = $request->perDivision;
        $seipregistration->perDistrict = $request->perDistrict;
        $seipregistration->perSubDistrict = $request->perSubDistrict;
        $seipregistration->education = $request->education;
        $seipregistration->institute = $request->institute;
        $seipregistration->subject = $request->subject;
        $seipregistration->year = $request->year;
        $seipregistration->file = $imageUrl;
        $seipregistration->save();
        return redirect('/')->with('srsuccess','Registration Created Successfully');
        // return redirect('/');
    }
}
