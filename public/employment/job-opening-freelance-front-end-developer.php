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
                    		<span class="adelle">Freelance Front-End Developer</span></h1>
						<p>Marketing Results, an innovative communications company dedicated to the casino industry, is looking for a freelance front-end developer to work on website projects and email campaigns on a per-project basis. </p>
						<strong>Requirements:</strong>
                        <div>
                          <p>We are looking for someone with proven experience producing pixel-perfect responsive web pages and email campaigns, low-fidelity prototypes, site interactions and animations. You should be able to demonstrate a superior knowledge of HTML and CSS and be comfortable working with jQuery to create site animations and interactions. Familiarity with LESS, Git, Bootstrap and/or WordPress would also be a plus.</p>
                          <p>Attention to detail, excellent communication skills, the ability to deliver projects on deadline, and a positive attitude are essential. Ability to meet and/or work onsite is a plus.</p>
                        </div>
                        <p>Please send your resume and a link to your online portfolio, or links to recent work samples with a short note describing your role in each, to mricreative (at) gmail.com.  <strong>Local candidates only; no recruiters, telephone calls or walk-ins please</strong>. We&rsquo;re serious about that.</p>
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