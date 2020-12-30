@include('admin.include.header')
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">Profile page</h4>
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
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-xlg-3 col-md-12">
                    <div class="white-box">
                        <div class="user-bg"> <img width="100%" alt="user" src="{{asset('admin/plugins/images/large/img1.jpg')}}">
                            <div class="overlay-box">
                                <div class="user-content">
                                    <a href="javascript:void(0)"><img src="{{asset('admin/plugins/images/users/genu.jpg')}}"
                                            class="thumb-lg img-circle" alt="img">
                                    </a>
                                    <h4 class="text-white mt-2">{{Auth::user()->name}}</h4>
                                    <!-- <h5 class="text-white mt-2">{{Auth::user()->email}}</h5> -->
                                </div>
                            </div>
                        </div>
                        <div class="user-btm-box mt-5 d-md-flex">
                            <div class="col-md-4 col-sm-4 text-center">
                                <h5 class="mt-2">{{Auth::user()->email}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material">
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Full Name</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" placeholder="{{Auth::user()->name}}"class="form-control p-0 border-0"> 
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="example-email" class="col-md-12 p-0">Email</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="email" placeholder="{{Auth::user()->email}}" class="form-control p-0 border-0" name="example-email"
                                            id="example-email">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Password</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="password" value="password" class="form-control p-0 border-0">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Phone No</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" placeholder="123 456 7890"
                                            class="form-control p-0 border-0">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
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