
<?php

if (isset($_POST['submit'])) {
	$to = "m.pariksit@gmail.com";
	$name = $_POST['name'];
	$mail = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['message'];
	$subject = "Query Regarding Pariksit Reseller";
	$sendMessage = "You have received a query as \n".$msg."\nFrom ".$name."\nWhose contact number is ".$phone." and Email is ".$mail.".";
	$header = "From: resellerquery@pariksit.com";
	if (mail($to, $subject, $sendMessage,$header)) {
		echo "<script>alert('Mail Sent Success');</script>";
		
	}else{
		echo "<script>alert('Mail Not Sent !!');</script>";

	}
}
?>