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
            db_tracker_start();

            $service = post("options");

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
            $imm["servicesID"]=$service;

            $immunazationr = db_insert('immunization_application',$imm);
            file_put_contents("args2.txt", db_last_query());
            $immid = $immunazationr['insert_id'];
         
            

            $prenatal["patientID"]=$pid;
            
            $prenatal["Date"]=post("setdate") ?? date("Y-m-d");
            $prenatal["applicationDate"]= date("Y-m-d");
            $prenatal["Status"]="pending";
            $prenatal["servicesID"]=$service;

            $prenatalres = db_insert('prenatalschedule',$prenatal);
            $preid = $prenatalres['insert_id'];
            
            $famil["patientID"]=$pid;
            $famil["Date"]=post("setdate2") ?? date("Y-m-d");
            $famil["Facility"]=post("facility") ?? null;
            $famil["ServicesProvided"]=post("options2");
            $famil["applicationDate"]= date("Y-m-d");
            $famil["Status"]="pending";
            $famil["servicesID"]=$service;
            db_tracker_complete();
            $familyr = db_insert('family_planning',$famil);

            
            $appoint["patientID"]=$pid;
            $appoint["scheduleID"]="1";
            $appoint["servicesID"]=$service;
            $appoint["applicationDate"]= date("Y-m-d");
            $appoint["Status"]="completed";

            $appointr = db_insert("appointment",$appoint);
            $appid = $appointr["insert_id"];

          
            json_response(["code"=>200, "message"=>"success"]);

        }


        function insertreferral(){

            foreach(post_data() as $post=>$val){
                validate_input($post, $post, "required");
            }

            if(validation_failed()){
                json_response(["code"=>"-1", "errors"=>get_all_input_errors(), "message"=> "Inputs should not be empty"]);
            }

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

            $refferedto["patientID"]=$pid;
            $refferedto["referredToLoc"]=post("referred_location");
            $refferedto["date"]= post("date") ?? date("Y-m-d");
            $refferedto["time"]=post("time") ?? date("Y-m-d h:i:s A");
            $refferedto["time"]=post("referred_from");

            $fetto = db_insert("referredto",$refferedto);
            $refid = $fetto["insert_id"];

            $refferedfrom["patientID"]=$pid;
            $refferedfrom["date"]= post("date") ?? date("Y-m-d");
            $refferedfrom["time"]=post("time") ?? date("Y-m-d h:i:s A");
            $refferedfrom["time"]=post("referred_from");

            $fetfrom = db_insert("referredfrom",$refferedfrom);
            $refromid = $fetfrom["insert_id"];

            $vital["patientID"]=$pid;
            $vital["BP"]=post("bp");
            $vital["HR"]=post("hr");
            $vital["TEMPT"]=post("temp");
            $vital["WEIGHT"]=post("weight");

            $vitals = db_insert("vitalsign",$vital);
            $vitid = $vitals["insert_id"];

            $obhis["patientID"]=$pid;
            $obhis["G"]=post("g");
            $obhis["P"]=post("p");
            $obhis["MP"]=post("mp");
            $obhis["EDC"]=post("edc");
            $obhis["ACH"]=post("ach");
            $obhis["FH"]=post("fh");
            $obhis["FHR"]=post("fhr");
            $obhis["Pelvic_exam"]=post("pelvic_exam");

            $obhistory = db_insert("ob_history",$obhis);
            $obhisid = $obhistory["insert_id"];

            $appoint["patientID"]=$pid;
            $appoint["scheduleID"]="1";
            $appoint["servicesID"]="3";
            $appoint["applicationDate"]= date("Y-m-d");
            $appoint["Status"]="completed";

            $appointr = db_insert("appointment",$appoint);
            $appid = $appointr["insert_id"];

            json_response(["code"=>200, "message"=>"success"]);


        }

    }
?>