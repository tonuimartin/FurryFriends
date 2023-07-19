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
        <div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p> -->
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            User ID
                          </th>
                          <th>
                            Pet ID
                          </th>
                          <th>
                            Source ID
                          </th>
                          <th>
                            Total
                          </th>
                          
                          
                        </tr>
                      </thead>
                      @foreach ($orders as $order)
                      <tbody>
                        <tr>
                          <td>
                          {{ $order->id }}
                          </td>
                          <td>
                          {{ $order->user_id }}
                          </td>
                          <!-- <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td> -->
                          <td>
                          {{ $order->pet_id }}
                          </td>
                          <td>
                          {{ $order->source_id }}
                          </td>
                          <td>
                          {{ $order->total}}
                          </td>
                         
                        </tr>
                        
                      </tbody>
                      @endforeach
                    </table>
                  </div>
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
