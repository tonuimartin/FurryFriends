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

				<form method="POST" action="/addedsource" enctype="multipart/form-data" class="login100-form validate-form">
                @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Source Name is required">
						<span class="label-input100">Source Name</span>
						<input class="input100" type="text" name="source_name" placeholder="Enter SourceName" value="{{ old('source_name') }}">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Source Location is required">
						<span class="label-input100">Source Location</span>
						<input class="input100" type="text" name="location" placeholder="Enter Source Location" value="{{ old('location') }}">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Source Type is required">
                        
						<label for="source_type" class="label-input100">Source Type</label>
                        <select class="border border-gray-200 rounded p-2 w-full input100" name="source_type"
                    value="{{ old('source_type') }}">
                    <option value="">-select-</option>
                    <option value="rescue center">Rescue Center</option>
                    <option value="breeder">Breeder</option>
                   
                </select>

						<!-- <input class="input100" type="text" name="pet_type" placeholder="Enter Pet Type">
						<span class="focus-input100"></span> -->
					</div>

                    <!-- <div class="wrap-input100 validate-input m-b-26" data-validate="Pet Breed is required">
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

						<input class="input100" type="text" name="pet_type" placeholder="Enter Pet Type">
						<span class="focus-input100"></span> 
					</div> -->

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Source Description is required">
						<label for="source_description" class="label-input100">Source Description</label>
                        <textarea
                    class="border border-gray-200 rounded p-2 w-full input100"
                    name="source_description"
                    rows="10"
                    placeholder="Include behaviours, favourite meals, hobbies, etc"
                   
                >{{old('source_description')}}</textarea>
                
						<!-- <input class="input100" type="text" name="description" placeholder="Enter Pet Description"> -->
						<span class="focus-input100"></span> 
					</div>

                <div class="wrap-input100 validate-input m-b-26" data-validate="Source Certification Image is required">
                <label for="source_certification" class="label-input100">
                   Source Certification
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full input100"
                    name="source_certification"
                />
               </div>

			   <div class="wrap-input100 validate-input m-b-26" data-validate="Source Image is required">
                <label for="source_image" class="label-input100">
                   Source Image
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full input100"
                    name="source_image"
                />
               </div>

			    <!-- Email Address -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
            <label for="email"  class="label-input100"> Email </label>
            <input id="email" class="input100" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

			    <!-- Password -->
				<div class="wrap-input100 validate-input m-b-26" data-validate="Password is required">
				<label for="password" class="label-input100">
                   Password
                </label>

				<input class="input100" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

        </div>

        <!-- Confirm Password -->
		<div class="wrap-input100 validate-input m-b-26" data-validate="Confirm Password is required">
           <label for="password_confirmation" class="label-input100">
                   Confirm Password
                </label>

				<input class="input100" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Submit Application
						</button>
					</div>
					@include('layouts.message')
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