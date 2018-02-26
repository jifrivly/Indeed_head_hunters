<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class M_Qualification extends CI_Model{

// START of function AddDataToDB
    function AddDataToDB($education,$interest)
    {
        foreach ($education as $x => $y) {
            $array1[$x] = $y; 
        }

        $query1 = $this->db->insert('tbl_qualification',$array1);

        foreach ($interest as $x => $y) {
            $array2[$x] = $y; 
        }

        $query2 = $this->db->insert('tbl_interest',$array2);

        if ($query1 && $query2) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
// END of function AddDataToDB 
   




}