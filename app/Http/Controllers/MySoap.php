
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
include 'Soap/nusoap.php';
use nusoap_client;

class MySoap extends Controller
{
	public function index(){
		
		
		 
		if ($client->fault) {
			echo "<h2>Fault</h2><pre>";
			print_r($result);
			echo "</pre>";
		} else {
			$error = $client->getError();
			if ($error) {
				echo "<h2>Error</h2><pre>" . $error . "</pre>";
			} else {
				echo "<h2>Main</h2>";
				echo $result;
			}
		}
		 
		// show soap request and response
		echo "<h2>Request</h2>";
		echo "<pre>" . htmlspecialchars($client->request, ENT_QUOTES) . "</pre>";
		echo "<h2>Response</h2>";
		echo "<pre>" . htmlspecialchars($client->response, ENT_QUOTES) . "</pre>";
		echo "=========== response ============ ";
		echo "<pre>";
			var_dump($result);
		echo "</pre>";
	}

}
