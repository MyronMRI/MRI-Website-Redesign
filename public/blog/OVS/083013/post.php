<?php
$redirectlink = 'http://www.marketingresults.net/mobile/blog.php';
include("../_includes/include_redirect.php");
include("../application/settings/main.php");
include("../application/settings/cms.php"); 
  

// load records
	list($blog_entriesRecords, $blog_entriesMetaData) = getRecords(array(
		'tableName'   => 'blog_entries',
		'limit'		   => '1'
));
  $blog_entriesRecord = @$blog_entriesRecords[0]; // get first record
  
// load records
	list($blog_homepageRecords, $blog_homepageMetaData) = getRecords(array(
		'tableName'   => 'blog_homepage'
));
  $blog_homepageRecord = @$blog_homepageRecords[0]; // get first record
  
  list($prevRecord, $nextRecord, $firstRecord, $lastRecord) = getPrevAndNextRecords(array(  
	  'tableName'   => 'blog_entries',
	  'recordNum' => $blog_entriesRecord['num'], 
));
  $current_record = $blog_entriesRecord['num'];
  
  // load records
  list($blog_categoriesRecords, $blog_categoriesMetaData) = getRecords(array(
    'tableName'   => 'blog_categories',
    'allowSearch' => false,
  ));
  // load records
  list($around_the_worldRecords, $around_the_worldMetaData) = getRecords(array(
    'tableName'   => 'around_the_world',
    'allowSearch' => false,
  ));

// variable for refresh
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="<?php echo $blog_homepageRecord['meta_description'] ?>" />
<meta name="Keywords" content="<?php echo $blog_homepageRecord['meta_keywords'] ?>" />
<title><?php echo $blog_homepageRecord['page_title'] ?></title>
<link rel="icon" type="image/ico" href="../favicon.ico" />
<link rel="stylesheet" type="text/css" href="../_css/main.css" />
<script type="text/javascript" src="http://fast.fonts.com/jsapi/cfec0aef-208c-4961-8c11-188342da3048.js"></script>
<script type="text/javascript" src="../_scripts/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../_scripts/main.js"></script>
<script type="text/javascript" src="../_scripts/jquery.sliding-menu.js"></script>
<script type="text/javascript">
jQuery(function(){
  jQuery('#HorizontalSlidingMenu .SlidingMenu').slidingMenu({ slideSpeed: .7});
});


</script>
<style>
.error_box li{
	color:#973827;
}
.input_textarea{
	resize:none;
	height:100px;
}
</style>
<link href="blog.css" rel="stylesheet" type="text/css" />
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="../_css/ie7.css" /><![endif]-->
    
</head>

