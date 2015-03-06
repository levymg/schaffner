<?php 
$cat = "Products";
$catlink = "products.php";
$cat2 = "Flap Wheels";
$cat2link = "flapwheels.php";
$cat3 = "Technical Information";
$cat3link = "flapwheels-techinfo.php";
$productName = "Using Nonwoven SATI Flap Wheels";
$productLink = "flapwheels-usingflapwheels.php";
$title = "Using Nonwoven SATI Flap Wheels";
$description = "flap wheels, flapwheels, using flap wheels, mechanical flap wheels";
include_once ('includes/header.php'); 
?>
    
    <div class="content">
    	<div class="col-left">
        	<?php include_once ('includes/breadcrumbs.php'); ?>

        	<h1><?php echo $title; ?></h1>
            <img src="images/flap-wheeluse1.jpg" width="150" height="151" alt="Using Flap Wheels" style="float:right;padding:10px;" />
            <p>Here are some helpful hints for working with flap wheels:</p>
            <ul class="list">
            	<li>Spindle speed doesn't need to be adjusted as the tool wears</li>
                <li>The shorter the flaps become, the stiffer they are, thereby compensating for the reduced surface feet per minute (SFPM)</li>
                <li><strong>The cutting and finishing action of a Schaffner flap wheel is the same from the time a new wheel is put into use until the wheel is removed</strong></li>
                <li>The higher the SFPM, the higher the rate of cut</li>
                <img src="images/flap-wheeluse2.jpg" width="150" height="151" alt="Using Flap Wheels" style="float:right;padding:10px;" />
                <li>Slower speed will lengthen the scratch &amp; create a more decorative finish</li>
                <li>Ideal SFPM for <strong>Cleaning</strong> is 2,000-5,000</li>
                <li>Ideal SFPM for <strong>De-Burring</strong> is 3,000-6,500</li>
                <li>Ideal work pressure for Cleaning &amp; De-Burring is 10-20 lbs./in.</li>
                <li>Ideal SFPM for <strong>Decorative Finish</strong> is 500-2,500</li>
                <li>Ideal work pressure for Decorative Finish is 5-10 lbs./in.</li>
        </div><!--col-left-->
        
        <div class="col-right">
        <?php include_once ('includes/r-flapwheels.php'); ?>
        <?php include_once ('includes/hp-right.php'); ?>	
        </div><!--col-right-->
<?php include_once ('includes/footer.php'); ?>        