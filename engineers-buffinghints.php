<?php 
$cat = "Engineer's Corner";
$catlink ="engineers.php";
$cat2 = "Buffing Wheel Hints";
$cat2link = "engineers-buffinghints.php";
$title = "Buffing Wheel Hints";
$description = "buffing wheel hints, buffing wheels, buffing, buffing hints, time saving buffing hints";
include_once ('includes/header.php'); 
?>
    
    <div class="content">
    	<div class="col-left">
        	<?php include_once ('includes/breadcrumbs.php'); ?>

        	<h1><?php echo $title; ?></h1>
            <a href="downloads/Schaffner-Buffing-Hints.pdf" target="_blank"><img src="images/buffinghints.gif" width="200" height="197" alt="Buffing Hints" class="photo" /></a>
            <p>Over the years Schaffner Manufacturing has provided helpful hints on buffing and metal finishing. We have taken this practice to the next level by creating a buffing hints library to offer more information in an easier way to use and navigate.</p>
            
            <p>Below is a list of articles and hints arranged by category to assist you with your metal finishing and buffing questions. We will continue to add new hints over time so that you'll want to bookmark this page for easy reference to buffing and polishing hints.</p>
            
            <p><strong>Buffing Safety Hints:</strong></p>
            <ul class="list">
            	<li><a href="engineers-speedpressure.php">Buffing Speed &amp; Pressure</a></li>
                <li><a href="engineers-safetyline.php">Division of Buffing Safety Line</a></li>
                <li><a href="engineers-positioning.php">Proper Positioning of Buffing Wheel</a></li>
                <li><a href="engineers-steeltooth.php">Steel Tooth Clinch Ring</a></li>
                <li><a href="engineers-flanges.php">Buffing Wheel Flanges - Safety</a></li>
            </ul>
            
            <p><strong>Time Saving Buffing Hints:</strong></p>
            <ul class="list">
            	<li><a href="engineers-stacksshafts.php">Buffing Machine Stacks &amp; Shafts</a></li>
                <li><a href="engineers-shaping.php">Shaping a Flap Wheel</a></li>
                <li><a href="engineers-timehints.php">Time Saving Hints</a></li>
                <li><a href="engineers-nonubbin.php">No Nubbin System</a></li>
            </ul>
        </div><!--col-left-->
        
        <div class="col-right">
        <?php include_once ('includes/r-engineer.php'); ?>
        <div class="right-bgd">
            <div class="col-right-info">
                <a href="http://schaffnermfg.thomasnet-navigator.com/category/all-categories"><img src="images/order.jpg" width="100" height="83" alt="Order Online!" /></a>
                <h4><a href="http://schaffnermfg.thomasnet-navigator.com/category/all-categories">Order Online!</a></h4>
                <p>Purchase our Flap Wheels, Buffing Wheels and Buffing Compounds quickly and easily.</p>
            </div><!--col-right-info-->
            
            <div class="col-right-info" style="height:195px;">
                <a href="quote.php"><img src="images/quote.jpg" width="100" height="42" alt="Request A Quote" /></a>
                <h4><a href="quote.php">Request A Quote</a></h4>
                <p>Let us show you how we can meet your specific requirements. Ask us for a quote today, and you'll be on your way to buffing with greater efficiency and success than ever.</p>
            </div><!--col-right-info-->
            
            <div class="col-right-info iso">
                <img src="images/iso.jpg" width="178" height="38" alt="ISO Certified" />
                <img src="images/cards.jpg" width="115" height="30" alt="We accept Visa, Mastercard, and American Express payments" />
                <a href="#"><img src="images/facebook.jpg" width="30" height="30" alt="Like us on Facebook" /></a>
                <a href="#"><img src="images/linkedin.jpg" width="30" height="30" alt="Connect with us on LinkedIn" /></a>
                <a href="http://www.youtube.com/user/SchaffnerMfg"><img src="images/youtube.jpg" width="30" height="30" alt="Watch us on YouTube" /></a>
                
                <ul class="col-right-list">
                    <li><a href="terms.php">Terms and Conditions</a></li><li> | </li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                </ul>
            </div><!--col-right-info-->
          </div><!--right-bgd-->
        </div><!--col-right-->
<?php include_once ('includes/footer.php'); ?>        