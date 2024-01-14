<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rental DVD</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('../../assets/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('../../assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('../../assets/vendors/sweetalert2/sweetalert2.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('../../assets/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('../../assets/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('../../assets/images/logo-dark.svg')}}" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="/customer/PostLogin" method="POST">
                @csrf
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                </div>
              </form>
              <br>
              @if (session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{asset('../../assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <script src="{{asset('../../assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('../../assets/vendors/sweetalert2/sweetalert2.min.js')}}"></script>
  <!-- inject:js -->
  <script src="{{asset('../../assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('../../assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('../../assets/js/template.js')}}"></script>
  <!-- endinject -->

  <!-- Start:Pesan Gagal -->
    <!-- <script>
        Swal.fire('Gagal', 'Username atau Password Gagal', 'error');
    </script> -->
    <!-- End:Pesan Gagal -->
</body>

</html>
