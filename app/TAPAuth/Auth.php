<?php

namespace App\TAPAuth;

class Auth
{
	public static function authenticate($username,$password)
	{
		$curlService = new \Ixudra\Curl\CurlService();
		$url = base64_encode('/login?username='.$username.'&password='.$password.'');
		$response = $curlService->to('http://apidev.tap-agri.com/'.$url)->get();
		$valid = json_decode($response);
		return $valid;
	}
}
