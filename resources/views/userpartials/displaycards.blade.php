<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('css/displaycards.css')}}">
<link rel="stylesheet" href="{{asset('css/homepagecards.css')}}">

</head>
<!------ Include the above in your HEAD tag ---------->


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
 
 <br>
<br>
<br>
<div class="footer">
   
</div>
</html>