<!DOCTYPE html>

<html>
  <head>
    <title>Map Demo</title> 
    <style>
      html, body{
        width:100%;
        height: 100%;
        background-image:url('Atlanta.jpg');        

      }

     header{
    font-family:Sans-serif;
    font-size: 30px;
    font-weight:bold;
    color:white;
    text-align: middle;
    position:relative;
    left:30%;

  }



      #form{
        font-family: Arial;
        width: 320px;
        height:300px;
        padding: 10px;        
        border-radius: 10px;
        margin: 10px;
        float:left;
        display: inline-block;
        color:white;


       
      }


      #priority{
        font-family: Arial;
        width: 320px;
        height:300px;
        padding: 10px;
        margin: 10px;
        float:left;
        display: inline-block;
        color:white;
        

      }
      #selection{
        font-family: Arial;
        width: 320px;
        height:300px;
        padding: 10px;
        margin: 10px;
        float:left;
        display: inline-block;
        clear: right;
        color:white;
        
      }

      input[type=text] {
        border: 2px solid gray;
        padding:1px;
        border-radius: 4px;
        margin:1px;
        width:50%;
        color:black;
       

}
     input[type=submit]{
      color:black;
     }
    
      select{
        height:10px;
        width:50%;
        margin:1px;
        border-radius: 4px;
        height:20px;
        
      }



      /*Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        margin-top: 30px;
        margin-left:30px;
        margin-right: 10px;
        height: 80%;
        width:80%;
        left:10%;
        bottom: -10%;
        opacity:1;

      }
     
  


      /* Optional: Makes the sample page fill the window. */


    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Best Properties in Atlanta</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script
        src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
      Welcome to Best Properties in Atlanta
    </header>
  
    
       <!-- Navigation -->
       <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand">Best Properties in Atlanta</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="#Section1">User Preference</a></li>
            <li><a href="#map">Map</a></li>
            <li><a href="#selection">Recommendation Results Summary</a></li> 
          </ul>
        </div>
      </nav>


  <div id="Section1">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <div id="form">

       County: 
       <br/>
       <select name="county" id="county">
          <option value="Cobb">Cobb</option>
          <option value="Fulton">Fulton</option>
          <option value="Dekalb">Dekalb</option>
          <option value="Gwinnett">Gwinnett</option>
      </select>

       <br/>
          <script type="text/javascript">
            document.getElementById('county').value = "<?php echo isset($_POST['county']) ? $_POST['county'] : '' ?>";
          </script>
       <br/>
       Types of Rooms:
       <br/>
       Number of Bedrooms:
       <br/>
        <select name="bedroom" id="bedroom">
          <option value="0">0+</option>
          <option value="1">1+</option>
          <option value="2">2+</option>
          <option value="3">3+</option>
          <option value="4">4+</option>
          <option value="5">5+</option>
        </select>
        <br/>
        <script type="text/javascript">
            document.getElementById('bedroom').value = "<?php echo isset($_POST['bedroom']) ? $_POST['bedroom'] : '' ?>";
          </script>
        Number of Bathrooms:
        <br/>
        <select name="bathroom" id="bathroom">
          <option value="0">0+</option>
          <option value="1">1+</option>
          <option value="2">2+</option>
          <option value="3">3+</option>
          <option value="4">4+</option>
          <option value="5">5+</option>
        </select>
        <script type="text/javascript">
            document.getElementById('bathroom').value = "<?php echo isset($_POST['bathroom']) ? $_POST['bathroom'] : '' ?>";
          </script>
        <br/>
        <br/>
        Price Range:
        <br/>
        Min Price:
        <br/>
        <input type="text" name="min_price"  placeholder="Enter minimum price/" value="<?php echo isset($_POST['min_price']) ? $_POST['min_price'] : '' ?>" />
        <br/> 
         Max Price:
        <br/>
        <input type="text" name="max_price"  placeholder="Enter maximum price/" value="<?php echo isset($_POST['max_price']) ? $_POST['max_price'] : '' ?>" />
        <br/> 
  
     </div>
     <div id="priority">
       <p>Please set your preference priority(between 1 to 10):</p>
       Security: 
       <input type="text" name="bar3" style="width: 100px;" value="<?php echo isset($_POST['bar3']) ? $_POST['bar3'] : '' ?>" />
       <br/>
       Schools: 
       <input type="text" name="bar4"  style="width: 100px;" value="<?php echo isset($_POST['bar4']) ? $_POST['bar4'] : '' ?>" />
       <br/>
       Supermarkets:
       <input type="text" name="bar5"  style="width: 100px;" value="<?php echo isset($_POST['bar5']) ? $_POST['bar5'] : '' ?>" />
       <br/>
       Hospital:
       <input type="text" name="bar6"  style="width: 100px;" value="<?php echo isset($_POST['bar6']) ? $_POST['bar6'] : '' ?>" />
       <br/>
       <br/>
       <input type="submit"> 
     </div>
    </form>
  


    <div id="selection">
    <p>The following results are showed in the map:</p>
    <br/>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
            $county = $_POST['county'];

            $bed=$_POST['bedroom'];
            $bath=$_POST['bathroom'];
            $min_price=$_POST['min_price'];
            $max_price=$_POST['max_price'];
            $bar3=$_POST['bar3'];
            $bar4=$_POST['bar4'];
            $bar5=$_POST['bar5'];
            $bar6=$_POST['bar6'];

         
 
            $row = 0;
            $count=0;
            $map_info=array();
            $fulton_lon=-85.0346524;
            $fulton_lat=33.843083;
            $cobb_lon=-84.6975014;
            $cobb_lat=33.9126755;
            $dek_lon=-84.3270545;
            $dek_lat=33.7929946;
            $gwin_lon=-84.3181555;
            $gwin_lat=33.9580291;
            if (($handle = fopen("edited_selling.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 6610, ",")) !== FALSE) { 
                    $address=$data[0];      
                    $latitude=floatval($data[1]);
                    $longtitude=floatval($data[2]);
                    $n_bed=$data[3];
                    $n_bath=$data[4];
                    $unwantedChars=array(',','$');
                    $space=floatval(str_replace($unwantedChars, '',$data[5]));
                    $price=floatval(str_replace($unwantedChars, '',$data[6]));
                    $school_idx=floatval($data[8]);
                    $hospital_idx=floatval($data[9]);
                    $market_idx=floatval($data[10]);
                    $crime_idx=floatval($data[11]);
                    $property_county=$data[12];
                  
                    if ($latitude>=33.69&&$latitude<=33.92&&$longtitude>=-84.55&&$longtitude<=-84.11 &&$property_county==$county&&floatval($price)/floatval($space)>20&&floatval($n_bed)>=floatval($bed)&&floatval($n_bath)>=floatval($bath)&&floatval($price)<=floatval($max_price)&&floatval($price)>=floatval($min_price)){
                    //echo "This is row".$row."<br/>";
                    // echo "latitude:".$latitude."<br/>";
                    // $two_latitude=floatval($latitude)*2;
                    // echo $two_latitude;
                    // echo "<br/>";
                    // echo "Bedroom:".$n_bed;
                    // echo "<br/>";
                    // echo "Bath:".$n_bath;
                    // echo "<br/>";
                     //echo "Price".$price;
                     //echo "<br/>";
                    // $dist_fulton=sqrt(12100*0.7034*(floatval($latitude)-$fulton_lat)*(floatval($latitude)-$fulton_lat)+12100*(floatval($longtitude)-$fulton_lon)*(floatval($longtitude)-$fulton_lon));
                    // $dist_cobb=sqrt(12100*0.7034*(floatval($latitude)-$cobb_lat)*(floatval($latitude)-$cobb_lat)+12100*(floatval($longtitude)-$cobb_lon)*(floatval($longtitude)-$cobb_lon));
                    // $dist_dek=sqrt(12100*0.7034*(floatval($latitude)-$dek_lat)*(floatval($latitude)-$dek_lat)+12100*(floatval($longtitude)-$dek_lon)*(floatval($longtitude)-$dek_lon));
                    // $dist_gwin=sqrt(12100*0.7034*(floatval($latitude)-$gwin_lat)*(floatval($latitude)-$gwin_lat)+12100*(floatval($longtitude)-$gwin_lon)*(floatval($longtitude)-$gwin_lon));
                    $price_ln=0.9001+1.4737*log($space)+0.1933*floatval($bar4)/5*$school_idx-0.0033*floatval($bar4)/5*$school_idx*$school_idx-0.2325*floatval($bar6)/5*$hospital_idx+0.0037*floatval($bar6)/5*$hospital_idx*$hospital_idx+0.0572*floatval($bar5)/5*$market_idx-0.0009*floatval($bar5)/5*$market_idx*$market_idx-0.0398*floatval($bar3)/5*$crime_idx;
                    $price_recommend=exp($price_ln);
                    $score=$price_recommend/floatval($price);
                    
                    $map_info[]=array("address"=>$address,"row"=>$row,"latitude"=>floatval($latitude),"longtitude"=>floatval($longtitude),"space"=>floatval($space),"price"=>floatval($price),"school_idx"=>floatval($school_idx),"market_idx"=>floatval($market_idx),"hospital_idx"=>floatval($hospital_idx),"crime_idx"=>floatval($crime_idx),"price_recommend"=>$price_recommend,"score"=>$score);
                    $count=$count+1;
                    }  
                    $row++;
                    }
                    //arsort($map_info,$map_info[])
                    echo "There are ".$count." properties meet your requirements!!";
                    echo "<br/>";
                    echo "<br/>";
                    echo "Ten of the best recommended properties will be marked in the map!!";
                     function method1($a,$b) {
                        return ($a["score"] >= $b["score"]) ? -1 : 1;
                      }
                    usort($map_info, "method1");
                    //echo '<pre>'; print_r($map_info[1]); echo '</pre>';
                }
                fclose($handle);
              }
             
            ?>
