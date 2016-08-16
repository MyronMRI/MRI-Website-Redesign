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
                    		<h1 class="xs-mb-25"><span class="h3 brown text-uppercase strong">New Jersey Office</span><br><span class="adelle">Graphic Designer – Full Time</span></h1>
						<p>Marketing Results, a marketing company in Sicklerville, NJ, has a full-time position available for an experienced print and multimedia designer.</p>
						<strong>Responsibilities:</strong>
                        <div>
                          <p>Position will focus on print and interactive projects, including websites, emails, print advertising, direct mail, billboards and other client collateral. Candidates should show exceptional design skills and a solid understanding of effective user interface design. Additional consideration will be given to candidates with knowledge of HTML, CSS and Javascript and/or experience with Flash animation. Designer must have the ability to generate new creative ideas as well as execute own and others&rsquo; design concepts.</p>
                        </div>
                        <strong>Requirements:</strong>
                          <ul>
                            <li>4 yr. degree (preferred) and/or art school with coursework relevant to position being offered</li>
                            <li>Must be comfortable with the Macintosh platform along with all of the following applications: Photoshop, Illustrator, Acrobat, Dreamweaver, QuarkXPress and MS Office</li>
                            <li>Must work well with others in a team-oriented, fast-paced environment and under tight deadlines</li>
                            <li>Strong independent work skills</li>
                            <li>Ability to listen carefully and take direction</li>
                            <li>Excellent verbal and written communication skills, including grammar, spelling and punctuation</li>
                            <li>Highly detail oriented; excellent organizational skills</li>
                            <li>Outstanding ability to work on multiple projects throughout the day</li>
                            <li>Fun to work with and someone who is committed to making a difference</li>
                          </ul>
                        <p>Marketing Results is the one and only casino marketing company that has studied gamblers for 30 years. Players&rsquo; needs evolve. We help clients adapt to change faster and to seize opportunities before competitors recognize them as opportunities. The communications strategies and promotions we design equip our gaming clients to gain market share and grow – even in challenging economies.</p>
                        <p>We created AIM (Advanced Intelligence Marketing) CRM tools for marketers. AIM makes marketers more effective and provides essential business analytics to grow your database quicker and to build powerful player loyalty. We create great gaming brands that ignite the player's soul by listening to players first then creating friends by choice – not by chance! We are the gambler marketing leaders.</p>
                        <p>Location: Our local office is located in Sicklerville, New Jersey – approximately 20 miles from Philadelphia with easy access from Rt. 42 and the Atlantic City Expressway.</p>
                        <ul type="disc">
                          <li>Principals only. Recruiters, please don't contact this job poster.</li>
                          <li>Please, no phone calls about this job!</li>
                          <li>Please do not contact job poster about other services, products or commercial interests.</li>
                        </ul>
                        <p>We recognize people as our most valuable asset. Our competitive salary and benefits package includes medical, dental, and vision insurance, 401K, and bonuses.</p>
                        <p>Please send your resume and a description of recent projects, including URLs if applicable, to mricreative (at) gmail.com. No telephone calls or walk-ins please.</p>
                        <p>For more information about Marketing Results, visit www.marketingresults.net.</p>
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