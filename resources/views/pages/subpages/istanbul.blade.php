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
                        <img src="pages/img/tours/istanbul/istanbul_2.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-light"></div>
                    </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 mb-4 mt-5">

                    <h2>Travel to Istanbul with us</h2>
                    <hr>
                    <p>Istanbul is a beautiful city, but it pays to know where to look. Join these Istanbul tours to be shown the unmistakable icons as well as the hard-to-find secret spots that make Istanbul so captivating.</p>
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
                    <img src="pages/img/tours/istanbul/istanbul_tour1.jpg" class="card-img-top" alt="istanbul-tour1">
                    
                      <div class="mask rgba-white-slight waves-effect waves-light"></div>
                   
                  </div>
                  
                  <!--Card content-->
                  <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Istanbul Orientation Walking Tour</h4>
                    <!--Text-->
                    <p class="card-text"> Istanbul is a beautiful city, but it pays to know where to look. Join this Istanbul Orientation Walking tour to be shown the unmistakable icons as well as the hard-to-find secret spots that make Istanbul so captivating.</p>

                    <p class="card-text">Get the most out of Istanbul in the company of an expert local guide. As we tour Istanbul, your guide will point out places to get the best local snacks and coffee, as well as show you the main points of interest along the way.</p>

                    <p class="card-text">This activity includes:</p>

                    <p class="card-text">Local Guide - City Map</p>
                    

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
                    <img src="pages/img/tours/istanbul/istanbul_tour2.jpg" class="card-img-top" alt="">
                    
                      <div class="mask rgba-white-slight waves-effect waves-light"></div>
                
                  </div>

                  <!--Card content-->
                  <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Secret Passages of Istanbul and Turkish Coffee Experience</h4>
                    <!--Text-->
                    <p class="card-text">Being separated from the Old Town of Sultanahmet by the Golden Horn straight; the district was known as "Pera" meaning "Across" in Greek during the Middle Ages. This name remained in common use until the early 20th century and the establishment of the Turkish Republic.</p>
                    
                    <p class="card-text">On this tour we will take you through and to many of the secret passages of Istanbul, you would not explore on your own and give you a totally different view on the city..!</p>

                    <p class="card-text">This activity includes:</p>

                    <p class="card-text">Funicular From Karaköy Tunnel to Istiklal Avenue - Turkish Delight Sample Tasting - Turkish Coffee and Turkish Coffee Reading - Walking Tour of the Secret Passages and Backstreets of Taksim - Nostalgic Tram from Taksim Square to Tunnel - Guiding Fee</p>
                    
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
                    <img src="pages/img/tours/istanbul/istanbul_tour3.jpg" class="card-img-top" alt="">
                    
                      <div class="mask rgba-white-slight waves-effect waves-light"></div>
                   
                  </div>

                  <!--Card content-->
                  <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Hagia Sophia Guided Walking Tour</h4>
                    <!--Text-->
                    <p class="card-text">You will meet your professional tour guide at the designated starting point, a short walk will take you to one of the most spectacular highlights of Istanbul: Hagia Sophia.</p>

                    <p class="card-text">This impressive building was used as a church for 916 years but following the conquest of Istanbul by the Ottoman Empire, it was converted into a mosque. It remained a mosque for 482 years. Under the order of Atatürk, the father of the modern Turkish Republic, it was converted into an international museum.</p>

                    <p class="card-text">This activity includes:</p>

                    <p class="card-text">Fully licensed professional guide (English and Spanish) - Walking tour.</p>
                    

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

    <div class="container" >
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
                    <option selected>Istanbul Orientation Walking Tour</option>
                    <option value="1">3-10 September 2018</option>
                    <option value="2">10-17 September 2018</option>
                </select>

                <br>

                <select class="custom-select custom-select-md" multiple >
                    <option selected>Secret Passages of Istanbul and Turkish Coffee Experience </option>
                    <option value="1">3-10 September 2018</option>
                    <option value="2">10-17 September 2018</option>
                </select>

                <br>

                <select class="custom-select custom-select-md" multiple >
                    <option selected>Hagia Sophia Guided Walking Tour</option>
                    <option value="1">3-10 September 2018</option>
                    <option value="2">10-17 September 2018</option>
                </select>


                <div class="text-center mt-4">
                    <button class="btn warning-color-dark" type="submit">Book now</button>
                </div>

            </form>
            <!-- Default form register -->
        </div>
   

@endsection