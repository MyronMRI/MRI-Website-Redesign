<!DOCTYPE html>
<html lang="en">
<head>
<?php include "_includes/head.php" ?>
<title></title>
</head>

<body>
<div class="page">
	<?php include "_includes/top.php" ?>
    <!--========================================================
                              HEADER
    =========================================================-->
	<?php include "_includes/navigation.php" ?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
    
<!-- Start Third Banner -->

<section class="bg-fixed-right" style="background-image:url('../_img/hero-brand-positioning.jpg');">

    <div class="container">
        <div class="row">
                <div class="col-md-6 col-lg-5 content-container-left">
                <div class="panel bgwhite ultraheading xs-pl-30 xs-pr-30 flex vertical-center largecaption-height text-uppercase wow fadeInLeft hide-anim" data-wow-duration="1s" data-wow-delay="0s">
                        <div><strong class="rust">Mobile app solutions</strong><br>With the gambler in mind</div>
                </div>
                        
                </div>
            </div>
                <div class="col-md-6 col-lg-7 content-container-right">
                <!-- This is empty -->
            </div>
        </div>
    </div>

</section>

<!-- End Third Banner -->


       
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->    
    <?php include "_includes/footer.php" ?>
</div>

<?php include "_includes/script.php" ?>
<script src="_js/script.js"></script>
<script>
$(document).ready(function() {
	$('#menu-contact').addClass('active');
});
</script>
<script>
$(document).ready(function() {
	var wwidth = $(window).width();
	var cwidth = $('.container').width();
	var coffset = Math.abs((wwidth-cwidth)/2);
	var thirdsl = $('.content-container-left').width();
	var thirdslh = $('.content-container-left').height();
	$('.3rdsectionoffset').css({
		'width':coffset,
		'height':thirdslh
	});
	$('.3rdsectionleft').css({
		'width':thirdsl,
		'height':thirdslh
	});
	$('.3rdsectionright').css({
		'width':(wwidth - (thirdsl+coffset)),
		'height':thirdslh
	});
});
</script>
</body>
</html>