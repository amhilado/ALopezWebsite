<!-- example from: http://form.guide/email-form/php-form-to-email.html -->
<?php
if(!isset($_POST['submit'])) {
	echo "error; you need to submit a form.";
} 

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$inquiry = $_POST['inquiry'];
$comment = $_POST['commentBox'];

$emailFrom = 'anthony@anthony-lopez.com';
$emailSubject = "New Form Submission";
$emailBody = "You have received a message from $fname $lname about $inquiry. \n 
				Here is the message:\n $comment";

$to = "anthony@anthony-lopez.com";
$headers = "From: $emailFrom \r\n";
$headers .= "Reply-To: $fname \r\n";

mail ($to, $emailSubject, $emailBody, $headers);

?>