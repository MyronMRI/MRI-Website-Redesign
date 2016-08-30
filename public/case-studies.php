<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'admin/lib/viewer_functions.php';
  $dirsToCheck = array('D:/inetpub/wwwroot/www.marketingresults.net/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load detail record from 'case_study_page'
  list($case_study_pageRecords, $case_study_pageMetaData) = getRecords(array(
    'tableName'   => 'case_study_page',
    'where'       => whereRecordNumberInUrl(1), // If no record # is specified then latest record is shown
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $detailRecord = @$case_study_pageRecords[0]; // get first record
  if (!$detailRecord) { dieWith404("Record not found!"); } // show error message if no record found

  // load list records from 'case_study_page'
  list($case_study_pageRecords, $case_study_pageMetaData) = getRecords(array(
    'tableName'   => 'case_study_page',
    'loadUploads' => false,
    'allowSearch' => false,
  ));
  
  // load records from 'case_studies_entries'
  list($case_studies_entriesRecords, $case_studies_entriesMetaData) = getRecords(array(
    'tableName'   => 'case_studies_entries',
    'loadUploads' => true,
    'allowSearch' => false,
  ));


?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "_includes/head.php" ?>
<link rel="stylesheet" href="/_libs/swipebox/css/swipebox.css">
<title><?php echo htmlencode($detailRecord['title']) ?></title>
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
    
        <section class="well-4 bgcream">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-7">
                    		<h1>
                            <span class="h3 brown text-uppercase strong">Case Studies &amp; Creative Portfolio</span><br>
                            <span class="adelle">Incite the gambler experience</span>
						</h1>
                    </div>
                    <!-- Start Scorecard and Firm Profile buttons for Desktop Up -->
                    <div class="col-xs-12 col-md-5 text-right hidden-xs hidden-sm">
                    		<a href="https://vimeo.com/75332249" class="btn btn-light-blue xs-mt-5 swipebox" rel="youtube1">View Video</a>
						<a href="/_img/mri_firm_profile_2015.pdf" target="_blank" class="btn btn-black xs-mt-5 xs-ml-15">View Firm Profile</a>
                    </div>
                    <!-- End Scorecard and Firm Profile buttons for Desktop Up -->
                    <div class="col-xs-12 xs-mt-15 semi"><?php echo htmlencode($detailRecord['main_second_subheader']) ?></div>
                    <div class="col-xs-12 xs-mt-15 gray thin"><?php echo $detailRecord['main_intro']; ?></div>
                    <!-- Start Scorecard and Firm Profile buttons for Tablet Down -->
                    <div class="col-xs-12 text-left-xs text-center-not-xs hidden-md hidden-lg xs-mb-40">
                    		<a href="https://vimeo.com/75332249" class="btn btn-light-blue xs-mt-5 swipebox" rel="youtube2">View Video</a><br class="visible-xs-inline">
						<a href="/_img/mri_firm_profile_2015.pdf" target="_blank" class="btn btn-black xs-mt-5 sm-ml-15">View Firm Profile</a>
                    </div>
                    <!-- End Scorecard and Firm Profile buttons for Tablet Down -->
				</div>                
			</div>
        </section>
        
        <section class="well0 xs-pt-15 bgcream" style="padding-bottom:80px">
        		<div class="container">
        			<div class="row">
                    <?php foreach(array_slice($case_studies_entriesRecords, 0, 6) as $record ): ?>
                    <?php if (!($record['featured_project'])): ?>
					<div class="col-xs-12 col-sm-6 col-md-4 xs-mb-50 sameheight">
                    
                    		<!-- Change linkage depending on type: Portfolio or Case Study -->
                    
                    		<?php foreach ($record['project_images'] as $index => $upload): ?>
						<?php if (($index < 1) && (($record['case_study_type'])==='Portfolio') ): ?>
                    		<a href="<?php echo htmlencode($upload['urlPath']) ?>" class="swipebox" rel="gallery-<?php echo htmlencode($record['num']) ?>">
						<?php endif; ?>
						<?php if (($index < 1) && (($record['case_study_type'])==='Case Study') ): ?>
                    		<a href="<?php echo $record['_link'] ?>"> 
						<?php endif; ?>
						<?php endforeach ?>
                         <?php foreach ($record['project_image_thumbnail'] as $index => $upload): ?>
                         	<div class="overlay-gold" style="position:relative;">
                            <img src="/_img/overlay-gold.png" alt="" class="overlay-gold-image center-block img-responsive xs-mb-30">
                            <div class="project-type">
                                <!-- Start Display Project Categories -->
                                <?php if($record['box_case_study']): ?>
                                <span class="text-uppercase white"><?php echo "Case Study" ?></span><br>
                                <?php endif ?>
                                <?php if($record['box_advertising']): ?>
                                <span class="text-uppercase white"><?php echo "Advertising" ?></span> <br>
                                <?php endif ?>
                                <?php if($record['box_direct_mail']): ?>
                                <span class="text-uppercase white"><?php echo "Direct Mail" ?></span> <br>
                                <?php endif ?>
                                <?php if($record['box_tv']): ?>
                                <span class="text-uppercase white"><?php echo "TV" ?></span> <br>
                                <?php endif ?>
                                <?php if($record['box_website']): ?>
                                <span class="text-uppercase white"><?php echo "Website" ?></span> <br>
                                <?php endif ?>
                                <?php if($record['box_email']): ?>
                                <span class="text-uppercase white"><?php echo "Email" ?></span> <br>
                                <?php endif ?>
                                <?php if($record['box_billboards']): ?>
                                <span class="text-uppercase white"><?php echo "Billboard" ?></span><br>
                                <?php endif ?>
                                <?php if($record['box_signage']): ?>
                                <span class="text-uppercase white"><?php echo "Signage" ?></span><br>
                                <?php endif ?>
                                <!-- End Display Project Categories -->
                            </div>  
                            <img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="center-block img-responsive xs-mb-30">         
                            </div>                   
						<?php endforeach ?>
						<p class="project-type"><span class="black"><?php echo htmlencode($record['property_name']) ?></span><br>
                        

						<!-- Start Display Project Categories -->
						<?php if($record['box_case_study']): ?>
                        <span class="strong brown project-categories"><?php echo $record['type_of_case_study'] ?> <?php echo "Case Study" ?></span>
                        <?php endif ?>
                        <?php if($record['box_advertising']): ?>
                        <span class="strong brown project-categories"><?php echo "Advertising" ?></span> 
                        <?php endif ?>
                        <?php if($record['box_direct_mail']): ?>
                        <span class="strong brown project-categories"><?php echo "Direct Mail" ?></span> 
                        <?php endif ?>
                        <?php if($record['box_tv']): ?>
                        <span class="strong brown project-categories"><?php echo "TV" ?></span> 
                        <?php endif ?>
                        <?php if($record['box_website']): ?>
                        <span class="strong brown project-categories"><?php echo "Website" ?></span> 
                        <?php endif ?>
                        <?php if($record['box_email']): ?>
                        <span class="strong brown project-categories"><?php echo "Email" ?></span> 
                        <?php endif ?>
                        <?php if($record['box_billboards']): ?>
                        <span class="strong brown project-categories"><?php echo "Billboard" ?></span>
                        <?php endif ?>
                        <?php if($record['box_signage']): ?>
                        <span class="strong brown project-categories"><?php echo "Signage" ?></span>
                        <?php endif ?>
                        <!-- End Display Project Categories -->

                        </p>
                        </a>
						<div class="pull-left xs-pr-15">Share </div> <!-- Go to www.addthis.com/dashboard to customize your tools --><div class="addthis_sharing_toolbox pull-left xs-pt-5"></div>
					</div>
                    <?php endif ?>
                    <?php endforeach ?>
                </div>
        		</div>
        </section>

		<!-- Start Featured Project -->
        <?php foreach ($case_studies_entriesRecords as $record): ?>
        <?php if ($record['featured_project'] == 1): ?>
        <section class="well-2 bgcover bg-fixed" style="background-image:url('/_img/components_background.jpg');">
			<div class="container">
        			<div class="row">
        				<div class="col-sm-12 col-sm-4">
                        <?php foreach ($record['project_image_thumbnail'] as $index => $upload): ?>
                        <img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="center-block img-responsive xs-mb-15">
                        <?php endforeach ?>
					</div>
        				<div class="col-xs-12 col-sm-8">
                            <p>
                            <span class="h3 text-uppercase lightest-blue strong">Featured Work</span><br>
                            <span class="h2 adelle semi white"><?php echo htmlencode($record['property_name']) ?></span>
                            </p>
                            <div class="thin white">
                            <?php echo $record['project_description']; ?>
                            </div>
					</div>
        			</div>
			</div>
        </section>
        <?php endif; ?>
        <?php endforeach ?>
        <!-- End Featured Project -->

        <section class="well0 bgcream xs-pb-40" style="padding-top:100px">
        		<div class="container">
        			<div class="row">
                    <?php foreach(array_slice($case_studies_entriesRecords, 6) as $record ): ?>
                    <?php if (!($record['featured_project'])): ?>
					<div class="col-xs-12 col-sm-6 col-md-4 xs-mb-25 sameheight">
                    		<?php foreach ($record['project_images'] as $index => $upload): ?>
						<?php if (($index < 1) && ($record['case_study_type'])=='Portfolio'): ?>
                    		<a href="<?php echo htmlencode($upload['urlPath']) ?>" class="swipebox" rel="gallery-<?php echo htmlencode($record['num']) ?>">
						<?php endif; ?>
                         <?php if (($index < 1) && ($record['case_study_type'])=='Case Study'): ?>
                         <a href="<?php echo $record['_link'] ?>">
						<?php endif; ?>
						<?php endforeach ?>
                         <?php foreach ($record['project_image_thumbnail'] as $index => $upload): ?>
                         	<div class="overlay-gold" style="position:relative;">
                            <img src="/_img/overlay-gold.png" alt="" class="overlay-gold-image center-block img-responsive xs-mb-30">
                            <div class="project-type">
                            
                                <!-- Start Display Project Categories -->
                                <?php if($record['box_case_study']): ?>
                                <span class="text-uppercase white"><?php echo "Case Study" ?></span><br>
                                <?php endif ?>
                                <?php if($record['box_advertising']): ?>
                                <span class="text-uppercase white"><?php echo "Advertising" ?></span> <br>
                                <?php endif ?>
                                <?php if($record['box_direct_mail']): ?>
                                <span class="text-uppercase white"><?php echo "Direct Mail" ?></span> <br>
                                <?php endif ?>
                                <?php if($record['box_tv']): ?>
                                <span class="text-uppercase white"><?php echo "TV" ?></span> <br>
                                <?php endif ?>
                                <?php if($record['box_website']): ?>
                                <span class="text-uppercase white"><?php echo "Website" ?></span> <br>
                                <?php endif ?>
                                <?php if($record['box_email']): ?>
                                <span class="text-uppercase white"><?php echo "Email" ?></span> <br>
                                <?php endif ?>
                                <?php if($record['box_billboards']): ?>
                                <span class="text-uppercase white"><?php echo "Billboard" ?></span><br>
                                <?php endif ?>
                                <?php if($record['box_signage']): ?>
                                <span class="text-uppercase white"><?php echo "Signage" ?></span><br>
                                <?php endif ?>
                                <!-- End Display Project Categories -->
                            
                            </div>  
                            <img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="center-block img-responsive xs-mb-30">         
                            </div>                   
						<?php endforeach ?>
						<p class="project-type"><span class="black"><?php echo htmlencode($record['property_name']) ?></span><br>
                        

						<!-- Start Display Project Categories -->
						<?php if($record['box_case_study']): ?>
                        <span class="strong brown project-categories"><?php echo $record['type_of_case_study'] ?> <?php echo "Case Study" ?></span>
                        <?php endif ?>
                        <?php if($record['box_advertising']): ?>
                        <span class="strong brown project-categories"><?php echo "Advertising" ?></span> 
                        <?php endif ?>
                        <?php if($record['box_direct_mail']): ?>
                        <span class="strong brown project-categories"><?php echo "Direct Mail" ?></span> 
                        <?php endif ?>
                        <?php if($record['box_tv']): ?>
                        <span class="strong brown project-categories"><?php echo "TV" ?></span> 
                        <?php endif ?>
                        <?php if($record['box_website']): ?>
                        <span class="strong brown project-categories"><?php echo "Website" ?></span> 
                        <?php endif ?>
                        <?php if($record['box_email']): ?>
                        <span class="strong brown project-categories"><?php echo "Email" ?></span> 
                        <?php endif ?>
                        <?php if($record['box_billboards']): ?>
                        <span class="strong brown project-categories"><?php echo "Billboard" ?></span>
                        <?php endif ?>
                        <?php if($record['box_signage']): ?>
                        <span class="strong brown project-categories"><?php echo "Signage" ?></span>
                        <?php endif ?>
                        <!-- End Display Project Categories -->

                        </p>
                        </a>
						<div class="pull-left xs-pr-15">Share This:</div> <!-- Go to www.addthis.com/dashboard to customize your tools --><div class="addthis_sharing_toolbox pull-left xs-pt-5"></div>
					</div>
                    <?php endif ?>
                    <?php endforeach ?>
                </div>
        		</div>
        </section>
  
<!-- Start Full Portfolios -->
<div style="visibility:hidden; display:none;">
<?php foreach ($case_studies_entriesRecords as $record): ?>
		<?php foreach ($record['project_images'] as $index => $upload): ?>
        		<?php if ($index >= 1): ?>
        		<a href="<?php echo htmlencode($upload['urlPath']) ?>" class="swipebox" rel="gallery-<?php echo htmlencode($record['num']) ?>">
            		<img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="img-responsive">    
			</a>
            <?php endif; ?>
        <?php endforeach ?>   
<?php endforeach ?>
</div>   
<!-- End Full Bios -->
  		
        		
        

    </main>
    
    <!--========================================================
                              FOOTER
    =========================================================-->
    <?php include "_includes/footer.php" ?>
</div>

<?php include "_includes/script.php" ?>
<script src="_js/script.js"></script>
<script src="/_js/modernizr.custom.js"></script>
<script>
$(document).ready(function() {
	$('#menu-casestudies').addClass('active');
});
</script>

<!-- Swipebox -->
<script src="/_libs/swipebox/js/jquery.swipebox.js"></script>

<script>
$(document).ready(function() {
;( function( $ ) {
	$('.swipebox').swipebox({ });
} )( jQuery );
});
if ($(window).width() <= 768) {
	$('.bio-modal .container').removeClass('container').addClass('container-fluid');
}
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

<script>
$(document).ready(function(){
	if ($(window).width() > 1024) {
		$('.overlay-gold').mouseenter(function() {
			$(this).find('.overlay-gold-image').fadeIn(300);
			$(this).find('.project-type').fadeIn(300);
		});
		$('.overlay-gold').mouseleave(function() {
			$(this).find('.overlay-gold-image').fadeOut(300);
			$(this).find('.project-type').fadeOut(300);
		});
	}
});
</script>
<script type="text/javascript">
;( function( $ ) {
	$('.swipebox').swipebox({autoplayVideos: true});
} )( jQuery );
</script>
</body>
</html>