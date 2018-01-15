<?php include ('header.html'); 

function displayRequired($fieldName) {
     echo "The field \"$fieldName\" is required.<br />\n";
}

function validateInput($data, $fieldName) {
     global $errorCount;
     if (empty($data)) {
          displayRequired($fieldName);
          ++$errorCount;
          $retval = "";
     } else { // Only clean up the input if it isn't empty
          $retval = trim($data);
          $retval = stripslashes($retval);
     }
     return($retval);
}

function redisplayForm($name, $email, $subject, $message) {
	include ("contact.php");
}

$errorCount = 0;
$name = validateInput($_POST['name'], "Name");
$email = validateInput($_POST['email'], "Email");
$subject = validateInput($_POST['subject'], "Subject");
$message = validateInput($_POST['message'], "Message");

if ($errorCount>0) {
    echo "Please re-enter the information below.<br />\n";
    redisplayForm($name, $email, $subject, $message);
}else{
	mail("mwlangenhorst88@gmail.com", $name, $email, $message);
	include ('header.html');
	echo "<div id='templatemo_main'>
		<p>Thanks for your input! Here is the information you've sent:</p>" .
		"<b>" . $name . "</b> @ <b>" . $email . "</b></br>" .
		"Subject: <b>" . $subject . "</b></br>" . 
		"Message: <b>" . $message . "</b></p>" .
		"<a href='index.php'>Back to Home Page</a>" .
		"</div>";
	include ('footer.html');
}

?>