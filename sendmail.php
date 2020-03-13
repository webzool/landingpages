<?php


if($_POST["foo"]==''):/* if the input is not empty it means that a SPAM BOT filled up the entire form */
    
    $zipcode = $_POST["zipcode"];
    $solarsolution = $_POST["solarsolution"];
    $sun = $_POST["sun"];
    $projectplace = $_POST["projectplace"];
    $bill = $_POST["bill"];
    $property = $_POST["property"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
	
	if($name=='' || $email=='' || $phone=='' || $zipcode==''): echo '2'; exit(); endif; /* if some values is missing, return the error */
	
	
	$date=date("d M Y - h:1 a");

	$mail='mike@allieddigitalmedia.com'; /* change this variable with your email address */
	$header = "From: ".$name." <".$email.">" . "\r\n" . "Reply-To: ".$email."" . "\r\n" . "X-Mailer: PHP/" . phpversion();	
    $header .= "MIME-Version: 1.0\n";
	$header .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
	$header .= "Content-Transfer-Encoding: 7bit\n\n";
	$msg= '<html><body>New message from http://homesolartoday.com/lp/.<br /><br /><strong>ZIP CODE:</strong> '.$zipcodepro.'<br /><br /><strong>Name:</strong> '.$name.'<br /><br /><strong>Surname:</strong> '.$lastname.'<br /><br /><strong>Email:</strong> '.$email.'<br /><br /><strong>How much sun exposure does your property get?:</strong> '.$sun.'<br /><br /><strong>Where would this project take place?:</strong> '.$projectplace.'<br /><br /><strong>What is your average monthly electricity bill?</strong> '.$bill.'<br /><br /><strong>Property Type:</strong> '.$property.'<br /><br /><strong>What kind of solar power solution are you looking for?</strong> '.$solarsolution.'<br /><br /><strong>Date:</strong> '.$date.'<br /><br /><br /><small><i>From - Your website</i></small></body></html>';
	if(@mail("$mail","HOME SOLAR TODAY Campaign - Contact form",$msg,$header)): echo '1'; else: echo '3'; endif;/* check if the mail() function succeded */
	
else: echo '1'; endif;/* send a positive fake return if SPAM is detected */