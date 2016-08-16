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
                    		<span class="adelle">Sr. Graphic Designer</span></h1>
						<p>Marketing Results, a leader in casino marketing and advertising, is looking for an exceptional senior level graphic designer. Must possess strong skills in conceptual thinking and design execution for both print and multimedia projects. Must be able to work quickly and independently under strict deadlines.</p>
						<strong>Responsibilities:</strong>
                          <ul>
                            <li>Conceptualize and design: Promotional logo design and supporting collateral, Brand and identity development, Direct mail campaigns, Advertising (print, outdoor, tv, radio) campaigns, Email layout design, Website design, Mobile website design, Development of animated multimedia content, Copywriting skills preferred.</li>
                            <li>Development of Creative Briefs</li>
                            <li>Provide direction to third party creative resources, where required.</li>
                            <li>Embody the work ethic and personality that thrives in a fast-paced culture with tight deadlines, shifting priorities, and working with talented colleagues from numerous departments and locations.</li>
                            <li>Ability to quickly assimilate complex, and sometimes ambiguous, ideas and propose elegant design solutions that solve problems.</li>
                            <li>Incorporate site analytics and feedback and apply them intelligently into design solutions that optimize existing features and functionality.</li>
                            <li>Evangelize the role of design across the company.</li>
                          </ul>
                        <strong>Requirements:</strong>
                          <ul>
                            <li>At least five years visual design experience, of which 2 years minimum practical experience designing and building consumer-facing web applications.</li>
                            <li>Degree in Graphic Design or graduate of an art school/equivalent experience.</li>
                            <li>Excellent communication skills.</li>
                            <li>Proficiency with the latest design and MS Office software on the Mac platform.</li>
                            <li>Cover letter, resume, and salary requirements</li>
                            <li>PDF samples and/or link to an online portfolio (a must for consideration)</li>
                          </ul>
                        <p>Send to mricreative (at) gmail.com. No telephone calls or walk-ins please. For more information about Marketing Results, visit <a href="http://marketingresults.net/">www.marketingresults.net</a>.</p>
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