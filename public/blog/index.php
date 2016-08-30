<?php
include("../_includes/cms.php"); 
  
$today = date('Y-m-d h:i:S');

// load records
	list($blog_entriesRecords, $blog_entriesMetaData) = getRecords(array(
		'tableName'   => 'blog_entries',
  		'where'		   => "post_date <= '$today'",
   		'orderBy'     => 'post_date DESC',
    	'perPage'     => '3',
));
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

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../_includes/head.php" ?>
<?php if(@$_GET["categories"]){
	foreach ($blog_categories_newRecords as $categoryhead):
		if (str_replace("+", " ", $_GET["categories"]) != $categoryhead['title']){ continue; }
		$title =  $categoryhead['page_title'];
		$description =  $categoryhead['description'];
		$keywords =  $categoryhead['keywords'];
	endforeach;
} ?>
<meta name="Description" content="<?php echo @$description ?: $blog_homepageRecord['meta_description'] ?>" />
<meta name="Keywords" content="<?php echo @$keywords ?: $blog_homepageRecord['meta_keywords'] ?>" />
<?php if(file_exists('../_includes/canonical.php')) { include "../_includes/canonical.php";} ?>
<title>
	<?php
		if (@$title){
			echo $title;
		} else {
			$postmonth = "";
			if (!empty($_GET["post_date_month"])){$postmonth = date("F", mktime(0, 0, 0, $_GET["post_date_month"], 10)) . " ";}
			if(!empty($_GET["categories"])){echo 'Marketing Results – ' . str_replace("+", " ", $_GET["categories"]) . ' Blog Posts';}
			else if(!empty($_GET["city"])){echo 'Marketing Results – ' . str_replace("+", " ", $_GET["city"]) . ' Blog Posts';}
			else if(!empty($_GET["post_date_year"])){echo 'Marketing Results – ' . $postmonth . $_GET["post_date_year"] . ' Blog Posts';}
			else {echo $blog_homepageRecord['page_title'];}
		}
	?>
	
</title>
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
.header_subhead sup {
	line-height: 0px;
	font-size: 15px;
	vertical-align: 21px;
}
.blog_img{
	-webkit-box-shadow: 0px 0px 15px rgba(230, 190, 137, 0.75);
	-moz-box-shadow: 0px 0px 15px rgba(230, 190, 137, 0.75);
	box-shadow: 0px 0px 15px rgba(230, 190, 137, 0.75);
	border: 8px solid #FFF;
	height:270px;
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
.selectbox{
	border: 1px solid #DDD !important;
	background:#FFF !important;
	-webkit-box-shadow: none !important;
	-moz-box-shadow:    none !important;
	box-shadow:         none !important;
	filter: none !important; /* IE6-9 */
}
div#body{
	overflow:visible;
}
div.body_page_main sup.cat-title {
	vertical-align: 4px;
}
</style>
</head>

