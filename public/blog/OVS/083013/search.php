<?php
$redirectlink = 'http://www.marketingresults.net/mobile/blog.php';
include("../_includes/include_redirect.php");
include("../application/settings/main.php");
include("../application/settings/cms.php"); 
  

// load records
	list($blog_entriesRecords, $blog_entriesMetaData) = getRecords(array(
		'tableName'   => 'blog_entries',
    	'allowSearch' => true,
));
// load records
	list($blog_homepageRecords, $blog_homepageMetaData) = getRecords(array(
		'tableName'   => 'blog_homepage'
));
  $blog_homepageRecord = @$blog_homepageRecords[0]; // get first record
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
			 <div class="blog_header"><img src="<?php foreach ($blog_homepageRecord['header_photo'] as $upload): ?><?php echo $upload['urlPath'] ?><?php endforeach ?>"/></div>
            <div class="body_page">
            	<?php include(PATH_INCLUDES . "include_sidebar_blog.php"); ?>
                
				<div class="body_page_main">
					<?php $counter = 0 ?>		
					<?php $keyword = @$_REQUEST['title,blurb,tags,category,content_keyword']?>
					<span style="color: #494b14;font-size: 15px;line-height: 14px;font-weight: bold;margin-bottom: 20px;display: block;">Search Results: <?php echo $keyword; ?></span>
					
					<?php foreach ($blog_entriesRecords as $record): ?>
					<div class="blog_post index_post">
						<a href="post.php?title=<?php echo str_replace(" ", "+", $record['title']) ?>"><h3><?php echo $record['title'] ?></h3></a>
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
						<?php $content = explode('</p>', $record['content']); echo $content[0] . '</p>' ?>
						<a href="post.php?title=<?php echo str_replace(" ", "+", $record['title']) ?>" class="readmore"><img src="/_images/im_next.png" class="blog_arrow" />Read More</a>
						
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
    
					</div>
					<div class="div"></div>
					<?php $counter++ ?>
					<?php endforeach ?>
						<?php if ($counter <= 0){ ?>
							There are no posts containing "<?php echo $keyword; ?>" in the archive. Please enter a different search term or <a href="/blog/">click here</a> to return to the blog home page.
							<?php } ?>
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
</body>
</html>