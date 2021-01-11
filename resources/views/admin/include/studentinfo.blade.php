@include('admin.include.header')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Student Info</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ml-auto">
                        <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Student Information Table</h3>
                    <div class="table-responsive">
                        <table class="table">
                                                      
                            <tr>
                                <td>Student Name</td>
                                <td>{{$students->name}}</td>
                            </tr>
                            <tr>
                                <td>id</td>
                                <td>{{$students->id}}</td>
                            </tr>
                            <tr>
                                <td>First Course</td>
                                <td>{{$students->FirstCourse}}</td>
                            </tr>
                            <tr>
                                <td>Second Course</td>
                                <td>{{$students->SecondCourse}}</td>
                            </tr>
                            <tr>
                                <td>Third Course</td>
                                <td>{{$students->ThirdCourse}}</td>
                            </tr>
                            <tr>
                                <td>Father Name</td>
                                <td>{{$students->fatherName}}</td>
                            </tr>
                            <tr>
                                <td>Mother Name</td>
                                <td>{{$students->motherName}}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{$students->gender}}</td>
                            </tr>
                            <tr>
                                <td>Ethnic Group</td>
                                <td>{{$students->ethnic_group}}</td>
                            </tr>
                            <tr>
                                <td>Religion</td>
                                <td>{{$students->religion}}</td>
                            </tr>
                            <tr>
                                <td>NID</td>
                                <td>{{$students->nid}}</td>
                            </tr>
                            <tr>
                                <td>Birthday</td>
                                <td>{{$students->birthday}}</td>
                            </tr>
                            <tr>
                                <td>Mobile Number</td>
                                <td>{{$students->mobileNumber}}</td>
                            </tr>
                            <tr>
                                <td>Email </td>
                                <td>{{$students->email}}</td>
                            </tr>
                            <tr>
                                <td>Employee</td>
                                <td>{{$students->employee}}</td>
                            </tr>
                            <tr>
                                <td>Income</td>
                                <td>{{$students->income}}</td>
                            </tr>
                            <tr>
                                <td>Company Name</td>
                                <td>{{$students->companyName}}</td>
                            </tr>
                            <tr>
                                <td>Designation</td>
                                <td>{{$students->designation}}</td>
                            </tr>
                            <tr>
                                <td>Present Address</td>
                                <td>{{$students->preAddress}}</td>
                            </tr>
                            <tr>
                                <td>Present City</td>
                                <td>{{$students->preCity}}</td>
                            </tr>
                            <tr>
                                <td>Present Post Code</td>
                                <td>{{$students->prePostCode}}</td>
                            </tr>
                            <tr>
                                <td>Present Division</td>
                                <td>{{$students->preDivision}}</td>
                            </tr>
                            <tr>
                                <td>Present District</td>
                                <td>{{$students->preDistrict}}</td>
                            </tr>
                            <tr>
                                <td>Present Sub District</td>
                                <td>{{$students->perSubDistrict}}</td>
                            </tr>
                            <tr>
                                <td>permanent Address</td>
                                <td>{{$students->perAddress}}</td>
                            </tr>
                            <tr>
                                <td>permanent City</td>
                                <td>{{$students->perCity}}</td>
                            </tr>
                            <tr>
                                <td>permanent Post Code</td>
                                <td>{{$students->perPostCode}}</td>
                            </tr>
                            <tr>
                                <td>permanent Division</td>
                                <td>{{$students->perDivision}}</td>
                            </tr>
                            <tr>
                                <td>permanent District</td>
                                <td>{{$students->perDistrict}}</td>
                            </tr>
                            <tr>
                                <td>permanent Sub District</td>
                                <td>{{$students->perSubDistrict}}</td>
                            </tr>
                            <tr>
                                <td>Education</td>
                                <td>{{$students->education}}</td>
                            </tr>
                            <tr>
                                <td>Institute</td>
                                <td>{{$students->institute}}</td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td>{{$students->subject}}</td>
                            </tr>
                            <tr>
                                <td>Passing Year</td>
                                <td>{{$students->year}}</td>
                            </tr>
                            <tr>
                                <td>Student Image</td>
                                <td><img src="{{asset($students->file)}}" alt="" width="100"></td>
                            </tr>
                            <tr>
                                <td>Created Student</td>
                                <td>{{$students->created_at}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@include('admin.include.footer')