<?php

if (isset($_POST['submit'])) {
	$to = "tanishahuby@gmail.com";
	$name = $_POST['name'];
	$from = $_POST['email'];
	$subject = $_POST['subject'];
	$msg = $_POST['message'];
	$header = "From:".$from;
	if (mail($to, $subject, $msg,$header)) {
		echo "<script>alert('Mail Sent Success');</script>";
		
	}else{
		echo "<script>alert('Mail Not Sent !!');</script>";

	}
}

?>