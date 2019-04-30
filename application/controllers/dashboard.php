<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function index()
    {
        if (isset($_SESSION['LoginType'])) {

            if ($_SESSION['LoginType'] == "JOBSEEKER")
            {
                // checking qualifications are entered
                $this->load->model('m_GetDetails');
                $details = $this->m_GetDetails->JSQualification($_SESSION['LoggedInRegisterNo']);
                if (!$details) {
                    $this->session->set_userdata('details',FALSE);
                    redirect('Educational_Qualification','refresh');
                }
                else {
                    $this->session->set_userdata('details',TRUE);
                    $this->load->view('dash_jobseeker');                                  
                }
                // $this->load->view('dashboard/dash_jobseeker');
                              
            }
                
            else if($_SESSION['LoginType'] == "COMPANY")
            {
                $this->load->view('dash_Company');
                // $this->load->view('dashboard/dash_Company');
                
                // $this->load->model('M_JobOrInternship');

                // $id = $this->session->userdata("LoggedInRegisterNo");
                // $job = $this->M_JobOrInternship->GetJobDataOf($id);
                // $this->load->view('job',$job);

            }

            else
                redirect('Login','refresh');
        }
        else {
            redirect('Login','refresh');            
        }
    }

    
    



}
/* End of file dashboard.php */



