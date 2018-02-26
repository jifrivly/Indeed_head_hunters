<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tools extends CI_Model{


    function createUniqueId($tbl_name,$key)
    {
        $count = $this->db->count_all($tbl_name);
        $unique = 100001 + $count;

        while (1) {
            if ($tbl_name == 'tbl_job_seeker') {
                $reg_no = 'JS_' . $unique ;
            }
            
            
            if ($tbl_name == 'tbl_company') {
                $reg_no = 'COM_' . $unique ;
            }
            
            if ($tbl_name == 'tbl_job') {
                $reg_no = 'JOB_' . $unique ;   
            }

            $q = " SELECT * FROM $tbl_name WHERE $key = '$reg_no' ";
            $result = $this->db->query($q);
            if($result->num_rows()>0)
                $unique++;
            else
                return $reg_no;
        }
        
    }



}


?>