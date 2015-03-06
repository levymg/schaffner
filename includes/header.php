<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="<?php if (isset($description)) { echo $description; } ?>" />

<link href="styles/reset.css" type="text/css" rel="stylesheet" />
<link href="styles/basic.css" type="text/css" rel="stylesheet" />
<link href="styles/print.css" type="text/css" rel="stylesheet" media="print" />

<title>Schaffner Manufacturing Company <?php if (isset($title)) { echo ' - ' .$title; } ?></title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<?php if (substr($_SERVER['PHP_SELF'], -11) == "contact.php") { ?>
<link href="styles/lightbox2.css" rel="stylesheet" type="text/css" media="screen, projection" />
<script type="text/javascript" src="scripts/prototype2.js"></script>
<script type="text/javascript" src="scripts/lightbox2.js"></script>

<?php } else { ?>

<?php } ?>

<script>
$(document).ready(function(){
    $('.side-head').click(function(e){
							  
        e.preventDefault();
		$(".side-content").slideUp();
        $(this).closest('li').find('.side-content').not(':animated').slideToggle();
    });
});
    </script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNq-M2daSfiIYTqUcUKxX3cmMcgnobQyQ&sensor=false"></script>

    <script>
      var directionDisplay;
      var directionsService = new google.maps.DirectionsService();

      function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var mapOptions = {
          zoom: 7,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('map_canvas'),
            mapOptions);
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('directions-panel'));
	
		var start = '<?php echo $loc1; ?>';
        var end = '21 Herron Avenue Pittsburgh, PA 15202';
        var request = {
          origin: start,
          destination: end,
          travelMode: google.maps.DirectionsTravelMode.DRIVING
        };
        directionsService.route(request, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
          }
        });

        var control = document.getElementById('control');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP].push(control);
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body<?php if (substr($_SERVER['PHP_SELF'], -14) == "directions.php") { ?> onload="initialize()"<?php } ?>>
<div id="all">
<div class="container">

	<div id="header">
		<a href="index.php"><img src="images/header.jpg" width="960" height="148" alt="Schaffner Manufacturing Company" /></a>
	</div><!--header-->
    
    <div id="navigation">
    	<div id="nav-left">
        	<ul id="navl">
            	<!-- BEGIN PRODUCTS -->
            	<li><a href="products.php" class="drop">Products</a>
                	<div class="products-drop"><!--the entire products dropdown menu-->
                    	<!-- BEGIN FLAP WHEELS -->
                    	<div class="col-1"><!--the first left-most column of the entire dropdown menu-->
                        	<ul><!--for whole column-->
                            	<li><a href="flapwheels.php">Flap Wheels</a>
                                	<ul><!--three main-->
                                    	<li><span>Types of Flap Wheels</span>
                                        	<ul>
                                            	<li><a href="flapwheels-hubs.php">Metal Centered Hub</a></li>
                                                <li><a href="flapwheels-hubs.php">Cardboard Core Hub</a></li>
                                                <li><a href="flapwheels-hubs.php">Heavy-Duty Mechanical Hub</a></li>
                                                <li><a href="flapwheels-belangerstyle.php">Belanger-Style</a></li>
                                                <li><a href="flapwheels-satinfinish.php">Satin Finish</a></li>
                                                <li><a href="flapwheels-custom.php">Custom</a></li>
                                            </ul>
                                        </li><!--types of flap wheels-->
                                        <li><a href="flapwheels-abrasives.php">Types of Abrasives</a></li><!--types of abrasives-->
                                        <li><a href="flapwheels-techinfo.php">Technical Information</a>
                                        	<ul>
                                            	<li><a href="flapwheels-usingflapwheels.php">Using Flap Wheels</a></li>
                                                <li><a href="engineers-availability.php">Flap Wheel Availability</a></li>
                                                <li><a href="engineers-diameterwidth.php">Flap Wheel Diameter &amp; Width</a></li>
                                                <li><a href="engineers-grainbacking.php">Flap Wheel Grain &amp; Backing</a></li>
                                                <li><a href="engineers-gritsize.php">Flap Wheel Grit Size</a></li>
                                                <li><a href="flapwheels-warning.php">Flap Wheel Warning Safety Sheet</a></li>
                                            </ul>
                                        </li><!--tech information-->
                                    </ul><!--end three main-->
                                </li><!--flap wheels-->
                            </ul><!--end whole column-->
                        </div><!--col-1-->
 						<!-- END FLAP WHEELS -->
 
                        <!-- BEGIN BUFFING WHEELS -->
                        <div class="col-2"><!--the second left-most column of the entire dropdown menu-->
                        	<ul><!--for whole column-->
                            	<li><a href="buffingwheels.php">Buffing Wheels</a>
                                	<ul><!--three main-->
                                    	<li><span>Types of Buffing</span>
                                        	<ul>
                                            	<li><a href="buffingwheels-mush.php">Mush</a></li>
                                                <li><a href="buffingwheels-tangential.php">Tangential</a></li>
                                                <li><a href="buffingwheels-satinfinish.php">Satin Finish</a></li>
                                            </ul>
                                        </li><!--types of buffing-->
                                        <li><a href="buffingwheels-typesbw.php">Types of Buffing Wheels</a>
                                        	<!--<ul>
                                            	<li><a href="buffingwheels-clothbias.php">Cloth Bias</a></li>
                                                <li><a href="buffingwheels-colorbias.php">Color Bias</a></li>
                                                <li><a href="buffingwheels-clothsisalbias.php">Cloth &amp; Sisal Bias w/ Metal Center</a></li>
                                                <li><a href="buffingwheels-spiralsewn.php">Spiral Sewn Bias Type Sisal</a></li>
                                                <li><a href="buffingwheels-fingercloth.php">Finger-Segment Type Cloth Bias</a></li>
                                                <li><a href="buffingwheels-fingersisal.php">Finger-Segment Type Cloth &amp; Sisal</a></li>
                                                <li><a href="buffingwheels-fullspiral.php">Full Disc Spiral Sewed Type</a></li>
                                                <li><a href="buffingwheels-fullloose.php">Full Disc Loose Type (9)</a></li>
                                                <li><a href="buffingwheels-custom.php">Custom</a></li>
                                            </ul>-->
                                        </li><!--types of buffing wheels-->
                                        <li><a href="buffingwheels-techinfo.php">Technical Information</a>
                                        	<ul>
                                            	<li><a href="buffingwheels-cutcolor.php">Cut vs. Color Buffing</a></li>
                                                <li><a href="engineers-speedchart.php">Buffing Wheel Speed Chart</a></li>
                                                <li><a href="engineers-buffingsafety.php">Buffing Safety</a></li>
                                                <li><a href="engineers-peripheralspeed.php">Determining Peripheral Speed of a Buffing Wheel</a></li>
                                                <li><a href="engineers-buffinghints.php">Buffing Hints</a></li>
                                            </ul>
                                        </li><!--tech information-->
                                    </ul><!--end three main-->
                                </li><!--buffing wheels-->
                            </ul><!--end whole column-->
                        </div><!--col-2-->
                	<!-- END BUFFING WHEELS -->
                    
                    
                    <!-- BEGIN BUFFING COMPOUNDS -->
                        <div class="col-3"><!--the third left-most column of the entire dropdown menu-->
                        	<ul><!--for whole column-->
                            	<li><a href="buffingcompounds.php">Buffing Compounds</a>
                                	<ul><!--three main-->
                                    	<li><span>Types of Buffing Compounds</span>
                                        	<ul>
                                            	<li><a href="buffingcompounds-liquid.php">Liquid</a></li>
                                                <li><a href="buffingcompounds-solidbar.php">Solid Bar</a></li>
                                                <li><a href="buffingcompounds-coloring.php">Coloring</a></li>
                                                <li><a href="buffingcompounds-jewelers.php">Jeweler's Rouge</a></li>
                                                <li><a href="buffingcompounds-cleaning.php">Buff Wheel Cleaning</a></li>
                                                <li><a href="buffingcompounds-custom.php">Custom</a></li>
                                            </ul>
                                        </li><!--types of buffing compounds-->
                                        <li><a href="buffingcompounds-megavat.php">MEG-A-VAT Buffing Compound System</a></li><!--MEG-A-VAT-->
                                        <li><span>Technical Information</span>
                                        	<ul>
                                            	<li><a href="buffingcompounds-solidbar.php">Solid Bar Buffing Compounds</a></li>
                                                <li><a href="buffingcompounds-liquid.php#tripoli">Tripoli Liquid Buffing Compounds</a></li>
                                            </ul>
                                        </li><!--tech information-->
                                    </ul><!--end three main-->
                                </li><!--buffing compounds-->
                            </ul><!--end whole column-->
                        </div><!--col-3-->
                	<!-- END BUFFING COMPOUNDS -->
                </div><!--products-drop-->
                </li><li> | </li>
                <!-- END PRODUCTS -->
                
                <!-- BEGIN APPLICATIONS -->
                <li><a href="applications.php" class="drop">Applications</a>
                <div class="apps-drop"><!--the entire applications dropdown menu-->
                    	<div class="col-4"><!--the first left-most column of the entire dropdown menu-->
                        	<ul><!--for whole column-->
                                <li><a href="applications-auto.php">Automotive &amp; Truck</a></li>
                                <li><a href="applications-motorcycles.php">Motorcycles</a></li>
                                <li><a href="applications-aerospace.php">Aerospace</a></li>
                                <li><a href="applications-plumbing.php">Plumbing Fixtures</a></li>
                                <li><a href="applications-hardware.php">Decorative Hardware</a></li>
                                <li><a href="applications-cookware.php">Cookware</a></li>
                            </ul><!--end whole column-->
                        </div><!--col-1-->
                </div><!--apps-drop-->
                </li><li> | </li>
                <!-- END APPLICATIONS DROP -->
                
                <!-- BEGIN NEWS & EVENTS -->
                <li><a href="news-events.php" class="drop">News &amp; Events</a>
                <!--div class="news-drop">the entire news dropdown menu
                    	<div class="col-4">the first left-most column of the entire dropdown menu
                        	<ul>for whole column
                            	<li><a href="news-events-pr.php">Press Releases</a></li>
                                <li><a href="news-events-tradeshows.php">Trade Shows</a></li>
                                <li><a href="news-events-ads.php">Advertisements</a></li>
                            </ul>end whole column
                        </div>col-1
                </div>news-drop-->
                </li><li> | </li>
                <!-- END NEWS & EVENTS -->
                             
                <!-- BEGIN PROVEN SOLUTIONS -->
