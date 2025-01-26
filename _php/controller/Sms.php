<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Sms extends Yros{

        public function __construct() {
            parent::__construct();
            $YROS = &Yros::get_instance();
            //Add initial codes here...
        }


        function index(){
            echo 'Hello Yros user. This is Sms controller';
        }

       

        function sendsms(){
            $url = "https://api.semaphore.co/api/v4/messages";
            $data = [
                "apikey" => "c1eeb62a4e2178a271b1217b157ebae6",
                "number" => "9972253755",
                "message" => "I just sent my first priority message with Semaphore",
                "sendername" => "smshc"
            ];
            
            // Initialize cURL
            $ch = curl_init();
            
            // Set cURL options
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            // Execute the request and capture the response
            $response = curl_exec($ch);
            
            // Check for errors
            if (curl_errno($ch)) {
                echo "cURL Error: " . curl_error($ch);
            } else {
                // Display the response
                echo "Response: " . $response;
            }
            
            // Close the cURL session
            curl_close($ch);
        }

        
    }
?>
