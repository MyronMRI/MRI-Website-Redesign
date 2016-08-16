<section class="well-6 bg-fixed" style="background-image:url('/_img/components_background.jpg');">
    <div class="container text-xs-center">
        <div class="row">
            <div class="col-xs-12">
                    <p class="h3 text-uppercase lightest-blue xs-mt-0 xs-mb-5"><strong><?php echo htmlencode($servicesRecord['ksc_header']) ?></strong></p>
                <p class="h2 adelle white xs-mt-0 xs-mb-0"><?php echo htmlencode($servicesRecord['ksc_subheader']) ?></p>
            </div>
        </div>
        <div class="row xs-mt-15 lightest-blue">
            <div class="col-xs-12 col-sm-6 col-md-4 bullet-services wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="1s">
				<?php echo $servicesRecord['ksc_column_1'] ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 bullet-services wow fadeInUp animated" data-wow-delay=".6s" data-wow-duration="1s">
				<?php echo $servicesRecord['ksc_column_2'] ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 bullet-services wow fadeInUp animated" data-wow-delay=".9s" data-wow-duration="1s">
				<?php echo $servicesRecord['ksc_column_3'] ?>
            </div>
        </div>
    </div>
</section>
