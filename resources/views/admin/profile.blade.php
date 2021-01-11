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
            @if(Session::get('uusuccess'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('uusuccess')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-xlg-3 col-md-12">
                    <div class="white-box">
                        <div class="user-bg"> <img width="100%" alt="user" src="{{asset(Auth::user()->photo)}}">
                            <div class="overlay-box">
                                <div class="user-content">
                                    <a href="javascript:void(0)"><img src="{{asset(Auth::user()->photo)}}"
                                            class="thumb-lg img-circle" alt="img">
                                    </a>
                                    <h4 class="text-white mt-2">{{Auth::user()->name}}</h4>
                                    <h5 class="text-white mt-2">{{Auth::user()->email}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="user-btm-box mt-5 d-md-flex">
                            <div class="col-md-12 col-sm-12 text-center">
                                <h5 class="mt-2">
                                    @if(Auth::user()->role == 1)
                                        <td>Super Admin</td>
                                    @elseif(Auth::user()->role == 2)
                                        <td>Admin</td>
                                    @elseif(Auth::user()->role == 3)
                                        <td>Executive</td>
                                    @endif
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" method="POST" action="{{url('/dashboard/profile/update')}}" enctype="multipart/form-data">
                                {{ method_field('POST') }}
                                @csrf
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Full Name</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" placeholder="{{Auth::user()->name}}"class="form-control p-0 border-0" name="name">
                                    </div>
                                </div>
                                <!-- <div class="form-group mb-4">
                                    <label for="example-email" class="col-md-12 p-0">Email</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input placeholder="{{Auth::user()->email}}"class="form-control p-0 border-0" autocomplete="off">
                                    </div>
                                </div> -->
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Old Password</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="password" placeholder="Type old Password" class="form-control p-0 border-0" name="old_password">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">New Password</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="password" placeholder="Type New Password" class="form-control p-0 border-0" name="new_password">
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Phone No</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <input type="text" placeholder="{{Auth::user()->phone}}"
                                            class="form-control p-0 border-0" name="phone">
                                    </div>
                                </div>
                                <!-- <div class="form-group mb-4">
                                    <label class="col-md-12 p-0">Message</label>
                                    <div class="col-md-12 border-bottom p-0">
                                        <textarea rows="5" class="form-control p-0 border-0"></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-sm-12">Select Country</label>
                                    <div class="col-sm-12 border-bottom">
                                        <select class="form-control p-0 border-0">
                                            <option>London</option>
                                            <option>India</option>
                                            <option>Usa</option>
                                            <option>Canada</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                </div> -->
                                <div class="form-group mb-4">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit">Update Profile</button>
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
