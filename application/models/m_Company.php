<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_Company extends CI_Model
    {
    // Function to add Company to DATABASE
        function addCompany($details)
        {
            $data = array(
                'Register_No'   =>  $details['reg_no'], 
                'Name'          =>  $details['name'],
                'Description'   =>  $details['description'],
                'Company_Type'  =>  $details['company_type'],
                'Address'       =>  $details['address'], 
                'Country'       =>  $details['country'], 
                'State'         =>  $details['state'], 
                'District'      =>  $details['district'], 
                'City'          =>  $details['city'], 
                'Pin_Code'      =>  $details['pincode'], 
                'Email'         =>  $details['email'],
                'M_Number'      =>  $details['mobile'],
                'Web_Site'      =>  $details['website'],
                'Person_Name'   =>  $details['person_name'],
                'Person_Email'  =>  $details['person_email'],
                'Person_Number' =>  $details['person_mobile'],
                'User_Name'     =>  $details['user_name'],
                'secure'        =>  $details['password'],
            );

            $query = $this->db->insert('tbl_company',$data);

            if ($query) {
                return TRUE;
            } else {
                return FALSE;
            }
        }


    // @Deprecated
        // function getCompanyByUserName($username)
        // {
        //     $q = "SELECT * FROM tbl_company WHERE user_name = '$username'";
        //     $result = $this->db->query($q);

        //     if ($result->num_rows()>0) {
        //         $datas = $result->row();
        //     } else {
        //         $datas = NULL;
        //     }

        //     return $datas;
        // }


        function getCompanyByData($column,$data)
        {
            $q = "SELECT * FROM tbl_company WHERE $column = '$data'";
            $result = $this->db->query($q);

            if ($result->num_rows()>0) {
                $datas = $result->row();
            } else {
                $datas = NULL;
            }

            return $datas;
        }


        function checkExistanceOfCompanyByData($column,$data)
        {
            $q = "SELECT * FROM tbl_company WHERE $column = '$data'";
            $result = $this->db->query($q);
            if ($result->num_rows()>0)
                return TRUE;
            else 
                return FALSE;
        }

        

    }

?>