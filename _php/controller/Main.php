<?php


//defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends Yros{

    public function __construct() {
        parent::__construct(); 
        $YROS = &Yros::get_instance();
    }

    // Main controller is YROS index controller, you can add functions but don't delete any (might cause system errors).



    function add(){
        view_page("add.php");
    }
    function welcome_page(){
        view_page("welcome.php");
    }

    function viewpage(){
        view_page("viewpage.php");
    }

    function residentprofile(){
        view_page("residentprofile.php");
    }

    function manageservices(){
        view_page("manageservices.php");
    }


    function medicineinventory(){
        view_page("medicineinventory.php");
    }
    
    function appointment(){
        view_page("appointment.php");
    }

    function medicalhistory(){
        view_page("medicalhistory.php");
    }


   
    function page_not_found(){
        view_error("page_not_found.php");
    }
    

    function error_page(){
        view_error("error_page.php");
    }

    function sample_page(){
        echo "Hello, this is a sample page";
    }
    
    function index(){
        $view = get("page");
        view_page($view);
    }

    function viewlogs(){
        display_views_tracked_logs();
    }

    

    

    
}
?>
