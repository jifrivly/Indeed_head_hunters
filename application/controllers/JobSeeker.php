<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class JobSeeker extends CI_Controller
{
    function Registration()		
    {
        $this->load->library('form_validation');

        $project = array(
            'reg_js' => "JOB SEEKER Registration Form ",
        );
        
        if (isset($_POST['action'])) {
            // SERVER SIDE FORM VALIDATION IS HERE
                $this->createJobSeeker();
            }
        else {
            $this->load->view('reg_jobseeker',$project);
            $this->load->view('elapsed_time');
        }
    }

    function createJobSeeker()
    {
        
        $this->load->model('M_JobSeeker');
        $this->load->model('M_Tools');        

        if (isset($_POST['first_name'])) {
            foreach ($_POST as $x => $y) {
                if ($x=='password') {
                    $details[$x] = md5($y);
                    break;
                }
                $details[$x] = $y;
            }
            $details['reg_no'] = $this->M_Tools->createUniqueId('tbl_job_seeker','Register_No');

            
            $result = $this->M_JobSeeker->addJobSeeker($details);
            echo "Successfully submited <br>";

            if ($result) {
                echo "Successfully created <br>";
            } else {
                echo "Some Error on DB <br>";
            }
            testArray($_POST);
            echo "<br><br>";
            testArray($details);            
        }
        else {
            $this->load->view('elapsed_time');
            echo "Fail to register";
        }
        
    }

    public function DashBoard()
	{
		$this->load->view('dash_jobseeker');
		$this->load->view('elapsed_time');

	}


    
}

?>