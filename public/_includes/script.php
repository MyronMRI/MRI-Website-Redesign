<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/_js/bootstrap.min.js"></script>
<script src="/_js/jquery-migrate-1.2.1.js"></script>

<!-- Swap page title for Marketing Results in mobile navigation 
<script>
$(window).scroll(function() {
	if ($(document).scrollTop() > 100) {
		$('.rd-mobilepanel_title').fadeOut(100);
		$('.nav-marketing-results').fadeIn(300);
	} else {
		$('.rd-mobilepanel_title').fadeIn(300);
		$('.nav-marketing-results').fadeOut(100);
	}
});
</script>-->

<!-- Adjust vertical alignment of media items -->
<script>
$(document).ready(function() {
	if ($(window).width() >= 1024) {
		$('.media').find('.media-left').addClass('media-middle');
	} else {
		$('.media').find('.media-left').removeClass('media-middle');
	}
});
</script>

<!-- Same height -->
<script>
$( document ).ready(function() {
    var heights = $(".sameheight").map(function() {
        return $(this).outerHeight();
    }).get(),

    maxHeight = Math.max.apply(null, heights);

    $(".sameheight").height(maxHeight);
});
</script>