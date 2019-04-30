<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function JobDatasForCompany($company_id)
{
    $object =& get_instance();

    $query = $object->db->select('*')
                ->from('tbl_job')
                ->where('Register_No',$company_id)
                ->get();
                        
    $data = $query->result_array();

    // testArray($data);
    
    return $data;
}

function JobDatasForJobSeeker($jobseeker_id)
{
    $object =& get_instance();
    $query = $object->db->select('*')
                ->from('tbl_job')
                // ->where(
                //     '',select (''))
                ->get();
    $data = $query->result_array();
    return $data;
}

function JobCountOf($jobseeker_id)
{
    $object =& get_instance();
    $query = $object->db->select('*')
                ->from('tbl_job')
                // ->where(
                //     '',select (''))
                ->get();
    $count = $query->num_rows();

    return $count;
}


/* End of file job_helper.php */
