<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller 
{
    function index()
    {
        $this->load->model('M_Login');    

        if (isset($_POST['submit'])) {
            $check = $this->M_Login->checking($_POST);

            if ($check) {
                
                $this->session->set_userdata("LoginState",$check->LoggedIn);
                $this->session->set_userdata("LoginType",$check->LoginType);

                if ($check->LoginType == "JOBSEEKER") {
                    // $this->session->set_userdata('LoggedInUserName',$check->Profile->Email);
                    // $this->session->set_userdata('LoggedInRegisterNo',$check->Profile->Register_No);

                    redirect('JobSeeker/DashBoard','refresh');

                } else if($check->LoginType == "COMPANY") {
                    // $this->session->set_userdata('LoggedInUserName',$check->Profile->User_Name);
                    // $this->session->set_userdata('LoggedInRegisterNo',$check->Profile->Register_No);
                    // $this->session->set_userdata('LoggedInName',$check->Profile->Name);
                    
                    redirect('Company/DashBoard','refresh');

                }
                else {
                    
                    redirect('Login','refresh');
                }

            }
            else {
                $error = array('error_msg' => "Sorry User name and Password doesn't match ! ",);
                $this->load->view('Login',$error);
            }

        } else {
            $this->load->view('Login');
        }
        
    }


}