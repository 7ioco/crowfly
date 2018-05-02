<!DOCTYPE html> 
<html> 
	<head>
  <meta charset="UTF-8">
	<title>The Crow Flies Distance Calculator</title>
  <meta id="view" name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=9"/>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"><>
		<link rel="stylesheet" type="text/css" href="crowflies_css/stylesheet_ie.css"/>
	<![endif]-->
	<link href="http://code.google.com/apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css" /> 
	<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=geometry&sensor=false"></script>-->
	<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEd9x75B255lMSLvpR9GfZdNcaHuT2pY0&libraries=geometry,places" type="text/javascript"></script>
	
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet" />-->
    <style type="text/css">
	@charset "UTF-8";

/* Layout*/

html {
  height: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}

body {
  font-family: "Helvetica Neue", Helvetica, Arial, Sans-serif;
  font-size: 100%;
  min-height: 100%;
  position: relative;
	font-size: 12px;
	margin: 0;
	padding: 0;
}

.page {
	font-size: 1em;
	max-width: 100%;
	height: 100%;
	margin: 0px auto 0px auto;
}

#map_container{
	width: 100%;
	height: 81%;
	position: relative;
}
#map_canvas {
	height: 100%;
	width: 100%;
	}
	
#menu{
	height: 6%;
	position: relative;
	width: 100%;
	padding: 0px;
	background: rgba(25,25,25,1);
	opacity: 0.9;
	-webkit-box-shadow:0 0 10px 5px rgba(25,25,25,0.9);
	box-shadow:0 0 10px 5px rgba(25,25,25,0.9);
	z-index: 3;
	}
	
#inputs {
	margin: 0 auto;
	position: relative;
	display: block;
	text-align: center;
	background: #e5e5e5;
	height: 10%;
	width: 100%;
	z-index: 2;



	}

#field {
	border: none;
	padding: 0px;
	}

#inputs .form {
  width: 14%;
	height: 14px;
	margin: 16px 4px 8px 4px;
	padding: 4px;
  text-align: right;
	}
	
/* #inputs .formtwo {
  width: 30%;
	margin: 16px 4px 8px 4px;
	padding: 4px;
	text-align: left;
	} */

#inputs .enter {
	width: 16%;
	height: 26px;
	margin: 4px 4px 6px 4px;
	padding: 2px;
	opacity: 0.9;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #e0e0e0) );
	background:-moz-linear-gradient( center top, #ffffff 5%, #e0e0e0 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e0e0e0');
	background-color:#ffffff;
	-webkit-border-top-left-radius:2px;
	-moz-border-radius-topleft:2px;
	border-top-left-radius:2px;
	-webkit-border-top-right-radius:2px;
	-moz-border-radius-topright:2px;
	border-top-right-radius:2px;
	-webkit-border-bottom-right-radius:2px;
	-moz-border-radius-bottomright:2px;
	border-bottom-right-radius:2px;
	-webkit-border-bottom-left-radius:2px;
	-moz-border-radius-bottomleft:2px;
	border-bottom-left-radius:2px;
	text-indent:0;
	border:1px solid #b5b5b5;
	display:inline-block;
	color:#615e61;
	font-family:arial;
	font-size:13.5px;
	font-weight:bold;
	font-style:normal;
	text-decoration:none;
	text-align:center;


}
#inputs .enter:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e0e0e0), color-stop(1, #ffffff) );
	background:-moz-linear-gradient( center top, #e0e0e0 5%, #ffffff 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e0e0e0', endColorstr='#ffffff');
	background-color:#e0e0e0;
}

.buttons {

}
.buttons:hover {

}

#wrap{
position: relative;
}

#flies_distance{
	top: 0;
	left: 0;
	color: white;
	position: absolute;
	text-align: center;
	width: 100%;
	height: 0 auto;
	background: rgba(25,25,25,0.8);
	z-index: 1;
	font-size: 1.4em;
	-webkit-box-shadow:0 0 10px 5px rgba(25,25,25,0.9);
	z-index: 1;
	}
	
h1{
	font-size: 1.6em;
	text-align: center; 
	color: white;
	margin: 0px;
	padding: 4px;
}
	

h2	{
	margin: 0px;
	padding: 4px;
	text-align: center;
	font-size: 1em;
	color: white;
	}
	
p {
	text-align: center;
	}

footer{

	width: 100%;
	height: 3%;
	margin: 0 auto;
	padding: 0px;
	background: rgba(25,25,25,1);
	opacity: 0.9;
	-webkit-box-shadow:0px 20px 10px 22px rgba(25,25,25,1);


}
		
footer a{
	color: white;
	text-decoration: none;
	padding: 0.2%;
	font-size: 1.4em;
	float: right;
	font-weight: bold;
	display: block;
	opacity: 1;
}


/* Small Screen */

@media screen and (min-height: 100px ) and (max-height: 540px){
h1{
	font-size: 1em;
	padding: 1px;

}
	
h2	{

	font-size: 0.8em;
	padding: 1px;

	}
	
#map_container{
	width: 100%;
	height: 71%;
}

