<?php 
	$responses['what is your name'] = "My name is Arpan.";
	// echo "Hello world";
	$responses['tell me about yourself'] = "I am a chatbot. I'm still learning a lot of things so please forgive me if I can't answer you in some cases.";
	$responses["good"] = "Good. I'm happy about that.";
	$responses["i'm fine"] = "Good. I'm happy about that.";
	$responses["contact"] = "7986554546";
	$responses["balance"] = "₹2490";
	$responses["available"] = "5 Cars. Toyota-Camry-2013, Holden-Captiva-2017, Jeep-Cherokee-2016, Benz-GLC-2017 and Volkswagen-Golf-2016";
	$q = $_GET["q"];

	$response = "";

	if ($q != "") {
		# code...
		$q = strtolower($q);
		foreach ($responses as $r => $value) {
			# code...
			if (strpos($r, $q) !== false) {
				# code...
				$response = $value;
			}
			
		}
	}
	$noresponse = "Sorry I'm still learning. Hence my responses are limited. Ask something else.";
	echo $response === "" ? $noresponse : $response;
?>