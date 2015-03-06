<?php 
$cat = "Products";
$catlink = "products.php";
$cat2 = "Buffing Wheels";
$cat2link = "buffingwheels.php";
$cat3 = "Technical Information";
$cat3link = "buffingwheels-techinfo.php";
$productName = "Cut vs. Color Buffing";
$productLink = "buffingwheels-cutcolor.php";
$title = "Cut vs. Color Buffing";
$description = "buffing wheels, buffing, cut buffing, color buffing, tangential buffing, mush buffing, color buff, cut buff, buff";
include_once ('includes/header.php'); 
?>
    
    <div class="content">
    	<div class="col-left">
        	<?php include_once ('includes/breadcrumbs.php'); ?>

        	<h1><?php echo $title; ?></h1>
			<p>Within both Tangential and Mush Buffing there is the option to Cut Buff or Color Buff. This operation has to do with the direction that the part moves to the rotation of the buffing wheel. The finish can be very different.</p>

			<p>The Cut Buff motion is more aggressive in removing small scratches and produces a smooth but dull finish on the part. It also has leaves a thin compound residue that has the appearance of a haze.</p>

			<p>The Color Buff motion is not as aggressive in removing imperfections but produces a more reflective (shiny) finish. It also removes most of the compound residue leaving the part cleaner than the Cut Buff motion.</p>     
            
            <div style="width:270px;padding-right:25px;float:left;">
			<img src="images/cut-buffing.jpg" width="214" height="161" alt="Cut Buffing" />
			<p><strong>Cut Buffing:</strong> is accomplished by pressing the part firmly against the buff and "pulling" the part along the buff against the direction of the buffing wheel rotation. It usually takes several passes to remove the imperfections in the piece.</p>
            </div>
			
            <div style="width:270px;float:left;">
            <img src="images/cut-buffing2.jpg" width="214" height="161" alt="Color Buffing" />
			<p><strong>Color Buffing:</strong> is usually done last and is accomplished by pressing "lightly" on the buff and allowing the part to move slowly in the same direction as the buffing wheel. It often takes no more than two passes in the color direction to achieve the desired finish.</p>
            </div>
        </div><!--col-left-->
        
        <div class="col-right">
        <?php include_once ('includes/r-buffingwheels.php'); ?>
        <?php include_once ('includes/hp-right.php'); ?>	
        </div><!--col-right-->
<?php include_once ('includes/footer.php'); ?>        