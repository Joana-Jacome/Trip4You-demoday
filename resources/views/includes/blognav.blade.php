<!--Main Navigation-->
<header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark warning-color-dark  fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route ('home')}}"><strong>Trip4You</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route ('trips')}}">Trips <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('blog')}}">Blog</a>
                    </li>
                    @if(Auth::check())
                    <li class="nav-item">
                     <a class="nav-link" href="{{route ('dashboard')}}">Dashboard</a>
                   </li>
                   <li class="nav-item">
                        <form class="none" method="POST" id="logout-form" action="{{route('logout')}}">@csrf</form>
                        <a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit();" >Logout</a>
                      </li>
            
                       @else
                       <li class="nav-item">
                        <a class="nav-link" href="{{route ('login')}}">Login</a>
                      </li>
            
                      <li class="nav-item">
                        <a class="nav-link" href="{{route ('register')}}">Register</a>
                      </li>
            
            
            
                       @endif
                </ul>
                
            </div>
        </div>
    </nav>

    <!-- Intro Section -->
    <div class="view hm-black-light  h-100 jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url(pages/img/lake2.jpg);">
        <div class="full-bg-img">
            <div class="container flex-center">
                <div class="row pt-5 mt-3">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h4 class="h1-reponsive white-text text-uppercase font-weight-bold mb-3 wow fadeInDown" data-wow-delay="0.3s"><strong>Adventures & Stories</strong></h4>
                            <hr class="hr-light mt-4 wow fadeInDown" data-wow-delay="0.4s">
                            <h5 class="text-uppercase mb-5 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>People talking about travelling and overcoming fears</strong></h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->