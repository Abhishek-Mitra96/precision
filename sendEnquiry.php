<?php

	$header="From: ".$_POST["email"]."\r\nCC: ".$_POST["email"];
	$message="Name: ".$_POST["name"]."\n\nEmail: ".$_POST["email"]."\n\nMobile: ".$_POST["mobile"];
	$message.="\n\nMessage: ".$_POST["message"];
	if(mail("contactus@groupnirmal.com",$_POST["subject"],$message,$header))
		echo 1;
	else
		echo 0;
?>