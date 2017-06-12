<?php

	$header="From: ".$_POST["emailId"]."\r\nCC: ".$_POST["emailid"];
	$message="First Name: ".$_POST["first_name"]."\n\nSurname: ".$_POST["surname"]."\n\nCompany Name: ".$_POST["company_name"]."\n\nAddress : ".$_POST["address"]."\n\nCountry : ".$_POST["country"]."\n\nState : ".$_POST["state"]."\n\nCity : ".$_POST["city"]."\n\nPincode : ".$_POST["pincode"]."\n\nPhone : ".$_POST["phone"];;
	$message.="\n\nMessage: ".$_POST["message"];
	if(mail("contactus@groupnirmal.com","Brochure Required",$message,$header))
		echo 1;
	else
		echo 0;
?>