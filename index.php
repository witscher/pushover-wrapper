<?php
include("config.inc.php")

$messages = [

	0 => "undefinierte Nachricht!"
	,1 => "Alarmanlage ausgelöst!"
	,2 => "Alarmanlage Garage ausgelöst!"
	,3 => "Alarmanlage Garage ausgelöst!"
	,4 => "Alarmanlage Garage ausgelöst!"
	,5 => "Alarmanlage Garage ausgelöst!" 

	];

if (array_key_exists($_GET['alertcode'], $messages)) {
	$msg = $messages[$_GET['alertcode']];
}
else { 
	$msg = "Ich habe keine Ahnung was hier abgeht";
	die();
}



curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.pushover.net/1/messages.json",
  CURLOPT_POSTFIELDS => array(
    "token" => $po_app_token,
    "user" => $po_user_token,
    "message" => $msg,
  ),
  CURLOPT_SAFE_UPLOAD => true,
));


curl_exec($ch);
curl_close($ch);
?>




