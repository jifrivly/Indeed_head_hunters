<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_JobSeeker extends CI_Model
    {
        
    // Function to add Job Seeker to DATABASE
        function addJobSeeker($details)
        {
            $data = array(
                'Register_No'=> $details['reg_no'], 
                'Name' => $details['first_name'] . ' ' . $details['last_name'],
                'Gender' => $details['sex'],
                'DOB' => $details['dob'],
                'Address' => $details['address'], 
                'Country' => $details['country'], 
                'State' => $details['state'], 
                'District' => $details['district'], 
                'City' => $details['city'], 
                'Pin_Code' => $details['pincode'], 
                'Email' => $details['email'], 
                'M_Number' => $details['mobile'],
                'secure' => $details['password'],
            );


            $query = $this->db->insert('tbl_job_seeker',$data);

            if ($query) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

    // @Deprecated
        // function getJobSeekerByEmail($email)
        // {
        //     $q = "SELECT * FROM tbl_job_seeker WHERE email = '$email'";
        //     $result = $this->db->query($q);
        //     if ($result->num_rows()>0) {
        //         $datas = $result->row();
        //     } else {
        //         $datas = NULL;
        //     }
            
        //     return $datas;
        // }


        function getJobSeekerByData($column,$data)
        {
            $q = "SELECT * FROM tbl_job_seeker WHERE $column = '$data'";
            $result = $this->db->query($q);
            if ($result->num_rows()>0) {
                $datas = $result->row();
            } else {
                $datas = NULL;
            }
            
            return $datas;
        }


        function checkExistanceOfJobSeekerByData($column,$data)
        {
            $q = "SELECT * FROM tbl_job_seeker WHERE $column = '$data'";
            $result = $this->db->query($q);
            if ($result->num_rows()>0)
                return TRUE;
            else 
                return FALSE;
        }

        

    }
    
?>