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
            $this->createCompany();
        } else {
            $this->load->view('reg_company',$project);
            $this->load->view('elapsed_time');
        }
        
    }

    function createCompany()
    {
        $this->load->model('M_Company');
        $this->load->model('M_Tools');        

        if (isset($_POST['name'])) {
            echo "SuccessFull";
            foreach ($_POST as $x => $y) {
                echo $x . " = " . $y . "<br>";
                if ($x=='password') {
                    $details[$x] = md5($y);
                    break;
                }
                $details[$x] = $y;
            }
            $details['reg_no'] = $this->M_Tools->creatingRegisterNumber('tbl_company');

            echo "<br><br>";
            foreach ($details as $x => $y) {
                echo $x . " = " . $y . "<br>";
            }

            $result = $this->M_Company->addCompany($details);

            if ($result) {
                echo "Successfully created";
            } else {
                echo "Some Error on DB";
            }


        } 
        else {
            
        }
        
    }

    public function DashBoard()
	{
		$this->load->view('dash_Company');
		$this->load->view('elapsed_time');

	}


}



?>