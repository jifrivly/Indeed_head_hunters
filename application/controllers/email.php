<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller 
{
    function index()
    {
        // if (isset($status))
        //         echo $status;
            // echo $this->session->flashdata('email_sent');
        $this->load->view('send_mail');
    }
    function test()
    {
        if (isset($_POST['send'])) {
            
            $this->load->library('email');

            $this->email->from('headhunters.indeed@email.jifrivly.com', 'REQUITER');
            $this->email->to($_POST['to']);

            $this->email->subject($_POST['sub']);
            $this->email->message($_POST['msg']);

            // $this->SMTPOptions = array(
            //     'ssl' => array(
            //         'verify_peer' => FALSE,
            //         'verify_peer_name' => FALSE,
            //         'allow_self_signed' => TRUE,
            //     )
            // );
            
            if ($this->email->send()) {
                echo $status = "Email sent successfully.";
                echo $this->email->print_debugger();     
                // $this->session->set_flashdata("email_sent","Email sent successfully."); 
            }
            else {
                echo $status = "Error in sending Email.";
                echo $this->email->print_debugger();
                // $this->session->set_flashdata("email_sent","Error in sending Email."); 
            }
            // $this->email->send();    
            echo $this->email->print_debugger();
        } else {
            
            redirect('index','refresh');
            
        }
        
    }

    function send($to, $sub, $msg)
    {
        $this->load->library('email');

        $this->email->from('headhunters.indeed@email.jifrivly.com', 'INDEED HEADHUNTERS CONSULTANCY TEAM');
        $this->email->to($to);

        $this->email->subject($sub);
        $this->email->message($msg);

        if ($this->email->send()) {
            $status = $this->email->print_debugger();
            return TRUE;
        }
        else {
            $status = $this->email->print_debugger();
            return FALSE;
        }
        
    }

}


/* End of file filename.php */