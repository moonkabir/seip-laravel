<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
