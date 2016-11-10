<?php

namespace App\TAPAuth;

class Auth
{
	public static function authenticate($username,$password)
	{
		$curlService = new \Ixudra\Curl\CurlService();
		$url = base64_encode('/login?username='.$username.'&password='.$password.'');
		//$url = base64_encode('/login?username=yaddi.surahman&password=123456');
		$response = $curlService->to('http://apidev.tap-agri.com/'.$url)->get();
		//$response = $curlService->to('http://apidev.tap-agri.com/saas/public/index.php/'.$url)->get();
		$valid = json_decode($response);

		return $valid;
	}
}
