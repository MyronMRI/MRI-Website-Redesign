<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'admin/lib/viewer_functions.php';
  $dirsToCheck = array('D:/inetpub/wwwroot/www.marketingresults.net/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'services_page'
  list($services_pageRecords, $services_pageMetaData) = getRecords(array(
    'tableName'   => 'services_page',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $services_pageRecord = @$services_pageRecords[0]; // get first record
  if (!$services_pageRecord) { dieWith404("Record not found!"); } // show error message if no record found

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "_includes/head.php" ?>
<title><?php echo htmlencode($services_pageRecord['title']) ?></title>
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
					<div class="col-xs-12 col-md-7">
                    		<h1>
                            <span class="h3 brown text-uppercase strong"><?php echo htmlencode($services_pageRecord['main_header']) ?></span><br>
                            <span class="adelle"><?php echo htmlencode($services_pageRecord['main_subheader']) ?></span>
						</h1>
                    </div>
                    <!-- Start Scorecard and Firm Profile buttons for Desktop Up -->
                    <div class="col-xs-12 col-md-5 text-right hidden-xs hidden-sm">
                    		<a href="#" class="btn btn-light-blue xs-mt-5">View Video</a><a href="#" class="btn btn-black xs-mt-5 xs-ml-15">View Firm Profile</a>
                    </div>
                    <!-- End Scorecard and Firm Profile buttons for Desktop Up -->
                    <div class="col-xs-12 xs-mt-15 semi"><?php echo htmlencode($services_pageRecord['main_second_subheader']) ?></div>
                    <div class="col-xs-12 xs-mt-15 intro gray thin"><?php echo ($services_pageRecord['main_intro_copy']) ?></div>
                    <!-- Start Scorecard and Firm Profile buttons for Tablet Down -->
                    <div class="col-xs-12 text-left-xs text-center-not-xs hidden-md hidden-lg">
                    		<a href="#" class="btn btn-light-blue xs-mt-5">View Video</a><a href="#" class="btn btn-black xs-mt-5 xs-ml-15">View Firm Profile</a>
                    </div>
                    <!-- End Scorecard and Firm Profile buttons for Tablet Down -->
				</div>
			</div>
        </section>

        <section class="well0">
            <div class="resp-tabs">
                <div class="resp-tabs-container bg-contrast-variant-1">
                    <div>
                        <div class="container-fluid container-fluid-no-gutter">
                            <div class="row row-no-gutter">
                                <div class="col-sm-4">
                                    <div class="post " style="background-image:url('_img/so_database_mktg.jpg');">
                                    
                                        <div class="post_readmore_hover">
                                        		<a href="services/brand-positioning.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>
                                        
                                        <img src="_img/so_database_mktg_overlay.png" alt="" class="imageoverlay">

                                        <div class="post_cnt">
                                            <h2>
                                                <a href="services/database-marketing.php" class="white">
                                                		<img src="_img/icon-database.png" alt=""><br>
                                                    <span class="text-uppercase strong">Database<br>Marketing<br></span><span class="adelle lightest-blue">Make the data<br>talk to you.</span>
                                                </a>
                                            </h2>
                                        </div>
                                        
                                        <div class="post_readmore">
                                        		<a href="services/database-marketing.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>
                                    </div>
                                    <div class="post " style="background-image:url('_img/so_brand_position.jpg');">

                                        <div class="post_readmore_hover">
                                        		<a href="services/brand-positioning.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>

                                        <img src="_img/so_brand_position_overlay.png" alt="" class="imageoverlay">

                                        <div class="post_cnt">
                                            <h2>
                                                <a href="services/brand-positioning.php" class="white">
                                                		<img src="_img/icon-target.png" alt=""><br>
                                                    <span class="text-uppercase strong">brand &amp;<br>positioning<br></span><span class="adelle lightest-blue">Create irrational loyalty.</span>
                                                </a>
                                            </h2>
                                        </div>
                                        
                                        <div class="post_readmore">
                                        		<a href="services/brand-positioning.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="post " style="background-image:url('_img/so_player_dev.jpg');">
                                        
                                        <div class="post_readmore_hover">
                                        		<a href="services/brand-positioning.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>

                                        <img src="_img/so_player_dev_overlay.png" alt="" class="imageoverlay">
                                        
                                        <div class="post_cnt">
                                            <h2>
                                                <a href="services/player-development.php" class="white">
                                                		<img src="_img/icon-player.png" alt=""><br>
                                                    <span class="text-uppercase strong">Player<br>Development<br></span><span class="adelle gray">Seek the right people.<br>Then connect.</span>
                                                </a>
                                            </h2>
                                        </div>
                                        
                                        <div class="post_readmore">
                                        		<a href="services/player-development.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>
                                    </div>
                                    <div class="post " style="background-image:url('_img/so_casino_adv.jpg');">

                                        <div class="post_readmore_hover">
                                        		<a href="services/brand-positioning.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>

                                        <img src="_img/so_casino_adv_overlay.png" alt="" class="imageoverlay">

                                        <div class="post_cnt">
                                            <h2>
                                                <a href="services/casino-advertising.php" class="white">
                                                		<img src="_img/icon-spade.png" alt=""><br>
                                                    <span class="text-uppercase strong">Casino<br>Advertising<br></span><span class="adelle gray">Strategic.<br>Inspired.<br>Compelling.</span>
                                                </a>
                                            </h2>
                                        </div>
                                        
                                        <div class="post_readmore">
                                        		<a href="services/casino-advertising.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="post " style="background-image:url('_img/so_market_research.jpg');">

                                        <div class="post_readmore_hover">
                                        		<a href="services/brand-positioning.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>
                                        
                                        <img src="_img/so_market_research_overlay.png" alt="" class="imageoverlay">                                        

                                        <div class="post_cnt">
                                            <h2>
                                                <a href="services/market-research.php" class="white">
                                                		<img src="_img/icon-spade.png" alt=""><br>
                                                    <span class="text-uppercase strong">market research<br></span><span class="adelle gray">We know gamblers.<br>They speak.<br>We listen.</span>
                                                </a>
                                            </h2>
                                        </div>
                                        
                                        <div class="post_readmore">
                                        		<a href="services/market-research.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>
                                    </div>
                                    <div class="post " style="background-image:url('_img/so_digital_serv.jpg');">

                                        <div class="post_readmore_hover">
                                        		<a href="services/brand-positioning.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>

                                        <img src="_img/so_digital_serv_overlay.png" alt="" class="imageoverlay">

                                        <div class="post_cnt">
                                            <h2>
                                                <a href="services/digital-services.php" class="white">
                                                		<img src="_img/icon-digital-services.png" alt=""><br>
                                                    <span class="text-uppercase strong">digital services<br></span><span class="adelle gold">Dynamic functionality creates a digital dialogue.</span>
                                                </a>
                                            </h2>
                                        </div>
                                        
                                        <div class="post_readmore">
                                        		<a href="services/digital-services.php" class="white"><img src="/_img/more-button.png"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
	$('#menu-services').addClass('active');
});
</script>
<script>
$('.post').each(function() {	
	$(this)
	  .mouseenter(function() {
		$(this).find('.post_readmore_hover').fadeIn(500);  
		$(this).find('.post_cnt, .post_readmore').fadeOut(300);
		$(this).find('.post_readmore').css({ 'z-index':10 });
	  })
	  .mouseleave(function() {
		$(this).find('.post_readmore_hover').fadeOut(500);  
		$(this).find('.post_cnt, .post_readmore').fadeIn(300);
		$(this).find('.post_readmore').css({ 'z-index':0 });
	  });
});
</script>
</body>
</html>