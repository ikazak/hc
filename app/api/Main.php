<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Main extends Api{

        public function __construct() {
            parent::__construct();
            $YROS = &Yros::get_instance();
        }

        //API:: stores universal functions that can be called across sites/apps.
        

        public function test(){  
            $data = ["code"=>200, "status"=>"success", "message"=>"Yros PHP framework"];
            json_response($data);
        }

        public function login(){
            $data = json_decode(file_get_contents('php://input'), true);
            $email = $data['email'];
            $password = $data['password'];
            $result = db_set_query("select * from register where email = ? and password = ?", [$email, $password]);

            json_response(["code"=>200, "message"=> "Success", "data"=>$result, "success"=>$result['has_data']]);
        }





    }
?>