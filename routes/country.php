<?php

session_start();

if(!(isset($_SESSION['global_country_code'])) && $_SESSION['global_country_code'] == NULL){

	 function ip_visitor_country()
	{
	
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];
		$country  = "Unknown";
	
		if(filter_var($client, FILTER_VALIDATE_IP))
		{
			$ip = $client;
		}
		elseif(filter_var($forward, FILTER_VALIDATE_IP))
		{
			$ip = $forward;
		}
		else
		{
			$ip = $remote;
		}
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$ip_data_in = curl_exec($ch); // string
		curl_close($ch);
	
		$ip_data = json_decode($ip_data_in,true);
		$ip_data = str_replace('&quot;', '"', $ip_data); // for PHP 5.2 see stackoverflow.com/questions/3110487/
	
		if($ip_data && $ip_data['geoplugin_countryCode'] != null) {
			$country = $ip_data['geoplugin_countryCode'];
		} 
		return $country;
	}
	
	$global_country_code = ip_visitor_country();
	
	$enterUrl = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  
	
	if(strrpos(strtoupper($enterUrl), strtoupper($global_country_code)) == 0){ 
		
		$_SESSION['global_country_code'] = $global_country_code;
		if(strtoupper($global_country_code) == 'IN'){ 
			header('Location: http://13.233.147.243');
		}elseif(strtoupper($global_country_code) == 'US'){ 
			header('Location: https://avita-americas.com');
		}elseif(strtoupper($global_country_code) == 'CA'){ 
			header('Location: https://avita-americas.com');
	
		}
	}
}

 
?>