<body>
<div class="page">
	<?php include "../_includes/top.php" ?>
    <!--========================================================
                              HEADER
    =========================================================-->
	<?php include "../_includes/navigation.php" ?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>

        <div class="body_main">
			 <div class="blog_header" style="height:112px;background-image:url(
				 <?php if(!empty($_GET["parent_category"])){?>
					<?php foreach ($blog_categories_newRecords as $categoryhead): ?>
					<?php if (str_replace("+", " ", $_GET["parent_category"]) != $categoryhead['title']){continue;} ?>
					<?php if ($categoryhead['category_color']){ ?>
						headers/<?php foreach ($blog_categories_newRecords as $colors){if ($colors['title'] == $categoryhead['title']){echo $colors['category_color'];}} ?>.jpg
					<?php } else { ?>
						headers/blue.jpg
			 		<?php } endforeach?>
				<?php } else if(!empty($_GET["categories"])){?>
					<?php foreach ($blog_categories_newRecords as $categoryhead): ?>
					<?php if (str_replace("+", " ", $_GET["categories"]) != $categoryhead['title']){continue;} ?>
					<?php if ($categoryhead['parent_category']){ ?>
						headers/<?php foreach ($blog_categories_newRecords as $colors){if ($colors['title'] == $categoryhead['parent_category']){echo $colors['category_color'];}} ?>.jpg
					<?php } else if ($categoryhead['category_color']){ ?>
						headers/<?php echo $categoryhead['category_color']; ?>.jpg
					<?php } else { ?>
						headers/blue.jpg
			 		<?php } endforeach?>
				<?php } else { ?>
					headers/blue.jpg
				<?php } ?>
			 )">
			 <?php if(!empty($_GET["parent_category"])){?>
				<?php foreach ($blog_categories_newRecords as $categoryhead): ?>
					<?php if (str_replace("+", " ", $_GET["parent_category"]) != $categoryhead['title']){continue;} ?>
					<span class="header_headline">
						<?php echo $blog_homepageRecord['title'] ." Blog"; ?>
					</span>					
					<span class="header_subhead">
						<?php echo str_replace('®', '<sup>&reg;</sup>', $categoryhead['title']); ?>
					</span>					
				<?php endforeach ?>	
				<?php } else if(!empty($_GET["categories"])){?>
				<?php foreach ($blog_categories_newRecords as $categoryhead): ?>
					<?php if (str_replace("+", " ", $_GET["categories"]) != $categoryhead['title']){continue;} ?>
					<span class="header_headline">
						<?php if ($categoryhead['parent_category']){echo $categoryhead['parent_category'];}
						else {echo $blog_homepageRecord['title'] ." Blog";} ?>
					</span>					
					<span class="header_subhead">
						<?php if ($categoryhead['parent_category']){echo $categoryhead['title'];}
						else {echo str_replace('®', '<sup>&reg;</sup>', $categoryhead['title']);} ?>
					</span>					
				<?php endforeach ?>	
				<?php } else { ?>
					<span class="header_headline">
						<?php echo $blog_homepageRecord['title'] ?>
					</span>					
					<span class="header_subhead">
						<?php echo str_replace('®', '<sup>&reg;</sup>', $blog_homepageRecord['secondary_title']); ?>
					</span>		
				<?php } ?>
			 
			 </div>
            <div class="body_page" style="background: #f8eeda;background-image:url(bg.jpg);background-repeat:repeat-x;background-position:top;">
                
				<div class="body_page_main">
					<?php if(empty($_GET['pg'])): ?>
						<?php $pg = 1; ?>
					<?php else: ?>
						<?php $pg = $_GET['pg']; ?>
					<?php endif ?>
					<?php if($pg <= 0){$pg = 1;}?>
					<?php $postcounter = $pg * 3 ?>
					<?php $counter = 0 ?>
					<?php $skipcounter = 0 ?>
					
					<span style="color: #953108;font-size: 18px;line-height: 14px;margin-bottom: 24px;display: block;letter-spacing: 2px;text-transform: uppercase;margin-top:-4px;">
						<?php if(!empty($_GET["categories"])){	?>
							<?php foreach ($blog_categories_newRecords as $categoryhead): ?>
								<?php if (str_replace("+", " ", $_GET["categories"]) != $categoryhead['title']){continue;} ?>
								<?php echo $categoryhead['secondary_header']; ?>
							<?php endforeach ?>
						<?php } else if(!empty($_GET["post_date_year"])){	?>		
							Archived Posts Dated 
							<?php if(!empty($_GET["post_date_month"])){
								echo date("F", mktime(0, 0, 0, $_GET["post_date_month"], 10));
								} 
								if ($_GET["post_date_year"] >= 2013){
								
							echo " " .  htmlspecialchars(strip_tags($_GET["post_date_year"])); 
								}
							?>
						<?php } else if(!empty($_REQUEST['title,blurb,tags,categories,content_keyword'])){	?>		
							Search Results for: <?php echo htmlspecialchars(strip_tags($_REQUEST['title,blurb,tags,categories,content_keyword'])); ?>
						<?php } else {	?>
							<?php echo $blog_homepageRecord['secondary_header'] ?>
						<?php } ?>
					</span>
					
					<div style="position:relative;margin-bottom:30px;height:286px;">
						<div class="img_cycle">
							
							 <?php if(!empty($_GET["categories"])){?>
								<?php foreach ($blog_categories_newRecords as $categoryhead): ?>
								<?php if (str_replace("+", " ", $_GET["categories"]) != $categoryhead['title']){continue;} ?>
								<?php if($categoryhead['category_photos']){ ?>
									<?php foreach ($categoryhead['category_photos'] as $upload): ?><a href="<?php echo $upload['info2'] ?>"><img src="<?php echo $upload['urlPath'] ?>" width="554" class="blog_img" alt="<?php echo $upload['info1'] ?>" /></a> <?php endforeach ?>
								<?php } else { ?>
									<?php foreach ($blog_homepageRecord['category_photo'] as $upload): ?><a href="<?php echo $upload['info2'] ?>"><img src="<?php echo $upload['urlPath'] ?>" width="554" class="blog_img alt="<?php echo $upload['info1'] ?>"" /></a> <?php endforeach ?>
								<?php } endforeach?>
							<?php } else { ?>
								<?php foreach ($blog_homepageRecord['category_photo'] as $upload): ?><a href="<?php echo $upload['info2'] ?>"><img src="<?php echo $upload['urlPath'] ?>" width="554" class="blog_img" alt="<?php echo $upload['info1'] ?>" /></a> <?php endforeach ?>
							<?php } ?>
							
						</div>
						<img src="mri_tag.png" style="position:absolute;right:0px;bottom:3px;z-index: 99999;display:none;" />
					</div>
					<?php foreach ($blog_entriesRecords as $record): ?>
						<?php $skipcounter++ ?>
						<?php if ($skipcounter <= $postcounter -3){continue;}?>
						<?php if ($counter >= 3){break;} ?>
					<div class="blog_post index_post">
						<a href="post.php?title=<?php echo str_replace(" ", "+", $record['title']) . '+' . $record['num'] ?>"><h3><?php echo $record['title'] ?></h3></a>
                        
                        <link rel="alternate" media="only screen and (max-width: 640px)"
      href="http://www.marketingresults.net/mobile/blog/post.php?title=<?php echo str_replace(" ", "+", $record['title']) . '+' . $record['num'] ?>" >

                        
                        
                        <?php if(!empty($record['author_name'])){ ?>
							<span class="byline" style="display:block; margin-top:1px;">By 
								<a href="<?php echo $record['author_google_url']; ?>" target="_blank">
									<?php echo $record['author_name']; ?>
								</a>
								<?php if (!empty($record['author_title_optional'])){?>
									- <?php echo $record['author_title_optional']; ?>
								<?php } ?>
							</span>
							<?php } ?>
						Posted on
						<?php echo date("M j, Y", strtotime($record['post_date'])) ?>
						in
						<a href="?categories=<?php echo str_replace(" ", "+", $record['categories:label']) ?>" style="text-decoration:underline !important;"><?php echo str_replace('®', '<sup class="cat-title">&reg;</sup>', $record['categories:label']); ?></a>
						<span style=""><a href="http://marketingresults.net/blog/post.php?title=<?php echo str_replace(" ", "+", $record['title']) . '+' . $record['num'] ?>#disqus_thread" data-disqus-identifier="ident<?php echo $record['num'] ?><?php echo preg_replace("/[^A-Za-z0-9]/","",$record["title"]) ?>" style="float:right;font-size: 12px;">Comments</a></span>
						<br />
						<div style="margin-top: 2px;padding-top: 8px;border-top: 1px solid #3b687b;">
							<?php if($record['post_thumbnail']): ?>
								<?php foreach ($record['post_thumbnail'] as $index => $upload): ?>
									<a href="post.php?title=<?php echo str_replace(" ", "+", $record['title']) . '+' . $record['num'] ?>"><img src="<?php echo $upload['urlPath'] ?>" class="post_img" /></a>
								<?php endforeach ?>
							<?php else: ?>
								<a href="post.php?title=<?php echo str_replace(" ", "+", $record['title']) . '+' . $record['num'] ?>"><img src="http://placehold.it/144x144" width="144" class="post_img" /></a>
							<?php endif ?>
							<?php echo $record['content_blurb']; ?>
							<a href="post.php?title=<?php echo str_replace(" ", "+", $record['title']) . '+' . $record['num'] ?>" class="readmore"><img src="/_images/im_next.png" class="blog_arrow" />Read More</a>
						</div>
						
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style" style="clear:both;"
							addthis:url="http://www.marketingresults.net/blog/post.php?title=<?php echo str_replace(" ", "+", $record['title']) . '+' . $record['num'] ?>+"
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
					<?php $counter++ ?>
					<?php endforeach ?>
						
						<div id="pagination" style="margin:10px auto;text-align:center;">							
							<?php if("" != @$_GET['page'] && "1" != @$_GET['page']){ ?>
								<a href="index.php?<?php if ($_SERVER['QUERY_STRING']){$queryStr = explode("&", $_SERVER['QUERY_STRING']); echo $queryStr[0] . "&";} ?>page=1"><img src="nav_arrows/arrow_orange_first.png" height="10" /></a>
							<?php }else{ ?> 
								<img src="nav_arrows/arrow_off_first.png" height="10" />
							<?php } ?>
							<?php if($blog_entriesMetaData['prevPage']){ ?>
								<a href="<?php echo $blog_entriesMetaData['prevPageLink'] ?>"><img src="nav_arrows/arrow_orange_l.png" height="10" /></a> 
							<?php }else{ ?> 
								<img src="nav_arrows/arrow_off_l.png" height="10" /> 
							<?php } ?>
							<span id="count" style="padding:0px 5px;padding: 0px 10px;font-size: 13px;font-weight: bold;color:#b07534;">
							Page <?php if (@!$_GET['page']){echo '1';} else{ echo $_GET['page'];} ?> of <?php echo $blog_entriesMetaData['totalPages'] ?> 
							</span>
							<?php if($blog_entriesMetaData['nextPage']){ ?>
								<a href="<?php echo $blog_entriesMetaData['nextPageLink'] ?>"><img src="nav_arrows/arrow_orange.png" height="10" /></a>
							<?php }else{ ?> 
								<img src="nav_arrows/arrow_off.png" height="10" />
							<?php } ?>
							<?php if($blog_entriesMetaData['totalPages'] != @$_GET['page'] && $blog_entriesMetaData['totalPages'] > 1){ ?>
								<a href="<?php echo $blog_entriesMetaData['lastPageLink'] ?>"><img src="nav_arrows/arrow_orange_last.png" height="10" /></a>
							<?php }else{ ?> 
								<img src="nav_arrows/arrow_off_last.png" height="10" />
							<?php } ?>
						</div>
				</div>
            	<?php include(PATH_INCLUDES . "include_sidebar_blog_new.php"); ?>
               <div class="clear"></div>
            </div>
            <div class="body_page_bottom"></div>
        </div>
        
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->    
    <?php include "../_includes/footer.php" ?>
