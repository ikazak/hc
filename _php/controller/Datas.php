<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Datas extends Yros{

        public function __construct() {
            parent::__construct();
            $YROS = &Yros::get_instance();
            //Add initial codes here...
        }


        function index(){
            echo 'Hello Yros user. This is Datas controller';
        }

        function countPatients(){
            $result = db_set_query("select count(*) as 'count' from patient");
            json_response($result);
        }

        function countMedicine(){
            $result = db_set_query("select count(*) as 'count' from hc_medicineinventory");
            json_response($result);
        }

        function countattended(){
            $result = db_set_query("select count(*) as 'count' from appointment");
            json_response($result);
        }

        function countpending(){
            $result = db_set_query("select count(*) as 'count' from request where status = 'pending'");
            json_response($result);
        }

        
    }
?>