#menu{
	height: 10%;
	overflow: hidden;
	}
	
#inputs {
	height: 16%;
	overflow: hidden;
	}
#inputs .form {
  width: 15%;
	height: 10px;
	margin: 6px 4px 2px 4px;
	padding: 2px;
  text-align: right;
	overflow: hidden;

	
	}
	


#inputs .enter {
	width: 20%;
	height: 20px;
	margin: 4px 4px 6px 4px;
	padding: 2px;
	opacity: 0.9;
	font-size: 10px;

}
footer{
	width: 100%;
	height: 4%;
	margin: 0 auto;
	padding: 0px;
	background: rgba(25,25,25,1);
	opacity: 0.9;

}
		
footer a{
	color: white;
	text-decoration: none;
	padding: 0px;
	font-size: 1.4em;
	float: right;
	font-weight: bold;	



	opacity: 1;
}
}





	

/* Medium Screen */
@media screen and (min-height: 540px ) and (max-height: 840px){
h1{
	font-size: 1.2em;
	padding: 2px;
}
	
h2	{
	padding: 4px;
	font-size: 1em;
	}
	
#map_container{
	width: 100%;
	height: 76%;
}

#menu{
	height: 8%;
	}
	
#inputs {
	height: 12%;
	}
#inputs .form {
  width: 14%;
	height: 12px;
	margin: 10px 4px 4px 4px;
	padding: 4px;
  text-align: right;
	}
	

#inputs .enter {
	width: 20%;
	height: 22px;
	margin: 4px 4px 4px 4px;
	padding: 2px;
	opacity: 0.9;
	font-size: 12px;
}

footer{

	width: 100%;
	height: 4%;
	margin: 0 auto;
	padding: 0px;
	background: rgba(25,25,25,1);
	opacity: 0.9;

}
		
footer a{
	color: white;
	text-decoration: none;
	padding: 0.4%;
	font-size: 1.4em;
	float: right;
	font-weight: bold;	



	opacity: 1;
}
}

	
	
	
	</style>


    
</head>
<body onload="initialize()">
 
<div class="page">
    
<div id="menu">
	<h1>
		The Crow Flies Distance Calculator
	</h1>
	
</div>
<div id="inputs">
	<div id="field">
		<input class="form" id="address1" type="textbox" value="Start Point A" onblur="if(this.value=='') {this.value='Start Point A'};" onfocus="if(this.value==this.defaultValue) this.value='';">
		<input class="form" id="address2" type="textbox" value="Point B" onKeyPress="checkEnter()" onblur="if(this.value=='') {this.value='Point B'};" onfocus="if(this.value==this.defaultValue) this.value='';">
        <input class="form" id="address3" type="textbox" value="Point C" onKeyPress="checkEnter()" onblur="if(this.value=='') {this.value='Point C'};" onfocus="if(this.value==this.defaultValue) this.value='';">
        <input class="form" id="address4" type="textbox" value="Point D" onKeyPress="checkEnter()" onblur="if(this.value=='') {this.value='Point D'};" onfocus="if(this.value==this.defaultValue) this.value='';">
        <input class="form" id="address5" type="textbox" value="Point E" onKeyPress="checkEnter()" onblur="if(this.value=='') {this.value='Point E'};" onfocus="if(this.value==this.defaultValue) this.value='';">
        <input class="form" id="address6" type="textbox" value="Point F" onKeyPress="checkEnter()" onblur="if(this.value=='') {this.value='Point F'};" onfocus="if(this.value==this.defaultValue) this.value='';">
	</div>
	<div id="field">
		<input class="enter" type="button" value="Calculate" onclick="geoCode()">
		<input class="enter" type="button" value="Clear Map" onclick="reloadPage()">
	</div>
</div>
<div id="wrap">
	<div id="flies_distance">
	</div>
</div>
<div id="map_container">
	<div id="map_canvas">
	</div>
</div>

<script type="text/javascript"> 
  var geoResults = {};
  var geocoder;
  var map;
  var geo = [];
  var geoName = [];

  function initialize() {
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(38, -97);
    var myOptions = {
      zoom: 3,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.TERRAIN,
			scaleControl: true,
			rotateControl: false,
			panControl: false,
			streetViewControl: false,
			mapTypeControl: true,
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
				position: google.maps.ControlPosition.RIGHT_BOTTOM
			},
			zoomControl: true,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL,
				position: google.maps.ControlPosition.LEFT_BOTTOM
			}

    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	var inputOne = document.getElementById('address1');
	autocompleteOne = new google.maps.places.Autocomplete(inputOne);
	var inputTwo = document.getElementById('address2');
	autocompleteTwo = new google.maps.places.Autocomplete(inputTwo);
    var inputThree = document.getElementById('address3');
	autocompleteThree = new google.maps.places.Autocomplete(inputThree);
    var inputFour = document.getElementById('address4');
	autocompleteFour = new google.maps.places.Autocomplete(inputFour);
    var inputFive = document.getElementById('address5');
	autocompleteFive = new google.maps.places.Autocomplete(inputFive);
    var inputSix = document.getElementById('address6');
	autocompleteSix = new google.maps.places.Autocomplete(inputSix);
  }
  


