@extends('layouts.trip')
@section('content')
     
   <!--Main layout-->
   <main class="mt-5">

       <!--Main container-->
       <div class="container">

           <!--Grid row-->
           <div class="row">

               <!--Grid column-->
               <div class="col-md-7 mb-4 mt-5">

                   <!--Featured image -->
                   <div class="view overlay z-depth-1-half">
                       <img src="{{asset($location->list_img)}}" class="img-fluid" alt="Azores">
                       <div class="mask rgba-white-light"></div>
                   </div>

               </div>
               <!--Grid column-->

               <!--Grid column-->
               <div class="col-md-5 mb-4 mt-5">

                   <h2>{{$location->subtitle}}</h2>
                   <hr>
                   <p>{{$location->description}}</p>
                   <a href="#registration" class="btn warning-color-dark">Book your tour now</a>


               </div>
               <!--Grid column-->

           </div>
           <!--Grid row-->


           <!--Grid row-->
           <div class="row">
            @foreach($tours as $tour)
             <!--Grid column-->
             <div class="col-lg-4 col-md-12 mb-4">
               
               <!--Card-->
               <div class="card">

                 <!--Card image-->
                 <div class="view overlay">

                   <img src="{{$tour->img_url}}" class="card-img-top" alt="azores-whales">
                   
                     <div class="mask rgba-white-slight waves-effect waves-light"></div>
                   
                 </div>

                 <!--Card content-->
                 <div class="card-body">
                   <!--Title-->
                   <h4 class="card-title">{{$tour->name}}</h4>
                   <!--Text-->
                   <p class="card-text">{{$tour->description}}</p>

                   


                   

                 </div>

               </div>
               <!--/.Card-->
               
             </div>
             <!--Grid column-->
             @endforeach
             

           </div>
           <!--Grid row-->

       </div>
       <!--Main container-->

   </main>
   <!--Main layout-->

   <div class="container">
       <!-- Default form register -->
       <form>
               <p class="h4 text-center mb-4 pt-4 mt-5" id="registration">Book your tour now</p>
       
               <!-- Default input name -->
               <label for="defaultFormRegisterNameEx" class="grey-text">Your name</label>
               <input type="text" id="defaultFormRegisterNameEx" class="form-control">
           
               <br>
           
               <!-- Default input email -->
               <label for="defaultFormRegisterEmailEx" class="grey-text">Your email</label>
               <input type="email" id="defaultFormRegisterEmailEx" class="form-control">
           
               <br>
           
               <!-- Default input email -->
               <label for="defaultFormRegisterConfirmEx" class="grey-text">Confirm your email</label>
               <input type="email" id="defaultFormRegisterConfirmEx" class="form-control">
           
               <br>
           
               <!-- Default input password -->
               <label for="defaultFormRegisterPasswordEx" class="grey-text">Your password</label>
               <input type="password" id="defaultFormRegisterPasswordEx" class="form-control">
           

               <br>

               <label for="defaultFormRegisterPasswordEx" class="grey-text">Choose your Tour </label>
                 
                @foreach($tours as $tour)
               <select class="custom-select custom-select-md" multiple>
                   <option selected>{{$tour->name}}</option>
                   @foreach($tour->events as $event)
                   <option value="{{$event->id}}">{{$event->getDateFrom()}}</option>
                   @endforeach 

               </select>
               <br>
               <br>
               <br>
                @endforeach
              


               <div class="text-center mt-4">
                   <button class="btn warning-color-dark" type="submit">Book now</button>
               </div>

           </form>
           <!-- Default form register -->
       </div>  
        

@endsection
