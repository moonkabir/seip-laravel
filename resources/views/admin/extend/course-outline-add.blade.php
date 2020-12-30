@include('admin.include.header')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Course Outline</h4>
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
            <div class="col-md-12">
                <div class="white-box">
                    <form class="form-horizontal form-material" method="POST" action="{{url('/dashboard/course-outline/course-outline-add/course-outline-data-save')}}" enctype="multipart/form-data">
                        {{ method_field('POST') }}
                        @csrf
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Name of Course</label>
                            <div class="col-md-12 border-bottom p-0">
                                <select name="name" class="form-control p-0 border-0">
                                    <option value="">Select Course</option>
                                    @foreach($courses as $course)
                                    <option value="{{$course->name}}">{{$course->name}}</option>
                                    @endforeach
                                </select>
                                <span class="error">@error('name'){{$message}}@enderror</span> 
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Outline file</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="file" name="file" class="form-control p-0 border-0"> 
                                <span class="error">@error('file'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success" type="submit">Submit Course</button>
                            </div>
                        </div>
                    </form>
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