<!--                  
                <li><a href="#" class="drop">Proven Solutions</a>
                <div class="proven-drop">
                    	<div class="col-1">
                        	<ul>
                            	<li><a href="#">Case Study #1</a></li>
                                <li><a href="#">Case Study #2</a></li>
                                <li><a href="#">Case Study #3</a></li>
                            </ul>
                        </div>
                </div>
                </li><li> | </li>
-->                
                <!-- END PROVEN SOLUTIONS -->
                
                <!-- BEGIN QUALITY -->
                <li><a href="quality.php" class="drop">Quality</a>
                <!--<div class="quality-drop">the entire quality dropdown menu
                    	<div class="col-5">the first left-most column of the entire dropdown menu
                        	<ul>for whole column
                            	<li><a href="wuality-iso.php">ISO</a></li>
                                <li><a href="quality-testing.php">Testing/QC</a></li>
                            </ul>end whole column
                        </div>col-1
                </div>quality-drop-->
                </li><li> | </li>
                <!-- END QUALITY -->
                
                <!-- BEGIN ENGINEER'S CORNER -->
                <li><a href="engineers.php" class="drop">Engineer's Corner</a>
                <div class="engineer-drop"><!--the entire engineer dropdown menu-->
                    	<div class="col-1"><!--the first left-most column of the entire dropdown menu-->
                        	<ul><!--for whole column-->
                            	<li><a href="engineers-speedchart.php">Buffing Wheel Speed Chart</a></li>
                                <li><a href="engineers-buffingsafety.php">Buffing Safety</a></li>
                                <li><span class="red">Technical Information</span>
                                	<ul>
                                    	<li><a href="engineers-availability.php">Flap Wheel Availability</a></li>
                                        <li><a href="engineers-diameterwidth.php">Flap Wheel Diameter &amp; Width</a></li>
                                        <li><a href="engineers-grainbacking.php">Flap Wheel Grain &amp; Backing</a></li>
                                        <li><a href="engineers-gritsize.php">Flap Wheel Grit Size</a></li>
                                        <li><a href="engineers-peripheralspeed.php">Determining the Peripheral Buffing Wheel Speed</a></li>
                                        <li><a href="buffingwheels-typesbw.php">Types of Buffing Wheels</a></li>
                                        <li><a href="buffingcompounds-solidbar.php">Solid Bar Buffing Compounds</a></li>
                                        <li><a href="buffingcompounds-liquid.php#tripoli">Tripoli Liquid Buffing Compounds</a></li>
                                    </ul>
                                </li>
                            </ul><!--end whole column-->
                        </div><!--col-1-->
                        <div class="col-6">
                        	<ul>
                        		<li><a href="engineers-coatedabrasives.php">Coated Abrasives</a></li>
                                <li><a href="engineers-buffinghints.php">Buffing Wheel Hints</a>
                                    <ul>
                                        <li><a href="engineers-speedpressure.php">Buffing Speed &amp; Pressure</a></li>
                                        <li><a href="engineers-safetyline.php">Division of Buffing Safety Line</a></li>
                                        <li><a href="engineers-positioning.php">Proper Positioning of Buffing Wheel</a></li>
                                        <li><a href="engineers-steeltooth.php">Steel Tooth Clinch Ring</a></li>
                                        <li><a href="engineers-flanges.php">Buffing Wheel Flanges - Safety</a></li>
                                        <li><a href="engineers-stacksshafts.php">Buffing Machine Stacks &amp; Shafts</a></li>
                                        <li><a href="engineers-shaping.php">Shaping a Flap Wheel</a></li>
                                        <li><a href="engineers-timehints.php">Time Saving Hints</a></li>
                                        <li><a href="engineers-nonubbin.php">No Nubbin System</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!--col-6-->
                </div><!--engineer-drop-->
                </li>
                <!-- END ENGINEER'S CORNER -->

                <!-- BEGIN LINKS -->
                <li><a href="links.php" class="drop">Links</a></li>
                <li> | </li>
                <!-- END LINKS -->
            </ul>
        </div><!--nav-left-->
        
        <div id="nav-right">
        	<ul id="navr">
            	<li><a href="index.php">Home</a></li><li> &bull; </li>
                
                <!-- BEGIN ABOUT -->
                <li><a href="about.php" class="drop">About</a>
                <!--<div class="about-drop">the entire about dropdown menu
                    	<div class="col-4">the first left-most column of the entire dropdown menu
                        	<ul>for whole column
                            	<li><a href="about-history.php">Company History</a></li>
                                <li><a href="about-affiliations.php">Affiliations</a></li>
                            </ul>end whole column
                        </div>col-1
                </div>about-drop	-->
                </li><li> &bull; </li>
                <!-- END ABOUT -->
                
                <!-- BEGIN CONTACT -->
                <li><a href="contact.php" class="drop">Contact</a>
                <!--<div class="contact-drop">the entire contact dropdown menu
                    	<div class="col-4">the first left-most column of the entire dropdown menu
                        	<ul>for whole column
                            	<li><a href="contact-inquiry.php">Inquiry Form</a></li>
                                <li><a href="contact-keycontacts.php">Key Contacts</a></li>
                                <li><a href="contact-directions.php">Directions/Map</a></li>
                            </ul>end whole column
                        </div>col-1
                </div>contact-drop-->
                </li>
                <!-- END CONTACT -->
            </ul>
        </div><!--nav-right-->
    </div><!--navigation-->