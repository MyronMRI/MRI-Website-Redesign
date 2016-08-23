<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'admin/lib/viewer_functions.php';
  $dirsToCheck = array('D:/inetpub/wwwroot/www.marketingresults.net/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'job_page'
  list($job_pageRecords, $job_pageMetaData) = getRecords(array(
    'tableName'   => 'job_page',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $job_pageRecord = @$job_pageRecords[0]; // get first record
  if (!$job_pageRecord) { dieWith404("Record not found!"); } // show error message if no record found

  // load detail record from 'jobs'
  list($jobsRecords, $jobsMetaData) = getRecords(array(
    'tableName'   => 'jobs',
    'where'       => whereRecordNumberInUrl(1), // If no record # is specified then latest record is shown
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $detailRecord = @$jobsRecords[0]; // get first record
  if (!$detailRecord) { dieWith404("Record not found!"); } // show error message if no record found

  // load records from 'jobs'
  list($jobsRecords, $jobsMetaData) = getRecords(array(
    'tableName'   => 'jobs',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
  
  // load records from 'office_locations'
  list($office_locationsRecords, $office_locationsMetaData) = getRecords(array(
    'tableName'   => 'office_locations',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
  
  // load records from 'employment_categories'
  list($employment_categoriesRecords, $employment_categoriesMetaData) = getRecords(array(
    'tableName'   => 'employment_categories',
    'loadUploads' => true,
    'allowSearch' => false,
  ));  

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "_includes/head.php" ?>
<title><?php echo htmlencode($job_pageRecord['main_subheader']) ?></title>
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
                    		<h1 class="xs-mb-25">
                            <span class="h3 brown text-uppercase strong"><?php echo htmlencode($job_pageRecord['main_header']) ?></span><br>
                            <span class="adelle"><?php echo htmlencode($job_pageRecord['main_subheader']) ?></span>
                        </h1>
                        <?php echo $job_pageRecord['main_copy']; ?>
                        <div class="xs-mb-10">&nbsp;</div>

<!-- LISTINGS CATEGORIES -->
<?php foreach ($employment_categoriesRecords as $record): ?>
<?php $current_category = $record['title']; ?>


<!-- LISTINGS OFFICES -->
<?php foreach ($office_locationsRecords as $record): ?>
<?php $current_office = $record['title']; ?>

<!-- LISTING SECTION HEADER -->
<?php foreach ($jobsRecords as $record): ?>
<?php if (($record['department'] == $current_category) && ($record['location'] == $current_office)): ?>
<div class="body_ul_employment xs-mb-40">
<p class="h3 text-uppercase strong light-blue"><?php echo $current_category ?></p>
<p class="h4 adelle xs-mt-5"><?php echo $current_office ?> Office</p>
<ul class="body_ul_employment">
<?php break; ?>
<?php endif ?>
<?php endforeach; ?>

<!-- OPEN JOBS -->
<?php foreach ($jobsRecords as $record): ?>
<?php if (($record['department'] != $current_category)) { continue; } ?> 
<?php if (($record['location'] != $current_office)) { continue; } ?>
<li><a href="<?php echo $record['_link'] ?>"><?php echo $record['job_title'] ?></a></li>
<?php endforeach ?>

<!-- LISTING SECTION FOOTER -->
<?php foreach ($jobsRecords as $record): ?>
<?php if (($record['department'] == $current_category) && ($record['location'] == $current_office)): ?>
</ul>
</div>
<?php break; ?>
<?php endif ?>
<?php endforeach; ?>

<!-- LISTING SECTION ENDS -->

<?php endforeach ?>

<?php endforeach ?>

 <!--LISTINGS END-->

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