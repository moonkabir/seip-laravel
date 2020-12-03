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
    public function store(Request $request)
    {
        seipregistration::create($request->all());
        return redirect('/');
    }
}
