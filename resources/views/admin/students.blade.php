@include('admin.include.header')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Students Table</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ml-auto">
                        <li><a href="#">Dashboard</a></li>
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
                    <h3 class="box-title">Student Registration Table</h3>
                    @if(Session::get('sdsuccess'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('sdsuccess')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">Student Name</th>
                                    <th class="border-top-0">First Preference</th>
                                    <th class="border-top-0">Second Preference</th>
                                    <th class="border-top-0">Third Preference</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->FirstCourse}}</td>
                                    <td>{{$student->SecondCourse}}</td>
                                    <td>{{$student->ThirdCourse}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>
                                        <a href="{{url('/dashboard/students/'.$student->id.'/delete')}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        <a href="{{url('/dashboard/students/'.$student->id.'/view')}}" class="btn btn-sm btn-info" ><i class="far fa-check-circle"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
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