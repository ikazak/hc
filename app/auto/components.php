<?php 

function heading($text){
    ?>
    <h2><?= $text ?></h2>
    <?php
}

function sendsms($message){

    $url = "https://xk242l.api.infobip.com/sms/2/text/advanced";

// Headers
$headers = [
    "Authorization: App 26564c2ad26f444b244996d66ad87bfb-92537afa-85c6-4b20-80b9-554a8dd583a6",
    "Content-Type: application/json",
    "Accept: application/json",
];

// Data payload
$data = [
    "messages" => [
        [
            "destinations" => [
                ["to" => "639383975710"]
            ],
            "from" => "447491163443",
            "text" => $message
        ]
    ]
];

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Execute cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
   
} else {


}

// Close cURL session
curl_close($ch);

}


?>