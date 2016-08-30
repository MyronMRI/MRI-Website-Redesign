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
	if ($(window).width() > 1024) {
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

<!-- Offset rows for fluid containers -->
<script>
$(document).ready(function(){
	if ($(window).width() >= 991) {
		var wwidth = $(window).width();
		var cwidth = $('.container').width();
		var coffset = -((wwidth-cwidth)/2);
		var pwidth = $('#adjustleft, #adjustleft1').find('.panel').width();
		$('#adjustleft, #adjustleft1').css({ 'marginLeft':coffset })
		$('#adjustleft, #adjustleft1').find('.panel').css({ 'width':pwidth+(-1*coffset)});
		$('#adjustright, #adjustright1').css({ 'marginLeft':(-1*coffset) });
	}
});
</script>

<script>
$(window).load( function() {
	var currwidth = $(window).width();
	$(window).resize(function() {
		var currentwidth = $(window).width();
		var difference = Math.abs(currwidth-currentwidth);
		if (difference >= 100) {
			location.reload();
		}
	});
});
</script>

<!-- Show Arrows on Hover -->
<script>
$(window).load(function() {
	$('.arrow-link')
	.mouseover(function() {
		$(this).find('.arrow-link-arrow').fadeIn(300);		
	})
	.mouseout(function() {
		$(this).find('.arrow-link-copy').fadeIn(300);
		$(this).find('.arrow-link-arrow').fadeOut(200);
	});
});
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5228dad444d11fb9"></script>