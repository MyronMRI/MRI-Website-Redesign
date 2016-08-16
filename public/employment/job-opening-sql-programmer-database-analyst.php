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
                    		<span class="adelle">SQL Programmer / Database Analyst</span></h1>
						<p>Marketing Results is a gaming industry pioneer in high-tech consumer database marketing.  We are looking for a full-time entry to intermediate level IT professional who seeks to apply skills and gain experience in working with SQL databases and reporting applications to join our team!  We offer great benefits and opportunities for growth.</p>
						<strong>Responsibilities:</strong>
                          <ul>
                            <li>Working with data warehouse systems on SQL Server</li>
                            <li>Assisting in managing diverse ETL processes</li>
                            <li>Utilizing data mining, stored procedures, and table architectures in MSSQL 2000/2005/2008</li>
                            <li>Working with existing tools and software to produce results as well as becoming a contributing member to the design and development processWorking with analysis and reporting applications in Visual Studio and using other in-house applications</li>
                            <li>Working with large scale data warehouse structures to produce direct marketing lists</li>
                            <li>Having a focus on high quality control, using established processes and procedures as well as understanding data with queries, manipulation, and interpretation</li>
                          </ul>
                        <strong>Requirements:</strong>
                          <p>We are looking for a team player to work with the IT team of a well established marketing firm.  The individual should have strong critical thinking and problem-solving skills, be able to self-motivate, and have an appetite for learning.</p>
                          <p>The ideal candidate should have experience in the following areas:</p>
                          <ul>
                            <li>SQL server usage and administration concepts</li>
                            <li>Familiarity and experience with T-SQL (or other SQL language)</li>
                            <li>Stored procedures</li>
                            <li>Visual Studio versions</li>
                            <li>Good written and verbal communication skills</li>
                            <li>High attention to detail</li>
                            <li>Prefer a small-business, fast paced working environment</li>
                            <li>Familiarity with Windows environment and server/network architecture is a plus.</li>
                            <li>Net languages, data modeling, and application development is a plus.</li>
                            <li>Bachelor's degree in math/statistics, computer science, CIS / MIS, or equivalent combination of education and/or experience</li>
                          </ul>
                        <p>Salary based on experience. We do not offer H1B sponsorship.  Local applications only please.﻿</p>
                        <p>All applications must be able to demonstrate their US work authorization during the employment verification process. ﻿</p>
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