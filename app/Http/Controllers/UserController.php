<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\seipregistration;

class UserController extends Controller
{
    public function Home()
    {
        return view('home');
    }
    public function CourseDetails()
    {
        return view('course-details');
    }
    public function CourseOutline()
    {
        return view('course-outline');
    }
    public function AdmissionProcess()
    {
        return view('admission-process');
    }
    public function RegistrationForm()
    {
        return view('registration-form');
    }
    public function subDistricts()
    {
        return view('sub-districts');
    }
    public function districts()
    {
        return view('districts');
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
            'mobileNumber' => 'required | ("^(?:\\+88|88)?(01[3-9]\\d{8})$")',
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
