<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Furrry Friends Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('imports/admindashboard/assets/vendors/typicons.font/font/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('imports/admindashboard/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('imports/admindashboard/assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('imports/admindashboard/assets/images/favicon.png')}}" />

  <link rel="stylesheet" href="{{asset('css/sourceapplicants.css')}}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
   @include('admin.adminnavbar')
      <!-- partial -->
      <div class="main-panel">
        @include('layouts.message')
        @include('admin.petinformationcards')
        <!-- partial -->
      

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{asset('imports/admindashboard/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('imports/admindashboard/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('imports/admindashboard/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('imports/admindashboard/assets/js/template.js')}}"></script>
  <script src="{{asset('imports/admindashboard/assets/js/settings.js')}}"></script>
  <script src="{{asset('imports/admindashboard/assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
