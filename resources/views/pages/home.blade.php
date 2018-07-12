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
                    <p>Trip4You is the a remote work travel group. We encourage participants coming from a diverse range of backgrounds and careers.These people support, engage and inspire each other – and some become lifelong friends.</p>
                    

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
                    <p>You can choose a trip and the appropriate tours with us. We facilitate your work in a foreign country, taking care of logistics. With us, you can accomplish your dream to working remote. </p>
                    

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
        <a href="azores.html" class="btn warning-color-dark"> Read more </a>  
  
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
        <a href="berlin.html" class="btn warning-color-dark"> Read more </a>
  
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
        <a href="cinqueterre.html" class="btn warning-color-dark"> Read more </a> 
  
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
                            <h6 class="pb-1">
                                
                                <strong> Travelling</strong>
                            </h6>
                        </a>
                        <h4 class="mb-3">
                            <strong>This is title of the news</strong>
                        </h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
                            debitis aut rerum.</p>

                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
                            debitis aut rerum.</p>
                        <p>by
                            <a>
                                <strong>John Doe</strong>
                            </a> July, 2018</p>
                        <a class="btn warning-color-dark">Read more</a>

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
                    <!--Grid column-->

                    <!--Grid column-->
                    


 <!--Modal: modalRelatedContent-->
<div class="modal fade right" id="modalRelatedContent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
data-backdrop="false">
<div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
        <!--Header-->
        <div class="modal-header warning-color-dark">
            <p class="heading">Related article</p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
        </div>

        <!--Body-->
        <div class="modal-body">

            <div class="row">
                <div class="col-5">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(55).jpg" class="img-fluid" alt="">
                </div>

                <div class="col-7">
                    <p><strong>My travel to paradise</strong></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit [...]</p>
                    <button type="button" class="btn warning-color-dark btn-md">Read more</button>

                </div>
            </div>
        </div>
    </div>
    <!--/.Content-->
</div>
</div>
<!--Modal: modalRelatedContent-->

                <!--Grid row-->

            
            <!--Section: Contact-->

        </div>
    </main>
    
     

   @endsection 