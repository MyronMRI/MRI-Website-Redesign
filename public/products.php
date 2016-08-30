<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'admin/lib/viewer_functions.php';
  $dirsToCheck = array('D:/inetpub/wwwroot/www.marketingresults.net/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'products'
  list($productsRecords, $productsMetaData) = getRecords(array(
    'tableName'   => 'products',
    'where'       => whereRecordNumberInUrl(0),
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $productsRecord = @$productsRecords[0]; // get first record
  if (!$productsRecord) { dieWith404("Record not found!"); } // show error message if no record found

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "_includes/head.php" ?>
<title><?php echo htmlencode($productsRecord['title']) ?></title>
<link rel="stylesheet" href="_libs/swipebox/css/swipebox.css">

<style>
@media screen and (min-width:320px) {
	.multiple-hero-images {
        		<?php foreach ($productsRecord['product_hero_mobile'] as $index => $upload): ?>
			<?php if ($index >= 1) { continue; } // limit uploads shown ?>
			background-image:url('<?php echo htmlencode($upload["urlPath"]) ?>');
			<?php endforeach ?>
	}
}
@media screen and (min-width:1024px) {
	.multiple-hero-images {
        		<?php foreach ($productsRecord['product_hero_tablet'] as $index => $upload): ?>
			<?php if ($index >= 1) { continue; } // limit uploads shown ?>
			background-image:url('<?php echo htmlencode($upload["urlPath"]) ?>');
			<?php endforeach ?>
	}
}
@media screen and (min-width:1440px) {
	.multiple-hero-images {
        		<?php foreach ($productsRecord['product_hero_small_desktop'] as $index => $upload): ?>
			<?php if ($index >= 1) { continue; } // limit uploads shown ?>
			background-image:url('<?php echo htmlencode($upload["urlPath"]) ?>');
			<?php endforeach ?>
	}
}
@media screen and (min-width:2008px) {
	.multiple-hero-images {
        		<?php foreach ($productsRecord['product_hero_image'] as $index => $upload): ?>
			<?php if ($index >= 1) { continue; } // limit uploads shown ?>
			background-image:url('<?php echo htmlencode($upload["urlPath"]) ?>');
			<?php endforeach ?>
	}
}
</style>


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

		<?php if (!($productsRecord['multiple_hero_images'])): ?>
        
        <?php foreach ($productsRecord['product_hero_image'] as $index => $upload): ?>
			<?php if ($index >= 1) { continue; } // limit uploads shown ?>
			<section class="bg-fixed-right" style="background-image:url(<?php echo htmlencode($upload['urlPath']) ?>);">
        <?php endforeach ?>
        
        <?php endif ?>
        
        <?php if (($productsRecord['multiple_hero_images'])): ?>

			<section class="bg-fixed-right multiple-hero-images">

        <?php endif ?>



<div class="container">
	<div class="row">
    		<div class="col-md-6 col-lg-5">
            <div class="panel ultraheading white xs-pl-30 xs-pr-30 flex vertical-center largecaption-height text-uppercase wow fadeInLeft hide-anim" data-wow-duration="1s" data-wow-delay="0s" style="background:rgba(<?php echo htmlencode($productsRecord['box_color']) ?>);">
                    <div><strong><?php echo htmlencode($productsRecord['product_tagline_1']) ?></strong><br><?php echo htmlencode($productsRecord['product_tagline_2']) ?></div>
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
			<?php foreach ($productsRecord['product_intro_image'] as $index => $upload): ?>
              <?php if ($index >= 1) { continue; } // limit uploads shown ?>
                <div class="panel largecaption-height bgcover wow fadeInLeft hide-anim" data-wow-duration="1s" data-wow-delay="0.3s" style="background-image:url('<?php echo htmlencode($upload['urlPath']) ?>');"></div>
            <?php endforeach ?>
        </div>
		<div id="adjustright" class="col-md-6 col-lg-7">
        		<!-- This is empty -->
        </div>
	</div>
</div>


        </section>

<!-- Main Body -->
        <section class="well bgcream">
        		<div class="container">
        			<div class="row">
					<div class="col-lg-12">
                    		<div class="media">
							<?php foreach ($productsRecord['main_icon'] as $index => $upload): ?>
							<?php if ($index >= 1) { continue; } // limit uploads shown ?>
                    			<div class="media-left media-middle"><img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="center-block"></div>
							<?php endforeach ?>
                    			<div class="media-body media-middle">
								<h1>
									<span class="h3 brown text-uppercase strong"><?php echo htmlencode($productsRecord['main_header']) ?></span><br>
									<span class="adelle"><?php echo htmlencode($productsRecord['main_subheader']) ?></span>
								</h1>
							</div>
                    		</div>
                    </div>
        			</div>
        		</div>
        
            <div class="container text-sm-center">
                <div class="row">
                    <div class="col-md-4 col-sm-12 image-wrap-1  xs-mt-25 md-mt-15">
					<?php foreach ($productsRecord['main_intro_image'] as $index => $upload): ?>
						<?php if ($index >= 1) { continue; } // limit uploads shown ?>
                        <img src="<?php echo htmlencode($upload['urlPath']) ?>" class="img-responsive center-block" alt="">
					<?php endforeach ?>
                    </div>
                    <div class="col-md-8 col-sm-12 intro gray  xs-mt-25 md-mt-15">
                    		<?php echo ($productsRecord['main_intro_copy']) ?>
						<!-- Start play general video -->
						<?php if (($productsRecord['product_video'])): ?>
							<a href="<?php echo htmlencode($productsRecord['product_video']) ?>" class="swipebox btn btn-light-blue" rel="youtube">Watch Video</a>
						<?php endif ?>   
						<!-- End play general video -->
                    </div>
                </div>
            </div>
            
            <div class="container xs-mt-25">
                <div class="row">
					<div class="col-xs-12 text-center xs-mt-25 xs-mb-15"><p class="h1 strong text-uppercase"><?php echo htmlencode($productsRecord['body_header']) ?></p><p class="xs-mt-10 light-brown"><?php echo htmlencode($productsRecord['body_subheader']) ?></p></div>
                    <div class="col-xs-12 col-sm-4 xs-mt-15 wow fadeInUp hide-anim" data-wow-delay=".3s" data-wow-duration="1s">
                    			<?php if (!($productsRecord['benefit_url_video_1'])): ?>
                    			<a rel="Build your app with Marketing Results">
                             <?php endif ?>   
                    			<?php if ($productsRecord['benefit_url_video_1']): ?>
                    			<a href="<?php echo htmlencode($productsRecord['benefit_url_video_1']) ?>" class="swipebox" rel="youtube1">
                             <?php endif ?>
                              <?php foreach ($productsRecord['benefit_image_1'] as $index => $upload): ?>
                              <img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="img-responsive center-block xs-mb-25">
                              <?php endforeach ?>
                              </a>
                              <p class="h3 text-uppercase xs-mb-15"><span class="strong light-blue"><?php echo htmlencode($productsRecord['benefit_header_1']) ?></span><br><span class="thin"><?php echo htmlencode($productsRecord['benefit_subheader_1']) ?></span></p>
                              <p class="gray"><?php echo htmlencode($productsRecord['benefit_copy_1']) ?></p>
					</div>
                    <div class="col-xs-12 col-sm-4 xs-mt-15 wow fadeInUp hide-anim" data-wow-delay=".6s" data-wow-duration="1s">
                    			<?php if (!($productsRecord['benefit_url_video_2'])): ?>
                    			<a rel="Build your app with Marketing Results">
                             <?php endif ?>   
                    			<?php if ($productsRecord['benefit_url_video_2']): ?>
                    			<a href="<?php echo htmlencode($productsRecord['benefit_url_video_2']) ?>" class="swipebox" rel="youtube2">
                             <?php endif ?>
                            <?php foreach ($productsRecord['benefit_image_2'] as $index => $upload): ?>
                            <img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="img-responsive center-block xs-mb-25">
                            <?php endforeach ?>
							</a>
                            <p class="h3 text-uppercase xs-mb-15"><span class="strong light-blue"><?php echo htmlencode($productsRecord['benefit_header_2']) ?></span><br><span class="thin"><?php echo htmlencode($productsRecord['benefit_subheader_2']) ?></span></p>
                            <p class="gray"><?php echo htmlencode($productsRecord['benefit_copy_2']) ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-4 xs-mt-15 wow fadeInUp hide-anim" data-wow-delay=".9s" data-wow-duration="1s">
                    			<?php if (!($productsRecord['benefit_url_video_3'])): ?>
                    			<a rel="Build your app with Marketing Results">
                             <?php endif ?>   
                    			<?php if ($productsRecord['benefit_url_video_3']): ?>
                    			<a href="<?php echo htmlencode($productsRecord['benefit_url_video_3']) ?>" class="swipebox" rel="youtube3">
                             <?php endif ?>
                             <?php foreach ($productsRecord['benefit_image_3'] as $index => $upload): ?>
							<img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="img-responsive center-block xs-mb-25">
                            <?php endforeach ?>
                             </a>
                            <p class="h3 text-uppercase xs-mb-15"><span class="strong light-blue"><?php echo htmlencode($productsRecord['benefit_header_3']) ?></span><br><span class="thin"><?php echo htmlencode($productsRecord['benefit_subheader_3']) ?></span></p>
                            <p class="gray"><?php echo htmlencode($productsRecord['benefit_copy_3']) ?></p>
                    </div>
                    <div class="col-xs-12 text-center xs-mt-35"><a href="#" class="btn btn-black">Download Now</a></div>
                </div>
            </div>
            
        </section>
<!-- End Main Body -->
        
<!-- Key Service Components -->
		<?php include '_includes/key-service-components-products.php' ?>
<!-- End Key Service Components -->

<!-- Start Testimonials -->
		<section class="well">
        		<div class="container">
        			<div class="row">
        				<div class="col-xs-12"><p class="h3 text-uppercase xs-mb-15"><span class="strong light-blue"><?php echo htmlencode($productsRecord['testimonial_header']) ?></span><br><span class="thin"><?php echo htmlencode($productsRecord['testimonial_subheader']) ?></span></p></div>
        				<div class="col-xs-12 col-sm-4 xs-mb-25 sm-mb-10 wow fadeInLeft hide-anim" data-wow-delay=".3s" data-wow-duration="1s">
						<div class="panel">
							<div class="media-left"><i class="fa fa-quote-left light-blue"></i></div>
							<div class="media-body"><span class="gray thin"><?php echo htmlencode($productsRecord['testimonial_copy_1']) ?></span><br><br><?php echo htmlencode($productsRecord['testimonial_byline_1']) ?></div>
						</div>
                    </div>
        				<div class="col-xs-12 col-sm-4 xs-mb-25 sm-mb-10 wow fadeInUp hide-anim" data-wow-delay=".6s" data-wow-duration="1s">
						<div class="panel">
							<div class="media-left"><i class="fa fa-quote-left light-blue"></i></div>
							<div class="media-body"><span class="gray thin"><?php echo htmlencode($productsRecord['testimonial_copy_2']) ?></span><br><br><?php echo htmlencode($productsRecord['testimonial_byline_2']) ?></div>
						</div>
                    </div>
        				<div class="col-xs-12 col-sm-4 xs-mb-25 sm-mb-10 wow fadeInRight hide-anim" data-wow-delay=".9s" data-wow-duration="1s">
						<div class="panel">
							<div class="media-left"><i class="fa fa-quote-left light-blue"></i></div>
							<div class="media-body"><span class="gray thin"><?php echo htmlencode($productsRecord['testimonial_copy_3']) ?></span><br><br><?php echo htmlencode($productsRecord['testimonial_byline_3']) ?></div>
						</div>
                    </div>
        			</div>
        		</div>
        </section>
<!-- End Testimonials -->
        
    </main>

    <!--========================================================
                              CONTACT
    =========================================================-->
    <section class="well-2 bgcover bg-fixed" style="background-image:url('/_img/contact_background.jpg');">
    <?php include "_includes/contact_form.php" ?>
    </section>
    
    <!--========================================================
                              FOOTER
    =========================================================-->
    <?php include "_includes/footer.php" ?>
    
</div>

<?php include "_includes/script.php" ?>
<script src="/_js/script.js"></script>
<script src="/_js/response.min.js"></script>
<script src="/_libs/swipebox/js/jquery.swipebox.js"></script>

<script>
$(document).ready(function() {
	$('#menu-products').addClass('active');
});
</script>
<script type="text/javascript">
;( function( $ ) {
	$('.swipebox').swipebox({autoplayVideos: true});
	
} )( jQuery );
</script>
<script>
    $(function(){
      $(document.body)
          .on('click touchend','#swipebox-slider .current img', function(e){
              return false;
          })
          .on('click touchend','#swipebox-slider .current', function(e){
              $('#swipebox-close').trigger('click');
          });
    });
</script>
</body>
</html>