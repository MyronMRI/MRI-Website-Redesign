<?php header('Content-type: application/xml; charset=utf-8'); ?><?php echo '<?xml version="1.0" encoding="UTF-8"?>';
include("../application/settings/main.php");
include("../application/settings/cms.php"); 

$today = date('Y-m-d H:i:s');
  // load records
  list($blog_entriesRecords, $blog_entriesMetaData) = getRecords(array(
    'tableName'   => 'blog_entries',
  	'where'		   => "post_date <= '$today'",
    'loadUploads' => true,
    'allowSearch' => false,
    'orderBy'     => 'post_date DESC',
  ));
?>
<rss version="2.0"> 
  <channel> 
    <title>Marketing Results Blog</title> 
      <link>http://www.marketingresults.net/blog/</link> 
      <description>This is the blog for Marketing Results, a full-service marketing company dedicated to the casino industry.</description> 
      <pubDate><?php echo date('r'); ?></pubDate> 
      <language>en-us</language>
    <?php foreach ($blog_entriesRecords as $record): ?>
        <item> 
          <title><?php echo preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $record['title']) ?></title> 
          <link>http://www.marketingresults.net/blog/post.php?title=<?php echo str_replace(" ", "+", $record['title']) ?></link> 
		  <image>
		  <?php if($record['post_thumbnail']): ?>
			<?php foreach ($record['post_thumbnail'] as $upload): ?>
			<url>http://www.marketingresults.net/<?php echo $upload['urlPath'] ?></url>
			<?php endforeach ?>
			<?php else:?>
			<url>http://www.marketingresults.net/admin/lib/images/cms_logo.gif</url>
			<?php endif ?>
			<title>Marketing Results Blog</title>
			<link>http://www.marketingresults.net/blog/post.php?title=<?php echo str_replace(" ", "+", $record['title']) ?></link>
		  </image>
          <description><?php echo str_replace("&", "and", $record['description_desktop']) ?></description> 
          <pubDate><?php echo date("M j, Y", strtotime($record['post_date'])) ?></pubDate> 
          <guid isPermaLink="true">http://www.marketingresults.net/blog/post.php?title=<?php echo str_replace(" ", "+", $record['title']) ?></guid> 
        </item> 
		<?php endforeach ?> 
  </channel> 
</rss>