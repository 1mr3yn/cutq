<?php
use Twilio\Rest\Client;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {  
	return view('home');
});



$app->post('/call-settings/{digits}',function($digts){

header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
return View::make('call',['digits'=>$digits])->render();

});

$app->get('call',function() {
  //we need to wait 23 seconds because of voice spiel
  $spiel_wait = str_repeat("w",40);
  $existing_customer  = "w1w";
  $phone_number  ="0464545131";
  $confirmation = str_repeat("w", strlen("0464545131")*2)."w1";
  $digits = app('request')->get('digits');

  $sendDigits = str_replace("w",",",join("",[$spiel_wait,$existing_customer,$phone_number,$confirmation,$digits]));
  
  //make the twilio call here
  $AccountSid = "AC634299a8bf9c2b6b009d34c8ed2bfab7";env("TWILIO_SID");
  $AuthToken = "152937d69066d103a4f3a26c1b7c5391";env("TWILIO_AUTH_TOKEN");

  // Step 3: Instantiate a new Twilio Rest Client
  $client = new Client($AccountSid, $AuthToken);

    try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            // Step 4: Change the 'To' number below to whatever number you'd like 
            // to call.
            "+638888171",
            // Step 5: Change the 'From' number below to be a valid Twilio number 
            // that you've purchased or verified with Twilio.
            "+16467986317",

            // Step 6: Set the URL Twilio will request when the call is answered.
            array(
              //"url" => "http://demo.twilio.com/welcome/voice/"
              "url" => "http://cutq.ddns.net/call-settings/{$digits}"
            )
        );
        echo "Started call: " . $call->sid;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

});


$app->get("test-twilio",function(){
   
    //require_once "vendor/autoload.php";
    
    
    // Step 2: Set our AccountSid and AuthToken from https://twilio.com/console
    $AccountSid = env("TWILIO_SID");
    $AuthToken = env("TWILIO_AUTH_TOKEN");

    // Step 3: Instantiate a new Twilio Rest Client
    $client = new Client($AccountSid, $AuthToken);

    try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            // Step 4: Change the 'To' number below to whatever number you'd like 
            // to call.
            "+639990505595",

            // Step 5: Change the 'From' number below to be a valid Twilio number 
            // that you've purchased or verified with Twilio.
            "+16467986317",

            // Step 6: Set the URL Twilio will request when the call is answered.
            array("url" => "http://demo.twilio.com/welcome/voice/")
        );
        echo "Started call: " . $call->sid;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

});
