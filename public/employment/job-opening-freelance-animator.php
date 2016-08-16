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
                    		<h1 class="xs-mb-25"><span class="h3 brown text-uppercase strong">New Jersey Office</span><br>
                    		<span class="adelle">Freelance Animator</span></h1>
						<p>Marketing Results, an innovative communications company dedicated to the casino industry, is looking for a freelance animator who has experience designing motion graphics using After Effects along with video editing and production skills. Projects will generally involve developing animations for websites and landing pages, incorporating supplied creative materials along with video and audio elements.</p>
						<strong>Requirements:</strong>
                          <p>Animators will be expected to contribute creatively and have the ability to transform a rough storyboard into a professional presentation, whether it&rsquo;s targeted towards a casino and entertainment customer or to a B-to-B audience. Attention to detail, excellent communication skills, the ability to deliver projects on deadline, and a positive attitude are essential. Ability to meet and/or work onsite is a plus.</p>
                        <p>Please send your resume and a link to your online portfolio, or links to recent work samples with a short note describing your role in each, to mricreative (at) gmail.com. <strong>Local candidates only; no recruiters, telephone calls or walk-ins please</strong>. We&rsquo;re serious about that.</p>
                        <p>For more information about Marketing Results, <a href="http://marketingresults.net/index.php">please explore our site</a>.</p>
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