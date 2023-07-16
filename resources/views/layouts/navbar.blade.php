 <!doctype html>
 <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('imports/nav_bar/assets/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('imports/nav_bar/assets/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/carticon.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('imports/nav_bar/assets/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('imports/nav_bar/assets/css/style.css')}}">

    <title>Furry Friends</title>
  </head>
  <body>


    
      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="/dashboard" class="text-black"><span class="text-primary">FURRY FRIENDS</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="/dashboard" class="nav-link">Home</a></li>
                 
                  <li><a href="/petinformation" class="nav-link">Pet Information</a></li>

                  
                 
                  <li class="has-children">
                    <a href="/petsadoption" class="nav-link">Pets for Adoption</a>
                    <ul class="dropdown arrow-top">
                    
</ul></li>


                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
                  <li><a href="#services-section" class="nav-link">Services</a></li>
<li>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="dropdown">
                <button type="button" class="btn btn-primary" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
 
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $pet_id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $pet_id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <!-- <img src="{{ asset('img') }}/{{ $details['pet_image'] }}" /> -->
                                    <img src="{{ $details['pet_image'] ? asset('storage/' . $details['pet_image']) : asset('images/no-image.jpg') }}" alt="Pet Image">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['pet_name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                        <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</li>
                  <li class="has-children">
                    <a href="#about-section" class="nav-link"> <div>{{ Auth::user()->name }}</div></a>

                    <ul class="dropdown arrow-top">

                      <li><x-responsive-nav-link class="nav-link"
                         :href="route('profile.edit')">
                            {{ __('Profile') }}                      
                    </x-responsive-nav-link>
                   </li>
                      <li><form method="POST" action="{{ route('logout') }}" class="nav-link" >
                            @csrf
                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                         </a>
                        </form>
                      </li>

                    
                       <li class="has-children">
                        <a href="#">More Links</a>
                        <ul class="dropdown">
                          <li><a href="#">Menu One</a></li>
                          <li><a href="#">Menu Two</a></li>
                          <li><a href="#">Menu Three</a></li>
                        </ul>
                    </li>
                  </ul>
                  </li>

                 
                
                   
                  </ul>              
                  </nav>
                </div>

             <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
             
              </div>             
             </div>

        </header>

    <!-- <div class="hero" style="background-image: url({{asset('imports/nav_bar/assets/images/hero_1.jpg')}});"></div> -->
  


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
  
</html>