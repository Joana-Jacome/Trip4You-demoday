<!--Main Navigation-->


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
                <!-- Links -->

            </div>
            <!-- Collapsible content -->

        </div>
    </nav>
    <!--/.Navbar-->

    


<!--Main Navigation-->





