<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Log extends Yros{

        public function __construct() {
            parent::__construct();
            $YROS = &Yros::get_instance();
            //Add initial codes here...
        }


        function index(){
            echo 'Hello Yros user. This is Log controller';
        }

        function register(){
            view_page('register.php');
        }

        function loginpage(){
            if(isset($_SESSION['blocked']) && $_SESSION['blocked']==1){
                $this->attempts($_SESSION['endtime']);
            }
            view_page('login.php');
        }

        
        function attempts($end){      
            $sql2 = db_set_query("select timestampdiff(SECOND, now(), '$end')%60 'sec', timestampdiff(SECOND, now(), '$end')/60 'min'")['first_row'];
            $_SESSION['min'] = $sql2['min'];
            $_SESSION['sec'] = $sql2['sec'];
            //echo $_SESSION['min'];
            //back_to_previous_page();
        }

        function unblock(){
            unset($_SESSION['blocked']);
            unset($_SESSION['endtime']);
            unset($_SESSION['attemps']);
            redirect("log/loginpage");
        }

        function login(){
            //unset($_SESSION['blocked']);
            if(isset($_SESSION['blocked']) && $_SESSION['blocked']==1){
                $this->attempts($_SESSION['endtime']);
                back_to_previous_page();
                exit;
            }
            set_validation('email','email', 'required');
            set_validation('password','password','required');

            if(validation_failed()){
                back_to_previous_page(save_input_values);
            }
            $user = post('email');
            $pass = post('password');

            $sql = 'select * from hc_user where hc_email = ? and hc_password = ?';
            $param = [$user,$pass];
            $result = db_set_query($sql,$param)['first_row'];
            if(empty($result)){
                if(isset($_SESSION['attemps'])){
                    $attemps = get_session_data("attemps");
                    $attemps += 1;
                    set_session_data("attemps", $attemps);

                }else{
                    set_session_data("attemps", 1);
                }
                //$_SESSION['attemps'] =5;
                if($_SESSION['attemps'] >= 3){
                    $sql1 = db_set_query("select now() as time")['first_row'];
                    $date_now = new DateTime($sql1['time']);
                    $date_now = $date_now->modify("+30 seconds");
                    $end = $date_now->format("Y-m-d H:i:s");
                    $_SESSION['endtime'] = $end;
                    $_SESSION['blocked'] = 1;

                    $this->attempts($end);
                    back_to_previous_page();
                    exit;
                }

                
                back_to_previous_page();
            }
            else{
                redirect_to('page/index');
            }

            




        }
    }
?>