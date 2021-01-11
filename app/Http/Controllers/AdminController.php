<?php

namespace App\Http\Controllers;
use App\Models\seipregistration;
use App\Models\courses_details;
use App\Models\courses_outlines;
use App\Models\courses;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    /**
     * Admin Panel Dashboard Control Section
     */

    public function dashboard()
    {
        $courses = courses::all();
        $students = seipregistration::all();
        return view('admin.dashboard',compact(['courses','students']));
    }

    /**
     * User Profile Control Section
     */

    public function profile()
    {
        return view('admin.profile');
    }

    public function profileUpdate(Request $request){


        // $dbname = user::where('id', $id)->get('name')[0]->name;
        // $dbphone = user::where('id', $id)->get('phone')[0]->phone;
        // $dbpasshash = user::where('id', $id)->get('password')[0]->password;

        // $dbpass = encrypt($dbpasshash);
        // echo $dbpasshash;
        // die();
        // echo(Auth()->user()->password);
        // die();

        $id = Auth()->user()->id;
        $dbname = Auth()->user()->name;
        $dbphone = Auth()->user()->phone;
        $dbpasshash = Auth()->user()->password;

        $name = $request->input('name') ?? $dbname;
        $phone = $request->input('phone') ?? $dbphone;
        $old_password = $request->input('old_password');
        // $password = password_verify($old_password, $dbpasshash);
        $password = Hash::check($old_password, $dbpasshash);
        // if( $password == true){
        //     echo "done";
        // }else{
        //     echo "error";
        // }
        // die();
        $new_password = $request->input('new_password');
        $password = $password ? bcrypt($new_password) : $dbpasshash;

        $profile = user::where('id', $id)->update(
            array(
                'name' => $name,
                'phone' => $phone,
                'password' => $password,
            )
        );
        view('admin.profile', compact('profile'));  
        return redirect('/dashboard/profile')->with('uusuccess','Profile Update Successfully');   
    }

    /**
     * User Section
     */

    public function getUsers(){
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1){
            $users = User::all();
            return view('admin.users',compact('users'));
        }else{
            return view('errors.404');
        }
    }

    public function addUser(){
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1){
            return view('admin.extend.user-add');
        }else{
            return view('errors.404');
        }
    }

    public function saveUser(Request $request){
        $directory = 'assets/img/user-images/';
        $userImages = $request->file('photo');
        $imageName = date('Y-M-D-H-i-s').'-'.$userImages->getClientOriginalName();
        $imageUrl = $directory.$imageName;
        $userImages->move($directory, $imageName);

        $user =new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->photo = $imageUrl;
        $user->remember_token = mt_rand();
        $user->save();

        return redirect('/dashboard/users')->with('uasuccess','User Data Stored Successfully');
    }
    public function userDelete($id){
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1){
            $user = User::find($id);
            $user->delete();
            return back()->with('udsuccess','User Deleted Successfully');
        }else{
            return view('errors.404');
        }
    }

    /**
     * Students Control Section
     */

    public function students(Request $request)
    {
        $students = seipregistration::orderBy('id','DESC')->get();
        return view('admin.students', compact('students'));
    }

    public function studentinfo($id)
    {
        $students = seipregistration::find($id);
        return view('admin.include.studentinfo', compact('students'));
    }

    public function studentinfodelete($id){
        $student = seipregistration::find($id);
        $student->delete();
        return back()->with('sdsuccess','Student Deleted Successfully');
    }
    public function search(Request $request){
        $search= $request->get('email');
        $students = seipregistration::where('email', 'like', '%'.$search.'%')->paginate(5);
        return view('admin.students',['students'=>$students]);
    }

    /**
     * Courses Control Section
     */

    public function courses()
    {
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1){
            $courses = courses::all();
            return view('admin.courses',compact('courses'));
        }else{
            return view('errors.404');
        }
    }
    public function addcoursepublished($id)
    {
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1){
            $course = courses::find($id);
            $course->status = 1;
            $course->save();
            return back()->with('cpsuccess','Course Published');
        }else{
            return view('errors.404');
        }
    }
    public function addcourseunpublished($id)
    {
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1){
            $course = courses::find($id);
            $course->status = 0;
            $course->save();
            return back()->with('cusuccess','Course Unpublished');
        }else{
            return view('errors.404');
        }
    }
    public function addcoursedelete($id)
    {
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1){
            $course = courses::find($id);
            $course->delete();
            return back()->with('cdsuccess','Course Deleted Successfully');
        }else{
            return view('errors.404');
        }
    }
    public function addcourse()
    {
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1){
            return view('admin.extend.new-course-add');
        }else{
            return view('errors.404');
        }
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
    }

    /**
     * Course Outline Control Section
     */

    public function courseOutline()
    {
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1 || $UserRole === 2){
            $courseoutlines = courses_outlines::all();
            return view('admin.course-outline', compact('courseoutlines'));
        }else{
            return view('errors.404');
        }
    }
    public function courseOutlineDelete($id)
    {
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1 || $UserRole === 2){
            $courseoutlinedelete = courses_outlines::find($id);
            $courseoutlinedelete->delete();
            return back()->with('codsuccess','Course Outline Deleted Successfully');
        }else{
            return view('errors.404');
        }
    }
    public function courseOutlineadd(){
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1 || $UserRole === 2){
            $courses = courses::where('status',1)->get();
            return view('admin.extend.course-outline-add',compact('courses'));
        }else{
            return view('errors.404');
        }
    }
    public function courseOutlineDataStore(Request $request){
        $request->validate([
            'name'=>['required'],
            'file'=>['required'],
        ]);
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

    /**
     * Course Details Control Section
     */

    public function courseDetails()
    {
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1 || $UserRole === 2){
            $coursedetails = courses_details::all();
            return view('admin.course-details', compact('coursedetails'));
        }else{
            return view('errors.404');
        }
    }
    public function courseDetailsDelete($id){
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1 || $UserRole === 2){
            $student = courses_details::find($id);
            $student->delete();
            return back()->with('cddsuccess','Course Details Deleted Successfully');
        }else{
            return view('errors.404');
        }
    }
    public function courseDetailsAdd()
    {
        $UserRole = Auth()->user()->role;
        if ($UserRole === 1 || $UserRole === 2){
            $courses = courses::where('status',1)->get();
            return view('admin.extend.course-details-add',compact('courses'));
        }else{
            return view('errors.404');
        }
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
    }
}
