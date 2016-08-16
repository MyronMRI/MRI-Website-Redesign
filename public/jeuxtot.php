<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'admin/lib/viewer_functions.php';
  $dirsToCheck = array('D:/inetpub/wwwroot/www.marketingresults.net/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load records from 'services'
  list($servicesRecords, $servicesMetaData) = getRecords(array(
    'tableName'   => 'services',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <style type="text/css">
    body          { font-family: arial; }
    .instructions { border: 3px solid #000; background-color: #EEE; padding: 10px; text-align: left; margin: 25px}
  </style>
 </head>
<body>

  <!-- INSTRUCTIONS -->
    <div class="instructions">
      <b>Sample List Viewer - Instructions:</b>
      <ol>
        <?php /*><li style="color: red; font-weight: bold">Rename this file to have a .php extension!</li><x */ ?>
        <li><b>Remove any fields you don't want displayed.</b></li>
        <li>Rearrange remaining fields to suit your needs.</li>
        <li>Copy and paste code into previously designed page (or add design to this page).</li>
      </ol>
    </div>
  <!-- /INSTRUCTIONS -->

  <!-- STEP2: Display Records (Paste this where you want your records to be listed) -->
    <h1>Services - List Page Viewer</h1>
    <?php foreach ($servicesRecords as $record): ?>
      Record Number: <?php echo htmlencode($record['num']) ?><br/>
      Title: <?php echo htmlencode($record['title']) ?><br/>
      Main Header: <?php echo htmlencode($record['main_header']) ?><br/>
      Main Subheader: <?php echo htmlencode($record['main_subheader']) ?><br/>
      Main Intro Copy: <?php echo $record['main_intro_copy']; ?><br/>
      Service Tagline 1: <?php echo htmlencode($record['service_tagline_1']) ?><br/>
      Service Tagline 2: <?php echo htmlencode($record['service_tagline_2']) ?><br/>
      Testimonial Quote 1: <?php echo htmlencode($record['testimonial_quote_1']) ?><br/>
      Testimonial Quote Byline 1: <?php echo htmlencode($record['testimonial_quote_byline_1']) ?><br/>
      Testimonial Quote 2: <?php echo htmlencode($record['testimonial_quote_2']) ?><br/>
      Testimonial Quote Byline 2: <?php echo htmlencode($record['testimonial_quote_byline_2']) ?><br/>
      Body Header: <?php echo htmlencode($record['body_header']) ?><br/>
      Body Copy: <?php echo $record['body_copy']; ?><br/>
      Body Call to Action 1: <?php echo htmlencode($record['body_call_to_action_1']) ?><br/>
      Body Call to Action 2: <?php echo htmlencode($record['body_call_to_action_2']) ?><br/>
      KSC Header: <?php echo htmlencode($record['ksc_header']) ?><br/>
      KSC Subheader: <?php echo htmlencode($record['ksc_subheader']) ?><br/>
      KSC Column 1: <?php echo $record['ksc_column_1']; ?><br/>
      KSC Column 2: <?php echo $record['ksc_column_2']; ?><br/>
      KSC Column 3: <?php echo $record['ksc_column_3']; ?><br/>
      _link : <a href="<?php echo $record['_link'] ?>"><?php echo $record['_link'] ?></a><br/>

      <!-- STEP 2a: Display Uploads for field 'main_icon' (Paste this anywhere inside STEP2 to display uploads) -->
        <!-- Upload Fields: extension, thumbFilePath, isImage, hasThumbnail, urlPath, width, height, thumbUrlPath, thumbWidth, thumbHeight, info1, info2, info3, info4, info5 -->
        Main Icon: (Copy the tags from below that you want to use, and erase the ones you don't need)
        <blockquote>
        <?php foreach ($record['main_icon'] as $index => $upload): ?>
          Upload Url: <?php echo htmlencode($upload['urlPath']) ?><br/>


          Thumb Url: <?php echo htmlencode($upload['thumbUrlPath']) ?><br/><br/>
          Download Link: <a href="<?php echo htmlencode($upload['urlPath']) ?>">Download <?php echo htmlencode($upload['filename']) ?></a><br/><br/>

          Image Tags:<br/>
          <img src="<?php echo htmlencode($upload['urlPath']) ?>" width="<?php echo $upload['width'] ?>" height="<?php echo $upload['height'] ?>" alt="" />
          <img src="<?php echo htmlencode($upload['thumbUrlPath']) ?>" width="<?php echo $upload['thumbWidth'] ?>" height="<?php echo $upload['thumbHeight'] ?>" alt="" /><br/>

          info1 (Title) : <?php echo htmlencode($upload['info1']) ?><br/>
          info2 (Caption) : <?php echo htmlencode($upload['info2']) ?><br/><br/>

          Extension: <?php echo $upload['extension'] ?><br/>
          isImage: <?php if ($upload['isImage']): ?>Yes<?php else: ?>No<?php endif ?><br/>
          hasThumbnail: <?php if ($upload['hasThumbnail']): ?>Yes<?php else: ?>No<?php endif ?><br/>
          <hr/>

        <?php endforeach ?>
        </blockquote>
      <!-- STEP2a: /Display Uploads -->


      <!-- STEP 2a: Display Uploads for field 'main_intro_image' (Paste this anywhere inside STEP2 to display uploads) -->
        <!-- Upload Fields: extension, thumbFilePath, isImage, hasThumbnail, urlPath, width, height, thumbUrlPath, thumbWidth, thumbHeight, info1, info2, info3, info4, info5 -->
        Main Intro Image: (Copy the tags from below that you want to use, and erase the ones you don't need)
        <blockquote>
        <?php foreach ($record['main_intro_image'] as $index => $upload): ?>
          Upload Url: <?php echo htmlencode($upload['urlPath']) ?><br/>


          Thumb Url: <?php echo htmlencode($upload['thumbUrlPath']) ?><br/><br/>
          Download Link: <a href="<?php echo htmlencode($upload['urlPath']) ?>">Download <?php echo htmlencode($upload['filename']) ?></a><br/><br/>

          Image Tags:<br/>
          <img src="<?php echo htmlencode($upload['urlPath']) ?>" width="<?php echo $upload['width'] ?>" height="<?php echo $upload['height'] ?>" alt="" />
          <img src="<?php echo htmlencode($upload['thumbUrlPath']) ?>" width="<?php echo $upload['thumbWidth'] ?>" height="<?php echo $upload['thumbHeight'] ?>" alt="" /><br/>

          info1 (Title) : <?php echo htmlencode($upload['info1']) ?><br/>
          info2 (Caption) : <?php echo htmlencode($upload['info2']) ?><br/><br/>

          Extension: <?php echo $upload['extension'] ?><br/>
          isImage: <?php if ($upload['isImage']): ?>Yes<?php else: ?>No<?php endif ?><br/>
          hasThumbnail: <?php if ($upload['hasThumbnail']): ?>Yes<?php else: ?>No<?php endif ?><br/>
          <hr/>

        <?php endforeach ?>
        </blockquote>
      <!-- STEP2a: /Display Uploads -->


      <!-- STEP 2a: Display Uploads for field 'service_hero_image' (Paste this anywhere inside STEP2 to display uploads) -->
        <!-- Upload Fields: extension, thumbFilePath, isImage, hasThumbnail, urlPath, width, height, thumbUrlPath, thumbWidth, thumbHeight, info1, info2, info3, info4, info5 -->
        Service Hero Image: (Copy the tags from below that you want to use, and erase the ones you don't need)
        <blockquote>
        <?php foreach ($record['service_hero_image'] as $index => $upload): ?>
          Upload Url: <?php echo htmlencode($upload['urlPath']) ?><br/>


          Thumb Url: <?php echo htmlencode($upload['thumbUrlPath']) ?><br/><br/>
          Download Link: <a href="<?php echo htmlencode($upload['urlPath']) ?>">Download <?php echo htmlencode($upload['filename']) ?></a><br/><br/>

          Image Tags:<br/>
          <img src="<?php echo htmlencode($upload['urlPath']) ?>" width="<?php echo $upload['width'] ?>" height="<?php echo $upload['height'] ?>" alt="" />
          <img src="<?php echo htmlencode($upload['thumbUrlPath']) ?>" width="<?php echo $upload['thumbWidth'] ?>" height="<?php echo $upload['thumbHeight'] ?>" alt="" /><br/>

          info1 (Title) : <?php echo htmlencode($upload['info1']) ?><br/>
          info2 (Caption) : <?php echo htmlencode($upload['info2']) ?><br/><br/>

          Extension: <?php echo $upload['extension'] ?><br/>
          isImage: <?php if ($upload['isImage']): ?>Yes<?php else: ?>No<?php endif ?><br/>
          hasThumbnail: <?php if ($upload['hasThumbnail']): ?>Yes<?php else: ?>No<?php endif ?><br/>
          <hr/>

        <?php endforeach ?>
        </blockquote>
      <!-- STEP2a: /Display Uploads -->


      <!-- STEP 2a: Display Uploads for field 'service_intro_image' (Paste this anywhere inside STEP2 to display uploads) -->
        <!-- Upload Fields: extension, thumbFilePath, isImage, hasThumbnail, urlPath, width, height, thumbUrlPath, thumbWidth, thumbHeight, info1, info2, info3, info4, info5 -->
        Service Intro Image: (Copy the tags from below that you want to use, and erase the ones you don't need)
        <blockquote>
        <?php foreach ($record['service_intro_image'] as $index => $upload): ?>
          Upload Url: <?php echo htmlencode($upload['urlPath']) ?><br/>


          Thumb Url: <?php echo htmlencode($upload['thumbUrlPath']) ?><br/><br/>
          Download Link: <a href="<?php echo htmlencode($upload['urlPath']) ?>">Download <?php echo htmlencode($upload['filename']) ?></a><br/><br/>

          Image Tags:<br/>
          <img src="<?php echo htmlencode($upload['urlPath']) ?>" width="<?php echo $upload['width'] ?>" height="<?php echo $upload['height'] ?>" alt="" />
          <img src="<?php echo htmlencode($upload['thumbUrlPath']) ?>" width="<?php echo $upload['thumbWidth'] ?>" height="<?php echo $upload['thumbHeight'] ?>" alt="" /><br/>

          info1 (Title) : <?php echo htmlencode($upload['info1']) ?><br/>
          info2 (Caption) : <?php echo htmlencode($upload['info2']) ?><br/><br/>

          Extension: <?php echo $upload['extension'] ?><br/>
          isImage: <?php if ($upload['isImage']): ?>Yes<?php else: ?>No<?php endif ?><br/>
          hasThumbnail: <?php if ($upload['hasThumbnail']): ?>Yes<?php else: ?>No<?php endif ?><br/>
          <hr/>

        <?php endforeach ?>
        </blockquote>
      <!-- STEP2a: /Display Uploads -->

      <hr/>
    <?php endforeach ?>

    <?php if (!$servicesRecords): ?>
      No records were found!<br/><br/>
    <?php endif ?>
  <!-- /STEP2: Display Records -->

</body>
</html>
