<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'admin/lib/viewer_functions.php';
  $dirsToCheck = array('D:/inetpub/wwwroot/www.marketingresults.net/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load detail record from 'about_us'
  list($about_usRecords, $about_usMetaData) = getRecords(array(
    'tableName'   => 'about_us',
    'where'       => whereRecordNumberInUrl(1), // If no record # is specified then latest record is shown
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $detailRecord = @$about_usRecords[0]; // get first record
  if (!$detailRecord) { dieWith404("Record not found!"); } // show error message if no record found

  // load list records from 'about_us'
  list($about_usRecords, $about_usMetaData) = getRecords(array(
    'tableName'   => 'about_us',
    'loadUploads' => false,
    'allowSearch' => false,
  ));
  
  // load records from 'bios'
  list($biosRecords, $biosMetaData) = getRecords(array(
    'tableName'   => 'bios',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "_includes/head.php" ?>
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
                            <span class="h3 brown text-uppercase strong"><?php echo htmlencode($detailRecord['main_header']) ?></span><br>
                            <span class="adelle"><?php echo htmlencode($detailRecord['main_subheader']) ?></span>
						</h1>
                    </div>
                    <!-- Start Scorecard and Firm Profile buttons for Desktop Up -->
                    <div class="col-xs-12 col-md-5 text-right hidden-xs hidden-sm">
                    		<a href="#" class="btn btn-light-blue xs-mt-25">View Video</a> <a href="#" class="btn btn-black xs-mt-25">View Firm Profile</a>
                    </div>
                    <!-- End Scorecard and Firm Profile buttons for Desktop Up -->
                    <div class="col-xs-12 xs-mt-15 semi"><?php echo htmlencode($detailRecord['main_second_subheader']) ?></div>
                    <div class="col-xs-12 xs-mt-15 intro gray thin"><?php echo htmlencode($detailRecord['main_intro_copy']) ?></div>
                    <!-- Start Scorecard and Firm Profile buttons for Tablet Down -->
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-lg-offset-1 text-center-xs text-right-not-xs hidden-md hidden-lg"><a href="#" class="btn btn-light-blue xs-mt-25">View Video</a></div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 text-center-xs text-left-not-xs hidden-md hidden-lg"><a href="#" class="btn btn-black xs-mt-25">View Firm Profile</a></div>
                    <!-- End Scorecard and Firm Profile buttons for Tablet Down -->
				</div>                
			</div>
        </section>
        
        <section class="well bgcream">
        		<div class="container">
        			<div class="row">
                    <?php foreach ($biosRecords as $record): ?>
					<div class="col-xs-12 col-sm-6 col-md-4 xs-mb-25 sameheight">
                    		<?php foreach ($record['bio_image'] as $index => $upload): ?>
                    		<a href="#modal-<?php echo htmlencode($record['num']) ?>" class="various"><img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="center-block img-responsive xs-mb-15"></a>
						<?php endforeach ?>
						<p><span class="thin"><?php echo htmlencode($record['name']) ?></span><br><span class="semi light-blue"><?php echo htmlencode($record['position']) ?></span></p>
						<p><a href="<?php echo htmlencode($record['linkedin']) ?>" target="_blank"><i class="fa fa-linkedin light-blue"></i></a> <a href="mailto:<?php echo htmlencode($record['email']) ?>"><i class="fa fa-envelope light-blue" aria-hidden="true"></i></a></p>
					</div>
                    <?php endforeach ?>
                </div>
        		</div>
        </section>
        
<!-- Start Full Bios -->
<?php foreach ($biosRecords as $record): ?>

        <div id="modal-<?php echo htmlencode($record['num']) ?>" class="bio-modal">
        		<div class="container">
        			<div class="row">
        				<div class="col-sm-12 col-sm-4 hidden-xs">
                        <?php foreach ($record['bio_image'] as $index => $upload): ?>
                        <img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="center-block img-responsive xs-mb-15">
                        <?php endforeach ?>
					</div>
        				<div class="col-xs-12 col-sm-8">
                            <p>
                            <span class="h3 text-uppercase white strong"><?php echo htmlencode($record['name']) ?></span><br>
                            <span class="h2 adelle light-blue semi"><?php echo htmlencode($record['position']) ?></span>
                            </p>
                            <div class="thin">
                            <?php echo $record['bio']; ?>
                            </div>
					</div>
        			</div>
        		</div>
		</div>
<?php endforeach ?>        
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
	$('#menu-services').addClass('active');
});
</script>

<!-- Fancybox -->
<script type="text/javascript" src="/_libs/fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="/_libs/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />

<script>
$(document).ready(function() {
	$(".various").fancybox({
		maxHeight	: 600,
		fitToView	: true,
		width		: '100%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'fade',
		closeEffect	: 'fade'
	});
});
if ($(window).width() <= 768) {
	$('.bio-modal .container').removeClass('container').addClass('container-fluid');
}
</script>

</body>
</html>