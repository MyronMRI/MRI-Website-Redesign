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
                    		<span class="adelle">Freelance Copywriter (Website and Advertising)</span></h1>
						<p>Marketing Results seeks a versatile and creative freelance copywriter to serve in the execution of all phases of our clients' marketing and advertising efforts on a per-project basis.</p>
						<strong>Responsibilities:</strong>
                          <ul>
                            <li>Developing highly effective, original and targeted marketing copy for the promotion and sale of goods and services.</li>
                            <li>Working in tandem with departments of the organization to write &amp; edit creative materials for promotions, direct marketing (email, newsletter), advertisements as well as website content, etc.</li>
                          </ul>
                        <strong>Requirements:</strong>
                          <ul>
                            <li>A thorough understanding of the target audience and maintaining the right tone of voice while writing copy.</li>
                            <li>Excellent command over the English language. Expert writing skills, editing and proof reading abilities.</li>
                            <li>Ability to write concise, attention grabbing and hard-hitting copy that puts the message across.</li>
                            <li>Exposure to writing print promotional materials, online web content, press releases, copy to assist advertising and marketing efforts, etc.</li>
                            <li>An advertising background with an understanding of Search Engines and Internet Marketing, an added benefit.</li>
                            <li>Quick idea generation &amp; ability to come up with ideas.</li>
                            <li>Delivering within short time frames and meeting tight deadlines.</li>
                          </ul>
                        <p>Please send your resume and a link to your online portfolio, or links to recent work samples with a short note describing your role in each, and hourly requirements to borderj@marketingresults.net.  <strong>No recruiters, telephone calls or walk-ins please</strong>.</p>
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