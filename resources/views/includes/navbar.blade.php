<!--Main Navigation-->
<header>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark warning-color-dark fixed-top scrolling-navbar">
        <div class="container">

            <!-- Navbar brand -->
            <a class="navbar-brand" href="{{route ('home')}}">Trip4You</a>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('trips')}}">Trips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route ('blog')}}">Blog</a>
                    </li>
                
                    @if(Auth::check())
                    <li class="nav-item">
                     <a class="nav-link" href="{{route ('dashboard')}}">Dashboard</a>
                   </li>

                <li class="nav-item">
                <form method="POST" id="logout-form" action="{{route('logout')}}">@csrf</form>
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
                <!-- Links -->

            </div>
            <!-- Collapsible content -->

        </div>
    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div id="intro" class="view">

        <div class="mask rgba-black-light">

            <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                <div class="row d-flex justify-content-center text-center">

                    <div class="col-md-10">

                        <!-- Heading -->
                        <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Trip4You</h2>

                        <!-- Divider -->
                        <hr class="hr-light">

                        <!-- Description -->
                        <h4 class="white-text my-4">We’re always looking to provide new and unique, authentic experiences.</h4>

                        <a href="#readmore" class="btn btn-outline-white">Read more <i class="fa fa-book ml-2"></i> </a>

                        

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!--/.Mask-->

</header>
<!--Main Navigation-->





<main class="mt-5" id="readmore">
    <div class="container">
        <!--Grid row-->
        <div class="row mt-5">