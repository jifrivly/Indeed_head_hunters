<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Company extends CI_Controller 
{
    function Registration()
    {
        $this->load->library('form_validation');

        $project = array(
            'reg_js' => "COMPANY Registration Form ",
            
        );
        
        if (isset($_POST['action'])) {
    // SERVER SIDE FORM VALIDATION IS HERE
            $this->CreateCompany();
            
            redirect('Login','refresh');
            
        } else {
            $this->load->view('reg_company',$project);
            // $this->load->view('elapsed_time');
        }
        
    }

    private function CreateCompany()
    {
        $this->load->model('M_Company');
        $this->load->model('M_Tools');        

        if (isset($_POST['name'])) {            
            foreach ($_POST as $x => $y) {
                if ($x=='password') {
                    $details[$x] = md5($y);
                    break;
                }
                $details[$x] = $y;
            }
            $details['reg_no'] = $this->M_Tools->createUniqueId('tbl_company','Register_No');

            $result = $this->M_Company->addCompany($details);
            echo "SuccessFully submitted <br>";
            if ($result) {
                echo "Successfully created <br>";
            } else {
                echo "Some Error on DB <br>";
            }
        } 
        else {
            echo "You not created";
        }

        testArray($_POST);
        testArray($details);
        
    }

    
    

}



?>