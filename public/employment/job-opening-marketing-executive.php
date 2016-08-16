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
                    		<span class="adelle">Marketing Executive</span></h1>
						<p>Established marketing firm in the gaming industry seeks an experienced marketing executive. Reporting to the President, the marketing executive is responsible for developing, managing and consulting on marketing activities for new and established clients across the country.</p>
						<strong>Responsibilities:</strong>
                          <p>Responsibilities include identifying and contacting nationwide business leads, preparing and delivering presentations and acquiring new clients. Areas of focus to include developing, coordinating and implementing marketing strategies for casino clients in database, direct marketing, player&rsquo;s club operations, promotions and advertising.</p>
                        <strong>Requirements:</strong>
                          <p>Requirements include 5 years of marketing experience. Prefer management experience in a casino hotel environment. Experience in preparing budgets, revenue projections and management reports; must demonstrate superior writing and oral communications along with computer operating skills. Business travel required.</p>
                        <p>Salary: $48,000 – $70,000 based on experience plus commission/referral bonus.</p>
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