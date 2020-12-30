@include('admin.include.header')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Courses Table</h4>
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
                    <div class="d-flex justify-content-between">
                        <h3 class="box-title">Course Details Table</h3>
                        <a href="{{url('/dashboard/course-details/course-details-add')}}" class="add-new-course"> Add Course Details</a>
                    </div>
                    @if(Session::get('cddsuccess'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('cddsuccess')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">Course Name</th>
                                    <th class="border-top-0 w-150">Prerequisite</th>
                                    <th class="border-top-0 w-300">Expected Benefits to the Sector</th>
                                    <th class="border-top-0">Job Placement</th>
                                    <th class="border-top-0">Create Date</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($coursedetails as $coursedetail)
                                <tr>
                                    <td>{{$coursedetail->id}}</td>
                                    <td>{{$coursedetail->name}}</td>
                                    <td>{{$coursedetail->prerequisite}}</td>
                                    <td>{!!$coursedetail->benefits!!}</td>
                                    <td>{{$coursedetail->jobPlacement}}</td>
                                    <td>{{$coursedetail->created_at}}</td>
                                    
                                    <td>
                                    <a href="{{url('/dashboard/course-details/'.$coursedetail->id.'/delete')}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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