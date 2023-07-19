<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Pet</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('imports/addpet/assets/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('imports/addpet/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('imports/addpet/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('imports/addpet/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('imports/addpet/assets/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('imports/addpet/assets/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('imports/addpet/assets/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('imports/addpet/assets/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('imports/addpet/assets/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('imports/addpet/assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('imports/addpet/assets/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{asset('imports/addpet/assets/images/bg-01.jpg')}});">
					<span class="login100-form-title-1">
						Add Pet
					</span>
				</div>

				<form method="POST" action="/addedpet" enctype="multipart/form-data" class="login100-form validate-form">
                @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Pet Name is required">
						<span class="label-input100">Pet Name</span>
						<input class="input100" type="text" name="pet_name" placeholder="Enter Pet Name" value="{{ old('pet_name') }}">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Pet Age is required">
						<span class="label-input100">Pet Age</span>
						<input class="input100" type="number" name="age" placeholder="Enter Pet Age" value="{{ old('age') }}">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Pet Gender is required">
                        
						<label for="pet_type" class="label-input100">Pet Gender</label>
                        <select class="border border-gray-200 rounded p-2 w-full input100" name="pet_gender"
                    value="{{ old('pet_gender') }}">
                    <option value="">-select-</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                   
                </select>

						<!-- <input class="input100" type="text" name="pet_type" placeholder="Enter Pet Type">
						<span class="focus-input100"></span> -->
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Pet Breed is required">
						<span class="label-input100">Pet Breed</span>
						<input class="input100" type="text" name="breed" placeholder="Enter Pet Breed" value="{{ old('breed') }}">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Pet Type is required">
                        
						<label for="pet_type" class="label-input100">Pet Type</label>
                        <select class="border border-gray-200 rounded p-2 w-full input100" name="pet_type"
                    value="{{ old('pet_type') }}">
                    <option value="">-select-</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                   
                </select>

					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Pet price is required">
						<span class="label-input100">Pet Price</span>
						<input class="input100" type="number" name="price" placeholder="Enter Pet Price" value="{{ old('price') }}">
						<span class="focus-input100"></span>
					</div>

					<input type="hidden" name="status" value="available">

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Pet Description is required">
						<label for="description" class="label-input100">Pet Description</label>
                        <textarea
                    class="border border-gray-200 rounded p-2 w-full input100"
                    name="description"
                    rows="10"
                    placeholder="Include behaviours, favourite meals, hobbies, etc"
                   
                >{{old('description')}}</textarea>
                
						<!-- <input class="input100" type="text" name="description" placeholder="Enter Pet Description"> -->
						<span class="focus-input100"></span> 
					</div>

                     <div class="wrap-input100 validate-input m-b-26" data-validate="Pet Image is required">
                <label for="pet_image" class="label-input100">
                   Pet Image
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full input100"
                    name="pet_image"
                />
               </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Add Pet
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="imports/addpet/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="imports/addpet/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="imports/addpet/assets/vendor/bootstrap/js/popper.js"></script>
	<script src="imports/addpet/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="imports/addpet/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="imports/addpet/assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="imports/addpet/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="imports/addpet/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="imports/addpet/assets/js/main.js"></script>

</body>
</html>