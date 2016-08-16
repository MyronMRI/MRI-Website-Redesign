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
                    		<span class="adelle">Digital Designer/Front-End Developer</span></h1>
						<p>Are you a designer who works with code or a developer with an eye for design? We&rsquo;re looking for a digital designer and front-end developer with two to three years of professional, post-collegiate experience. This position is part of a collaborative creative team that is as passionate about great typography as we are about new technology. As a member of our department you&rsquo;ll have the opportunity to work on a variety of projects, including responsive websites and email campaigns, interactive landing pages, account dashboards and mobile applications. </p>
						<strong>Requirements:</strong>
                        <div>
                          <p>We are looking for someone with proven experience producing pixel-perfect web pages and HTML email templates that are optimized for all major platforms, web browsers and email clients. You should be able to demonstrate a superior knowledge of HTML and CSS, a solid understanding of effective user interface design, and the ability to balance design aesthetics with web standards and other programming constraints. You should also be comfortable working with jQuery to create site animations and interactions; familiarity with LESS and Git a plus.</p>
                          <p>We will also expect you to be:</p>
                          <ul>
                            <li>A creative problem solver with strong independent work skills</li>
                            <li>Able to work collaboratively with a team of designers and developers</li>
                            <li>Adept at handling multiple projects in a fast-paced environment and under tight deadlines</li>
                            <li>Excited about learning new technologies and techniques</li>
                            <li>Comfortable with the Macintosh platform along with all of the following applications: Photoshop, Illustrator, Acrobat, Dreamweaver and/or Sublime Text, and MS Office</li>
                            <li>The owner of a bachelor&rsquo;s degree with relevant coursework and/or equivalent work experience</li>
                            <li>Fun to work with and someone who is committed to making a difference</li>
                          </ul>
                        </div>
                        <p>Our office is located in Sicklerville, New Jersey, approximately 20 miles from Philadelphia with easy access from Rt. 42 and the Atlantic City Expressway. We offer a competitive salary and benefits package for full-time employees including medical, dental and vision insurance, employee stock ownership plan, 401K, and bonuses. </p>
                        <p>Please supply your resume and a link to your online portfolio, or links to recent work samples with a short note describing your role in each, to mricreative (at) gmail.com. <strong>Local candidates only; no recruiters, telephone calls or walk-ins please</strong>. We&rsquo;re serious about that.</p>
                        <p>For more information about Marketing Results, <a href="http://marketingresults.net/index.php">please explore our site</a>. </p>
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