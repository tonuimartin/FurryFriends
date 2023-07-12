<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="{{asset('css/sourceapplicants.css')}}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<div class="container">
  <div class="row">
    <div class="col-12">
		<table class="table table-image">
		  <thead>
		    <tr>
            
            <th scope="col">Source Name </th>
            <th scope="col">Location</th>
            <th scope="col">Source Type</th>
            <th scope="col">Source Description</th>
            <th scope="col"> Source Image </th>
            <th scope="col"> Source Certification </th>
            <th scope="col"></th>
            <th scope="col"></th>
		    </tr>
		  </thead>
          @foreach ($sourceapplicants as $sourceapplicant)
		  <tbody>
		    <tr>
		     
		       
		    <td>{{ $sourceapplicant->source_name }}</td>
            <td>{{ $sourceapplicant->location }}</td>
            <td>{{ $sourceapplicant->source_type }}</td>            
            <td>{{ $sourceapplicant->source_description }}</td>
            <td class="w-25">
                 <img class="d-block w-100" src="{{ $sourceapplicant->source_image ? asset('storage/' . $sourceapplicant->source_image) : asset('images/no-image.jpg') }}"alt="Source Image" class="img-fluid img-thumbnail" >
			      <!-- <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg"  alt="Sheep"> -->
		      </td>
              <td class="w-25">
                 <img class="d-block w-100" src="{{ $sourceapplicant->source_certification ? asset('storage/' . $sourceapplicant->source_certification) : asset('images/no-image.jpg') }}"alt="Source Certification" class="img-fluid img-thumbnail" >
			      <!-- <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/sheep-3.jpg"  alt="Sheep"> -->
		      </td> 
              <td class="w-25">
              <a href="/source/{{ $sourceapplicant->id }}/accept" class="btn btn-primary btn-sm">Accept</a>
</td>
<td class="w-25">
          <form method="POST" action="/source/{{ $sourceapplicant->id }}/deny">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Are you sure you want to delete this pet record?')"
                    class="text-red-500"><i class="fa-solid fa-trash"></i> Deny</button>
            </form>
</td>
		    </tr>
		    @endforeach
    </div>
  </div>
</div>
</html>