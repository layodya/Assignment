<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from html.multipurposethemes.com/lawfirmhtml/law-one/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Sep 2021 03:34:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
           
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
   
    <!-- FlexSlider CSS file -->
	<link rel="stylesheet" href="vendor/woocommerce-FlexSlider/flexslider.css" type="text/css" media="screen" />

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

   
     
  </head>

  <body id="page-top" style="background-color: #1E2027; font-family: Arial, sans-serif;">
   
    
    <style>
form {
  /* This bit sets up the horizontal layout */
  display:flex;
  flex-direction:row;

}

input {
  /* Tell the input to use all the available space */
  flex-grow:2;
  /* And hide the input's outline, so the form looks like the outline */
  border:none;
  background-color: #1F2128;
}

input:focus {
  /* removing the input focus blue box. Put this on the form if you like. */
  outline: none;
}

button {
  /* Just a little styling to make it pretty */
  border:1px solid #6C5DD3;
  background:#6C5DD3;
  color:white;
}
    </style>



<style>
    .stretch-card>.card {
     width: 100%;
     min-width: 100%
 }


 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }


 .grid-margin,
 .purchace-popup>div {
     margin-bottom: 25px
 }

 .card {
     border: 0;
     border-radius: 2px
 }

 .card-weather {
     background: #e1ecff;
     
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid rgba(0, 0, 0, 0.125);
     border-radius: 0.25rem
 }

 .card-weather .card-body:first-child {
     background: url(images/cloudbg.png) no-repeat center;
     background-size: cover
 }

 .card .card-body {
     padding: 1.88rem 1.81rem
 }

 .card-body {
     flex: 1 1 auto;
     padding: 1.25rem
 }




 .text-gray,
 .card-subtitle,
 .new-accounts ul.chats li.chat-persons a p.joined-date {
     color: #969696
 }


 .text-gray,
 .card-subtitle,
 .new-accounts ul.chats li.chat-persons a p.joined-date {
     color: #969696
 }




 .display-3 {
     font-size: 2.5rem
 }

 .card-weather .card-body {
     background: #383B47
 }

 .card-weather .weakly-weather {
     background: #383B47;
     overflow-x: auto
 }

 .card-weather .weakly-weather .weakly-weather-item {
     flex: 0 0 33.33%;
     border-right: 1px solid #616161;
     padding: 1rem;
     text-align: center
 }



 .card-weather .weakly-weather .weakly-weather-item i {
     font-size: 1.2rem
 }
