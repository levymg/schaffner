<?php 
$cat = "Engineer's Corner";
$catlink = "engineers.php";
$cat3 = "Epoxy Flap Wheel Availability";
$cat3link = "engineers-availability.php";
$title = "Epoxy Flap Wheel Availability";
$description = "flap wheels, flapwheel, flap wheel availability, width, diameter";
include_once ('includes/header.php'); 
?>
    
   <div class="content">
    	<div class="col-left">
        	<?php include_once ('includes/breadcrumbs.php'); ?>

        	<h1><?php echo $title; ?></h1>
            <p>Schaffner Flap Wheels are available in a wide variety of diameters, face widths and grits to meet your metal finishing requirements.</p>
            
			<p>Outside diameter of the flap wheel ranges from 3" to 30".</p>
            
			<p>Widths range from 1/4" to 10".</p>
            
			<p>Grit sizes range from 24 to 400 in silicon carbide or aluminum oxide, with arbor holes ranging from 1/2" to 14".</p>
            
			<p>Center plates are available in the following diameters - 1-1/4", 3", 4", 5", 8', 10", and 16".</p>
            
			<p>We also provide flap wheels that are pre-shaped to your specifications, and <em>the shape will be maintained throughout the life of the wheel.</em></p>
            
			<p>All Schaffner Flap Wheels are customized to meet your needs. When ordering or requesting a quote, please provide us with these specifications:</p>
            <ul class="list">
            	<li><a href="engineers-diameterwidth.php">Diameter &amp; Width</a></li>
                <li><a href="engineers-grainbacking.php">Grain</a></li>
                <li>Arbor Size</li>
                <li>Estimated Quantity</li>
            </ul>
            
			<p>Other key considerations are <a href="engineers-grainbacking.php">grain &amp; backing</a> and <a href="engineers-gritsize.php">grit size</a>.</p>
        </div><!--col-left-->
        
        <div class="col-right">
        <?php include_once ('includes/r-engineer.php'); ?>
        <?php include_once ('includes/hp-right.php'); ?>	
        </div><!--col-right-->
<?php include_once ('includes/footer.php'); ?>        