<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller 
{
// START OF INDEX FUNCTION
    function index()
    {
        $this->load->model('M_Login');

        
        if (isset($_SESSION['LoginState'])) {
            redirect('DashBoard','auto');
            
        } else {
        
            // $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            // $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        
            if (isset($_POST['submit'])) {
                $check = $this->M_Login->checking($_POST);

                if ($check) {
                    
                    $this->session->set_userdata("LoginState",$check->LoggedIn);
                    $this->session->set_userdata("LoginType",$check->LoginType);

                    if ($check->LoginType == "JOBSEEKER") {
                        $this->session->set_userdata('LoggedInUserName',$check->Profile->Email);
                        $this->session->set_userdata('LoggedInRegisterNo',$check->Profile->Register_No);

                // checking qualifications are entered
                        $this->load->model('m_GetDetails');
                        $details = $this->m_GetDetails->JSQualification($_SESSION['LoggedInRegisterNo']);
                        $test = $this->m_GetDetails->test($_SESSION['LoggedInRegisterNo']);
                        if (!$details) {
                            redirect('Educational_Qualification','refresh');   
                        }
                        if (!$test) {
                            redirect('test','refresh');
                        }
                        else {
                            redirect('DashBoard','refresh');                                     
                        }


                    } else if($check->LoginType == "COMPANY") {
                        $this->session->set_userdata('LoggedInUserName',$check->Profile->User_Name);
                        $this->session->set_userdata('LoggedInRegisterNo',$check->Profile->Register_No);
                        $this->session->set_userdata('LoggedInName',$check->Profile->Name);
                        
                        redirect('DashBoard','refresh');

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
// END OF INDEX FUNCTION


}