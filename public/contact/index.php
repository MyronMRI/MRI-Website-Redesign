<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../_includes/head.php" ?>
<title>Contact MRI</title>
</head>

<body>
<div class="page">
	<?php include "../_includes/top.php" ?>
    <!--========================================================
                              HEADER
    =========================================================-->
	<?php include "../_includes/navigation.php" ?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
    
        <section class="well bgcream">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-7 col-lg-8">
                    		<h1><span class="h3 brown text-uppercase strong">visit us</span><br><span class="adelle">Locations serving the U.S. &amp; Canada</span></h1>
						<div class="row">
							<div class="col-xs-12 col-sm-6 xs-mt-15">
                            		<p><span class="semi">Las Vegas Office</span><br><span class="gray">2900 West Horizon Ridge Parkway<br>Suite 200<br>Henderson, NV 89052<br>Phone: <a href="tel:7023613850" class="gray">(702) 361-3850</a><br><a href="https://goo.gl/maps/BpbyGhYbwsP2" target="_blank">Driving directions to our LV Office</a></span></p>
                            </div>
							<div class="col-xs-12 col-sm-6 xs-mt-15">
                            		<p><span class="semi">Atlantic City/Philadelphia</span><br><span class="gray">604 Liberty Place<br>Lakeside Business Park<br>Sicklerville, NJ 08081<br>Phone: <a href="tel:8567403334" class="gray">(856) 740-3334</a><br><a href="https://goo.gl/maps/2Z2RwKqjBQp" target="_blank">Driving directions to our NJ Office</a></span></p>
                            </div>
						</div>
                        <div class="row">
							<div class="col-xs-12 xs-mt-25 text-center-xs text-left-not-xs"><a href="/contact/" class="btn btn-black xs-mt-25">Request a Proposal</a> <a href="#" class="btn btn-light-blue visible-xs-inline-block visible-sm-inline-block xs-mt-25">View Scorecard</a> <a href="#" class="btn btn-black visible-xs-inline-block visible-sm-inline-block xs-mt-25">View Firm Profile</a></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-4 text-right hidden-xs hidden-sm">
                    		<a href="#" class="btn btn-light-blue xs-mt-25">View Video</a> <a href="#" class="btn btn-black xs-mt-25">View Firm Profile</a>
                    </div>
				</div>
			</div>
        </section>
        
    </main>
    
    <!--========================================================
                              CONTACT
    =========================================================-->
    <?php include "../_includes/contact-blue.php" ?>

    <!--========================================================
                              MAP
    =========================================================-->

<section class="bglight-blue">
    <div class="container-fluid-no-gutter">
        <div class="row-no-gutter">
                <div class="col-sm-7 col-sm-push-5 bgblack-transparent">
                        <!--RD Google Map-->
                        <div class="map" style="position:relative; left:0 !important;">
                            <div id="google-map" class="map_model"></div>
                            <ul class="map_locations">
                                <li data-x="-115.113261" data-y="35.999344">
                                    <p class="text-contrast strong light-blue">2900 West Horizon Ridge Parkway, Suite 200, Henderson, NV 89052 <span>(702) 361-3850</span></p>
                                </li>
                            </ul>
                        </div>
                        <!--RD Google Map-->
				</div>
                <div class="col-sm-5 col-sm-pull-7">
                    <div class="panel pull-right ultraheading samesize white xs-pl-30 xs-pr-30 flex vertical-center text-uppercase largecaption text-center-xs text-left-not-xs">
                            <div>
                                <p><a href="tel:7023613850" class="strong white">702.361.3850</a><br><span class="thin">Las Vegas<br>Atlantic City<br>Philadelphia</span></p>
                                <p><a href="#" class="icon fa fa-facebook white"></a> <a href="#" class="icon fa fa-twitter white"></a> <a href="#" class="icon fa fa-google-plus white"></a></p>
                            </div>
                    </div>
				</div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>


    <!--========================================================
                              FOOTER
    =========================================================-->    
    <?php include "../_includes/footer.php" ?>
</div>

<?php include "../_includes/script.php" ?>
<script src="../_js/script.js"></script>
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
<!-- Hide the Contact Lines in the Footer -->
<script>
$('#footer-contact-info').addClass('hidden');
</script>
</body>
</html>