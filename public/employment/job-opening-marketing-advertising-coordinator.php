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
                    		<h1 class="xs-mb-25"><span class="h3 brown text-uppercase strong">Las Vegas Office</span><br>
                    		<span class="adelle">Marketing/Advertising Coordinator</span></h1>
						<p>We are seeking a detail-oriented individual to coordinate direct mail and advertising projects.</p>
						<strong>Requirements:</strong>
                          <p>Superior communication, copywriting and proofreading skills are necessary. Must be extremely well organized and capable of handling multiple projects within established timelines. Proficiency in Word &amp; Excel required. Agency or casino marketing experience a plus.</p>
                        <p>Persuasive cover letter and salary requirements must be included.</p>
                        <p>We recognize people as our most valuable asset. Our competitive salary and benefits package includes medical, dental, and vision insurance, 401K, and bonuses.</p>
                        <p>Please email or fax the following (a MUST for consideration): résumé, cover letter, and salary requirements to: <a href="mailto:jobsmri@yahoo.com">jobsmri@yahoo.com</a> or fax 702-361-2905. No telephone calls or walk-ins please.</p>
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