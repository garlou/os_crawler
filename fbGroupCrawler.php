<?php

class fbGroupCrawler {

	protected $token;
	protected $group_id;

	function __construct($group_id) {
			$this->token = 'CAACEdEose0cBAJ78sBR0YfZCIfXs5qDByJrBrsFJBKyF7HGjZAKreCXzUALgA4ZAufzrcuOmpfGvdbPTA18VtcpCZBegtStKZAwLwYTibRUdnQMT3eqmQ0D9ojMvLtbEH2YB8dmaGaUK0rGdjhMpVfXbF44B5pKeD9sZBjZAZCs38ZAziMPlA1Lg3TDN8TrfVadn3uaDAmqGbhRWBdetQ3GxYhWH2aKu61YZCTfMakydXwxQZDZD';
		$this->group_id = $group_id;
	}

	function revalidateToken() {

	}


	function run() {

	  $ch = curl_init(); 

	  $url = 'https://graph.facebook.com/v2.2/'.$group_id.'/feed';
	  //echo $url."\n";

		$postData = "url=" . urlencode($url)
		  . "&message=" . urlencode('')
		  . "&access_token=" .$this->token;
		
		curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


		$res = curl_exec($ch);

		curl_close($ch);

		$json = json_decode($res, true);
		print_r($json);
	}


}