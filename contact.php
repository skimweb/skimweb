<?php
if (isset($_POST['submit'])) {
	$mailfrom = $_POST['mail'];


	$mailTo = "support@skimweb.site";
	$headers = "From". $mailFrom;
	$txt = "you have recieved an e-mail from ". $mailFrom;

	mail($mailTo, $txt, $headers);
    header("Location: index.html?mailsent");



	// code...
}