<body>
<div id="container">
	
    <?php $pageName = "contact"; include(PATH_INCLUDES . "include_header.php"); ?>
	<?php include(PATH_INCLUDES . "include_top_panel.php"); ?>
	
    <div id="body">
        <div class="body_main">
		<?php foreach ($blog_entriesRecords as $record): ?>
		<?php $category = $record['category:label'] ?>
		<?php $atw = $record['city:label'] ?>
		
		
		<?php if ($record['category:label'] != 'Around the World'):?>
		<?php foreach ($blog_categoriesRecords as $categoryhead): ?>
			<?php if ($category != $categoryhead['title']){continue;} ?>
			<?php if($categoryhead['header_photo']): ?>
			 	<div class="blog_header"><img src="<?php foreach ($categoryhead['header_photo'] as $index => $upload): ?><?php echo $upload['urlPath'] ?><?php endforeach ?>"/ ></div>
			<?php endif ?>
		<?php endforeach ?>
		
		<?php else:?>
		<?php foreach ($around_the_worldRecords as $atwhead): ?>
			<?php if ($atw != $atwhead['title']){continue;} ?>
			<?php if($atwhead['header_photo']): ?>
			 	<div class="blog_header"><img src="<?php foreach ($atwhead['header_photo'] as $index => $upload): ?><?php echo $upload['urlPath'] ?><?php endforeach ?>" /></div>
			<?php endif ?>
		<?php endforeach ?>
		<?php endif ?>
		<?php endforeach ?>
		
		
		
            <div class="body_page">
            	<?php include(PATH_INCLUDES . "include_sidebar_blog.php"); ?>
                
				<div class="body_page_main">
					<?php $pagecounter = 0; foreach ($blog_entriesRecords as $record){$pagecounter ++;} ?>
					<?php foreach ($blog_entriesRecords as $record): ?>
					<div class="blog_post">
						<h3><?php echo $record['title'] ?></h3>
						Posted on
						<em><?php echo date("M j, Y", strtotime($record['post_date'])) ?></em>
						in
						<?php if ($record['category:label'] != 'Around the World'){ ?>
							<a href="/blog/?category=<?php echo str_replace(" ", "+", $record['category:label']) ?>">
								<?php echo $record['category:label'] ?>
							</a><br />
						<?php } else {?>
							<a href="/blog/?city=<?php echo str_replace(" ", "+", $record['city:label']) ?>">
								Around the World - <?php echo $record['city:label'] ?>
							</a><br />
						<?php } ?>
						<?php if($record['post_image']): ?>
							<?php foreach ($record['post_image'] as $index => $upload): ?>
								<img src="<?php echo $upload['urlPath'] ?>" width="570" /><br />
							<?php endforeach ?>
						<?php else: ?>
							<img src="http://placehold.it/570x270" width="570" class="blog_img" /><br />
						<?php endif ?>
						<div class="content"><?php echo $record['content'] ?></div>
						
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style"
							addthis:url="http://www.marketingresults.net/blog/post.php?title=<?php echo str_replace(" ", "+", $record['title']) ?>"
							addthis:title="<?php echo $record['title'] ?>:"
							addthis:image="<?php foreach ($record['post_image'] as $index => $upload): ?><?php echo $upload['urlPath'] ?><?php endforeach ?>">
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_linkedin_counter"></a>
						<a class="addthis_button_tweet"></a>
						<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
						<a class="addthis_button_pinterest_pinit"></a>
						<a class="addthis_counter addthis_pill_style"></a>
						</div>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=mriinteractive"></script>
						<!-- AddThis Button END -->
						<div id="post_nav">
							<?php if($nextRecord){ ?>
							<div class="post_nav_prev"><a href="post.php?title=<?php echo str_replace(" ", "+", $nextRecord['title']);?>"><img src="nav_arrows/arrow_orange_l.png" height="10" /> Previous</a></div>
							<?php } else { ?>
							<div class="post_nav_prev"><img src="nav_arrows/arrow_off_l.png" height="10" /> Previous</div>
							<?php } ?>
							<a href="/blog"><div class="post_nav_home"><img src="nav_arrows/home_orange.png" height="10" /> Home</a></div>
							<?php if($prevRecord){ ?>
							<div class="post_nav_next"><a href="post.php?title=<?php echo str_replace(" ", "+", $prevRecord['title']);?>">Next <img src="nav_arrows/arrow_orange.png" height="10" /></a></div>
							<?php } else { ?>
							<div class="post_nav_next">Next <img src="nav_arrows/arrow_off.png" height="10" /></div>
							<?php } ?>
						</div>
    
					</div>
					<div class="div"></div>
					  <div id="disqus_thread"></div>
						<script type="text/javascript">
							/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
							var disqus_shortname = 'marketingresults'; // required: replace example with your forum shortname
							var disqus_identifier = 'ident<?php foreach ($blog_entriesRecords as $record): ?><?php if ($record['num'] != $_SERVER["QUERY_STRING"]){continue;} ?><?php echo $record['num'] ?><?php endforeach ?>';
					
							/* * * DON'T EDIT BELOW THIS LINE * * */
							(function() {
								var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
								dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
								(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
							})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
						<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
					<?php break; endforeach ?>
				</div>
               <div class="clear"></div>
            </div>
            <div class="body_page_bottom"></div>
        </div>
    </div>
    <div class="body_bottom"></div>
    
    <?php include(PATH_INCLUDES . "include_footer_links.php"); ?>
    <?php include(PATH_INCLUDES . "include_footer.php"); ?>
    
</div>
<script type="text/javascript">



function Toggle(id) {
    if (document.getElementById(id).style.display == "none") {
    document.getElementById(id).style.display = "inline";
    } else if (document.getElementById(id).style.display == "inline" || document.getElementById(id).style.display == "") {
    document.getElementById(id).style.display = "none";
    } else {
    document.getElementById(id).style.display = "none";
    }
    }
	
<?php  if ($_SERVER["QUERY_STRING"] != "FromMobile"){ echo 'var fromMobile = false;'; } else {echo 'var fromMobile = true;';}
?>

if ((screen.width <= 699) && (fromMobile == false) ){
document.location = "<?php  echo $redirectlink ?>";
}


</script>
 <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'marketingresults'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
</body>
</html>