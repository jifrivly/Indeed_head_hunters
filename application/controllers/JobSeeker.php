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
            echo "SuccessFull";
            echo "<br> Name : " . $_POST['first_name'] . $_POST['last_name'];
            echo "<br>";

            foreach ($_POST as $x => $y) {
                echo $x . "=" . $y . "<br>";
                if ($x=='password') {
                    $details[$x] = md5($y);
                    break;
                }
                $details[$x] = $y;
            }
            $details['reg_no'] = $this->M_Tools->creatingRegisterNumber('tbl_job_seeker');

            echo "<br><br>";
            foreach ($details as $x => $y) {
                echo $x . "=" . $y . "<br>";
            }


            $result = $this->M_JobSeeker->addJobSeeker($details);

            if ($result) {
                echo "Successfully created";
            } else {
                echo "Some Error on DB";
            }
            
            
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