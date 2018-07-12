@extends('layouts.trip')
@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card card-image" style="background-image: url(pages/img/travel2.jpg);">
                <div class="text-white text-center py-5 px-4 my-5">
                    <div>
                        <h1 class="card-title pt-3 mb-5 font-bold"><strong>Travel the World with Us</strong></h1>
                        <p class="mx-5 mb-5">Trip4You is the a remote work travel group. We encourage participants coming from a diverse range of backgrounds and careers.These people support, engage and inspire each other – and some become lifelong friends.</p>
                        <a href="#readmore" class="btn btn-outline-white btn-rounded"><i class="fa fa-clone left"></i> View trips</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container"> 
        
            
    <section id="examples" class="text-center">
        
    <!-- Heading -->
    <h2 class="mb-5 font-weight-bold mt-5" id="readmore">Trips and Tours</h2>
        
    <!--Grid row-->
        <div class="row">
        
    <!-- Card deck -->
        <div class="card-deck">
        
            <!-- Card -->
            <div class="card mb-4">
          
              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="pages/img/azores.jpg" alt="Card image cap">
                <a href="#">
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
                <a href="{{route ('azores')}}" class="btn warning-color-dark"> Read more </a>  
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
                <p class="card-text"> In Berlin, there’s always so much to do, every day of the year, any time of day or night – a sparkling array of events and highlights.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <a href="{{route ('berlin')}}" class="btn warning-color-dark"> Read more </a>  
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
                <a href="{{route ('cinque')}}"  class="btn warning-color-dark"> Read more </a>      </div>
          
            </div>
            <!-- Card -->
          
          </div>
          <!-- Card deck -->
        
                        </div>
                        <!--Grid row-->
        
                        <div class="row">
        
                        <!-- Card deck -->
        <div class="card-deck">
        
            <!-- Card -->
            <div class="card mb-4">
          
              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="pages/img/istanbul.jpg" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
          
              <!--Card content-->
              <div class="card-body">
          
                <!--Title-->
                <h4 class="card-title">Istanbul</h4>
                <!--Text-->
                <p class="card-text">Istanbul is a beautiful city, but it pays to know where to look. Join these tours to be shown the unmistakable icons. </p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                
                <a href="{{route ('istanbul')}}"  class="btn warning-color-dark"> Read more </a>
              </div>
          
            </div>
            <!-- Card -->
          
            <!-- Card -->
            <div class="card mb-4">
          
              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="pages/img/prague.jpg" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
          
              <!--Card content-->
              <div class="card-body">
          
                <!--Title-->
                <h4 class="card-title">Prague</h4>
                <!--Text-->
                <p class="card-text"> How much do you know about the Czech capital? On the tours in Prague you will learn everything about the most important places and sights.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <a href="{{route ('prague')}}" class="btn warning-color-dark"> Read more </a>
          
              </div>
          
            </div>
            <!-- Card -->
          
            <!-- Card -->
            <div class="card mb-4">
          
              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="pages/img/vienna.jpg" alt="Card image cap">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
          
              <!--Card content-->
              <div class="card-body">
          
                <!--Title-->
                <h4 class="card-title">Vienna</h4>
                <!--Text-->
                <p class="card-text">The Vienna Tours are a great way to familiarize yourself with Austria’s capital and largest city.Experience the great Vienna.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <a href="{{route ('vienna')}}" class="btn warning-color-dark"> Read more </a>
          
              </div>
          
            </div>
            <!-- Card -->
          
          </div>
          <!-- Card deck -->
        
                        </div>
        
        
                    </section>
                    <!--Section: Examples-->
        
                </div>
        
           @endsection        
        
                
            
            