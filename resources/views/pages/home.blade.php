@extends('layouts.main')
@section('content')

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
                            <h4 class="white-text my-4">We’re always looking to provide new and unique, authentic experiences when you tour the world with us!</h4>

                            {{-- <a href="#readmore" class="btn btn-outline-white">Read more <i class="fa fa-book ml-2"></i> </a> --}}

                            

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

                   

                <!--Grid column-->
                <div class="col-md-7 mb-4">

                    <!--Featured image -->
                    <div class="view overlay z-depth-1-half">
                        <img src="pages/img/alaska.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-light"></div>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 mb-4">

                    <h2> Who are we</h2>
                    <hr>
                    <p>Trip4You is a remote work travel group. We encourage participants coming from a diverse range of backgrounds and careers.These people support, engage and inspire each other – and some become lifelong friends.</p>
                    

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

             <!--Grid row-->
             <div class="row">

                

                <!--Grid column-->
                <div class="col-md-5 mb-4">

                    <h2>How we are working </h2>
                    <hr>
                    <p>You can choose a trip and the appropriate tours with us. We facilitate your work in a foreign country, taking care of logistics. With us, you can accomplish your dream to working remote whilst choosing your time when to work or have the most fun of your life! </p>
                    

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-7 mb-4">

                    <!--Featured image -->
                    <div class="view overlay z-depth-1-half">
                        <img src="pages/img/mountain.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-light"></div>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->


            <hr class="my-5">
            <!--Section: Best Features-->
            <section id="best-features" class="text-center">

               

                <!--Grid row-->
                <div class="row mt-5">

                    <!--Grid column-->
                    <div class="col-md-4 mb-5">
                        <i class="fa fa-camera-retro fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Work Experience</h4>
                        <p class="grey-text">We are there for those who want to escape from 9 to 5 office jobs, but at the same time want to continue working.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-heart fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Happiness</h4>
                        <p class="grey-text"> Following their own dreams, our people are happy and engaged to pursuing a new path.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-bicycle fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Adventure</h4>
                        <p class="grey-text">Join us for the adventure of your life.</p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Best Features-->

            <hr class="my-5">

            <!--Section: Examples-->
            <section id="examples" class="text-center">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Trips and Tours</h2>

                <a href="{{route ('trips')}}" class="btn warning-color-dark"> See more trips</a>
                <!--Grid row-->

                <div class="mt-5"></div>
                <div class="row">

                    <!-- Card deck -->