</div>
</div>

<br/>
<div id="map"> </div>
   <script>
   $(function(){
       var currentValue = $('#currentValue');
       $('#defaultSlider').change(function(){
        currentValue.html(this.value);
     });

// Trigger the event on load, so
// the value field is populated:

  $('#defaultSlider').change();

   });
   </script>
   <script >
    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: {lat: 33.80, lng:-84.33},
      });

      // Create a <script> tag and set the USGS URL as the source.
      var script = document.createElement('script');

      script.src = 'data1.js';
      document.getElementsByTagName('head')[0].appendChild(script);
      //var trafficLayer = new google.maps.TrafficLayer();
      //trafficLayer.setMap(map);
      //console.log("789");
      //console.log(parseFloat("<?php echo isset($map_info[0]["latitude"])?$map_info[0]["latitude"]:''?>"))
      var opt = { minZoom: 10, maxZoom: 15 };
                map.setOptions(opt);

      //var inforwindow = new google.maps.InfoWindow({
        //content: 'test' 
      //});

      var marker1 = new google.maps.Marker({
        position: {lat:parseFloat("<?php echo isset($map_info[0]["latitude"]) ? $map_info[0]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[0]["longtitude"]) ? $map_info[0]["longtitude"] : '' ?>")},
        map: map,
      }); 
      google.maps.event.addListener(marker1,'click',function(){
        var infowindow = new google.maps.InfoWindow({
        content:"Rank: 1"+"<br/>"+"Score: <?php echo isset($map_info[0]["score"]) ? $map_info[0]["score"] :''?>"+"<br/>"+"Address: <?php echo isset($map_info[0]["address"]) ? $map_info[0]["address"] :''?>"+"<br/>"+"Actual Price:<?php echo isset($map_info[0]["price"]) ? $map_info[0]["price"] :''?>",
        position: {lat:parseFloat("<?php echo isset($map_info[0]["latitude"]) ? $map_info[0]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[0]["longtitude"]) ? $map_info[0]["longtitude"] : '' ?>")}
      });
      infowindow.open(map);
  });


     var marker2 = new google.maps.Marker({
        position: {lat:parseFloat("<?php echo isset($map_info[1]["latitude"]) ? $map_info[1]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[1]["longtitude"]) ? $map_info[1]["longtitude"] : '' ?>")},
        map: map,
      }); 
      google.maps.event.addListener(marker2,'click',function(){
        var infowindow = new google.maps.InfoWindow({
        content:"Rank: 2"+"<br/>"+"Score: <?php echo isset($map_info[1]["score"]) ? $map_info[1]["score"] :''?>"+"<br/>"+"Address: <?php echo isset($map_info[1]["address"]) ? $map_info[1]["address"] :''?>"+"<br/>"+"Actual Price:<?php echo isset($map_info[1]["price"]) ? $map_info[1]["price"] :''?>",
        position: {lat:parseFloat("<?php echo isset($map_info[1]["latitude"]) ? $map_info[1]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[1]["longtitude"]) ? $map_info[1]["longtitude"] : '' ?>")}
      });
      infowindow.open(map);
  });


    var marker3 = new google.maps.Marker({
        position: {lat:parseFloat("<?php echo isset($map_info[2]["latitude"]) ? $map_info[2]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[2]["longtitude"]) ? $map_info[2]["longtitude"] : '' ?>")},
        map: map,
      }); 
      google.maps.event.addListener(marker3,'click',function(){
        var infowindow = new google.maps.InfoWindow({
        content:"Rank: 3"+"<br/>"+"Score: <?php echo isset($map_info[2]["score"]) ? $map_info[2]["score"] :''?>"+"<br/>"+"Address: <?php echo isset($map_info[2]["address"]) ? $map_info[2]["address"] :''?>"+"<br/>"+"Actual Price:<?php echo isset($map_info[2]["price"]) ? $map_info[2]["price"] :''?>",
        position: {lat:parseFloat("<?php echo isset($map_info[2]["latitude"]) ? $map_info[2]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[2]["longtitude"]) ? $map_info[2]["longtitude"] : '' ?>")}
      });
      infowindow.open(map);
  });


    var marker4 = new google.maps.Marker({
        position: {lat:parseFloat("<?php echo isset($map_info[3]["latitude"]) ? $map_info[3]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[3]["longtitude"]) ? $map_info[3]["longtitude"] : '' ?>")},
        map: map,
      }); 
      google.maps.event.addListener(marker4,'click',function(){
        var infowindow = new google.maps.InfoWindow({
        content:"Rank: 4"+"<br/>"+"Score: <?php echo isset($map_info[3]["score"]) ? $map_info[3]["score"] :''?>"+"<br/>"+"Address: <?php echo isset($map_info[3]["address"]) ? $map_info[3]["address"] :''?>"+"<br/>"+"Actual Price:<?php echo isset($map_info[3]["price"]) ? $map_info[3]["price"] :''?>",
        position: {lat:parseFloat("<?php echo isset($map_info[3]["latitude"]) ? $map_info[3]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[3]["longtitude"]) ? $map_info[3]["longtitude"] : '' ?>")}
      });
      infowindow.open(map);
  });
     
 
    var marker5 = new google.maps.Marker({
        position: {lat:parseFloat("<?php echo isset($map_info[4]["latitude"]) ? $map_info[4]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[4]["longtitude"]) ? $map_info[4]["longtitude"] : '' ?>")},
        map: map,
      }); 
      google.maps.event.addListener(marker5,'click',function(){
        var infowindow = new google.maps.InfoWindow({
        content:"Rank: 5"+"<br/>"+"Score: <?php echo isset($map_info[4]["score"]) ? $map_info[4]["score"] :''?>"+"<br/>"+"Address: <?php echo isset($map_info[4]["address"]) ? $map_info[4]["address"] :''?>"+"<br/>"+"Actual Price:<?php echo isset($map_info[4]["price"]) ? $map_info[4]["price"] :''?>",
        position: {lat:parseFloat("<?php echo isset($map_info[4]["latitude"]) ? $map_info[4]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[4]["longtitude"]) ? $map_info[4]["longtitude"] : '' ?>")}
      });
      infowindow.open(map);
  });


    var marker6 = new google.maps.Marker({
        position: {lat:parseFloat("<?php echo isset($map_info[5]["latitude"]) ? $map_info[5]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[5]["longtitude"]) ? $map_info[5]["longtitude"] : '' ?>")},
        map: map,
      }); 
      google.maps.event.addListener(marker6,'click',function(){
        var infowindow = new google.maps.InfoWindow({
        content:"Rank: 6"+"<br/>"+"Score: <?php echo isset($map_info[5]["score"]) ? $map_info[5]["score"] :''?>"+"<br/>"+"Address: <?php echo isset($map_info[5]["address"]) ? $map_info[5]["address"] :''?>"+"<br/>"+"Actual Price:<?php echo isset($map_info[5]["price"]) ? $map_info[5]["price"] :''?>",
        position: {lat:parseFloat("<?php echo isset($map_info[5]["latitude"]) ? $map_info[5]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[5]["longtitude"]) ? $map_info[5]["longtitude"] : '' ?>")}
      });
      infowindow.open(map);
  });


    var marker7 = new google.maps.Marker({
        position: {lat:parseFloat("<?php echo isset($map_info[6]["latitude"]) ? $map_info[6]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[6]["longtitude"]) ? $map_info[6]["longtitude"] : '' ?>")},
        map: map,
      }); 
      google.maps.event.addListener(marker7,'click',function(){
        var infowindow = new google.maps.InfoWindow({
        content:"Rank: 7"+"<br/>"+"Score: <?php echo isset($map_info[6]["score"]) ? $map_info[6]["score"] :''?>"+"<br/>"+"Address: <?php echo isset($map_info[6]["address"]) ? $map_info[6]["address"] :''?>"+"<br/>"+"Actual Price:<?php echo isset($map_info[6]["price"]) ? $map_info[6]["price"] :''?>",
        position: {lat:parseFloat("<?php echo isset($map_info[6]["latitude"]) ? $map_info[6]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[6]["longtitude"]) ? $map_info[6]["longtitude"] : '' ?>")}
      });
      infowindow.open(map);
  });

    var marker8 = new google.maps.Marker({
        position: {lat:parseFloat("<?php echo isset($map_info[7]["latitude"]) ? $map_info[7]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[7]["longtitude"]) ? $map_info[7]["longtitude"] : '' ?>")},
        map: map,
      }); 
      google.maps.event.addListener(marker8,'click',function(){
        var infowindow = new google.maps.InfoWindow({
        content:"Rank: 8"+"<br/>"+"Score: <?php echo isset($map_info[7]["score"]) ? $map_info[7]["score"] :''?>"+"<br/>"+"Address: <?php echo isset($map_info[7]["address"]) ? $map_info[7]["address"] :''?>"+"<br/>"+"Actual Price:<?php echo isset($map_info[7]["price"]) ? $map_info[7]["price"] :''?>",
        position: {lat:parseFloat("<?php echo isset($map_info[7]["latitude"]) ? $map_info[7]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[7]["longtitude"]) ? $map_info[7]["longtitude"] : '' ?>")}
      });
      infowindow.open(map);
  });


    var marker9 = new google.maps.Marker({
        position: {lat:parseFloat("<?php echo isset($map_info[8]["latitude"]) ? $map_info[8]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[8]["longtitude"]) ? $map_info[8]["longtitude"] : '' ?>")},
        map: map,
      }); 
      google.maps.event.addListener(marker9,'click',function(){
        var infowindow = new google.maps.InfoWindow({
        content:"Rank: 9"+"<br/>"+"Score: <?php echo isset($map_info[8]["score"]) ? $map_info[8]["score"] :''?>"+"<br/>"+"Address: <?php echo isset($map_info[8]["address"]) ? $map_info[8]["address"] :''?>"+"<br/>"+"Actual Price:<?php echo isset($map_info[8]["price"]) ? $map_info[8]["price"] :''?>",
        position: {lat:parseFloat("<?php echo isset($map_info[8]["latitude"]) ? $map_info[8]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[8]["longtitude"]) ? $map_info[8]["longtitude"] : '' ?>")}
      });
      infowindow.open(map);
  });


    var marker10 = new google.maps.Marker({
        position: {lat:parseFloat("<?php echo isset($map_info[9]["latitude"]) ? $map_info[9]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[9]["longtitude"]) ? $map_info[9]["longtitude"] : '' ?>")},
        map: map,
      }); 
      google.maps.event.addListener(marker10,'click',function(){
        var infowindow = new google.maps.InfoWindow({
        content:"Rank: 10"+"<br/>"+"Score: <?php echo isset($map_info[9]["score"]) ? $map_info[9]["score"] :''?>"+"<br/>"+"Address: <?php echo isset($map_info[9]["address"]) ? $map_info[9]["address"] :''?>"+"<br/>"+"Actual Price:<?php echo isset($map_info[9]["price"]) ? $map_info[9]["price"] :''?>",
        position: {lat:parseFloat("<?php echo isset($map_info[9]["latitude"]) ? $map_info[9]["latitude"] :''?>"), lng: parseFloat("<?php echo isset($map_info[9]["longtitude"]) ? $map_info[9]["longtitude"] : '' ?>")}
      });
      infowindow.open(map);
  });



      var allowedBounds = new google.maps.LatLngBounds(
           new google.maps.LatLng(33.69, -84.55), //33.752212, lng:-84.373262
           new google.maps.LatLng(33.92, -84.11)
      );
      var lastValidCenter = map.getCenter();

      google.maps.event.addListener(map, 'center_changed', function() {
          if (allowedBounds.contains(map.getCenter())) {
              // still within valid bounds, so save the last valid position
              lastValidCenter = map.getCenter();
              return; 
          }

          // not valid anymore => return to last valid position
          map.panTo(lastValidCenter);
      });                                                 

    }
  

    function eqfeed_callback(results) {
      var pri_security=parseFloat("<?php echo isset($bar3)?$bar3:'5'?>");
      var pri_school=parseFloat("<?php echo isset($bar4)?$bar4:'5'?>");
      var pri_market=parseFloat("<?php echo isset($bar5)?$bar5:'5'?>");
      var pri_hospital=parseFloat("<?php echo isset($bar6)?$bar6:'5'?>")

      var heatmapData = [];
      for (var i = 0; i < results.features.length; i++) {
        var coords_y = results.features[i].longtitude;
        var coords_x = results.features[i].latitude;
        var latLng = new google.maps.LatLng(coords_y, coords_x);
        var hos = results.features[i].Hos_Index;
        var school = results.features[i].School_Index;
        var market = results.features[i].Market_Index;
        var crime = results.features[i].Crime_Index;

        var school_index = 1+(pri_school/5-1)*0.6
        var hos_index = 1+(pri_hospital/5-1)*0.6
        var market_index = 1+(pri_market/5-1)*1
        var crime_index = 1+((pri_security)/5-1)*5

        var magnitude = school_index*(0.1933*school-0.0033*Math.pow(school,2))-hos_index*(0.2325*hos-0.0037*Math.pow(hos,2)) + market_index*(0.0572*market - 0.0009*Math.pow(market,2)) - crime_index*0.0398*crime+0.6;
        if (magnitude < 0 ){magnitude=0.1}
        if( magnitude == NaN) {magnitude=0.1}
        console.log(magnitude*1.5);
        var weightedLoc = {
          location: latLng,
          weight: magnitude*1.5
        };
        //console.log(coords_x);
        heatmapData.push(weightedLoc);
        //console.log(coords_y);
      }
      var heatmap = new google.maps.visualization.HeatmapLayer({
        data: heatmapData,
        dissipating: false,
        map: map,
        radius: 0.015,
        opacity: 0.3
      });
    }
   </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACL04KEbs91owrKTtVcLRCJ5XlQYg583A&libraries=visualization&callback=initMap"/>
   </script>
  </body>
</html>