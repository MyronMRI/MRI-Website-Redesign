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
                    		<a href="#" class="btn btn-light-blue xs-mt-5">View Video</a><a href="#" class="btn btn-black xs-mt-5 xs-ml-15">View Firm Profile</a>
                    </div>
                    <!-- End Scorecard and Firm Profile buttons for Desktop Up -->
                    <div class="col-xs-12 xs-mt-15 semi"><?php echo htmlencode($detailRecord['main_second_subheader']) ?></div>
                    <div class="col-xs-12 xs-mt-15 intro gray thin"><?php echo $detailRecord['main_intro']; ?></div>
                    <!-- Start Scorecard and Firm Profile buttons for Tablet Down -->
                    <div class="col-xs-12 text-left-xs text-center-not-xs hidden-md hidden-lg">
                    		<a href="#" class="btn btn-light-blue xs-mt-5">View Video</a><a href="#" class="btn btn-black xs-mt-5 xs-ml-15">View Firm Profile</a>
                    </div>
                    <!-- End Scorecard and Firm Profile buttons for Tablet Down -->
				</div>                
			</div>
        </section>
        
        <section class="well bgcream">
        		<div class="container">
        			<div class="row">
                    <?php foreach ($case_studies_entriesRecords as $record): ?>
					<div class="col-xs-12 col-sm-6 col-md-4 xs-mb-25 sameheight">
                    		<?php foreach ($record['project_images'] as $index => $upload): ?>
						<?php if ($index < 1): ?>
                    		<a href="<?php echo htmlencode($upload['urlPath']) ?>" class="swipebox" rel="gallery-<?php echo htmlencode($record['num']) ?>">
						<?php endif; ?>
						<?php endforeach ?>
                         <?php foreach ($record['project_image_thumbnail'] as $index => $upload): ?>   
                            <img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="center-block img-responsive xs-mb-15">                            
						</a>
						<?php endforeach ?>
						<p><?php echo htmlencode($record['property_name']) ?><br><span class="strong brown"><?php echo htmlencode($record['project_type']) ?></span></p>
						<div class="pull-left xs-pt-5 xs-pr-15">Share This:</div> <!-- Go to www.addthis.com/dashboard to customize your tools --><div class="addthis_sharing_toolbox pull-left"></div>
					</div>
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

</body>
</html>