</style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Slider -->
    
    <section class="slider-banner">
    	<div class="container-fluid">
        	<div class="row">
            	<!-- Place somewhere in the <body> of your page -->
                <div class="flexslider">
                  <ul class="slides">
                    <li style="margin: -1px;">
                      <img src="images/HeaderBg.png" alt="Slider"/>
                      <div class="flex-caption" style="transform: translate(-50%,0); width: 25%;">
                          <div style="text-align: center;"><img style="width: 50%; margin-left: 20%;" src="images/Logo.png" alt=""></div>
                            <form style="margin-top: 10%;">
                            <input style="border-radius: 5px; height: 35px; font-family: Arial, sans-serif; text-indent: 20px;"  placeholder="Enter a city" />
                            <button style="border-radius: 5px; font-family: Arial, Helvetica, sans-serif;">Add City</button>
                            </form>
                      </div>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </section>


    <?php
        $shipments = json_decode(file_get_contents("cities.json"), true);
        $cityList = array();

        for($i = 0; $i < count($shipments['List']); $i++) {
            $singleCity = $shipments['List'][$i]['CityCode'];
            $cityList[$i] = $singleCity;
        }

        $finalResult = implode(",",$cityList);


        $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/group?id=".$finalResult."&appid=1cec9599bba91aec3cd0f07debe0f2ba");
        $finalApiData = json_decode($apiData,true);

        


        
    ?>

    
    <!-- intro box Section -->
    
    <section class="introbox" id="introbox"><!-- Section id-->
        <div class="container">
            <div class="row">

            <?php

                for($j = 0; $j < count($finalApiData['list']); $j++) {

                    if($j % 5 == 4){
                        $color = '#9C3A3A';
                    } else if ($j % 5 == 3) {
                        $color = '#4B8AC9';
                    } else if ($j % 5 == 2) {
                        $color = '#6055A4';
                    }  else if ($j % 5 == 1) {
                        $color = '#41B581';
                    }  else if ($j % 5 == 0) {
                        $color = '#DE944E';
                    }

                    $cityName = $finalApiData['list'][$j]['name'];
                    $cityNameSrt = $finalApiData['list'][$j]['sys']['country'];
                    $temp = $finalApiData['list'][$j]['main']['temp'];
                    $tempMin = $finalApiData['list'][$j]['main']['temp_min'];
                    $tempMax = $finalApiData['list'][$j]['main']['temp_max'];
                    $time = $finalApiData['list'][$j]['sys']['timezone'];
                    $sunR = $finalApiData['list'][$j]['sys']['sunrise'];
                    $sunS = $finalApiData['list'][$j]['sys']['sunset'];
                    $timeF = date('H:i A M j', $time); 
                    $sunRF = date('H:i A', $sunR); 
                    $sunSF = date('H:i A', $sunS); 
                    $pres = $finalApiData['list'][$j]['main']['pressure'];
                    $hum = $finalApiData['list'][$j]['main']['humidity'];
                    $visi = $finalApiData['list'][$j]['visibility'];
                    $speed = $finalApiData['list'][$j]['wind']['speed'];
                    $deg = $finalApiData['list'][$j]['wind']['deg'];
                    $weath = $finalApiData['list'][$j]['weather'][0]['main'];
                    $icon = $finalApiData['list'][$j]['weather'][0]['icon'];
            ?>

            <div class="col-md-6 col-sm-6" style="margin-top: 3%;">
                <!--weather card-->
                <div class="card card-weather"  style="color: #ffffff; background-image: linear-gradient(to left bottom, <?php echo $color ?>, <?php echo $color ?>, <?php echo $color ?>, <?php echo $color ?>, <?php echo $color ?>)">
                    <div class="card-body " style="margin-bottom: 5%; margin-top: 5%;">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <h3 style="font-size: 25px;"><?php echo $cityName ?>, <?php echo $cityNameSrt ?></h3>
                            <p> <span class="weather-date"><?php echo $timeF ?></span> </p>

                            <h3  style="font-size: 15px; margin-top: 10%; font-weight: 450;"><img style="width: 50px;" src="http://openweathermap.org/img/wn/<?php echo $icon ?>@2x.png" alt="" srcset=""><?php echo $weath ?></p>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <h3 style="font-size: 35px;"><?php echo $temp-273.15 ?> °C</h3>
                            <p style="margin-bottom: 0px;"> <span class="weather-date" >Temp Min. <?php echo $tempMin-273.15 ?> °C</span> </p>
                            <p style="margin-bottom: 0px;"> <span class="weather-date" >Temp Max. <?php echo $tempMax-273.15 ?> °C</span> </p>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex weakly-weather" style="color: #ffffff;">
                            <div class="weakly-weather-item">
                                <p class="mb-0"> Pressure : <?php echo $pres ?> hpa </i>
                                <p class="mb-0"> Humidity: <?php echo $hum ?>% </p>
                                <p class="mb-0"> Visibility: <?php echo $visi ?>km </p>
                            </div>
                            <div class="weakly-weather-item">
                                <p class="mb-1"> <i class="fa fa-location-arrow" style="font-size:20px"></i> </p>
                                <p class="mb-0"> <?php echo $speed ?> m/s <?php echo $deg ?> Degree </p>
                            </div>
                            <div class="weakly-weather-item">
                                <p class="mb-1"> Sunrise: <?php echo $sunRF ?> </i>
                                <p class="mb-0"> Sunset: <?php echo $sunSF ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--weather card ends-->
              </div> 

            <?php
                }
            ?>
            
            	
                 
                
                             
            </div>
        </div>
    </section>
    
  

    
    <footer class="footer" id="footer" style="background-color: #30333D;"><!-- Section id-->
            <div class="">
                <p class="copy">2021 Fidenz Technologies</p>
            </div>
    </footer>
    
    
    
   
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    	
    <!-- Plugin JavaScript -->
    <script src="vendor/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/theme.js"></script>
    
    <!-- custom JavaScript -->
    <script src="js/custom.js"></script>
        
    <!-- FlexSlider -->
    <script defer src="vendor/woocommerce-FlexSlider/jquery.flexslider.js"></script>

    
  </body>

<!-- Mirrored from html.multipurposethemes.com/lawfirmhtml/law-one/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Sep 2021 03:35:36 GMT -->
</html>
