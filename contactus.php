<?php
if (isset($_POST['Submit'])) {
	$name = $_POST['Name'];
	$mailfrom = $_POST['Email'];
	$phone = $_POST['Phone Number'];
	$message = $_POST['Message'];


	$mailTo = "support@skimweb.site";
	$headers = "From". $mailFrom;
	$txt = "you have recieved an e-mail from ". $name. ".\n\n".$message;

	mail($mailTo, $txt, $headers);
    header("Location: contact.html?mailsent");



	// code...
}



