@include('admin.include.header')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title text-uppercase font-medium font-14">Add User Details</h4>
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
                <form class="form-horizontal form-material" method="POST" action="{{ url('/dashboard/users/add-user/users-data-save') }}" enctype="multipart/form-data">
                    {{ method_field('POST') }}
                    @csrf
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Name</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" placeholder="Name" class="form-control p-0 border-0" name="name">
                            <span class="error">@error('name'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Email</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" placeholder="Email Address" class="form-control p-0 border-0" name="email">
                            <span class="error">@error('email'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Phone</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="text" placeholder="Phone Number" class="form-control p-0 border-0" name="phone">
                            <span class="error">@error('phone'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Password</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="password" placeholder="Password" class="form-control p-0 border-0" name="password">
                            <span class="error">@error('password'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">User Role</label>
                        <div class="col-md-12 border-bottom p-0">
                            <select name="role"  class="form-control p-0 border-0">
                                <option value="">Select Role</option>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">Executive</option>
                            </select>
                            <span class="error">@error('role'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">User Photo</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input type="file" class="form-control p-0 border-0" name="photo">
                            <span class="error">@error('photo'){{$message}}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button class="btn btn-success" type="submit">Add User</button>
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
