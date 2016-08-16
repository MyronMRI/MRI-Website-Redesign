<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../_includes/head.php" ?>
<title>Contact MRI</title>
</head>

<body>
<div class="page">
	<?php include "../_includes/top.php" ?>
    <!--========================================================
                              HEADER
    =========================================================-->
	<?php include "../_includes/navigation.php" ?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
    
        <section class="well bgcream">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
                    		<h1 class="xs-mb-25"><span class="h3 brown text-uppercase strong">Employment</span><br><span class="adelle">Join the Team at Marketing Results</span></h1>
						<p>Marketing Results is continually seeking highly motivated, passionate, smart individuals with a strong work ethic to join our casino marketing team. Are you self-motivated and have a desire to help our clients succeed? If this is you, contact us to find out about the employment opportunities at Marketing Results. We offer great benefits and opportunities for growth.</p>
                         <p class="h3">Creative</p>
                         <p class="h4">New Jersey Office</p>
                         <ul>
                         	<li><a href="job-opening-graphic-designer.php">Graphic Designer - Full-Time</a></li>
                         	<li><a href="job-opening-senior-graphic-designer.php">Sr. Graphic Designer</a></li>
                         </ul>
                         <p class="h3">Digital</p>
                         <p class="h4">New Jersey Office</p>
                         <ul>
                         	<li><a href="job-opening-digital-designer-front-end-developer.php">Digital Designer / Front-End Developer</a></li>
                         	<li><a href="job-opening-freelance-front-end-developer.php">Freelance Front-End Developer</a></li>
                            <li><a href="job-opening-freelance-animator.php">Freelance Animator (websites and digital media)</a></li>
                         </ul>
                         <p class="h3">IT</p>
                         <p class="h4">Las Vegas Office</p>
                         <ul>
                         	<li><a href="job-opening-programmer-application-developer.php">Programmer / .Net Application Developer</a></li>
                         	<li><a href="job-opening-sql-programmer-database-analyst.php">SQL Programmer / Database Analyst</a></li>
                         </ul>
                         <p class="h3">Marketing</p>
                         <p class="h4">Las Vegas Office</p>
                         <ul>
                         	<li><a href="job-opening-freelance-copywriter-website-and-advertising.php">Freelance Copywriter (website and advertising)</a></li>
                         	<li><a href="job-opening-marketing-executive.php">Marketing Executive</a></li>
                         </ul>
                         <p class="h3">Production</p>
                         <p class="h4">Las Vegas Office</p>
                         <ul>
                         	<li><a href="job-opening-marketing-advertising-coordinator.php">Marketing / Advertising Coordinator</a></li>
                         </ul>
                    </div>
				</div>
			</div>
        </section>
        
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->    
    <?php include "../_includes/footer.php" ?>
</div>

<?php include "../_includes/script.php" ?>
<script src="../_js/script.js"></script>
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