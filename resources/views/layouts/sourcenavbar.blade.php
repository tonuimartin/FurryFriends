<!doctype html>
 <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('imports/nav_bar/assets/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('imports/nav_bar/assets/css/owl.carousel.min.css')}}">

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
                  <li><a href="/source_dashboard" class="nav-link">Home</a></li>
                 
                  <li><a href="/addpets" class="nav-link">Add Pets</a></li>

                  
                 
                  <li class="has-children">
                    <a href="/displaypets" class="nav-link">Display My Pets</a>
                    <ul class="dropdown arrow-top">
                    <li><a href="/displaydogs" class="nav-link">Dogs</a></li>
                    <li><a href="/displaycats" class="nav-link">Cats</a></li>
</ul></li>


                  <li><a href="#services-section" class="nav-link">Adoption Requests</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
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
        @include('layouts.message')
    <!-- <div class="hero" style="background-image: url({{asset('imports/nav_bar/assets/images/hero_1.jpg')}});"></div> -->
  

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>