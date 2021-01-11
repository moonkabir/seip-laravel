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
                        <h3 class="box-title">Course Names Table</h3>
                        <a href="{{url('/dashboard/courses/add-course')}}" class="add-new-course"> Add New Course</a>
                    </div>
                    @if(Session::get('cdssuccess'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('cdssuccess')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(Session::get('cdsuccess'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('cdsuccess')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(Session::get('cusuccess'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('cusuccess')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if(Session::get('cpsuccess'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('cpsuccess')}}</strong>
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
                                    <th class="border-top-0">Course Name</th>
                                    <th class="border-top-0">Publication Status</th>
                                    <th class="border-top-0">Create Date</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    <td>{{$course->id}}</td>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->status==1?'Published':'Unpublished'}}</td>
                                    <td>{{$course->created_at}}</td>

                                    <td>
                                        <a href="{{url('/dashboard/courses/'.$course->id.'/delete')}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                        @if($course->status==1)
                                        <a href="{{url('/dashboard/courses/'.$course->id.'/unpublished')}}" class="btn btn-sm btn-success"><i class="fas fa-times"></i></a>
                                        @else
                                        <a href="{{url('/dashboard/courses/'.$course->id.'/published')}}" class="btn btn-sm btn-danger"><i class="fas fa-check"></i></a>
                                        @endif
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
