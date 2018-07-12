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
        @foreach($locations as $i => $location)
            <!-- Card -->
            <div class="card mb-4">
              
              <!--Card image-->
              <div class="view overlay">
                <img class="card-img-top" src="{{asset($location->main_img)}}" alt="Card image cap">
                <a href="#">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
          
              <!--Card content-->
              <div class="card-body">
          
                <!--Title-->
                <h4 class="card-title">{{$location->name}}</h4>
                <!--Text-->
                <p class="card-text">{{$location->getExcerpt()}}</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <a href="{{route ('singleTrip', ['id' => $location->id])}}" class="btn warning-color-dark"> Read more </a>  
              </div>
          
            </div>
            <!-- Card -->
            @if(($i+1)%3 == 0)
          </div>
          <!-- Card deck -->
        
                        </div>
                        <!--Grid row-->
        
                        <div class="row">
        
                        <!-- Card deck -->
        <div class="card-deck">
            @endif
          @endforeach

          
          </div>
          <!-- Card deck -->
        
                        </div>
        
        
                    </section>
                    <!--Section: Examples-->
        
                </div>
        
           @endsection        
        
                
            
            