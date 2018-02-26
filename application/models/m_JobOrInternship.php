<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_JobOrInternship extends CI_Model 
{
    function addJob($details)
    {
        // $data = array(
        //     'Job_Id'            =>  $details['Job_Id'],
        //     // 'Register_No'       =>  $details['Register_No'],
        //     'Job_Title'         =>  $details['Job_Title'],
        //     'Job_Types'         =>  $details['Job_Type'],
        //     'Job_Times'         =>  $details['Job_Times'],
        //     'Job_Places'        =>  $details['Job_Places'],
        //     'Job_Deadline'      =>  $details['Job_Deadline'],
        //     'Job_Salary'        =>  $details['Salary'],
        //     'Job_Vacancy'       =>  $details['Vacancy'],
        //     'Job_Sex'           =>  $details['Sex'],
        //     'Job_Age'           =>  $details['Age'],
        //     'Job_Qualifications'=>  $details['Education'],
        //     'Job_Licenses'      =>  $details['Licenses'],
        //     'Job_Languages'     =>  $details['Languages'],
        //     'Job_Experience'    =>  $details['Field'],
        //     'Experience_Year'   =>  $details['Year'],
        // );

        $query = $this->db->insert('tbl_job',$details);

        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }



}


/* End of file filename.php */
?>