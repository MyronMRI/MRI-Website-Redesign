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
  
  // load records from 'products'
  list($productsRecords, $productsMetaData) = getRecords(array(
    'tableName'   => 'products',
    'loadUploads' => true,
    'allowSearch' => false,
  ));


?>

<header class="subpage-mod">
  <div id="stuck_container" class="stuck_container">
    <div class="container"> 
    	  <div class="row">
			<div class="col-xs-12 col-sm-4 col-md-5">
				<img src="/_img/logo.png" alt="" class="img-responsive">
            </div>
            <div class="col-xs-12 col-sm-8 col-md-7">
                <nav class="nav hidden-xs"> 
                  <!--Sf-menu-->
                  <ul class="sf-menu xs-mt-5" data-type="navbar">
                    <li id="menu-services">
                      <a href="#">Services</a>
                      <ul>
                      <li><a href="/services.php">Overview</a></li>
                      <?php foreach ($servicesRecords as $record): ?>
                      <li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
                      <?php endforeach ?>
                      </ul>
                    </li>
                    <li id="menu-products">
                      <a href="#">Products</a>
                      <ul>
                      <?php foreach ($productsRecords as $record): ?>
                      	<li><a href="<?php echo $record['_link'] ?>"><?php echo htmlencode($record['title']) ?></a></li>
                      <?php endforeach ?>
                      </ul>            
                    </li>
                    <li id="menu-casestudies"> <a href="/case-studies.php">Case Studies</a> </li>
                    <li id="menu-about"> <a href="/bios.php">About</a> </li>
                    <li id="menu-blog"> <a href="#">Blog</a> </li>
                    <li id="menu-contact"> <a href="/contact/">Contact</a> </li>
                  </ul>
                  <!--End Sf-menu--> 
                </nav>
			</div>
		</div>
    </div>
  </div>
</header>