<?php

namespace App\Http\Controllers;
use App\Models\seipregistration;
// use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function students()
    {
        $students = seipregistration::all();
        return view('admin.students', compact('students'));
    }
    public function studentinfo($id)
    {
        $students = seipregistration::find($id);
        return view('admin.include.studentinfo', compact('students'));
        // return view('admin.studentinfo');
    }

    public function studentinfodelete($id){
        $student = seipregistration::find($id);
        $student->delete();

        return back()->with('sdsuccess','Student Deleted Successfully');
    }
    public function courseOutline()
    {
        return view('admin.course-outline');
    }
    public function courseDetails()
    {
        return view('admin.course-details');
    }
    public function error()
    {
        return view('admin.error');
    }
}
