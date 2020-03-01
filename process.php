<?php include 'header1.php';

$EmailFrom = "ylbenarroch@gmail.com";
$EmailTo = "ylsassoon@gmail.com";
$Subject = "Blink Photography";
$Name = Trim(stripslashes($_POST["Name"]));
$Email = Trim(stripslashes($_POST["Email"]));
$Message = Trim(stripslashes($_POST["Message"]));

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contact2.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}

include 'footer.php';
