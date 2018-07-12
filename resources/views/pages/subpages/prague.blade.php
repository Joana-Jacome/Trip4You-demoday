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
                            <img src="pages/img/tours/prague/prague_1.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-light"></div>
                        </div>
    
                    </div>
                    <!--Grid column-->
    
                    <!--Grid column-->
                    <div class="col-md-5 mb-4 mt-5">
    
                        <h2>Visit Prague with us</h2>
                        <hr>
                        <p>How much do you know about the Czech capital? On our tours in Prague you will learn everything about the most important places and sights of the town as well as Czech culture and traditions. </p>
                        <a href="#registration" class="btn warning-color-dark">Book your tour now!</a>
    
    
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
                        <img src="pages/img/tours/prague/prague_tour1.jpg" class="card-img-top" alt="azores-whales">
                        
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                       
                      </div>
    
                      <!--Card content-->
                      <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Small Group Prague City Walking Tour</h4>
                        <!--Text-->
                        <p class="card-text">We will walk through the beautiful streets of Prague and show you the hidden secrets that usually you wouldn't find on guide books. You can join this tour  in English or in Spanish language from Old Town Square!</p>
    
                        <p class="card-text">This activity includes:</p>
    
                        <p class="card-text">Old Town Square - Franz Kafka - The Jewish cemetery - Karolinum - Wenceslas square - Pinkas Synagogue - House of Black Madonna - And much more!</p>
    
    
                        
    
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
                        <img src="pages/img/tours/prague/prague_tour2.jpg" class="card-img-top" alt="">
                        
                       
                      </div>
    
                      <!--Card content-->
                      <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Prague Castle Walking Tour</h4>
                        <!--Text-->
                        <p class="card-text">Come explore the world’s largest Medieval castle with us on our Castle Tour. At 70,000 meters in size, this castle has an extensive ton of captivating history, an endless amount of beautiful rooms and unforgettable scenery.</p>
                        
                        <p class="card-text"> In use for the last 11 centuries, it’s surely a shame to miss out on this Medieval masterpiece! Discover royal secrets, see the mysterious Golden Lane and absorb the spirit of old Prague on our  tour!</p>
    
                        <p class="card-text"> This activity includes:</p>
    
                        <p class="card-text">St.Vitus Cathedral - The Golden Lane - Charles Bridge - Queen Anne’s Summer Palace - The Singing Fountain - Ball game hall - Schwarzenberg's Palace - Old Royal Palace - St.George Basilica</p>
    
                        
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
                        <img src="pages/img/tours/prague/prague_tour3.jpg" class="card-img-top" alt="">
                       
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        
                      </div>
    
                      <!--Card content-->
                      <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Prague Night Tour and River Vltava Dinner Cruise</h4>
                        <!--Text-->
                        <p class="card-text">If you happen to find yourself in the situation of being without a plan for the evening in Prague, then perhaps this evening tour on a boat might exactly be your solution! Starting with a nice bus ride towards a floating restaurant, this three-hour long cruise offers you tasty dinner, live music and lots of sightseeing.</p>
                        <p class="card-text">You will enjoy a guide who tells you all about the stunning monuments on both bank of the Vltava River as you ride along it.</p>
                        <p class="card-text">The boat includes a bar with wide selections of alcoholic and non-alcoholic beverages and humble servers that will gladly help you out on call. After the boat ride you will ride through the most spectacular spots of the New Town, the Old Town and the Jewish Quarter.</p>
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
                      
    
                    <select class="custom-select custom-select-md" multiple>
                        <option selected>Small Group Prague City Walking Tour</option>
                        <option value="1">17-23 September 2018</option>
                        <option value="2">8-14 Octomber 2018</option>
                    </select>
    
                    <br>
    
                    <select class="custom-select custom-select-md" multiple >
                        <option selected>Prague Castle Walking Tour</option>
                        <option value="1">17-23 September 2018</option>
                        <option value="2">8-14 Octomber 2018</option>
                    </select>
    
                    <br>
    
                    <select class="custom-select custom-select-md" multiple >
                        <option selected>Prague Night Tour and River Vltava Dinner Cruise</option>
                        <option value="1">17-23 September 2018</option>
                        <option value="2">8-14 Octomber 2018</option>
                    </select>
    
                    <div class="text-center mt-4">
                        <button class="btn warning-color-dark" type="submit">Book now</button>
                    </div>
    
                </form>
                <!-- Default form register -->
            </div>
       
    
@endsection
        