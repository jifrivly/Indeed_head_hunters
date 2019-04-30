<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Job_or_Internship extends CI_Controller
{
    function Post()
    {
        if (isset($_SESSION['LoginState'] , $_SESSION['LoginType']) && $_SESSION['LoginType'] == 'COMPANY' )
        {
            if (isset($_POST['post'])) {
                // SERVER SIDE FORM VALIDATION IS HERE
                $create = $this->CreateJob();
                if ($create) {
                    echo "Successfully created <br>";
                    redirect('Hire','refresh');
                }
                else {
                    echo "<b>Sorry!<b> Job is not posted because Some Error on DB <br> please go back and try again!";
                }
                
            } else {
                $this->load->view('job_or_internship_post');
                // $this->load->view('elapsed_time');
            }
        }
        else {
            echo    "Sorry! Please Login as Company to upload Jobs !" . 
                    '<script>
                        $(document).ready(function () {
                            alert("Sorry! Please Login as Company to upload Jobs !"); 
                        });
                    </script>';
            redirect('Login','refresh');
        }
    }

    private function CreateJob()
    {
        
        $this->load->model('M_JobOrInternship');
        $this->load->model('M_Tools');

        $details['Job_Id'] = $this->M_Tools->createUniqueId('tbl_job','Job_Id');
        $_SESSION['CurrentJobID'] = $details['Job_Id'];
        $details['Register_No'] = $_SESSION['LoggedInRegisterNo'];
        
        if ($_POST['Job_Title'])
            $details['Job_Title'] = $_POST['Job_Title'];

        if (isset($_POST['Job_Type']) && $_POST['Job_Type'])
            $details['Job_Types'] = ArrayToString($_POST['Job_Type']);

        if (isset($_POST['Job_Times']) && $_POST['Job_Times'])
            $details['Job_Times'] = ArrayToString($_POST['Job_Times']);
            
        if (isset($_POST['Job_Places']) && $_POST['Job_Places'])
            $details['Job_Places'] = ArrayToString($_POST['Job_Places']);

        if ($_POST['Job_Deadline'])
            $details['Job_Deadline'] = $_POST['Job_Deadline'];

        if ($_POST['Salary'])
            $details['Job_Salary'] = $_POST['Salary'];

        if ($_POST['Vacancy'])
            $details['Job_Vacancy'] = $_POST['Vacancy'];

        if (isset($_POST['Sex']))
            $details['Job_Sex'] = $_POST['Sex'];

        if ($_POST['Age'])
            $details['Job_Age'] = $_POST['Age'];

        if (isset($_POST['Education']) && $_POST['Education'])
            $details['Job_Qualifications'] = ArrayToString($_POST['Education']);            

        if ($_POST['Licenses'])
            $details['Job_Licenses'] = $_POST['Licenses'];
            
        if (isset($_POST['Languages']) && $_POST['Languages'])
            $details['Job_Languages'] = ArrayToString($_POST['Languages']);

        if ($_POST['Field'])
            $details['Job_Experience'] = $_POST['Field'];

        if ($_POST['Year'])
            $details['Experience_Year'] = $_POST['Year'];

        if ($_POST['Description']) {
            $details['Job_Description'] = $_POST['Description'];
        }
            
        
        $added = $this->M_JobOrInternship->addJob($details);

        if ($added) {
            return TRUE;
        } else {
            return FALSE;
        }
        
        // testArray($_POST);
        // testArray($details);
    }

    

}

    /* End of file Job_or_Internship.php */
    
?>