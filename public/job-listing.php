<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'admin/lib/viewer_functions.php';
  $dirsToCheck = array('D:/inetpub/wwwroot/www.marketingresults.net/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'jobs'
  list($jobsRecords, $jobsMetaData) = getRecords(array(
    'tableName'   => 'jobs',
    'where'       => whereRecordNumberInUrl(0),
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $jobsRecord = @$jobsRecords[0]; // get first record
  if (!$jobsRecord) { dieWith404("Record not found!"); } // show error message if no record found

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "_includes/head.php" ?>
<title><?php echo htmlencode($jobsRecord['title']) ?></title>
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
			<div class="container main_copy">
				<div class="row">
					<div class="col-xs-12">
                    		<h1 class="xs-mb-25">
                            <span class="h3 brown text-uppercase strong"><?php echo $jobsRecord['location'] ?></span><br>
                            <span class="adelle"><?php echo htmlencode($jobsRecord['job_title']) ?></span>
                        </h1>
						<p><?php echo htmlencode($jobsRecord['job_intro']) ?></p>
                        <p class="strong">Responsibilities:</p>
                        <?php echo $jobsRecord['job_responsibilities']; ?>
                        <p class="strong">Requirements:</p>
                        <?php echo $jobsRecord['job_requirements']; ?>
                        <?php echo $jobsRecord['job_additional_copy']; ?>
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
</body>
</html>