<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model{

    function checking($data)
    {
        $this->load->model('M_JobSeeker');
        $this->load->model('M_Company');

        $username = $data['username'];
        $password = md5($data['password']);

        $q = "SELECT * FROM tbl_job_seeker WHERE email = '$username' AND secure = '$password'";
        $result = $this->db->query($q);

        if ($result->num_rows()>0) {
            $temp = new stdClass;

            $temp->LoggedIn = "TRUE";
            $temp->LoginType = "JOBSEEKER";
            $temp->Profile = $this->M_JobSeeker->getJobSeekerByData('email',$username);

            return $temp;
        } else {
            $q = "SELECT * FROM tbl_company WHERE user_name = '$username' AND secure = '$password'";
            $result = $this->db->query($q);

            if ($result->num_rows()>0) {
                $temp = new stdClass;
    
                $temp->LoggedIn = "TRUE";
                $temp->LoginType = "COMPANY";
                $temp->Profile = $this->M_Company->getCompanyByData('User_Name', $username);

                return $temp;
            }
            else {
                return FALSE;
            }
        }
        
    }



    // End of CLASS M_Login
}