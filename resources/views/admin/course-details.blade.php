@include('admin.include.header')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Course Details</h4>
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
                    <form class="form-horizontal form-material" action="" >
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Name of Course</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" placeholder="Web Design Course"class="form-control p-0 border-0"> 
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Prerequisite</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" placeholder="Must have the basic knowledge on HTML & CSS"class="form-control p-0 border-0"> 
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Expected Benefits to the Sector</label>
                            <div class="col-md-12 border-bottom p-0">
                                <textarea rows="4" class="form-control p-0 border-0"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Job Placement</label>
                            <div class="col-md-12 border-bottom p-0">
                                <textarea rows="3" class="form-control p-0 border-0"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Submit Course</button>
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