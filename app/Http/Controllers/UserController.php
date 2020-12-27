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
            'name' => 'required',
            'fatherName' => 'required',
            'motherName' => 'required',
            'gender' => 'required',
            'ethnic_group' => 'required',
            'religion' => 'required',
            'nid' => 'required',
            'birthday' => 'required',
            'mobileNumber' => 'required',
            'email' => 'required',
            'employee' => 'required',
            'preAddress' => 'required',
            'preCity' => 'required',
            'prePostCode' => 'required',
            'preDivision' => 'required',
            'preDistrict' => 'required',
            'preSubDistrict' => 'required',
            'perAddress' => 'required',
            'perCity' => 'required',
            'perPostCode' => 'required',
            'perDivision' => 'required',
            'perDistrict' => 'required',
            'perSubDistrict' => 'required',
            'education' => 'required',
            'institute' => 'required',
            'subject' => 'required',
            'year' => 'required',
            'file' => 'required',
            'code' => 'required',
        ]);
        seipregistration::create($request->all());
        return redirect('/');
    }
}
