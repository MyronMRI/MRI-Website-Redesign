	<?php foreach ($productsRecord['product_hero_image'] as $index => $upload): ?>
		<?php if ($index >= 1) { continue; } // limit uploads shown ?>
        <section class="bg-fixed-right" style="background-image:url('<?php echo htmlencode($upload['urlPath']) ?>');">
        <?php endforeach ?>
            <div class="container-fluid">
                <div class="row">
                        <div class="col-sm-5">
                        <div class="panel bgdark-blue-transparent pull-right ultraheading samesize white xs-pl-30 xs-pr-30 flex vertical-center text-uppercase largecaption wow fadeInLeft hide-anim" data-wow-duration="1s" data-wow-delay="0s">
                                <div><strong><?php echo htmlencode($productsRecord['product_tagline_1']) ?></strong><br><?php echo htmlencode($productsRecord['product_tagline_2']) ?></div>
                        </div>
                    </div>
                        <div class="col-lg-7">
                        <!-- This is empty -->
                    </div>
                    <div class="clearfix"></div>
                        <div class="col-sm-5">
						<?php foreach ($productsRecord['product_intro_image'] as $index => $upload): ?>
						<?php if ($index >= 1) { continue; } // limit uploads shown ?>
                        <div class="panel largecaption-height bgcover wow fadeInLeft hide-anim" data-wow-duration="1s" data-wow-delay=".3s"  style="background-image:url('<?php echo htmlencode($upload['urlPath']) ?>');"></div>
                        <?php endforeach ?>
                    </div>
                        <div class="col-lg-7">
                        <!-- This is empty -->
                    </div>
                </div>
            </div>
        </section>

    
        <section class="well bgcream">
        		<div class="container">
        			<div class="row">
					<div class="col-lg-12">
                    		<div class="media">
							<?php foreach ($productsRecord['main_icon'] as $index => $upload): ?>
							<?php if ($index >= 1) { continue; } // limit uploads shown ?>
                    			<div class="media-left media-middle"><img src="<?php echo htmlencode($upload['urlPath']) ?>" alt="" class="center-block"></div>
							<?php endforeach ?>
                    			<div class="media-body media-middle"><h1 class="superheading brown text-uppercase raleway"><strong><?php echo htmlencode($productsRecord['main_header']) ?></strong></h1><h2 class="ultraheading adelle"><?php echo htmlencode($productsRecord['main_subheader']) ?></h2></div>
                    		</div>
                    </div>
        			</div>
        		</div>
        
            <div class="container text-sm-center">
                <div class="row">
                    <div class="col-md-4 col-sm-12 image-wrap-1 xs-mt-15">
					<?php foreach ($productsRecord['main_intro_image'] as $index => $upload): ?>
						<?php if ($index >= 1) { continue; } // limit uploads shown ?>
                        <img src="<?php echo htmlencode($upload['urlPath']) ?>" class="img-responsive center-block" alt="">
					<?php endforeach ?>
                    </div>
                    <div class="col-md-8 col-sm-12 intro gray xs-mt-15">
                    		<p><?php echo ($productsRecord['main_intro_copy']) ?></p>
						<p><a href="https://www.youtube.com/watch?v=TZ0pXUb5jVU" class="btn btn-light-blue swipebox">Watch Video</a></p>
                    </div>
                </div>
            </div>
            
            <div class="container xs-mt-25">
                <div class="row">
					<div class="col-xs-12 text-center xs-mt-25 xs-mb-15"><p class="h1 strong text-uppercase"><?php echo htmlencode($productsRecord['body_header']) ?></p><p class="xs-mt-10 light-brown"><?php echo htmlencode($productsRecord['body_subheader']) ?></p></div>
                    <div class="col-xs-12 col-sm-4 xs-mt-15 wow fadeInUp hide-anim" data-wow-delay=".3s" data-wow-duration="1s">
                              <a href="<?php echo htmlencode($productsRecord['benefit_url_video_1']) ?>" class="swipebox" rel="youtube1">
                              <img src="_img/thumb-keyfeature-1.png" alt="" class="img-responsive center-block xs-mb-25">
                              </a>
                              <p class="h3 text-uppercase xs-mb-15"><span class="strong light-blue"><?php echo htmlencode($productsRecord['benefit_header_1']) ?></span><br><span class="thin"><?php echo htmlencode($productsRecord['benefit_subheader_1']) ?></span></p>
                              <p class="gray"><?php echo htmlencode($productsRecord['benefit_copy_1']) ?></p>
					</div>
                    <div class="col-xs-12 col-sm-4 xs-mt-15 wow fadeInUp hide-anim" data-wow-delay=".6s" data-wow-duration="1s">
                    			<a href="<?php echo htmlencode($productsRecord['benefit_url_video_2']) ?>" class="swipebox" rel="youtube2">
                            <img src="_img/thumb-keyfeature-2.png" alt="" class="img-responsive center-block xs-mb-25">
							</a>
                            <p class="h3 text-uppercase xs-mb-15"><span class="strong light-blue"><?php echo htmlencode($productsRecord['benefit_header_2']) ?></span><br><span class="thin"><?php echo htmlencode($productsRecord['benefit_subheader_2']) ?></span></p>
                            <p class="gray"><?php echo htmlencode($productsRecord['benefit_copy_2']) ?></p>
                    </div>
                    <div class="col-xs-12 col-sm-4 xs-mt-15 wow fadeInUp hide-anim" data-wow-delay=".9s" data-wow-duration="1s">
                    			<a href="<?php echo htmlencode($productsRecord['benefit_url_video_3']) ?>" class="swipebox" rel="youtube3">
							<img src="_img/thumb-keyfeature-3.png" alt="" class="img-responsive center-block xs-mb-25">
                             </a>
                            <p class="h3 text-uppercase xs-mb-15"><span class="strong light-blue"><?php echo htmlencode($productsRecord['benefit_header_3']) ?></span><br><span class="thin"><?php echo htmlencode($productsRecord['benefit_subheader_3']) ?></span></p>
                            <p class="gray"><?php echo htmlencode($productsRecord['benefit_copy_3']) ?></p>
                    </div>
                    <div class="col-xs-12 text-center xs-mt-35"><a href="#" class="btn btn-black">Download Now</a></div>
                </div>
            </div>
            
        </section>