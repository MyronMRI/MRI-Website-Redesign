<!DOCTYPE html>
<html lang="en">
<head>
<?php include "_includes/head.php" ?>
<title>Contact MRI</title>
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
    
        <section class="well bgcream">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 xs-mb-25">
								<h1>
									<span class="h3 brown text-uppercase strong">Site Map</span><br>
									<span class="adelle">Marketing Results, Inc.</span>
								</h1>
					</div>
					<div class="col-xs-12 col-sm-6">
						<h3 class="light-blue text-uppercase strong xs-mb-15">Services</h3>
                                <ul>
									<li><a href="/services.php">Overview</a></li>
                                    
                        <?php foreach ($servicesRecords as $record): ?>
                        <li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
                        <?php endforeach ?>
                        
                                </ul>                      
                  </div>
					<div class="col-xs-12 col-sm-6">
						<h3 class="light-blue text-uppercase strong xs-mb-15">Products</h3>
                                <ul>
									<?php foreach ($productsRecords as $record): ?>
                                    <li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
                                    <?php endforeach ?>
                                </ul>  
                    		<ul>
							<?php foreach ($about_usRecords as $record): ?>
                            <li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
                            <?php endforeach ?>
							<?php foreach ($job_pageRecords as $record): ?>
                            <li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['main_header']) ?></a></li>
                            <?php endforeach ?>
                            <li><a href="/contact/index.php">Contact Us</a></li>
							<?php foreach ($privacy_policyRecords as $record): ?>
                            <li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
                            <?php endforeach ?>
                            <li><a href="/sitemap.php">Site Map</a></li>
                    		</ul>
                    
                    </div>
				</div>
			</div>
        </section>
        
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