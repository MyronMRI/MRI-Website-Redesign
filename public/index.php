<?php
include ('_includes/cms.php');

  // load records from 'homepage_page'
  list($homepage_pageRecords, $homepage_pageMetaData) = getRecords(array(
    'tableName'   => 'homepage_page',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

  // load records from 'homepage_main_services'
  list($homepage_main_servicesRecords, $homepage_main_servicesMetaData) = getRecords(array(
    'tableName'   => 'homepage_main_services',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
  
  // load records from 'homepage_main_products'
  list($homepage_main_productsRecords, $homepage_main_productsMetaData) = getRecords(array(
    'tableName'   => 'homepage_main_products',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
  
  // load records from 'homepage_miscellaneous'
  list($homepage_miscellaneousRecords, $homepage_miscellaneousMetaData) = getRecords(array(
    'tableName'   => 'homepage_miscellaneous',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "_includes/head.php" ?>
<title>Marketing Results, Inc.</title>
<link href="_libs/bxslider/jquery.bxslider.css" type="text/css" rel="stylesheet">
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
<!-- Start Section 1 -->
<div class="bxslider-main">
<?php foreach ($homepage_main_servicesRecords as $record): ?>
<?php foreach ($record['service_hero_image'] as $index => $upload): ?>
<section class="bg-fixed-right" style="background-image:url('<?php echo htmlencode($upload['urlPath']) ?>');">
<?php endforeach ?>

    <div class="container">
        <div class="row">
                <div class="col-md-6 col-lg-5">
                <div class="panel ultraheading white xs-pl-30 xs-pr-30 flex vertical-center largecaption-height text-uppercase" style="background:rgba(187,86,0,0.6);">
                        <div><strong><?php echo htmlencode($record['service_tagline_1']) ?></strong><br><?php echo htmlencode($record['service_tagline_2']) ?></div>
                </div>
            </div>
                <div class="col-md-6 col-lg-7">
                <!-- This is empty -->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="adjustleft" class="col-md-6 col-lg-5">
            			<?php foreach ($record['service_image'] as $index => $upload): ?>
                    <div class="panel largecaption-height bgcover" style="background-image:url('<?php echo htmlencode($upload['urlPath']) ?>');"></div>
                    <?php endforeach ?>
            </div>
            <div id="adjustright" class="col-md-6 col-lg-7"></div>
        </div>
    </div>

</section>
<?php endforeach ?>
</div>
<!-- End Section 1 -->

<!-- Start Section 2 -->
<section class="well-0 bgcream">
<div class="container">
<div class="bxslider">
<!-- Start bxSlider -->
<?php foreach ($homepage_main_productsRecords as $record): ?>
<div>
	<div class="row-no-gutter">
		<div class="col-xs-12">
			<div class="panel bxslider-text-container products-caption" style="background:url('_img/bg-home-bxslider.jpg') no-repeat center right; background-size:cover;">
            		<div class="products-row row-no-gutter">
            			<div class="col-xs-12 col-md-6 col-lg-5 hidden-xs hidden-sm">
                        <?php foreach ($record['product_image'] as $index => $upload): ?>
                        <img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="products-image">
                        <?php endforeach ?>
					</div>
            			<div class="col-xs-12 col-md-6 col-lg-7">
                    		<div class="bxslider-text xs-pl-30 xs-pr-30">
                            <p>
                            <span class="h3 text-uppercase white strong"><?php echo htmlencode($record['product_header']) ?></span><br>
                            <span class="h2 adelle semi light-blue"><?php echo htmlencode($record['product_subheader']) ?></span>
                            </p>
                            <div class="white"><?php echo $record['product_content']; ?></div>
                        </div>    
					</div>
            		</div>
            </div>
		</div>
	</div>
</div>
<?php endforeach ?>
<!-- End bxSlider -->
</div>
</div>
</section>
<!-- End Section 2 -->

<!-- Start Why Choose MRI -->
<?php foreach ($homepage_pageRecords as $record): ?>
<section class="well-2 bgcream">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center xs-mt-25 xs-mb-50"><p class="h1 strong text-uppercase"><?php echo htmlencode($record['main_header']) ?></p><p class="h4 xs-mt-10 light-brown"><?php echo htmlencode($record['main_subheader']) ?></p></div>
		</div>
        <div class="row bgequals">
                <div class="col-xs-12 col-sm-4 gray">
                		<div class="panel md-pr-20">
                		<p class="h3 rust text-center text-uppercase"><strong><?php echo htmlencode($record['main_benefit_header_1']) ?></strong></p>
					<p class="h3 black thin text-center text-uppercase"><?php echo htmlencode($record['main_benefit_subheader_1']) ?></p>
                    <p><?php echo $record['main_benefit_content_1']; ?></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 gray">
                		<div class="panel md-pr-20">
                		<p class="h3 rust text-center text-uppercase"><strong><?php echo htmlencode($record['main_benefit_header_2']) ?></strong></p>
					<p class="h3 black thin text-center text-uppercase"><?php echo htmlencode($record['main_benefit_subheader_2']) ?></p>
                    <p><?php echo $record['main_benefit_content_2']; ?></p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 gray">
                		<div class="panel md-pr-20">
                		<p class="h3 rust text-center text-uppercase"><strong><?php echo htmlencode($record['main_benefit_header_3']) ?></strong></p>
					<p class="h3 black thin text-center text-uppercase"><?php echo htmlencode($record['main_benefit_subheader_3']) ?></p>
                    <p><?php echo $record['main_benefit_content_3']; ?></p>
                    </div>
                </div>
        </div>
	</div>
</section>
<?php endforeach ?>
<!-- End Why Choose MRI -->

<!-- Start Section 3-->
<div class="bxslider-main">
<?php foreach ($homepage_miscellaneousRecords as $record): ?>
<?php foreach ($record['miscellaneous_hero_image'] as $index => $upload): ?>
<section class="bg-fixed-right" style="background-image:url('<?php echo htmlencode($upload['urlPath']) ?>');">
<?php endforeach ?>

    <div class="container">
        <div class="row">
                <div class="col-md-6 col-lg-5 content-container-left">
                <div class="panel bgorange-transparent ultraheading white xs-pl-30 xs-pr-30 flex vertical-center largecaption-height text-uppercase">
                    <div class="arrow-link-copy"><strong>We manage all the aspects of</strong><br>casino digital marketing operations</div>
                    <div class="arrow-link-arrow wow fadeInLeft hide-anim" data-wow-duration="2s" data-wow-delay="0.3s" data-wow-iteration="100">
                        <i class="fa fa-angle-double-right white" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
                <div class="col-md-6 col-lg-7">
                <!-- This is empty -->
            </div>
        </div>
    </div>

    <div class="bgblack-transparent">
    <div class="container">
        <div class="row">
            <div id="adjustleft" class="col-md-6 col-lg-5">
            			<?php foreach ($record['miscellaneous_image'] as $index => $upload): ?>
                    <div class="panel largecaption-height bgcover" style="background-image:url('<?php echo htmlencode($upload['urlPath']) ?>');"></div>
                    <?php endforeach ?>
            </div>
		<div id="adjustright" class="col-md-6 col-lg-7">
			<div class="panel largecaption-height flex vertical-center">
				<div class="white">
                		<p class="h3 strong xs-mb-25 text-uppercase white">ANIMATED LANDING PAGES INCREASE EMAIL CLICK-THROUGHS BY 30%</p>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volup dolor sit amet, consectetur, adipisci velit.</p>
                </div>
			</div>
        </div>
    	</div>    
    </div>
    </div>

</section>
<?php endforeach ?>
</div>
<!-- End Section 3 -->

<!-- Start Section 4 -->
<div class="bxslider-3rd">
<?php foreach ($homepage_miscellaneousRecords as $record): ?>
<section>
	<div class="3rdsectionoffset pull-left" style="background:url('/_img/3rd-section-image-left.jpg') no-repeat top left; background-size:cover;"></div>
	<div class="3rdsectionleft pull-left">
		<div class="panel bgwhite ultraheading xs-pl-30 xs-pr-30 flex vertical-center largecaption-height text-uppercase arrow-link">
			<div class="arrow-link-copy"><strong class="rust">Mobile app solutions</strong><br>With the gambler in mind</div>
            <div class="arrow-link-arrow wow fadeInLeft hide-anim" data-wow-duration="2s" data-wow-delay="0.3s" data-wow-iteration="100">
                <i class="fa fa-angle-double-right rust" aria-hidden="true"></i>
            </div>
		</div>
        <div class="panel ultraheading white xs-pl-30 xs-pr-30 flex vertical-center largecaption-height text-uppercase" style="background:url('http://test.marketingresults.net/admin/uploads/app_image1.jpg') no-repeat center center; background-size:cover;"></div>
    </div>
    <?php foreach ($record['miscellaneous_hero_image_2'] as $index => $upload): ?>
    <div class="3rdsectionright pull-left" style="background:url('<?php echo htmlencode($upload['urlPath']) ?>') no-repeat top right; background-size:cover;">	</div>	
	<?php endforeach ?>
    <div style="clear:both"></div>
</section>
<?php endforeach ?>
</div>
<!-- End Section 4 -->

    <!--========================================================
                              MAP
    =========================================================-->
<!-- Start Map Section for LG -->
<section class="bgrust visible-lg">
	<div class="contentleft pull-left">
        <div class="panel white xs-pl-10 xs-pr-10 largecaption-map wow fadeInLeft hide-anim pull-right" data-wow-duration="1s" data-wow-delay="0.3s" style="position:relative;">
        		<div style="position:relative; top:50%; transform:translateY(-50%);">
			<p class="h1 xs-mb-15 text-uppercase"><a href="tel:7023613850" class="strong white telephone-number">702.361.3850</a></p>
			<p class="h3 thin xs-mb-15 text-uppercase">Las Vegas</p>
			<p class="h3 thin xs-mb-15 text-uppercase">Atlantic City</p>
			<p class="h3 thin xs-mb-15 text-uppercase">Philadelphia</p>
			<p><a href="#" class="icon fa fa-facebook white xs-mr-20"></a><a href="#" class="icon fa fa-twitter white xs-mr-20"></a><a href="#" class="icon fa fa-linkedin white xs-mr-20"></a><a href="#" class="icon fa fa-google-plus white"></a></p>
            <p class="small">Marketing Results, Inc. &copy; <?php echo date('Y') ?>. <a href="http://test.marketingresults.net/general.php?1" class="white">Privacy Policy</a></p>
            </div>
        </div>
    </div>
    <div class="contentright pull-left">
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
    <div style="clear:both"></div>
</section>
<!-- End Map Section for LG -->

<!-- Start Map Section for XS, SM, MD -->
<section class="bgrust hidden-lg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
                <div class="panel ultraheading white xs-pl-10 xs-pr-10 largecaption-map text-uppercase wow fadeInLeft hide-anim pull-right" data-wow-duration="1s" data-wow-delay="0.3s" style="position:relative;">
                    <p>
                    		<span class="h1 xs-mb-15"><a href="tel:7023613850" class="strong white telephone-number">702.361.3850</a></span><br class="hidden-lg">
						<span class="h3 thin xs-mb-15">Las Vegas</span><br class="visible-xs-inline">
                        <span class="h3 thin xs-mb-15">Atlantic City</span><br class="visible-xs-inline">
                        <span class="h3 thin xs-mb-15">Philadelphia</span><br class="hidden-lg-inline">
                        <a href="#" class="icon fa fa-facebook white xs-mr-20"></a>
                        <a href="#" class="icon fa fa-twitter white xs-mr-20"></a>
                        <a href="#" class="icon fa fa-linkedin white xs-mr-20"></a>
                        <a href="#" class="icon fa fa-google-plus white"></a><br class="hidden-lg-inline">
					</p>
                </div>
            </div>
			<div class="col-xs-12 xs-pb-40">
				<div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3227.8576849534616!2d-115.11544998473241!3d35.99934378012128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8ce0c0d40aadf%3A0xea2d99cd37ca650f!2s2900+W+Horizon+Ridge+Pkwy%2C+Henderson%2C+NV+89052!5e0!3m2!1sen!2sus!4v1472078711100" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
		</div>
	</div>
</section>
<!-- End Map Section for XS and SM -->

        
</main>

    <!--========================================================
                              FOOTER
    =========================================================-->    
    <?php include "_includes/footer.php" ?>
</div>

<?php include "_includes/script.php" ?>
<script src="_js/script.js"></script>
<script src="_libs/bxslider/jquery.bxslider.js"></script>
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
	pager: false,
	controls: true,
	auto: false,
    onSliderLoad: function(){
        $(".bxslider").css("visibility", "visible");
      }
  });
  $('.bxslider-main').bxSlider({
	mode: 'fade',
	pager: false,
	controls: false,
	auto: true,
	speed: 2000,
	pause: 5000,
    onSliderLoad: function(){
        $(".bxslider-main").css("visibility", "visible");
      }
  });
  $('.bxslider-3rd').bxSlider({
	mode: 'fade',
	pager: false,
	controls: false,
	auto: true,
	speed: 2000,
	pause: 3000,
    onSliderLoad: function(){
        $(".bxslider-3rd").css("visibility", "visible");
      }
  });

});
</script>
<script>
$(document).ready(function() {
	var bxslidertextcontainer = $('.bxslider-text-container').height();
	var bxslidertext = $('.bxslider-text').height();
	var poffset = (bxslidertextcontainer - bxslidertext) / 2;
	$('.bxslider-text').css({ 'padding-top':poffset });
});
</script>
<!-- Make the map section fluid and aligned -->
<script>
$(document).ready(function() {
	var wwidth = $(window).width();
	var cwidth = $('.container').width();
	var coffset = Math.abs((wwidth-cwidth)/2);
	var ccl = $('.content-container-left').width();
	var cclh = $('.3rdsectionleft').height();
	$('.contentleft').css({
		'width':(ccl+coffset)
	});
	$('.contentright').css({
		'width':(wwidth - (ccl+coffset))
	});
	$('.3rdsectionoffset').css({
		'width':coffset,
		'height':cclh
	});
	$('.3rdsectionleft').css({
		'width':ccl,
		'height':cclh
	});
	$('.3rdsectionright').css({
		'width':(wwidth - (ccl+coffset)),
		'height':cclh
	});
	$('.3rdsectionslider').css({
		'width':'100%',
		'height':cclh
	});
});
</script>
<!-- Hide the Contact Lines in the Footer -->
<script>
$('#footer-contact-info').addClass('hidden');
</script>
<!-- Change gutter-less row on the Products bxslider -->
<script>
$(window).on('load, resize', function() {
	if ($(this).width() >= 768) { $('.products-caption').find('.products-row').removeClass('row').addClass('row-no-gutter');	} 
	else { $('.products-caption').find('.products-row').removeClass('row-no-gutter').addClass('row'); }
});
</script>
</body>
</html>