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
                            <img src="pages/img/tours/berlin/berlin_1.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-light"></div>
                        </div>
    
                    </div>
                    <!--Grid column-->
    
                    <!--Grid column-->
                    <div class="col-md-5 mb-4 mt-5">
    
                        <h2>Travel to Berlin with us</h2>
                        <hr>
                        <p>The Berlin Tours are a great way to familiarize yourself with Germany’s capital city. Experience the great history and modern day Berlin at the same time</p>
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
                        <img src="pages/img/tours/berlin/berlin_tour1.jpg" class="card-img-top" alt="azores-whales">
                        
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        
                      </div>
    
                      <!--Card content-->
                      <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Discover Berlin Half-Day Walking Tour</h4>
                        <!--Text-->
                        <p class="card-text">Extremely interesting content is presented by truly knowledgeable guides with enthusiasm and energy and, as they themselves are local Berliners, they take pride in helping you have a very authentic Berlin experience</p>
    
                        <p class="card-text">A fair distanced is covered on this free tour but the route and distance between stops means this is very easily manageable and enjoyable while the main sites are covered, including the likes of the Brandenburg gate and Checkpoint Charlie, as well as little-known oddities and anecdotes. An excellent tour by excellent local guides and well-worth doing for a compelling insight to the world city of Design.</p>
    
                        <p class="card-text">This activity includes:</p>
    
                        <p class="card-text">Museum Island - Berlin Cathedral - Friedrich the Great - Infamous Berlin Wall - Einstein and Humboldt University - Story of Berlin buddy bear - Luftwaffe HQ - TV Tower - Reichstag and Tiergarten</p>
                        
    
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
                        <img src="pages/img/tours/berlin/berlin_tour2.jpg" class="card-img-top" alt="">
                        
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                    
                      </div>
    
                      <!--Card content-->
                      <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Brandenburg Gate</h4>
                        <!--Text-->
                        <p class="card-text">Located in no-man's land between East and West Germany during the Cold War, this famous monument, built during the 18th-century reign of Friedrich Wilhelm II, has long been a defining symbol of Berlin and both the city's division and unification.</p>
                        
                        <p class="card-text">The area around the Brandenburg Gate was while the opening of the Berlin Wall 1989 the most intense media coverage. While the existence of the Berlin Wall the Brandenburg Gate was really often a scene of historical events and is today a symbol of changing history of Europe and Germany and also for the European unity and peace.</p>
    
                        <p class="card-text">This activity includes:</p>
    
                        <p class="card-text">Brandenburg Gate - Surroundings of Brandenburg Gate</p>
                        
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
                        <img src="pages/img/tours/berlin/berlin_tour3.jpg" class="card-img-top" alt="">
                        
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        
                      </div>
    
                      <!--Card content-->
                      <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">The Holocaust Memorial</h4>
                        <!--Text-->
                        <p class="card-text">This Free Tour covering Hitler's Third Reich and their gradual domination of the city and beyond is a truly fascinating account of the terror inflicted as part of an incredibly evil regime.</p>
    
                        <p class="card-text">It's something we all know from history books but it's when you stand on the concrete where so many atrocities occurred and hear the tales that the significance and horror of this extreme period of history really strikes you.</p>
    
                        <p class="card-text">This activity includes:</p>
    
                        <p class="card-text">New Synagogue - Old Jewish Cemetery - Nuremberg Laws and Final solution - Night of the Broken Glass - Nazi HQs - Otto Weidt Workshop for the Blind - Resistance movements and Assassination attempts on Hitler's life - Trains to Life - Trains to Death - Nazi rallys and propaganda - Holocaust Memorials</p>
    
    
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
                        <option selected>Discover Berlin Half-Day Walking Tour</option>
                        <option value="1">1-8 August 2018</option>
                        <option value="2">20-27 August 2018</option>
                        
                    </select>
    
                    <br>
    
                    <select class="custom-select custom-select-md" multiple>
                        <option selected>Brandenburg Gate </option>
                        <option value="1">1-8 August 2018</option>
                        <option value="2">20-27 August 2018</option>
                    </select>
    
                    <br>
    
                    <select class="custom-select custom-select-md" multiple >
                        <option selected>The Holocaust Memorial</option>
                        <option value="1">1-8 August 2018</option>
                        <option value="2">20-27 August 2018</option>
                    </select>
    
    
    
    
    
    
    
                    <div class="text-center mt-4">
                        <button class="btn warning-color-dark" type="submit">Book now</button>
                    </div>
    
                </form>
                <!-- Default form register -->
            </div>
       
           @endsection