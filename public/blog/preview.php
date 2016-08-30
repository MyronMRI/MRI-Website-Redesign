<?php
include("../application/settings/main.php");
include("../application/settings/cms.php"); 
  
$today = date('Y-m-d h:i:S');
// load records
	list($blog_entriesRecords, $blog_entriesMetaData) = getRecords(array(
		'tableName'   => 'blog_entries',
   		'orderBy'     => 'post_date DESC',
   		'where'       => whereRecordNumberInUrl(0),
		'ignorePublishDate' => true, 
		'limit'		   => '1',
));
  $blog_entriesRecord = @$blog_entriesRecords[0]; // get first record
  
  list($prevRecord, $nextRecord, $firstRecord, $lastRecord) = getPrevAndNextRecords(array(  
	  'tableName'   => 'blog_entries',
	  'recordNum' => $blog_entriesRecord['num'], 
  		'where'		   => "post_date <= '$today'",
    'orderBy'     => 'post_date DESC',
));
  $current_record = $blog_entriesRecord['num'];
  
// load records
	list($blog_homepageRecords, $blog_homepageMetaData) = getRecords(array(
		'tableName'   => 'blog_homepage',
    	'allowSearch' => false,
));
  $blog_homepageRecord = @$blog_homepageRecords[0]; // get first record
  // load records
  list($blog_categoriesRecords, $blog_categoriesMetaData) = getRecords(array(
    'tableName'   => 'blog_categories',
    'allowSearch' => false,
  ));
  
  // load records
  list($blog_categories_newRecords, $blog_categories_newMetaData) = getRecords(array(
    'tableName'   => 'blog_categories_new',
    'orderBy'     => 'title ASC',
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
<!--meta tags::general -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
<?php foreach ($blog_entriesRecords as $record): ?>
	<meta name="Description" content="<?php echo $record['description'];?>" />
	<meta name="Keywords" content="<?php echo $record['keywords'];?>" />
<?php endforeach; ?>
<!--open graph tags -->
<meta property="og:title" content="<?php echo $blog_entriesRecord['title']?>" />
<meta property="og:description" content="<?php echo strip_tags($blog_entriesRecord['content_blurb'])?>">
<meta property="og:type" content="blog" />
<meta property="og:url" content="http://www.marketingresults.net/blog/post.php?title=<?php echo str_replace(" ", "+", $blog_entriesRecord['title']) . '+' . $blog_entriesRecord['num'] ?>" />
	<?php if($blog_entriesRecord['post_thumbnail']){ ?>
		<?php foreach ($blog_entriesRecord['post_thumbnail'] as $index => $upload): ?>
           <meta property="og:image" content="http://www.marketingresults.net<?php echo $upload['urlPath'] ?>" />
	<?php endforeach; } elseif ($blog_entriesRecord['post_image']) {?>
        <?php foreach ($blog_entriesRecord['post_image'] as $index => $upload): ?>
        <meta property="og:image" content="http://www.marketingresults.net<?php echo $upload['urlPath'] ?>" />
    <?php endforeach; } ?>
<meta property="og:site_name" content="Marketing Results"/>
<meta property="og:article:author" content="<?php echo $record['author_name']; ?>"/>
<meta property="fb:admins" content="144226498974786"/>
<!-- twitter card tags -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="MRI_1988">
<meta name="twitter:creator" content="@<?php echo str_replace('@', '', $record['author_twitter_handle']); ?>">
<meta name="twitter:title" content="<?php echo $blog_entriesRecord['title']?>">
<meta name="twitter:description" content="<?php echo strip_tags($blog_entriesRecord['content_blurb'])?>">
	<?php if($blog_entriesRecord['post_image']){ ?>
		<?php foreach ($blog_entriesRecord['post_image'] as $index => $upload): ?>
           <meta name="twitter:image" content="http://www.marketingresults.net<?php echo $upload['urlPath'] ?>">
	<?php endforeach; } elseif ($blog_entriesRecord['post_thumbnail']) {?>
        <?php foreach ($blog_entriesRecord['post_thumbnail'] as $index => $upload): ?>
           <meta name="twitter:image" content="http://www.marketingresults.net<?php echo $upload['urlPath'] ?>">
    <?php endforeach; } ?>
<!-- end meta tags -->
<title>
	<?php
	echo 'Marketing Results - ' . $blog_entriesRecord['title'];
	?>
	
</title>
<link rel="icon" type="image/ico" href="../favicon.ico" />
<link rel="stylesheet" type="text/css" href="../_css/main.css" />
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
.body_page_main h3{
	color: #3b687b !important;
}
.header_headline{
	font-size:24px;
	color:#fff;
	text-transform:uppercase;
	position:absolute;
	top:26px;
	left:30px;
}
.header_subhead{
	font-size:45px;
	color:#fbc86b;
	text-transform:uppercase;
	position:absolute;
	top:60px;
	left:30px;
}
.blog_img{
	-webkit-box-shadow: 0px 0px 15px rgba(230, 190, 137, 0.75);
	-moz-box-shadow: 0px 0px 15px rgba(230, 190, 137, 0.75);
	box-shadow: 0px 0px 15px rgba(230, 190, 137, 0.75);
	border: 8px solid #FFF;
}
.post_img{
	margin: 0px 20px 10px 0px;
	-webkit-box-shadow: 0px 0px 15px rgba(230, 190, 137, 0.75);
	-moz-box-shadow: 0px 0px 15px rgba(230, 190, 137, 0.75);
	box-shadow: 0px 0px 15px rgba(230, 190, 137, 0.75);
	border: 8px solid #FFF;
	width:144px;
	height:144px;
	float:left;
}
div.body_page_sidebar{
	margin-top:62px !important;
}
.categories a{
	text-decoration:none !important;
}
.category_name a{
	text-decoration: none !important;
	color:#3b687b !important;
}
.category_name a:hover,
.category_name:hover{
	text-decoration:underline !important;
	color:#3b687b !important;
}
.subcategory_item{
	margin-left: 25px !important;
	color:#7e7070 !important;
}
.subcategory_item a{
	color:#4d4d27 !important;
}
.subcategory_item a:hover{
	text-decoration:underline !important;
}
.blog_post ul{
	margin-top:0px !important;
}
div.body_page_main p {
	margin: 20px 0 !important;
}
.selectbox{
	border: 1px solid #DDD !important;
	background:#FFF !important;
	-webkit-box-shadow: none !important;
	-moz-box-shadow:    none !important;
	box-shadow:         none !important;
	filter: none !important; /* IE6-9 */
}

/* Outbrain Styles */
.ob_org_header {
	font-size:18px !important;
	color:#8b3e22;
	font-weight:normal !important;
	display:block;
	padding-bottom:20px !important;
}
.NA .ob_container_recs .item-container {
	padding-right:30px !important;
}
.NA .ob-text-content {
	padding-top:10px !important;
}
.ob-tcolor {
	color:#526a6e !important;
}
a:link .ob-tcolor, a:visited .ob-tcolor, a:lhoverink .ob-tcolor {
	text-decoration:none !important;
}
a:hover .ob-tcolor {
	text-decoration:underline !important;
}
.NA .ob_what {
	padding: 12px 10px 0px !important;
}
.NA .ob-rec-link-img .strip-img {
	border: solid 5px #ffffff !important;
}
</style>
<link href="blog.css" rel="stylesheet" type="text/css" />
    
</head>

<body>
<!--[if IE 7]><body class="ie7"><![endif]-->
<!--[if IE 8]><body class="ie8"><![endif]-->
<div id="container" class="index_page">
	
    <?php $pageName = "blog"; include(PATH_INCLUDES . "include_header.php"); ?>
	<?php include(PATH_INCLUDES . "include_top_panel.php"); ?>
	
    <div id="body">
        <div class="body_main">
			 <div class="blog_header" style="height:112px;background-image:url(
			 	<?php foreach ($blog_entriesRecords as $record): ?>
					<?php foreach ($blog_categories_newRecords as $categoryhead): ?>
					<?php if ($record["categories"] != $categoryhead['title']){continue;} ?>
					<?php if ($categoryhead['parent_category']){ ?>
						headers/<?php foreach ($blog_categories_newRecords as $colors){if ($colors['title'] == $categoryhead['parent_category']){echo $colors['category_color'];}} ?>.jpg
					<?php } else if ($categoryhead['category_color']){ ?>
						headers/<?php echo $categoryhead['category_color']; ?>.jpg
					<?php } else { ?>
						headers/blue.jpg
			 		<?php } endforeach?>
				<?php endforeach ?>
			 )">
			 <?php foreach ($blog_entriesRecords as $record): ?>
				<?php foreach ($blog_categories_newRecords as $categoryhead): ?>
					<?php if ($record["categories"] != $categoryhead['title']){continue;} ?>
					<span class="header_headline">
						<?php if ($categoryhead['parent_category']){echo $categoryhead['parent_category'];}
						else {echo $blog_homepageRecord['title'] ." Blog";} ?>
					</span>					
					<span class="header_subhead">
						<?php if ($categoryhead['parent_category']){echo $categoryhead['title'];}
						else {echo $categoryhead['title'];} ?>
					</span>					
				<?php endforeach ?>
			 <?php endforeach?>
			 </div>
            <div class="body_page" style="background: #f8eeda;background-image:url(bg.jpg);background-repeat:repeat-x;background-position:top;">
                
				<div class="body_page_main">
					
					<span style="color: #953108;font-size: 18px;line-height: 14px;margin-bottom: 24px;display: block;letter-spacing: 2px;text-transform: uppercase;margin-top:-4px;">					
						<?php foreach ($blog_entriesRecords as $record): ?>
							<?php if ($record["secondary_header"]){echo $record["secondary_header"];} else{?>
							<?php foreach ($blog_categories_newRecords as $categoryhead): ?>
								<?php if ($record["categories"] != $categoryhead['title']){continue;} ?>
								<?php echo $categoryhead['secondary_header']; ?>
							<?php endforeach ?>
						<?php } endforeach ?>
					</span>
					
					<div style="position:relative;margin-bottom:30px;">
					<?php foreach ($blog_entriesRecords as $record): ?>
						<?php if($record['post_image']): ?>
							<?php foreach ($record['post_image'] as $index => $upload): ?>
								<img src="<?php echo $upload['urlPath'] ?>" width="554" class="blog_img" alt="<?php echo $upload['info1'] ?>" /><br />
							<?php endforeach ?>
						<?php else: ?>
							<img src="http://placehold.it/570x270" width="554" class="blog_img" /><br />
						<?php endif ?>
						
						<img src="mri_tag.png" style="position:absolute;right:0px;bottom:3px;display:none;" />
					</div>
					<div class="blog_post index_post">
						<a href="post.php?title=<?php echo str_replace(" ", "+", $record['title']) . '+' . $record['num'] ?>"><h3><?php echo $record['title'] ?></h3></a>
						Posted on
						<?php echo date("M j, Y", strtotime($record['post_date'])) ?>
						in
						<a href="index.php?categories=<?php echo str_replace(" ", "+", $record['categories:label']) ?>" style="text-decoration:underline !important;"><?php echo $record['categories:label'] ?></a>
						<span style=""><a href="post.php?title=<?php echo str_replace(" ", "+", $record['title']) . '+' . $record['num'] ?>#disqus_thread" data-disqus-identifier="ident<?php echo $record['num'] ?>" style="float:right;">Comments</a></span>
						<br />
						<div style="margin-top: 2px;padding-top: 8px;border-top: 1px solid #3b687b;">
							<?php if(!empty($record['author_name'])){ ?>
							<span class="byline">By 
								<a href="<?php echo $record['author_google_url']; ?>" target="_blank">
									<?php echo $record['author_name']; ?>
								</a>
								<?php if (!empty($record['author_title_optional'])){?>
									- <?php echo $record['author_title_optional']; ?>
								<?php } ?>
							</span>
							<?php } ?>
							
							<?php echo $record['content']; ?>
						</div>
						
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style" style="clear:both;margin-top:30px;"
							addthis:url="http://www.marketingresults.net/blog/post.php?title=<?php echo str_replace(" ", "+", $record['title']) . '+' . $record['num'] ?>"
							addthis:title="<?php echo $record['title'] ?>:"
							addthis:image="<?php foreach ($record['post_image'] as $index => $upload): ?><?php echo $upload['urlPath'] ?><?php endforeach ?>">
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_linkedin_counter"></a>
						<a class="addthis_button_tweet"></a>
						<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
						<a class="addthis_button_pinterest_pinit"></a>
						<a class="addthis_counter addthis_pill_style"></a>
						</div>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5228dad444d11fb9"></script>
						<!-- AddThis Button END -->
    
					</div>
					<div class="div"></div>
					<?php endforeach ?>
                    
						
						<!-- OUTBRAIN RELATED POSTS -->
                        <div class="blog_post index_post" style="margin: 20px 0 20px;">
                    <div data-src="http://www.marketingresults.net/blog/post.php?title=<?php echo str_replace(" ", "+", $record['title']) . '+' . $record['num'] ?>" class="OUTBRAIN" ></div>
	<script type="text/javascript">(function(){window.OB_platformType=8;window.OB_langJS="http://widgets.outbrain.com/lang_en.js";window.OBITm="1389380770877";window.OB_recMode="brn_strip";var ob=document.createElement("script");ob.type="text/javascript";ob.async=true;ob.src="http"+("https:"===document.location.protocol?"s":"")+"://widgets.outbrain.com/outbrainLT.js";var h=document.getElementsByTagName("script")[0];h.parentNode.insertBefore(ob,h);})();</script>                    </div>
							<!-- OUTBRAIN ENDS -->

						<div id="post_nav" style="margin: 20px 0 20px;color:#b07534;">
							<?php if($nextRecord){ ?>
							<div class="post_nav_prev"><a href="post.php?title=<?php echo str_replace(" ", "+", $nextRecord['title']) . '+' . $nextRecord['num'];?>" style="color:#b07534 !important;"><img src="nav_arrows/arrow_orange_l.png" height="10" /> Previous</a></div>
							<?php } else { ?>
							<div class="post_nav_prev"><img src="nav_arrows/arrow_off_l.png" height="10" /> Previous</div>
							<?php } ?>
							<a href="/blog/index.php" style="color:#b07534 !important;"><div class="post_nav_home"><img src="nav_arrows/home_orange.png" height="10" /> Home</div></a>
							<?php if($prevRecord){ ?>
							<div class="post_nav_next"><a href="post.php?title=<?php echo str_replace(" ", "+", $prevRecord['title']) . '+' . $prevRecord['num'];?>" style="color:#b07534 !important;">Next <img src="nav_arrows/arrow_orange.png" height="10" /></a></div>
							<?php } else { ?>
							<div class="post_nav_next">Next <img src="nav_arrows/arrow_off.png" height="10" /></div>
							<?php } ?>
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
				</div>
            	<?php include(PATH_INCLUDES . "include_sidebar_blog_new.php"); ?>
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



</script>
<script type="text/javascript">
/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
var disqus_shortname = 'marketingresults'; // required: replace example with your forum shortname

/* * * DON'T EDIT BELOW THIS LINE * * */
(function () {
var s = document.createElement('script'); s.async = true;
s.type = 'text/javascript';
s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>

</body>
</html>