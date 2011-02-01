<?php 
include('config.php'); 
$security_code = mt_rand(5,50);
$security_code = $security_code + 1000;
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO Company ( Username ,  Password , CompanyName, SecurityCode  ) VALUES(  '{$_POST['username']}' ,  '{$_POST['pwd']}' , '{$_POST['company_name']}' ,'$security_code') "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />";

$to = "luigi@blankpageonline.com";
$subject = "Live Payroll Registration Success!";
$mail_body = '<html>
<body bgcolor="#573A28" topmargin="25">
<b>Put HTML content here with variables from PHP if you like</b>
Variable display Example: ' . $subject . ' 
</body>
</html>';
$headers  = "From:luigivibal@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n";
mail($to, $subject, $mail_body, $headers);
echo "Mail Sent."; 
 
} 
?>
<html>
<title>LivePayRoll : Company Registration
</title>
<header></header>
<body>
<form action=''  method='POST'>
Company Name: <input type='text' name="company_name" /><br/>
Company Address: <input type='text' name="username" /><br/>
Telephone Number <input type='text' name="pwd" /><br/>
Telephone Number <input type='text' name="pwd" /><br/>
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
</body>
</html>
