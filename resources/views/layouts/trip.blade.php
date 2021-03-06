<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trip4You</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('pages/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('pages/css/mdb.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('pages/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('pages/css/main.css')}}" rel="stylesheet">
</head>
<body>
        
        <!--Main Navigation-->

    
            @include('includes.navtrips')

            <!--Navbar-->
        @yield('content')

        <!--Footer-->
        <footer class="page-footer font-small warning-color-dark pt-0">
    
            <!-- Social buttons -->
            <div class="warning-color-darkr">
                <div class="container">
                    <!--Grid row-->
                    <div class="row py-4 d-flex align-items-center">
    
                        <!--Grid column-->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                        </div>
                        <!--Grid column-->
    
                        <!--Grid column-->
                        <div class="col-md-6 col-lg-7 text-center text-md-right">
                            <!--Facebook-->
                            <a class="fb-ic ml-0">
                                <i class="fa fa-facebook white-text mr-4"> </i>
                            </a>
                            <!--Twitter-->
                            <a class="tw-ic">
                                <i class="fa fa-twitter white-text mr-4"> </i>
                            </a>
                            <!--Google +-->
                            <a class="gplus-ic">
                                <i class="fa fa-google-plus white-text mr-4"> </i>
                            </a>
                            <!--Linkedin-->
                            <a class="li-ic">
                                <i class="fa fa-linkedin white-text mr-4"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic">
                                <i class="fa fa-instagram white-text mr-lg-4"> </i>
                            </a>
                        </div>
                        <!--Grid column-->
    
                    </div>
                    <!--Grid row-->
                </div>
            </div>
            <!-- Social buttons -->
    
           
    
        </footer>
        <!--/.Footer-->
    
    
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="{{asset('pages/js/jquery-3.3.1.min.js')}}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{asset('pages/js/popper.min.js')}}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{asset('pages/js/bootstrap.min.js')}}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{asset('pages/js/mdb.min.js')}}"></script>
    
        
    
        <!-- Carousel options -->
        <script>
            $('.carousel').carousel({
                interval: 3000,
            })
        </script>
    </body>
    
    </html>
    