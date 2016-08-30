<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'admin/lib/viewer_functions.php';
  $dirsToCheck = array('D:/inetpub/wwwroot/www.marketingresults.net/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'services'
  list($servicesRecords, $servicesMetaData) = getRecords(array(
    'tableName'   => 'services',
    'where'       => whereRecordNumberInUrl(0),
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $servicesRecord = @$servicesRecords[0]; // get first record
  if (!$servicesRecord) { dieWith404("Record not found!"); } // show error message if no record found

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "/_includes/head.php" ?>
<title><?php echo htmlencode($servicesRecord['title']) ?></title>
<!-- Style to add offsets if the CMS field is filled -->
<style>
	@media screen and (max-width:1023px) {
		.bg-fixed-right {
			background-position:center right;
		}
	}
	@media screen and (min-width:1024px) and (max-width:1279px) {
		.bg-fixed-right {
			background-position:center right -<?php echo htmlencode($servicesRecord['hero_image_offset']) ?>px !important;
		}
	}
	@media screen and (min-width:1280px) {
		.bg-fixed-right {
			background-position:center right;
		}
	}

</style>
</head>
<body>
<div class="page">
<?php include "/_includes/top.php" ?>
    <!--========================================================
                              HEADER
    =========================================================-->
<?php include "/_includes/navigation.php" ?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class="well bgcream">
        		<div class="container">
        			<div class="row">
					<div class="col-lg-12">
                    		<div class="media">
						<?php foreach ($servicesRecord['main_icon'] as $index => $upload): ?>
							<?php if ($index >= 1) { continue; } // limit uploads shown ?>
                    			<div class="media-left media-middle"><img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="center-block"></div>
						<?php endforeach ?>
                    			<div class="media-body media-middle">
								<h1>
									<span class="h3 brown text-uppercase strong"><?php echo htmlencode($servicesRecord['main_header']) ?></span><br>
									<span class="adelle"><?php echo htmlencode($servicesRecord['main_subheader']) ?></span>
								</h1>
							</div>
                    		</div>
                    </div>
        			</div>
        		</div>
        
            <div class="container text-sm-center">
                <div class="row">
                    <div class="col-md-4 col-sm-12 image-wrap-1  xs-mt-25 md-mt-15">
                    
        <?php foreach ($servicesRecord['main_intro_image'] as $index => $upload): ?>
          <?php if ($index >= 1) { continue; } // limit uploads shown ?>
              <img src="<?php echo htmlencode($upload['urlPath']) ?>" class="img-responsive center-block" alt="">
        <?php endforeach ?>
                    
                    </div>
                    <div class="col-md-8 col-sm-12 intro gray  xs-mt-25 md-mt-15">
                    		<?php echo ($servicesRecord['main_intro_copy']) ?>
                    </div>
                </div>
            </div>
        </section>

        <?php foreach ($servicesRecord['service_hero_image'] as $index => $upload): ?>
          <?php if ($index >= 1) { continue; } // limit uploads shown ?>
		<section class="bg-fixed-right heroimage" style="background-image:url(<?php echo htmlencode($upload['urlPath']) ?>);">
        <?php endforeach ?>

<div class="container">
	<div class="row">
    		<div class="col-md-6 col-lg-5">
            <div class="panel ultraheading white xs-pl-30 xs-pr-30 flex vertical-center largecaption-height text-uppercase wow fadeInLeft hide-anim" data-wow-duration="1s" data-wow-delay="0s" style="background:rgba(<?php echo htmlencode($servicesRecord['box_color']) ?>);">
                    <div><strong><?php echo htmlencode($servicesRecord['service_tagline_1']) ?></strong><br><?php echo htmlencode($servicesRecord['service_tagline_2']) ?></div>
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
			<?php foreach ($servicesRecord['service_intro_image'] as $index => $upload): ?>
              <?php if ($index >= 1) { continue; } // limit uploads shown ?>
                <div class="panel largecaption-height bgcover wow fadeInLeft hide-anim" data-wow-duration="1s" data-wow-delay="0.3s" style="background-image:url('<?php echo htmlencode($upload['urlPath']) ?>');"></div>
            <?php endforeach ?>
        </div>
		<div id="adjustright" class="col-md-6 col-lg-7">
        <div class="panel largecaption-height flex vertical-center">
        <div class="white text-center"><sup><i class="fa fa-quote-left lightest-blue fa-2x" aria-hidden="true"></i></sup><span class="testimonial-md"><?php echo htmlencode($servicesRecord['testimonial_quote_1']) ?></span><sup><i class="fa fa-quote-right lightest-blue fa-2x" aria-hidden="true"></i></sup><p class="text-right gold xs-mt-15"><?php echo htmlencode($servicesRecord['testimonial_quote_byline_1']) ?></p></div></div></div>
	</div>
</div>
</div>

        </section>

		<div class="well-2 bgcream">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
                    		<h2 class="text-uppercase light-blue"><strong><?php echo htmlencode($servicesRecord['body_header']) ?></strong></h2>
						<?php echo ($servicesRecord['body_copy']) ?>
                    </div>
                    <div class="col-xs-12 visible-lg" style="margin-top:55px"></div>
                    <div class="col-xs-12 col-sm-6 text-right-not-xs text-left-xs xs-mt-15">
						<a href="/contact/" class="btn btn-black">Request a Proposal</a>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-left-not-xs text-left-xs xs-mt-15">
						<a class="btn btn-light-blue"><?php echo htmlencode($servicesRecord['body_call_to_action_2']) ?></a>
                    </div>
				</div>
			</div>
		</div>
        
<!-- Key Service Components -->
		<?php include '_includes/key-service-components.php' ?>
<!-- End Key Service Components -->
        
        <section class="well-2 bgcream">
        		<div class="container">
        			<div class="row">
        				<div class="col-xs-12 text-center wow fadeInUp hide-anim" data-wow-delay=".3s" data-wow-duration="1s"><div class="testimonial-lg"><sup><i class="fa fa-quote-left lightest-blue" aria-hidden="true"></i></sup><?php echo htmlencode($servicesRecord['testimonial_quote_2']) ?><sup><i class="fa fa-quote-right lightest-blue" aria-hidden="true"></i></sup></div><p class="text-right xs-mt-15"><?php echo htmlencode($servicesRecord['testimonial_quote_byline_2']) ?></p></div>
        			</div>
        		</div>
        </section>

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
    <?php include "/_includes/footer.php" ?>
    
</div>

<?php include "/_includes/script.php" ?>
<script src="/_js/script.js"></script>
<script>
$(document).ready(function() {
	$('#menu-services').addClass('active');
});
</script>

</body>
</html>