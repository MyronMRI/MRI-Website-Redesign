<footer>
<section id="footer-contact-info" class="xs-pt-20 xs-pb-20 bgdark-brown">
	<div class="container">
        <div class="row">
            <div class="col-xs-12 white">
                <!-- Start Footer on Tablet Up -->
                <div class="hidden-xs">
					<div class="flex vertical-bottom">
						<div><strong class="ultraheading"><a href="tel:7023613850" class="telephone-number white">702.361.3850</a></strong></div>    
                        <div><span class="megaheading">LAS VEGAS</span></div>
                        <div><span class="megaheading">ATLANTIC CITY</span></div>
                        <div><span class="megaheading">PHILADELPHIA</span></div>
                        <div><span class="megaheading">@</span></div>
                        <div class="megaheading"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                        <div class="megaheading"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                        <div class="megaheading"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                        <div class="megaheading"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                    </div>
                </div>
                <!-- End Footer on Tablet Up -->
                <!-- Start Footer on Mobile -->
                <div class="row visible-xs text-center">
                		<div class="col-xs-12"><strong class="ultraheading"><a href="tel:7023613850" class="telephone-number white">702.361.3850</a></strong></div>
                     <div class="col-xs-12"><span class="megaheading xs-pl-15 xs-pr-15">LAS VEGAS</span><div class="clearfix visible-xs"></div><span class="megaheading xs-pl-15 xs-pr-15">ATLANTIC CITY</span><div class="clearfix visible-xs"></div><span class="megaheading xs-pl-15 xs-pr-15">PHILADELPHIA</span></div>
                     <div class="col-xs-12"><i class="fa fa-facebook xs-pl-15 xs-pr-15" aria-hidden="true"></i><i class="fa fa-twitter xs-pl-15 xs-pr-15" aria-hidden="true"></i><i class="fa fa-linkedin xs-pl-15 xs-pr-15" aria-hidden="true"></i><i class="fa fa-google-plus xs-pl-15 xs-pr-15" aria-hidden="true"></i></div>   
                </div>
                <!-- End Footer on Mobile and Tablet -->
			</div>
        </div>
	</div>
</section>
<section class="well bgcream">
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 text-center-xs text-left-not-xs">
        		<div class="row">
                <div class="col-xs-12 megaheading samesize text-uppercase light-blue xs-mt-15 xs-mb-15 wow fadeInDown hide-anim" data-wow-delay="0s" data-wow-duration="1s">Services</div>
        			<div class="col-xs-12 col-sm-6 bullet-services wow fadeInUp hide-anim" data-wow-delay=".3s" data-wow-duration="1s">
					<ul>
                    		<?php foreach ($productsRecords as $record): ?>
                        <li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
                        <?php endforeach ?>
                        <?php foreach(array_slice($servicesRecords, 0, 2) as $record ): ?>
                        <li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
                        <?php endforeach ?>
					</ul>
                </div>
        			<div class="col-xs-12 col-sm-6 bullet-services wow fadeInUp hide-anim" data-wow-delay=".6s" data-wow-duration="1s">
					<ul>
                        <?php foreach(array_slice($servicesRecords, 2, 6) as $record ): ?>
                        <li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
                        <?php endforeach ?>
					</ul>
                </div>
        		</div>
        </div>
		<div class="col-xs-12 col-sm-6 text-center-xs text-left-not-xs">
        		<div class="row">
                <div class="col-xs-12 megaheading samesize text-uppercase light-blue xs-mt-15 xs-mb-15 wow fadeInDown hide-anim" data-wow-delay=".9s" data-wow-duration="1s">Company</div>
        			<div class="col-xs-12 col-sm-6 bullet-services wow fadeInUp hide-anim" data-wow-delay="1.2s" data-wow-duration="1s">
					<ul>
					  <li><a href="/bios.php">About Us</a></li>
					  <li><a href="/contact/index.php">Contact Us</a></li>
                      <li><a href="/employment.php">Employment</a></li>
					</ul>
                </div>
        			<div class="col-xs-12 col-sm-6 bullet-services wow fadeInUp hide-anim" data-wow-delay="1.5s" data-wow-duration="1s">
					<ul>
						<li><a href="/general.php?1">Privacy Policy</a></li>
						<li><a href="/sitemap.php">Site Map</a></li>
					</ul>
                </div>
        		</div>
        </div>
	</div>
</div>
</section>
<section class="xs-pt-20 xs-pb-20 bgmoss">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center small white">&copy<?php echo date('Y') ?> All Rights Reserved, Marketing Results, Inc.</div>
		</div>
	</div>
</section>
</footer>