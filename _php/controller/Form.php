<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Form extends Yros{

        public function __construct() {
            parent::__construct();
            $YROS = &Yros::get_instance();
            //Add initial codes here...
        }


        function index(){
            echo 'Hello Yros user. This is Form controller';
        }

        function forminsert(){
            $patient["first_name"]=post("first_name");
            $patient["surname"]=post("surname");
            $patient["bday"]=post("bday");
            $patient["age"]=post("age");
            $patient["contact"]=post("contact");
            $patient["civil_status"]=post("civilstatus");
            $patient["occupation"]=post("occupation");
            $patient["religion"]=post("religion");
            $patient["sex"]=post("sex");
            $patient["home_address"]=post("address");

            $patienresult = db_insert('patient',$patient);
            
            $pid = $patienresult['insert_id'];

            $imm["patientID"]=$pid;
            $imm["scheduleID"]="1";
            $imm["applicationDate"]= date("Y-m-d");
            $imm["Status"]="pending";
            $imm["servicesID"]="1";
            $imm['immunizationID'] = 2;

            $immunazationr = db_insert('immunization_application',$imm);
            $immid = $immunazationr['insert_id'];
         
            

            $prenatal["patientID"]=$pid;
            
            $prenatal["Date"]=post("setdate") ?? date("Y-m-d");
            $prenatal["applicationDate"]= date("Y-m-d");
            $prenatal["Status"]="pending";
            $prenatal["servicesID"]="1";

            $prenatalres = db_insert('prenatalschedule',$prenatal);
            $preid = $prenatalres['insert_id'];
            

            $famil["patientID"]=$pid;
            $famil["Date"]=post("setdate2") ?? date("Y-m-d");
            $famil["Facility"]=post("facility") ?? null;
            $famil["ServicesProvided"]=post("options2");
            $famil["applicationDate"]= date("Y-m-d");
            $famil["Status"]="pending";
            $famil["servicesID"]="1";

            $familyr = db_insert('family_planning',$famil);

            json_response(["code"=>200, "message"=>"success"]);
        }

        
    }
?>