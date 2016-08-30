<?php

include('_includes/cms.php');

  // load record from 'case_studies_entries'
  list($case_studies_entriesRecords, $case_studies_entriesMetaData) = getRecords(array(
    'tableName'   => 'case_studies_entries',
    'where'       => whereRecordNumberInUrl(0),
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $case_studies_entriesRecord = @$case_studies_entriesRecords[0]; // get first record
  if (!$case_studies_entriesRecord) { dieWith404("Record not found!"); } // show error message if no record found

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "/_includes/head.php" ?>
<title><?php echo htmlencode($case_studies_entriesRecord['title']) ?></title>
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

<?php foreach ($case_studies_entriesRecord['project_hero_image'] as $index => $upload): ?>
<?php if ($index >= 1) { continue; } // limit uploads shown ?>
<section class="bg-fixed-right" style="background-image:url(<?php echo htmlencode($upload['urlPath']) ?>);">
<?php endforeach ?>

<div class="container">
	<div class="row">
    		<div class="col-md-6 col-lg-5">
            <div class="panel bgrust-transparent2 ultraheading white xs-pl-30 xs-pr-40 flex vertical-center largecaption-height text-uppercase wow fadeInLeft hide-anim" data-wow-duration="1s" data-wow-delay="0s">
                    <div><strong><?php echo htmlencode($case_studies_entriesRecord['property_name']) ?></strong><br><span class="thin"><?php echo $case_studies_entriesRecord['property_location']; ?></span></div>
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
			<?php foreach ($case_studies_entriesRecord['project_main_image'] as $index => $upload): ?>
              <?php if ($index >= 1) { continue; } // limit uploads shown ?>
                <div class="panel largecaption-height bgcover wow fadeInLeft hide-anim" data-wow-duration="1s" data-wow-delay="0.3s" style="background-image:url('<?php echo htmlencode($upload['urlPath']) ?>');"></div>
            <?php endforeach ?>
        </div>
		<div id="adjustright" class="col-md-6 col-lg-7">
            <div class="panel largecaption-height flex vertical-center xs-pl-15 xs-pr-15">
                <div class="white text-center">
					<sup><i class="fa fa-quote-left lightest-blue fa-2x" aria-hidden="true"></i></sup>
					<span class="testimonial-md thin"><?php echo htmlencode($case_studies_entriesRecord['testimonial_quote_1']) ?></span>
                    <sup><i class="fa fa-quote-right lightest-blue fa-2x" aria-hidden="true"></i></sup>
                    <p class="text-right gold xs-mt-15"><?php echo htmlencode($case_studies_entriesRecord['testimonial_quote_byline_1']) ?></p>
                </div>
            </div>
        </div>
	</div>
</div>
</div>
</section>

<!-- Start Content Area -->
<div class="well-2 bgcream">
	<div class="container main_copy">
		<div class="row">
			<div class="col-md-4">
            		<div class="panel xs-pb-50 md-pt-50 md-mt-50">
					<?php foreach ($case_studies_entriesRecord['property_logo'] as $index => $upload): ?>
						<img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="img-responsive center-block">	
                    <?php endforeach ?>
                </div>
            </div>
			<div class="col-md-8">
                <h1>
                    <span class="h3 brown text-uppercase strong"><?php echo $case_studies_entriesRecord['case_study_type:label'] ?></span><br>
                    <span class="adelle"><?php echo htmlencode($case_studies_entriesRecord['property_name']) ?></span>
                </h1>
            		<div class="moss h3 xs-mt-15 xs-pb-30 thin">
					<?php echo $case_studies_entriesRecord['project_summary']; ?>
                </div>
                <h3 class="brown text-uppercase strong xs-mb-10">Situation</h3>
                <div class="gray">
                <?php echo $case_studies_entriesRecord['project_situation']; ?>
                </div>
                <h3 class="brown text-uppercase strong xs-mb-10">Solution</h3>
                <div class="gray">
                <?php echo $case_studies_entriesRecord['project_solution']; ?>
                </div>
                <h3 class="brown text-uppercase strong xs-mb-10">Results</h3>
                <div class="gray">
                <?php echo $case_studies_entriesRecord['project_results']; ?>
                </div>
                <!-- Start Measurable Benefits -->
                <div class="benefitsheading xs-mb-10">
                <span class="brown text-uppercase strong"><?php echo htmlencode($case_studies_entriesRecord['measurable_benefit_1']) ?></span>
                <span class="thin"><?php echo htmlencode($case_studies_entriesRecord['measurable_benefit_copy_1']) ?></span>
                </div>
                <div class="benefitsheading xs-mb-10">
                <span class="brown text-uppercase strong"><?php echo htmlencode($case_studies_entriesRecord['measurable_benefit_2']) ?></span>
                <span class="thin"><?php echo htmlencode($case_studies_entriesRecord['measurable_benefit_copy_2']) ?></span>
                </div>
                <div class="benefitsheading xs-mb-10">
                <span class="brown text-uppercase strong"><?php echo htmlencode($case_studies_entriesRecord['measurable_benefit_3']) ?></span>
                <span class="thin"><?php echo htmlencode($case_studies_entriesRecord['measurable_benefit_copy_3']) ?></span>
                </div>
                <!-- End Measurable Benefits -->
				
                <div class="xs-pt-40">
                <a href="/contact" class="btn btn-black xs-mt-5">Request a Proposal</a><br class="visible-xs-inline"><a href="#" class="btn btn-light-blue xs-mt-5 sm-ml-40">Next Case Study</a>
                </div>
				
            </div>
		</div>
	</div>
</div>
<!-- End Content Area -->

<!-- Start Project Mosaic -->
<?php if ($case_studies_entriesRecord['project_images_mosaic']): ?>
<section class="well0 bgcream" style="padding:30px 0">
	<?php foreach ($case_studies_entriesRecord['project_images_mosaic'] as $index => $upload): ?>
		<img src="<?php echo htmlencode($upload['urlPath']) ?>" class="center-block" style="width:100%;">
	<?php endforeach ?>
</section>
<?php endif ?>
<!-- End Project Mosaic -->

<!-- Start Testimonials -->
		<section class="well bgcream">
        		<div class="container">
        			<div class="row">
        				<div class="col-xs-12"><p class="h3 text-uppercase xs-mb-15"><span class="strong light-blue">A few words from</span><br><span class="thin">our valued customers</span></p></div>
        				<div class="col-xs-12 col-sm-4 xs-mb-25 sm-mb-10 wow fadeInLeft hide-anim" data-wow-delay=".3s" data-wow-duration="1s">
						<div class="panel">
							<div class="media-left"><i class="fa fa-quote-left light-blue"></i></div>
							<div class="media-body"><span class="gray thin"><?php echo htmlencode($case_studies_entriesRecord['testimonial_1']) ?></span><br><br><?php echo htmlencode($case_studies_entriesRecord['testimonial_byline_1']) ?></div>
						</div>
                    </div>
        				<div class="col-xs-12 col-sm-4 xs-mb-25 sm-mb-10 wow fadeInUp hide-anim" data-wow-delay=".6s" data-wow-duration="1s">
						<div class="panel">
							<div class="media-left"><i class="fa fa-quote-left light-blue"></i></div>
							<div class="media-body"><span class="gray thin"><?php echo htmlencode($case_studies_entriesRecord['testimonial_2']) ?></span><br><br><?php echo htmlencode($case_studies_entriesRecord['testimonial_byline_2']) ?></div>
						</div>
                    </div>
        				<div class="col-xs-12 col-sm-4 xs-mb-25 sm-mb-10 wow fadeInRight hide-anim" data-wow-delay=".9s" data-wow-duration="1s">
						<div class="panel">
							<div class="media-left"><i class="fa fa-quote-left light-blue"></i></div>
							<div class="media-body"><span class="gray thin"><?php echo htmlencode($case_studies_entriesRecord['testimonial_3']) ?></span><br><br><?php echo htmlencode($case_studies_entriesRecord['testimonial_byline_3']) ?></div>
						</div>
                    </div>
        			</div>
        		</div>
        </section>
<!-- End Testimonials -->

</main>
    
    <!--========================================================
                              FOOTER
    =========================================================-->
    <?php include "/_includes/footer.php" ?>
    
</div>

<?php include "/_includes/script.php" ?>
<script src="/_js/script.js"></script>
<script>
$(document).ready(function() {
	$('#menu-casestudies').addClass('active');
});
</script>
</body>
</html>