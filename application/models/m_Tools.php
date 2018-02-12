<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tools extends CI_Model{


    function creatingRegisterNumber($tbl_name)
    {
        $count = $this->db->count_all($tbl_name);
        $unique = 100001 + $count;

        if ($tbl_name == 'tbl_job_seeker') {
            while (1) {
                $reg_no = 'JS_' . $unique ;

                $q = " SELECT * FROM tbl_job_seeker WHERE Register_no = '$reg_no' ";
                $result = $this->db->query($q);
                if($result->num_rows()>0)
                    $unique++;
                else
                    return $reg_no;
            }
        }


        if ($tbl_name == 'tbl_company') {
            while (1) {
                $reg_no = 'COM_' . $unique ;

                $q = " SELECT * FROM tbl_company WHERE Register_no = '$reg_no' ";
                $result = $this->db->query($q);
                if($result->num_rows()>0)
                    $unique++;
                else
                    return $reg_no;
            }
        }

    }



}


?>