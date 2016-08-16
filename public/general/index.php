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
                    		<h1 class="xs-mb-25"><span class="h3 brown text-uppercase strong">Privacy Policy</span><br><span class="adelle">Our Commitment to Privacy</span></h1>
						<p>Marketing Results, Inc. is committed to protecting your personal privacy. We provide this notice to explain the type of information that is collected at our http://www.marketingresults.net website. This policy also explains the choices that you can make about the way your information is collected and used. Our privacy policy is available to you to review on our home page and at every site where we have requested personally identifiable information. Online privacy is a constantly evolving landscape and Marketing Results Inc. plans to take all reasonable efforts to maintain up to date and effective online privacy standards and practices.</p>
						<h3>The Information We Collect</h3>
						<p>This policy applies to all information submitted to this website. You may be asked to provide personal information so that we can respond to your request for information or your feedback to us. We will not require you to provide more information than is necessary to participate in any of our site activities. When you provide your personal information such as name, address, email address and phone number, Marketing Results will not give or sell this information to any outside company for any use.</p>
						<h3>Use of Cookies</h3>
						<p>Cookies are files stored or pieces of information that may be stored on your computer's hard drive when visiting a website. We use cookies to better tailor our site and our products to your interests and needs. Cookies may also be used to help speed your future activities or to improve your user experience by remembering information from your computer that was not voluntarily provided by you (i.e., during registration) but does not include data that will identify you personally. The use of cookies is an industry standard and you will find them at most websites. Most browsers are initially set to accept cookies. If you would prefer, you can set your browser to refuse cookies or to alert you when cookies are being sent so that you can flush them from your browser if you object to their presence.</p>
						<p>Tracking technologies may record information such as Internet domain and host names; Internet protocol (IP) addresses; browser software and operating system types; click stream patterns; and dates and times that our site is accessed. Our use of cookies and other tracking technologies allows us to improve our website and your web experience. We may also analyze information that does not contain personal information for trends and statistics.</p>
						<h3>Links to Other Sites</h3>
						<p>Users should be aware that when you are on this website you could be directed to other sites that are beyond our control. There may be links to other sites that take you outside of our service. These other sites may send their own cookies to users, or otherwise collect data or solicit personal information. Also be aware of where you end up when you navigate the web. Check the linked site to locate its privacy policy which may be different from our own. If the Marketing Results, Inc. site links you to any third party site, Marketing Results makes no representation as to the existence, sufficiency, accuracy or completeness of their privacy policy.</p>
						<h3>Our Commitment to Data Security</h3>
						<p>We take every reasonable precaution to keep your personal information secure. We have put in place appropriate physical, electronic and managerial procedures to safeguard the information we collect. We cannot guarantee the security of any information you disclose online, and you do so at your own risk.</p>
						<h3>Our Commitment to Children's Privacy</h3>
						<p>Marketing Results, Inc.&rsquo;s website has no intention of collecting any personal information from any individuals under the age of 18 and we will not knowingly permit any communication from a child 18 and under.</p>
						<h3>Removal from Database</h3>
						<p>To be removed from our email database, <a href="http://www2.marketingresults.net/optout/optout.asp">click here</a> or call 1-856-740-3334 or 1-702-361-3850. Be sure to supply the email address you used to register.</p>
						<h3>Future Privacy Policy Changes</h3>
						<p>We reserve the right to change or remove this privacy policy at our discretion. If we decide to change our privacy policy, we will post those changes here. We encourage you to visit this area frequently to stay informed. We will not make any changes which allow us to give personal information to a third party without obtaining permission from you first. By using this site, you signify your consent to the terms of Marketing Results, Inc.&rsquo;s privacy policy. If you do not agree with any of the terms in this policy, please do not use this site to submit personally identifiable information.</p>
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