<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('css/filtersidebar.css')}}">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css" rel="stylesheet">



</head>
<div class="container mt-5">
    <div class="row">
        <aside class="col-md-3">

<form action="/filter" enctype="multipart/form-data" method="GET">
@csrf
<div class="card">
<article class="filter-group">
    <header class="card-header">
        <a href="#" data_toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
            <i class="icon-control fa fa-chevron-down">
            <h6 class="title"> Pet Type</h6>
</a>
</header>

<div class="filter-content " id="collapse_1" style="">
  <div class="card-body">
    <div class="input-group">
    <input type="text" class="form-control" placeholder="Search" name="title">
    </div>
  </div>
</div>
</article>
<article class="filter-group">
    <header class="card-header">
    <a href="#" data_toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
            <i class="icon-control fa fa-chevron-down">
            <h6 class="title"> Pet Type </h6>
</a>
</header>
<div class="filter-content show" id=collapse_2 style="">
<div class="card-body">
    <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="pet_type" value="Dog">
        <div class="custom-control-label"> Dog </div>
</label>

    <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="pet_type" value="Cat">
        <div class="custom-control-label"> Cat </div>
</label>
</div>
</div>
</article>

<button class="btn btn-block btn-primary"> Enter </button>
</form>

</aside>
        <div class="col-md-9">
            <div class="row">
                <!-- First Card -->
                <div class="col-md-4">
                    <div class="card">

                    @foreach ($pets as $pet)
<div class="container" >
    
  <div class="card float-left">
    <div class="row ">
      
      <div class="col-sm-7">
        <div class="card-block">
        <h4 class="card-title">{{ $pet->pet_name }}</h4>
          <p> {{ $pet->age }}</p>         
          <p> {{ $pet->gender }}</p>
          <p> {{ $pet->breed }}</p>
          <p> {{ $pet->description }}</p>
          <a href="/pet/{{ $pet->pet_id }}/edit" class="btn btn-primary btn-sm">Edit</a>
          <form method="POST" action="/pet/{{ $pet->pet_id }}/delete">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Are you sure you want to delete this pet record?')"
                    class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
          
          
        </div>
      </div>

      <div class="col-sm-5">
      <img class="d-block w-100" src="{{ $pet->pet_image ? asset('storage/' . $pet->pet_image) : asset('images/no-image.jpg') }}"alt="Pet Image" style="height: 230px;">
        
      </div>
    </div>
  </div>    
  </div>
  @endforeach



                        <!-- Card content goes here -->
                    </div>
                </div>


</html>




