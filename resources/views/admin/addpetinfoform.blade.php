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
						Add Pet Information
					</span>
				</div>

				<form method="POST" action="/addpetinformation" enctype="multipart/form-data" class="login100-form validate-form">
                @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Pet Info Title is required">
						<span class="label-input100">Pet Title</span>
						<input class="input100" type="text" name="title" placeholder="Enter Pet Information Title" value="{{ old('title') }}">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Pet Description is required">
						<label for="description" class="label-input100">Pet Info Description</label>
                        <textarea
                    class="border border-gray-200 rounded p-2 w-full input100"
                    name="info_description"
                    rows="10"
                    placeholder="Include behaviours, favourite meals, hobbies, etc"
                   
                >{{old('info_description')}}</textarea>
                
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
                    name="pet_information_image"
                />
               </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Add Pet Information
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