</div>

<?php include "../_includes/script.php" ?>
<script src="../_js/script.js"></script>
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
<script type="text/javascript">
<!--
<?php  if ($_SERVER["QUERY_STRING"] != "FromMobile"){ echo 'var fromMobile = false;'; } else {echo 'var fromMobile = true;';}
?>
if ((screen.width <= 699) && (fromMobile === false)) {
   document.location = "<?php  echo $redirectlink ?>";
}
//-->
</script>
<script type="text/javascript">

	$('.img_cycle').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	timeout: 5000
	});

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

<!-- OUTBRAIN VALIDATION-->
<input type="hidden" name="OBKey" value="gRQ9G15+VCs72tw3qdiQSg=="/> <script LANGUAGE="JavaScript">var OBCTm='1389376909436'; </script><script LANGUAGE="JavaScript" src="http://widgets.outbrain.com/claim.js"></script>

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
        <script type="text/javascript">
            // $(document).ready(function() {
            //     $("body").html(
            //         $("body, body a, body a span").html().replace("®", "<sup>&reg;</sup>");
            //         $("body, body a, body a span").html().replace("&reg;", "<sup>&reg;</sup>");
            //         $("body, body a, body a span").html().replace("®", "<sup>&reg;</sup>");
            //     ); 
            // });
        </script>
</body>
</html>