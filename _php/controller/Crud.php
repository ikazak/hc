<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Crud extends Yros{

        public function __construct() {
            parent::__construct();
            $YROS = &Yros::get_instance();
            //Add initial codes here...
        }


        function index(){
            echo 'Hello Yros user. This is Crud controller';
        }

        function addmedicine(){
            $data = post_data();
            $result = db_insert("hc_medicineinventory",$data);
            redirect("main/medicineinventory");
        }

        function deletemedicine(){
            $id["hc_id"] = get("med_id");
            $result = db_delete("hc_medicineinventory",$id);
            back_to_previous_page();
        }

        function editmedicine(){
            view_page("edit");
        }

        function updatemedicine(){
            $data = post_data();
            $where["hc_id"]=get("medicine_id");
            $result = db_update("hc_medicineinventory",$data,$where);
            redirect("main/medicineinventory");
        }

        function addresident(){
            $pict = upload_file("photo",auto_rename);
            $data = post_data();
            $data['photo'] = $pict['filename'];
            $result = db_insert("hc_resident",$data);
            db_dump_errors();
            redirect("main/residentprofile");
        }

        function getappointment(){
            $data = db_set_query('select a.appointmentID, concat(p.first_name," ",p.surname) "fullname", i.Date, s.ServicesType, a.ApplicationDate, a.Status from appointment a, patient p, immunization_schedule i, services s where a.patientID = p.patientID and a.scheduleID = i.scheduleID AND a.servicesID = s.servicesID;');
            json_response($data);
        }

        function displayrequest(){
            $data = db_set_query('select r.requestID, concat(p.first_name," ",p.surname) "fullname", r.serviceType, r.scheduleDate, r.status FROM request r, patient p, services s where r.patientID = p.patientID and  r.serviceID = s.servicesID and r.status = "Pending";');
            json_response($data);
        }


        function send(){


// API endpoint
$url = 'https://514ppj.api.infobip.com/sms/2/text/advanced';

// Headers
$headers = [
    'Authorization: App 171ef64c432a7db3398c88e299d66a88-6ab0f47e-21fa-4f8d-b51a-0d2b85c4254b',
    'Content-Type: application/json',
    'Accept: application/json',
];

// Payload
$data = [
    "messages" => [
        [
            "destinations" => [
                ["to" => "639534479283"]
            ],
            "from" => "ServiceSMS",
            "text" => "Congratulations on sending your first message. Go ahead and check the delivery report in the next step."
        ]
    ]
];

// Initialize cURL
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Execute the request and get the response
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    // Print the response
    echo $response;
}

// Close cURL
curl_close($ch);


        }

    }

    
?>