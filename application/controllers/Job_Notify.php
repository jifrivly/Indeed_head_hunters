<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_Notify extends CI_Controller {

    public function index()
    {
        if ($_SESSION['LoginType'] == "JOBSEEKER") {
            // echo $_SESSION['LoggedInRegisterNo'] . "<br>";
            // testArray($_SESSION['jobs']);

            if ($this->email()) {
                echo "Successfully send";
                unset($_SESSION['jobs']);
            }
            else {
                echo "Sorry cant send";
                unset($_SESSION['jobs']);                            
            }
            redirect('dashboard','refresh');
            
            
        }
        elseif ($_SESSION['LoginType'] == "COMPANY") {
            // echo $_SESSION['CurrentJobID'] . "<br>";
            // testArray($_SESSION['jobseekers']);

            // testArray($_SESSION);

            if ($this->email()) {
                echo "Successfully send";
            }
            else {
                echo "Sorry cant send";
            }
            unset($_SESSION['CurrentJobID']);
            unset($_SESSION['jobseekers']);
            
            redirect('dashboard','refresh');
        }
        else {
            redirect('Login','refresh');            
        }

    }

    private function email()
    {
        
        $this->load->model('M_GetDetails');
        
        $this->load->library('email');
        $from = 'headhunters.indeed@email.jifrivly.com';

        if ($_SESSION['LoginType'] == "JOBSEEKER") {

            $to = $_SESSION['LoggedInUserName'];
            $count = count($_SESSION['jobs']);
            $subject = "You have $count new jobs notification";
            $message = ArrayToString($_SESSION['jobs']) . 
                "<br> please click the link to see details <a href='http://192.168.43.212/indeed1/index.php/dashboard'>details</a>";

            $this->email->from($from, 'INDEED HEADHUNTERS CONSULTANCY TEAM');
            $this->email->to($to);

            $this->email->subject($subject);
            $this->email->message($message);
            
            if ($this->email->send()) {
                return TRUE;
            }
            else {
                return FALSE;
            }
            
            echo $this->email->print_debugger();
            
        }
        if ($_SESSION['LoginType'] == "COMPANY") {
            $i = 0;
            foreach ($_SESSION['jobseekers'] as $key => $value) {
                $a = $this->M_GetDetails->JobSeeker($value);
                if ($a) {
                    $to[$i] = $a['email'];
                    $i++;
                } else {
                    continue;
                }
            }

            $subject = "You have a new job notification";
            $message = "You have a notification of job vacancy of job id = " . $_SESSION['CurrentJobID']
             . "<br> please click the link to see details <a href='http://192.168.43.212/indeed1/index.php/dashboard'>details</a>";

            $this->email->from($from, 'INDEED HEADHUNTERS CONSULTANCY TEAM');
            $this->email->to($to);

            $this->email->subject($subject);
            $this->email->message($message);
            
            if ($this->email->send()) {
                return TRUE;
            }
            else {
                echo $this->email->print_debugger();
                return FALSE;
            }
            
            
        }
    }
}

/* End of file Job_Notify.php */