function codeAddress(id) {
    var address = document.getElementById(id).value;
    if(address != 'Start Point A' && address != 'Point B' && address != 'Point C' && address != 'Point D' && address != 'Point E' && address != 'Point F'){
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        //map.fitBounds(results[0].geometry.viewport);

			
        // store the results in the geoResults object      
        geoResults[id] = results[0].geometry.location;
        geo[geo.length]=results[0].geometry.location;
        geoName[id] = results[0].address_components[0].long_name;
        doCalculation();
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
    }
  }
  function doCalculation() {    
    if (typeof geoResults.address1 === "object") {
        		
         

        var result;
        // geoResults.address1 is a LatLng() object.
        // geoResults.address2 is a LatLng() object.
				var dis_str='';
                var end = [];
                
                for(var j=1;j<geo.length;j++){
                    end[j-1] = geo[j];
                }
                
                
				var bounds = new google.maps.LatLngBounds();
				var marker = new google.maps.Marker({
                        position: geoResults.address1,
                        map: map
                      });
                var c=2;                
				for (var i = 1; i < end.length; i++) {
                    
                    var startPt = new google.maps.LatLng(geoResults.address1.lat(),geoResults.address1.lng());
                    var endPt = new google.maps.LatLng(end[i].lat(),end[i].lng());
                    
                    calcRoute(startPt, endPt);
                    bounds.extend(startPt);
                    bounds.extend(endPt);
                    
                    marker = new google.maps.Marker({
                        position: end[i],
                        map: map
                      });
                    
                    if(geoResults.address1.lat()!=end[i].lat()){
                        
                        result = google.maps.geometry.spherical.computeDistanceBetween(geoResults.address1, end[i]);  
                        result *= 0.000621371192;
                        topResult = Math.round(result);
                        dis_str +=geoName['address1']+" to "+geoName['address'+c]+" distance is: " + topResult + " Miles</br>";
                        c = c+1;
                    }
                    
                    
                  }
                  map.fitBounds(bounds);
                }
				
				
				//var midpoint = ((geoResults.address1+geoResults.address2)/2);//
				//map.setCenter(midpoint);//
				
				document.getElementById("flies_distance").innerHTML = dis_str;
        //alert("The distance is: " + topResult + " Miles");//
        //geoResults["flies_distance"] = dis_str;
    }
  function calcRoute(source, destination) {
          var polyline = new google.maps.Polyline({
            path: [source, destination],
            strokeColor: 'red',
            strokeWeight: 2,
            strokeOpacity: 1
          });
        
          polyline.setMap(map);
  }
  function doCalculation2() {    
    if (typeof geoResults.address1 === "object" 
        && typeof geoResults.address2 === "object") {
        
				


        var result = google.maps.geometry.spherical.computeDistanceBetween(geoResults.address1, geoResults.address2);
        // geoResults.address1 is a LatLng() object.
        // geoResults.address2 is a LatLng() object.
				result *= 0.000621371192;
        topResult = Math.round(result);
				var LatLngList = new Array(geoResults.address1, geoResults.address2);
				var bounds = new google.maps.LatLngBounds();
				for (var i=0; i < LatLngList.length; i++) {
					bounds.extend(LatLngList[i]);
				}	
				map.fitBounds(bounds);
				var marker1 = new google.maps.Marker({
            map: map, 
            position: geoResults.address1
        });
		
				var marker2 = new google.maps.Marker({
					map: map, 
					position: geoResults.address2
        });
				
				var line = new google.maps.Polyline({
					geodesic: true,
					map: map,
					path: [geoResults.address1, geoResults.address2],
					strokeWeight: 5,
					strokeOpacity: 0.6,
					strokeColor: "#FF6666"
				});
				
				
				//var midpoint = ((geoResults.address1+geoResults.address2)/2);//
				//map.setCenter(midpoint);//
				
				document.getElementById("flies_distance").append = "The distance is: " + topResult + " Miles";
        //alert("The distance is: " + topResult + " Miles");//
        geoResults["flies_distance"] = topResult;
    }
  }
  
  function geoCode() {
    var address;
    for(var i=1;i<7;i++){
        address = document.getElementById('address'+i).value;
        if(address != 'Start Point A' && address != 'Point B' && address != 'Point C' && address != 'Point D' && address != 'Point E' && address != 'Point F'){
            codeAddress('address1');
            codeAddress('address'+i);
        }
    }
  }
	
	function reloadPage() {
		window.location.reload()
	}
	
	function checkEnter(){
		if (event.keyCode == 13){
			event.keyCode = null;
			geoCode();
			}
	}
</script>

</div>
 
</body>
</html>