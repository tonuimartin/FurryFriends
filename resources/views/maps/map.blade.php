<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Distances btn two cities App</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="{{asset('imports/maps/map.css')}}" rel="stylesheet" />
</head>
<header>
@include('layouts.navbar')
</header>


<body>

    <div class="container">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="from"></label>
                <input type="text" id="from" placeholder="{{ $location }}" class="form-control" readonly value="{{ $location }}">

            </div>
            <div class="form-group">

                <label for="to"></label>
                <input type="text" id="to" placeholder="Destination" class="form-control">

            </div>

        </form>

        <div class="form-group">
            <button class="btn btn-info btn-lg" onclick="calcRoute();">Calculate</button>
        </div>
    </div>
    <div class="container-fluid">
        <div id="output">

        </div>
       
        <div id="totalOutput"></div>
        <div id="googleMap">

        </div>
        <button class="btn btn-info btn-lg" onclick="redirectToNextPage();">Pay with Mpesa</button>

    </div>


    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANjPez87bBOVMnOdY4d2v1a3wi0wmzCXE&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('imports/maps/main.js')}}"></script>
    <script>
    var totalValue = {{ $total }};
    var source_id = {{ $source_id[0] }};
    var pet_id = {{ $pet_id[0] }};
</script>
</body>

</html>