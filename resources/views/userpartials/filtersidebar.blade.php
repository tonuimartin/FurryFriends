<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('css/filtersidebar.css')}}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
        .card {
            width: 100%;
        }

        .card-body {
            width: 100%;
        }

        .article{
  border: 1px solid black;
  background-color: white;
}


    </style>
</head>

<div class="container mt-5">
  <div class="row">
    <aside class="col-md-3 sidebar">
      <form action="/petsadoption" enctype="multipart/form-data" method="GET">
        @csrf
        <div class="card">
        <article class="filter-group custom-article" style="border: 1px solid black; background-color: white;">

            <header class="card-header">
              <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                <!-- <i class="icon-control fa fa-chevron-down"></i> -->
                <h6 class="title">Pet Breed</h6>
              </a>
            </header>
            <div class="filter-content" id="collapse_1">
              <div class="card-body">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="breed">
                </div>
              </div>
            </div>
          </article>
          <article class="filter-group custom-article" style="border: 1px solid black; background-color: white;">

            <header class="card-header">
              <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                <!-- <i class="icon-control fa fa-chevron-down"></i> -->
                <h6 class="title">Pet Type</h6>
              </a>
            </header>
            <div class="filter-content show" id="collapse_2">
              <div class="card-body">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="pet_type" value="Dog">
                  <div class="custom-control-label">Dog</div>
                </label>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" name="pet_type" value="Cat">
                  <div class="custom-control-label">Cat</div>
                </label>
              </div>
            </div>
          </article>

          <article class="filter-group custom-article" style="border: 1px solid black; background-color: white;">

  <header class="card-header">
    <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
      <!-- <i class="icon-control fa fa-chevron-down"></i> -->
      <h6 class="title">Pet Gender</h6>
    </a>
  </header>
  <div class="filter-content show sidebar" id="collapse_3">
    <div class="card-body">
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="pet_gender" value="male">
        <div class="custom-control-label">Male</div>
      </label>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="pet_gender" value="female">
        <div class="custom-control-label">Female</div>
      </label>
    </div>
  </div>
</article>

          
          <button class="btn btn-block btn-primary" style="border: 1px solid black;">
Enter</button>
        </div>
      </form>
    </aside>

    <div class="col-md-9">
      @include('layouts.message')
      <div class="row">
        @foreach ($pets as $pet)
          <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
              <div class="container">
                <div class="row">
                  <div class="col-sm-7">
                    <div class="card-body">
                      <h4 class="card-title">{{ $pet->pet_name }}</h4>
                      <p>{{ $pet->age }}</p>
                      <p>{{ $pet->gender }}</p>
                      <p>{{ $pet->breed }}</p>
                      <p>{{ $pet->description }}</p>
                    </div>
                    
                  </div>
                  <div class="col-sm-5">
                    <img class="d-block w-100" src="{{ $pet->pet_image ? asset('storage/' . $pet->pet_image) : asset('images/no-image.jpg') }}" alt="Pet Image" style="height: 230px;">
                  </div>
                  <a href="{{ url('addtocart',$pet->pet_id) }}" class="btn btn-primary btn-block" role="button"> Add to cart </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      @if (count($pets) > 0)
        <p>{{ count($pets) }} record(s) found.</p>
      @else
        <p>No records found.</p>
      @endif
    </div>
  </div>
</div>
</body>
</html>
