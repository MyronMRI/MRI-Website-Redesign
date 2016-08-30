<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
#ForceOutlook2010BrowserLink span { padding: 0px; } 
body {-webkit-text-size-adjust:none;}
 </style>
</head>
<body style="margin:0px; padding:10px;">
<table width="600" border="0" cellpadding="6" cellspacing="1" bgcolor="#CC9900">
  <tr>
    <td colspan="2" align="left" valign="top" bgcolor="#FFFFFF" style="font-family: Verdana; font-size: 11px; color: #333333;">Email Signup Form Submission received on <?php echo htmlspecialchars($emailDate) ?> at <?php echo htmlspecialchars($emailTime) ?></td>
  </tr>
  <tr>
    <td width="182" align="left" valign="top" bgcolor="#FEF4D6" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><strong>First Name:</strong></td>
  <td width="399" align="left" valign="top" bgcolor="#FFFFFF" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><?php echo htmlspecialchars($_POST['first_name']) ?></td>
  </tr>
  <tr>
    <td width="182" align="left" valign="top" bgcolor="#FEF4D6" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><strong>Last Name:</strong></td>
  <td width="399" align="left" valign="top" bgcolor="#FFFFFF" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><?php echo htmlspecialchars($_POST['last_name']) ?></td>
  </tr>
  <tr>
    <td width="182" align="left" valign="top" bgcolor="#FEF4D6" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><strong>Email Address</strong></td>
  <td width="399" align="left" valign="top" bgcolor="#FFFFFF" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><?php echo htmlspecialchars($_POST['email_address']) ?></td>
  </tr>
   <tr>
    <td width="182" align="left" valign="top" bgcolor="#FEF4D6" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><strong>Company Name:</strong></td>
  <td width="399" align="left" valign="top" bgcolor="#FFFFFF" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><?php echo htmlspecialchars($_POST['company_name']) ?></td>
  </tr>
      <tr>
    <td width="182" align="left" valign="top" bgcolor="#FEF4D6" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><strong>Additional Information:</strong></td>
  <td width="399" align="left" valign="top" bgcolor="#FFFFFF" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><?php echo htmlspecialchars($_POST['additional_information']) ?></td>
  </tr>
 
     <tr>
    <td width="182" align="left" valign="top" bgcolor="#FEF4D6" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><strong>IP Address:</strong></td>
  <td width="399" align="left" valign="top" bgcolor="#FFFFFF" style="font-family:Verdana, Geneva, sans-serif; font-size: 11px; color: #333333;"><?php echo htmlspecialchars($_SERVER['REMOTE_ADDR']) ?></td>
  </tr>
</table>

</body>
</html>