<div class="card-deck">

    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="pages/img/azores.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Azores</h4>
        <!--Text-->
        <p class="card-text">For in-the-know travellers, the Azores have long represented a beckoning blip on the radar of possible destinations.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <a href="{!! route('singleTrip', ['location' => '1']) !!}"  class="btn warning-color-dark"> Read more </a>  
  
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="pages/img/berlin.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Berlin</h4>
        <!--Text-->
        <p class="card-text">In Berlin, there’s always so much to do, every day of the year, any time of day or night – a sparkling array of events and highlights.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <a href="{!! route('singleTrip', ['location' => '2']) !!}"  class="btn warning-color-dark"> Read more </a>
  
      </div>
  
    </div>
    <!-- Card -->
  
    <!-- Card -->
    <div class="card mb-4">
  
      <!--Card image-->
      <div class="view overlay">
        <img class="card-img-top" src="pages/img/cinque-terre.jpg" alt="Card image cap">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
  
      <!--Card content-->
      <div class="card-body">
  
        <!--Title-->
        <h4 class="card-title">Cinque terre</h4>
        <!--Text-->
        <p class="card-text">The Cinque Terre is one of the most beautiful sections of the Italian Riviera coast, renowned for its UNESCO-listed landscapes.</p>
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <a href="{!! route('singleTrip', ['location' => '3']) !!}"  class="btn warning-color-dark"> Read more </a> 
  
      </div>
  
    </div>
    <!-- Card -->
  
  </div>
  <!-- Card deck -->

                </div>
                <!--Grid row-->

               

                
            <!--Section: Examples-->

            <hr class="my-5">

            <!--Section: Gallery-->
            <section id="gallery">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Blog</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner z-depth-1-half" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="pages/img/india.jpg" alt="First slide">
                                </div>
                                <!--/First slide-->
                                <!--Second slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="pages/img/cape_town.jpg"alt="Second slide">
                                </div>
                                <!--/Second slide-->
                                <!--Third slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="pages/img/croatia.jpg" alt="Third slide">
                                </div>
                                <!--/Third slide-->
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">

                        <!--Excerpt-->
                        <a href="" class="teal-text">
                            <h5 class="pb-1">
                                
                                <strong> Our Stories</strong>
                            </h5>
                        </a>
                        <h4 class="mb-3">
                            <strong>How I found Holi Magical India after living two years in Delhi?</strong>
                        </h4>
                        <p>Almost everything about India is stunning. I was 25 when I decided to move to India and today I still don’t know very well why I wanted to go there so much. One of the scariest and exciting idea ever and it was one of the best things I did in my life. India is a unique place, and the only way a person can get the real vibe of this country is going there.</p>

                        <p>I arrived in India on a Tuesday by 2 in the morning, stepped out of the airport and thought: ‘dear God, what have I done? What was I thinking?’. Yes, rule number 1: India slaps you in the face and that’s exactly what you look for when you consciously decide to move to this country. </p>
                        <p>by
                            <a>
                                <strong>Teresa Santos</strong>
                            </a> July, 2018</p>
                        <a  href="{!! route('singlePost', ['post' => '5']) !!}"  class="btn warning-color-dark">Read more</a>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Gallery-->

            <hr class="my-5">

            <!--Section: Contact-->
            <section id="contact">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-5 col-md-12">

                        <!-- Form contact -->
                        <form class="p-5">


                        <!-- Material input -->
                        <div class="md-form">
                            <i class="fa fa-user prefix"></i>
                            <input type="text" id="inputIconEx2" class="form-control">
                            <label for="inputIconEx2">Your name</label>
                        </div>    

                          <!-- Material input -->
                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="inputIconEx1" class="form-control">
                                <label for="inputIconEx1">E-mail address</label>
                            </div>

                            <!-- Material input -->
                            <div class="md-form">
                                <i class="fa fa-tag prefix"></i>
                                <input type="text" id="inputIconEx3" class="form-control">
                                <label for="inputIconEx3">Subject</label>
                            </div>


                            <!-- Material input -->
                            <div class="md-form">
                                <i class="fa fa-pencil prefix"></i>
                                <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>
                                <label for="inputIconEx4">Your message</label>
                            </div>


                          <div class="text-center mt-4">
                            <button class="btn warning-color-dark">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                          </div>
                        </form>
                        <!-- Form contact -->

                    </div>
                    
                    <div class="col-lg-7 col-md-12">

                        <!--Grid row-->
                        <div class="row text-center">

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-3">

                                <p>
                                    <i class="fa fa-map fa-1x mr-2 grey-text"></i>New York, NY 10012</p>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-3">

                                <p>
                                    <i class="fa fa-building fa-1x mr-2 grey-text"></i>Mon - Fri, 8:00-22:00</p>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-3">

                                <p>
                                    <i class="fa fa-phone fa-1x mr-2 grey-text"></i>+ 01 234 567 89</p>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Google map-->
                        <div id="map-container" class="z-depth-1-half map-container mb-5" style="width: 600px"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12094.573485931924!2d-74.00693927172915!3d40.725866669283846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25988b96f8647%3A0x523992653a20942d!2sNew+York%2C+NY+10012%2C+USA!5e0!3m2!1sen!2scz!4v1531435579660" width="600" height="560" frameborder="0" style="border:0" allowfullscreen></iframe></div>

                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Contact-->

    </div>
</main>
<!--Main layout-->

   @endsection 