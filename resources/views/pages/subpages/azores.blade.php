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
                       <img src="pages/img/tours/azores/azores_picture.jpg" class="img-fluid" alt="Azores">
                       <div class="mask rgba-white-light"></div>
                   </div>

               </div>
               <!--Grid column-->

               <!--Grid column-->
               <div class="col-md-5 mb-4 mt-5">

                   <h2>Travel to Azores with us</h2>
                   <hr>
                   <p>For in-the-know travellers, the Azores have long represented a beckoning blip on the radar of possible destinations. Recognition from Unesco and other organisations has helped that blip to pulse more brightly over the years.</p>

                   <p>But most people still know little, if anything, about this far-flung archipelago in the middle of the Atlantic. And yet it is hard to imagine a place better suited to nature lovers, fans of adventure sports, or anyone looking for a beacon of sustainability.</p>
                   <a href="#registration" class="btn warning-color-dark">Book your tour now</a>


               </div>
               <!--Grid column-->

           </div>
           <!--Grid row-->


           <!--Grid row-->
           <div class="row">

             <!--Grid column-->
             <div class="col-lg-4 col-md-12 mb-4">

               <!--Card-->
               <div class="card">

                 <!--Card image-->
                 <div class="view overlay">
                   <img src="pages/img/tours/azores/whales.jpg" class="card-img-top" alt="azores-whales">
                   
                     <div class="mask rgba-white-slight waves-effect waves-light"></div>
                   
                 </div>

                 <!--Card content-->
                 <div class="card-body">
                   <!--Title-->
                   <h4 class="card-title">Among Whales and Volcanoes Full Day Tour</h4>
                   <!--Text-->
                   <p class="card-text">Combine a whale-watching trip with a visit to an active volcano during this 8-hour tour of the Azores from Ponta Delgada. Travel up the coastline to Cadeira Velha and Lagoa do Fogo, looking for marine wildlife.</p>

                   <p class="card-text">Visit an active volcano to learn about its history and current form. Buffet lunch included.</p>

                   <p class="card-text">Find your way to the Ponta Delgada Marina, where you will meet your guide. After a short orientation and safety briefing, board a boat and set out along the coastline.</p>


                   

                 </div>

               </div>
               <!--/.Card-->

             </div>
             <!--Grid column-->

             <!--Grid column-->
             <div class="col-lg-4 col-md-6 mb-4">

               <!--Card-->
               <div class="card">

                 <!--Card image-->
                 <div class="view overlay">
                   <img src="pages/img/tours/azores/canoeing.jpg" class="card-img-top" alt="">
               
                     <div class="mask rgba-white-slight waves-effect waves-light"></div>
                  
                 </div>

                 <!--Card content-->
                 <div class="card-body">
                   <!--Title-->
                   <h4 class="card-title">Azores Canyoning and Thermal Baths Tour</h4>
                   <!--Text-->
                   <p class="card-text">A driving tour is one way to admire the Azores’landscape, but for real insight, explore the scenery with a canyoning tour of the region’s rocks, waterfalls, and forest.</p>
                   
                   <p class="card-text"> Enjoy an intimate experience of nature while benefiting from the instruction of a professional guide.</p>

                   <p class="card-text">Begin your day with pickup from your Ponta Delgada hotel. Board your transport and admire the scenery outside as you head to your canyoning departure point at either Parque dos Caldeirões or Salto do Cabrito.</p>

                   
                 </div>

               </div>
               <!--/.Card-->

             </div>
             <!--Grid column-->

             <!--Grid column-->
             <div class="col-lg-4 col-md-6 mb-4">

               <!--Card-->
               <div class="card">

                 <!--Card image-->
                 <div class="view overlay">
                   <img src="pages/img/tours/azores/diving.jpg" class="card-img-top" alt="">
                   
                     <div class="mask rgba-white-slight waves-effect waves-light"></div>
                  
                 </div>

                 <!--Card content-->
                 <div class="card-body">
                   <!--Title-->
                   <h4 class="card-title">Azores Diving</h4>
                   <!--Text-->
                   <p class="card-text">With warm water and excellent visibility, the Azorean sea offers truly diverse animal and plant life, in addition to beautiful and unusal rock formations, such as cave and arches. Without a doubt, diving is a unique and enjoyable way of exploring the Azores.</p>
                   <p class="card-text">We have easy access to all of the top diving sites in São Miguel. Our highly qualified, experienced team and our modern equipement guarantee a safe and unforgettable experience!</p>
                 </div>

               </div>
               <!--/.Card-->

             </div>
             <!--Grid column-->

           </div>
           <!--Grid row-->

       </div>
       <!--Main container-->

   </main>
   <!--Main layout-->

   {{--  <div class="container">
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
                 

               <select class="custom-select custom-select-md" multiple>
                   <option selected>Among Whales and Volcanoes Tour</option>
                   <option value="1">9-16 July 2018</option>
                   <option value="2"> 23-30 July 2018</option>
               </select>

               <br>
               <br>
               <br>

               <select class="custom-select custom-select-md" multiple >
                   <option selected>Azores Canyoning and Thermal Baths Tour </option>
                   <option value="1">9-16 July 2018</option>
                   <option value="2"> 23-30 July 2018</option>
               </select>

               <br>
               <br>
               <br>

               <select class="custom-select custom-select-md" multiple >
                   <option selected>Azores Diving</option>
                   <option value="1">9-16 July 2018</option>
                   <option value="2"> 23-30 July 2018</option>
               </select>


               <div class="text-center mt-4">
                   <button class="btn warning-color-dark" type="submit">Book now</button>
               </div>

           </form>
           <!-- Default form register -->
       </div>  --}}
      

@endsection






       
   