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
                            <img src="pages/img/tours/vienna/vienna_1.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-light"></div>
                        </div>
    
                    </div>
                    <!--Grid column-->
    
                    <!--Grid column-->
                    <div class="col-md-5 mb-4 mt-5">
    
                        <h2>Travel to Vienna with us</h2>
                        <hr>
                        <p>The Vienna Tours are a great way to familiarize yourself with Austria’s capital and largest city. Experience the great history and modern day Vienna at the same time</p>
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
                        <img src="pages/img/tours/vienna/vienna_tour1.jpg" class="card-img-top" alt="azores-whales">
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                      </div>
    
                      <!--Card content-->
                      <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Small-Group Vienna Highlights Walking Tour</h4>
                        <!--Text-->
                        <p class="card-text"> The tour covers famous Viennese attractions, the most influential historical sights and delves into stories of past wars, triumphs and tragedies.</p>
    
                        <p class="card-text">Meet other travelers and discover Vienna’s history from its vast musical influences, through the dark Nazi era and its beginnings as a Celtic and roman settlement.</p>
    
                        <p class="card-text">This activity includes:</p>
    
                        <p class="card-text">St. Stephens - Imperial Castle Hofburg (outside) - fun facts - Austria-Hungary Kingdom - History - State Opera House - Heroes square - Heldenplatz - English speaking local Guide - licensed guide - locals</p>
                        
    
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
                        <img src="pages/img/tours/vienna/vienna_tour2.jpg" class="card-img-top" alt="">
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                      </div>
    
                      <!--Card content-->
                      <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Historic Center of Vienna</h4>
                        <!--Text-->
                        <p class="card-text">By visiting Vienna, with its imperial history and at the same time exciting contemporary museums as well as lively eating and nightlife scenes, you get to experience one of the top cities in the world.</p>
                        
                        <p class="card-text">Besides exploring quiet places, you can snap photos of incredible buildings and monuments which have stood the test of time while our educated and entertaining guides tell you all the inside stories you won’t find in your average history book. You will see the Imperial Castle of Hofburg, Heroes Place, Michaeler Square, Graben, St. Stephans Cathedrale, Mozart House, Jewish Quarter and so much more.</p>
    
                        <p class="card-text">This activity includes:</p>
    
                        <p class="card-text">English speaking local guide - Imperial Castle Hofburg (outside) - St. Stephans Cathedrale (outside) - Heroes square - Heldenplatz - Austria-Hungary Kingdom - History</p>
                        
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
                        <img src="pages/img/tours/vienna/vienna_tour3.jpg" class="card-img-top" alt="">
                          <div class="mask rgba-white-slight waves-effect waves-light"></div>
                      </div>
    
                      <!--Card content-->
                      <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Small Group Bike Tour around Vienna</h4>
                        <!--Text-->
                        <p class="card-text">Meet a local, an „echten Wiener“, who shows you Vienna with our Bike Tour around Vienna! Discover with us the 7th district, the so called Bobo or Hipster district, drink a „Spritzer“ at a hidden, cozy bar or a coffee at a traditional Viennese coffeehouse in the old town! Enjoy the music at the Danube Canal or chill with us on the Danube Island and get to know the real life of the Viennese youth!</p>
    
                        <p class="card-text">Be a local for one day with us. Nothing common, that's for sure!  Joining this tour gives you a once in a lifetime experience and you will never forget it!</p>
    
                        <p class="card-text">This activity includes:</p>
    
                        <p class="card-text">free use of kick bike - local guide - alternative districts - not a common tour - hipster area Neubau - 4 districts - local bars, restaurants and shops - small groups max (12p) - dive into Viennese culture - environmentally friendly</p>
    
    
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
                        <option selected>Small-Group Vienna Highlights Walking Tour</option>
                        <option value="1">13-19 August 2018</option>
                        <option value="2">27 Aug–3 September 2018</option>
                    </select>
    
                    <br>
    
                    <select class="custom-select custom-select-md" multiple >
                        <option selected>Historic Center of Vienna </option>
                        <option value="1">13-19 August 2018</option>
                        <option value="2">27 Aug–3 September 2018</option>
                    </select>
    
                    <br>
    
                    <select class="custom-select custom-select-md" multiple >
                        <option selected>Small Group Bike Tour around Vienna</option>
                        <option value="1">13-19 August 2018</option>
                        <option value="2">27 Aug–3 September 2018</option>
                    </select>
    
                    <div class="text-center mt-4">
                        <button class="btn warning-color-dark" type="submit">Book now</button>
                    </div>
    
                </form>
                <!-- Default form register -->
            </div>
    
@endsection
       