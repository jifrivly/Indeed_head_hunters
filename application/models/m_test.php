<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Test extends CI_Model 
{
    function GetTestQuestions()
    {
        $q = $this->db->query("SELECT * FROM tbl_test");
        $questions = $q->result_array();

        return $questions;
    }

    function ReadResult($id)
    {
        $data = array(
            'Register_No' => $id,
            'mark' => 25,
        );
        $query = $this->db->insert('tbl_test_result',$data);
        
        if ($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}


/* End of file m_test.php */
?>