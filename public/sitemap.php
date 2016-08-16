<!DOCTYPE html>
<html lang="en">
<head>
<?php include "_includes/head.php" ?>
<title>Contact MRI</title>
</head>

<body>
<div class="page">
	<?php include "_includes/top.php" ?>
    <!--========================================================
                              HEADER
    =========================================================-->
	<?php include "_includes/navigation.php" ?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
    
        <section class="well bgcream">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
                    		<h1 class="xs-mb-25"><span class="h3 brown text-uppercase strong">Site Map</span><br>
                    		<span class="adelle">Marketing Results, Inc.</span></h1>
					</div>
					<div class="col-xs-12 col-sm-6">
                    		<ul>
                    			<li>Services
                                <ul>
									<li><a href="/services/">Overview</a></li>
                                    <li><a href="/services/database-marketing.php">Database Marketing</a></li>
                                    <li><a href="/services/player-development.php">Player Development</a></li>
                                    <li><a href="/services/market-research.php">Market Research</a></li>
                                    <li><a href="/services/brand-positioning.php">Brand Positioning</a></li>
                                    <li><a href="/services/casino-advertising.php">Casino Advertising</a></li>
                                    <li><a href="/services/digital-services.php">Digital Services</a></li>
                                </ul>
							</li>
                    		</ul>                           

                  </div>
					<div class="col-xs-12 col-sm-6">
						<ul>
                        		<li>Products
                                <ul>
                                    <li><a href="/products/app.php">App</a></li>
                                    <li><a href="/products/aim.php">AIM</a></li>
                                </ul>  
							</li>
						</ul> 
                    		<ul>
                            <li><a href="/about/index.php">About Us</a></li>
                            <li><a href="/contact/index.php">Contact Us</a></li>
                            <li><a href="/general/privacy-policy.php">Privacy Policy</a></li>
                            <li><a href="/sitemap.php">Site Map</a></li>
                    		</ul>
                    
                    </div>
				</div>
			</div>
        </section>
        
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->    
    <?php include "_includes/footer.php" ?>
</div>

<?php include "_includes/script.php" ?>
<script src="_js/script.js"></script>
<script>
$(document).ready(function() {
	$('#menu-contact').addClass('active');
});
</script>
<script>
$('.post').each(function() {	
	$(this)
	  .mouseenter(function() {
		$(this).find('.post_cnt').fadeOut(300);
		$(this).find('.post_readmore').css({ 'z-index':10 });
	  })
	  .mouseleave(function() {
		$(this).find('.post_cnt').fadeIn(300);
		$(this).find('.post_readmore').css({ 'z-index':0 });
	  });
});
</script>
</body>
</html>