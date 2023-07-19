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
                            Name
                          </th>
                          <th>
                            Location
                          </th>
                          <th>
                            Type
                          </th>
                          <th>
                            Description
                          </th>
                          <th>
                            Source Image
                          </th>
                          <th>
                            Source Certification
                          </th>
                          <th>
</th>
                          
                        </tr>
                      </thead>
                      @foreach ($sourceapplicants as $sourceapplicant)
                      <tbody>
                        <tr>
                          <td>
                          {{ $sourceapplicant->id }}
                          </td>
                          <td>
                          {{ $sourceapplicant->source_name }}
                          </td>
                          <!-- <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td> -->
                          <td>
                          {{ $sourceapplicant->location }}
                          </td>
                          <td>
                          {{ $sourceapplicant->source_type }}
                          </td>
                          <td>
                          {{ $sourceapplicant->source_description}}
                          </td>
                          <td>
                 <img class="d-block w-100" src="{{ $sourceapplicant->source_image ? asset('storage/' . $sourceapplicant->source_image) : asset('images/no-image.jpg') }}"alt="Source Image" class="img-fluid img-thumbnail" >
			      <!-- <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg"  alt="Sheep"> -->
		      </td>
              <td>
                 <img class="d-block w-100" src="{{ $sourceapplicant->source_certification ? asset('storage/' . $sourceapplicant->source_certification) : asset('images/no-image.jpg') }}"alt="Source Certification" class="img-fluid img-thumbnail" >
			      <!-- <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg"  alt="Sheep"> -->
		      </td> 
                     <td>
                     <a href="/source/{{ $sourceapplicant->id }}/accept" class="btn btn-primary btn-sm">Accept</a>

                     <form method="POST" action="/source/{{ $sourceapplicant->id }}/deny">
                         @csrf
                           @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete this pet record?')"
                        class="btn btn-primary btn-sm">Deny</button>
                    </form>
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
