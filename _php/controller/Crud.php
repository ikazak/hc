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

    }

    
?>