<?php 
$cat = "News & Events";
$catlink = "news-events.php";
$title = "News & Events";
$description = "schaffner news and events, schaffner news, schaffner events";
include_once ('includes/header.php'); 
?>
    
    <div class="content">
    	<div class="col-left">
        	<?php include_once ('includes/breadcrumbs.php'); ?>

            <h1><?php echo $title; ?></h1>
             <h2 style="font-size:1.2em">Schaffner Manufacturing Acquires Barker Brothers</h2>
            <div class="news">
            <img src="images/barker-logo.jpg" alt="Schaffner Manufacturing Acquires Barker Brothers" />
            <p>Schaffner Manufacturing Company, a producer of flap wheels, buffing wheels and buffing compounds for custom metal finishing applications, has purchased the assets of 
                Barker Brothers, a family-owned manufacturer of buffing wheels, flap wheels, convolute wheels and unitized abrasive wheels. Barker Brothers is based in Ridgewood, NY, 
                and has been in business for more than 100 years. The two companies represent more than 170 years of finishing experience in the automotive, aircraft, marine, housewares 
                and woodworking industries. 
            </p>

            <p>"We are excited about being able to offer established and new customers a wider variety of finishing solutions than ever before," says Bill Schaffner, president of Schaffner Manufacturing. 
                "This acquisition will give our customers greater convenience and cost efficiencies through economies of scale." 
            </p>
            </div>
             
             <div class="clearfix"></div>
            
            <h5>News Releases</h5>
            <p>Archived News Releases:</p>
            
            <a href="news-spectrum.php" target="_blank"><div class="news-release">
                    Schaffner Receives Collaboration Award from Spectrum Brands<br />
                    <small>(April 14, 2014)</small>
            </div></a>
            
            <a href="pdfs/Belanger- Abrasives-Acquisition.pdf" target="_blank"><div class="news-release">
            Schaffner Acquires Belanger Abrasives<br />
            <small>(June 17, 2009)</small>
            </div></a>

			<a href="pdfs/Alcoa-Supplier-Award-2007.pdf" target="_blank"><div class="news-release">
            Schaffner Earns Award of Excellence From Alcoa Aerospace Center<br />
            <small>(April 16, 2007)</small>
            </div></a>

			<a href="pdfs/MASCO-News-Release.pdf" target="_blank"><div class="news-release">Schaffner Wins MASTAR Award From MASCO Corporation<br />
            <small>(November 15, 2006)</small>
            </div></a>
            
            <!--<h5>Trade Shows</h5>
            
            <h5>Advertisements</h5>-->
        </div><!--col-left-->
        
        <div class="col-right">
        <?php include_once ('includes/hp-right.php'); ?>	
        </div><!--col-right-->
<?php include_once ('includes/footer.php'); ?>