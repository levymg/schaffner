<?php 
$cat = "Products";
$catlink = "products.php";
$cat2 = "Buffing Wheels";
$cat2link = "buffingwheels.php";
$productName = "Tangential";
$productLink = "buffingwheels-tangential.php";
$title = "Tangential";
$description = "tangential buffing, buffing wheels, tangential, buffing, buff";
include_once ('includes/header.php'); 
?>
    
    <div class="content">
    	<div class="col-left">
        	<?php include_once ('includes/breadcrumbs.php'); ?>

        	<h1><?php echo $title; ?></h1>
            <img src="images/tangential-buffing1.jpg" width="186" height="200" alt="Tangential Buffing" class="photo" />
            <p>For more than 100 years, the tangential buff method has been the mainstay of mechanical metal finishing. Typically, it uses narrow buff heads and small-to medium-diameter buff wheels of 12"-18", turning at high speeds up to 1750 rpm. In the process the buffs cover only the buffing area.</p>

			<p>The key to effective Tangential Buffing is to run fast, hard and hot without burying the part deep into the buff wheel. The buffing surface is best positioned tangential to the buff, at a 90&deg; angle, hence the name.</p>
			
			<p>Tangential buffing is ideal for:</p>
            <img src="images/tangential-buffing2.jpg" width="186" height="200" alt="Tangential Buffing" class="photo" />
            <ul class="list">
            	<li>Hand Operations (part easily manipulated)</li>
                <li>Robotic Applications</li>
                <li>Flat or Round Parts (without complex geometries)</li>
                <li>Simple Shapes (ferrous and non-ferrous)</li>
            </ul>
            
			<p>Tangential buffs are usually all-cotton because temperatures are too hot for poly-cotton fabrics.</p>
        </div><!--col-left-->
        
        <div class="col-right">
        <?php include_once ('includes/r-buffingwheels.php'); ?>
        <?php include_once ('includes/hp-right.php'); ?>	
        </div><!--col-right-->
<?php include_once ('includes/footer.php'); ?>        