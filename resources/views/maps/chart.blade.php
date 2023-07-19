<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CelestialUI Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('imports/admindashboard/assets/vendors/typicons.font/font/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('imports/admindashboard/assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('imports/admindashboard/assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('imports/admindashboard/assets/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
  @include('admin.adminnavbar')
    
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <h1> MONTHS IN WHICH USERS JOINED </h1>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Line chart</h4>
                  <canvas id="lineChart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bar chart</h4>
                  <canvas id="barChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Area chart</h4>
                  <canvas id="areaChart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Doughnut chart</h4>
                  <canvas id="doughnutChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pie chart</h4>
                  <canvas id="pieChart"></canvas>
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com</a> 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard </a>templates from Bootstrapdash.com</span>
            </div>
          </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{asset('imports/admindashboard/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script type="text/javascript">
    var _ydata=JSON.parse('{!! json_encode($months) !!}');
    var _xdata=JSON.parse('{!! json_encode($monthCount) !!}');
    </script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('imports/admindashboard/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('imports/admindashboard/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('imports/admindashboard/assets/js/template.js')}}"></script>
  <script src="{{asset('imports/admindashboard/assets/js/settings.js')}}"></script>
  <script src="{{asset('imports/admindashboard/assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{asset('imports/admindashboard/assets/vendors/chart.js/Chart.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{asset('imports/admindashboard/assets/js/chart.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
