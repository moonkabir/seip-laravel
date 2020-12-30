<?php

namespace App\Http\Controllers;
use App\Models\seipregistration;
use App\Models\courses_details;
use App\Models\courses_outlines;
use App\Models\courses;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $courses = courses::all();
        $students = seipregistration::all();
        return view('admin.dashboard',compact(['courses','students']));
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
    public function courses()
    {
        $courses = courses::all();
        return view('admin.courses',compact('courses'));
    }
    public function addcoursepublished($id)
    {
        $course = courses::find($id);
        $course->status = 1;
        $course->save();
        return back()->with('cpsuccess','Course Published');
    }
    public function addcourseunpublished($id)
    {
        $course = courses::find($id);
        $course->status = 0;
        $course->save();
        return back()->with('cusuccess','Course Unpublished');
    }
    public function addcoursedelete($id)
    {
        $course = courses::find($id);
        $course->delete();
        return back()->with('cdsuccess','Course Deleted Successfully');
    }
    public function addcourse()
    {
        return view('admin.extend.new-course-add');
    }




    public function courseOutline()
    {
        $courseoutlines = courses_outlines::all();
        return view('admin.course-outline', compact('courseoutlines'));
    }
    public function courseOutlineDelete($id)
    {
        $courseoutlinedelete = courses_outlines::find($id);
        $courseoutlinedelete->delete();
        return back()->with('codsuccess','Course Outline Deleted Successfully');
    }
    public function courseOutlineadd(){
        $courses = courses::where('status',1)->get();
        return view('admin.extend.course-outline-add',compact('courses'));
    }
    public function courseOutlineDataStore(Request $request){
        $request->validate([
            'name'=>['required'],
            'file'=>['required'],
        ]);

        // $studentImage = $request->file('file');
        // $imageName = date('Y-M-D-H-i-s').'-'.$studentImage->getClientOriginalName();
        // $directory = 'assets/img/student-images/';
        // $imageUrl = $directory.$imageName;
        // $studentImage->move($directory,$imageName);

        $directory = 'assets/img/outline-file/';
        $courseOutlinePdf = $request->file('file');
        $pdfName = date('Y-M-D-H-i-s').'-'.$courseOutlinePdf->getClientOriginalName();
        $pdfUrl = $directory.$pdfName;
        $courseOutlinePdf->move($directory, $pdfName);

        $courses_outlines = new courses_outlines;
        $courses_outlines->name = $request->name;
        $courses_outlines->file = $pdfUrl;
        $courses_outlines->save();
        return redirect('/dashboard/course-outline')->with('codsuccess','Course Outline Data Stored Successfully');
    }

    public function courseDetails()
    {
        $coursedetails = courses_details::all();
        return view('admin.course-details', compact('coursedetails'));
    }
    public function courseDetailsDelete($id){
        $student = courses_details::find($id);
        $student->delete();
        return back()->with('cddsuccess','Course Details Deleted Successfully');
    }
    public function courseDetailsAdd()
    {
        $courses = courses::where('status',1)->get();
        return view('admin.extend.course-details-add',compact('courses'));
    }
    public function error()
    {
        return view('admin.404');
    }
    public function courseDetailsDataStore(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'prerequisite' => ['required'],
            'benefits' => ['required'],
            'jobPlacement' => ['required']
        ]);
        $courses_details = new courses_details;
        $courses_details->name = $request->name;
        $courses_details->prerequisite = $request->prerequisite;
        $courses_details->benefits = $request->benefits;
        $courses_details->jobPlacement = $request->jobPlacement;
        $courses_details->save();
        return redirect('/dashboard/course-details')->with('cddsuccess','Course Details Data Stored Successfully');
        // return redirect('/');
    }
    public function addcoursesave(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'status' => ['required'],
        ]);
        $courses = new courses;
        $courses->name = $request->name;
        $courses->status = $request->status;
        $courses->save();
        return redirect('/dashboard/courses')->with('cdssuccess','Course Name Data Stored Successfully');
        // return redirect('/');
    }
}
