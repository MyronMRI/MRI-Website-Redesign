<?php

 // load records
  list($contact_pageRecords, $contact_pageMetaData) = getRecords(array(
    'tableName'   => 'contact_page',
    'limit'       => '1',
  ));
  $contact_pageRecord = @$contact_pageRecords[0]; // get first record
  

  // FORM CODE
$errorsAndAlerts = "";

// Check if the form has been submitted:
if (@$_REQUEST['submit']) {



// variable for refresh
$link = 'http://test.marketingresults.net/contact/index.php';
$hard_refresh = "<a href='$link' style='cursor:pointer;'>click here</a>";
	
	
	// ERROR CHECKING
 	if (!@$_REQUEST['emailaddress2'] !=" " ) { $errorsAndAlerts .= "<li> Bot Detected - Please $hard_refresh if you are not a bot </li>\n"; }
	if (!@$_REQUEST['first_name']) { $errorsAndAlerts .= "<li> Please enter your first name.</li>\n"; }
	if (!@$_REQUEST['last_name']) { $errorsAndAlerts .= "<li> Please enter your last name.</li>\n"; }
    if (!@$_REQUEST['email_address']) { $errorsAndAlerts .= "<li> Please enter your email address.</li>\n"; }
    if (!@$_REQUEST['company_name']) { $errorsAndAlerts .= "<li> Please enter your company name.</li>\n"; }
	
	if (!$errorsAndAlerts) {
      if (!isValidEmail($_REQUEST['email_address'])) { $errorsAndAlerts .= "<li> Please enter a valid email. (example: user@example.com)</li>\n"; }
    }
	
	// IF NO ERRORS, SUBMIT FORM
	if (!@$errorsAndAlerts) { 
	
	// turn off strict mysql error checking for: STRICT_ALL_TABLES
	mysqlStrictMode(false); // disable Mysql strict errors for when a field isn't defined below (can be caused when fields are added later)
	  
  // add record 
		mysql_query("INSERT INTO `cmsb_contact_form_submissions` SET 
	first_name = '".mysql_real_escape_string($_REQUEST['first_name'])."',
	last_name = '".mysql_real_escape_string($_REQUEST['last_name'])."',
	email_address = '".mysql_real_escape_string($_REQUEST['email_address'])."',
	company_name = '".mysql_real_escape_string($_REQUEST['company_name'])."',
	additional_information = '".mysql_real_escape_string($_REQUEST['additional_information'])."',
	ip_address = '".mysql_real_escape_string( $_SERVER['REMOTE_ADDR'] )."',
					  createdDate      = NOW(),
					  updatedDate      = NOW(),
					  createdByUserNum = '0',
					  updatedByUserNum = '0'")
	or die("MySQL Error Creating Record:<br/>\n". htmlspecialchars(mysql_error()) . "\n");
	
	$recordNum = mysql_insert_id();
	
	// send submission to property
	  	$emailDate = date("F j, Y"); 
	  	$emailTime = date("g:i a");
		$emailTo = $contact_pageRecord['email_submissions'];
		ob_start();
		include('property_contact_us3.php');
		$message = ob_get_contents();
		ob_end_clean();
		$headers = 'MIME-Version: 1.0'. "\r\n";
		$headers .= 'Content-Type: text/html; charset=ISO-8859-1\r\n' . "\r\n";
		$headers .= 'From: Marketing Results <' . 'marketingresults@mail.mriaim.com' . '>' . "\r\n";
		$headers .= 'Reply-To: Marketing Results <marketingresults@mail.mriaim.com>' . "\r\n";
		mail($emailTo, 'Marketing Results Contact Form Submission', $message, $headers);

	
		// go to confirmation page
		header("Location: http://test.marketingresults.net/contact/confirm.php"); /* Redirect browser */
		exit();
		
	
	}// End of form processing.
} // End of form IF.


  // CONTACT PAGE CONTENT


?>

<style>
.error_box li{
	color:#973827;
}
.input_textarea{
	resize:none;
	height:100px;
}
</style>
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="../_css/ie7.css" /><![endif]-->

<div class="container">
    <div class="row">
			<div class="col-xs-12">
                    <p><span class="h2 adelle white"><?php echo htmlencode($contact_pageRecord['headline']) ?></span></p>
                    <div class="white thin"><?php echo $contact_pageRecord['body_copy']; ?></div>
                    <p class="white thin">* Required fields</p>
            </div>
            <div class="col-xs-12">
                <!-- ERROR MESSAGE -->
                <?php if ($errorsAndAlerts):  ?>
                <div class="error_box clearfix bgwhite xs-p-15">
					<p class="h4">We’re sorry, there was an error with your submission.</p>
					<p>Please check these fields in the form below to see if they are filled in correctly:</p>
						<ul class="white clearfix">
							<?php echo ( $errorsAndAlerts);  ?>
						</ul>
				</div> 
                <?php endif ?>
                <!-- ERROR MESSAGE ENDS -->
                <br />
                <div class="row">
                <form action="" method="post">
                <input type="hidden" name="submit" value="1" />
                
                		<div class="col-xs-12 col-sm-6 xs-mt-15"><input type="text" name="first_name" class="form-control" value="<?php echo htmlspecialchars(@$_REQUEST['first_name']) ?>" placeholder="First Name *" /></div>
					<div class="col-xs-12 col-sm-6 xs-mt-15"><input type="text" name="last_name" class="form-control" value="<?php echo htmlspecialchars(@$_REQUEST['last_name']) ?>" placeholder="Last Name *"  /></div>
                    <div class="col-xs-12 col-sm-6 xs-mt-15"><input type="email" name="email_address" class="form-control" value="<?php echo htmlspecialchars(@$_REQUEST['email_address']) ?>" placeholder="Email Address *"  /></div>
                    <div class="col-xs-12 col-sm-6 xs-mt-15"><input type="text" name="company_name" class="form-control" value="<?php echo htmlspecialchars(@$_REQUEST['company_name']) ?>" placeholder="Company Name *"  /></div>
                    <div class="col-xs-12 xs-mt-25">
                    		<textarea name="additional_information" rows="10" class="form-control" placeholder="Additional Information"> <?php  echo htmlspecialchars(@$_REQUEST['additional_information']) ?></textarea>
                    </div>

                    <div class="col-xs-12 xs-mt-25">
                            <input type="submit" class="btn btn-light-blue" value="Submit">
                    </div>
                    <div class="col-xs-12 white xs-mt-25 thin">
                            <input type="checkbox" value="subscribe" /> I wish to receive future emails from you about products and services<br>
                        <input type="checkbox" value="unsubscribe" /> I DO NOT wish to receive future emails from you about products and services
                    </div>
                    <div class="col-xs-12 xs-mt-25 thin">
                        <p class="white">Any personal data collected will be kept confidential. Please refer to our Privacy Policy for further information. If you no longer wish to receive communications from Marketing Results, please click here to unsubscribe.</p>
                    </div>                
                </form>
                </div>
            </div>
    </div>
</div>