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

    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">	
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>	
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
    document.getElementById("heart").onclick = function(){
        document.querySelector(".fa-gratipay").style.color = "#E74C3C";
    };
});
</script>
<link rel="stylesheet" href="{{asset('css/displaycards2.css')}}">

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

    @foreach ($pets as $pet)
    <div class="container">
        <h1>News Card</h1>
        <div class="cardcontainer">
            <div class="photo">
            <img class="d-block w-100" src="{{ $pet->pet_image ? asset('storage/' . $pet->pet_image) : asset('images/no-image.jpg') }}"alt="Pet Image">
                <!-- <img src="https://images.pexels.com/photos/2346006/pexels-photo-2346006.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=1&w=500"> -->
                <div class="photos">Photos</div>
            </div>
            <div class="content">
                <p class="txt4">City Lights In Newyork</p>
                <p class="txt5">A city that never sleeps</p>
                <p class="txt2">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
            </div>
            <div class="footer">
                <p><a class="waves-effect waves-light btn" href="#">Read More</a><a id="heart"><span class="like"><i class="fab fa-gratipay"></i>Like</span></a></p>
                <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span class="comments"><i class="fas fa-comments"></i>45 Comments</span></p>
            </div>
        </div>
    </div>
    @endforeach


  </body>
</html>