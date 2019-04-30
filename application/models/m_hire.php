<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Hire extends CI_Model
{
    function hire($id)
    {
        $jobseeker = $this->db->query("SELECT * FROM tbl_job_seeker WHERE Register_No = '$id'");
        if ($jobseeker->num_rows()>0) {
            // echo $jobseeker->num_rows();
            // testArray($jobseeker);
            // testArray($jobseeker->result_array());

            $qualification = $this->db->query("SELECT * FROM tbl_qualification WHERE Register_No = '$id'");
            $interest = $this->db->query("SELECT * FROM tbl_interest WHERE Register_No = '$id'");

            if ($qualification->num_rows()>0 && $interest->num_rows()>0) {
                $a = $qualification->result_array();
                $qua_data = $a[0];
                // testArray($qualification);
                testArray($qua_data);

            
                if (isset($qua_data['SSLC_Board'])) {
                    $sslc = array(
                        'board' => $qua_data['SSLC_Board'],
                        'mark' => $qua_data['SSLC_Mark'],
                    );
                    
                }
                else {
                    $sslc = FALSE;
                }
                    
                if (isset($qua_data['HS_Board'],$qua_data['HS_Mark'])) {
                    $hs = array(
                        'board' => $qua_data['HS_Board'],
                        'mark' => $qua_data['HS_Mark'],
                    );
                }
                else {
                    $hs = FALSE;
                }

                if (isset($qua_data['Diploma_Subject'],$qua_data['Diploma_University'],$qua_data['Diploma_Mark'])) {
                    $subject = SplitAndRetrieve($qua_data['Diploma_Subject']);
                    $university = SplitAndRetrieve($qua_data['Diploma_University']);
                    $mark = SplitAndRetrieve($qua_data['Diploma_Mark']);

                    foreach ($subject as $dipcount => $value) {
                    }
                    for ($i=0; $i <= $dipcount; $i++) { 
                        $diploma[$i] = array(
                            'subject' => $subject[$i],
                            'university' => $university[$i],
                            'mark' => $mark[$i],
                        );
                    }
                }
                else {
                    $diploma = FALSE;
                }

                if (isset($qua_data['UG_Subject'],$qua_data['UG_University'],$qua_data['UG_Mark'])) {
                    $subject = SplitAndRetrieve($qua_data['UG_Subject']);
                    $university = SplitAndRetrieve($qua_data['UG_University']);
                    $mark = SplitAndRetrieve($qua_data['UG_Mark']);

                    foreach ($subject as $ugcount => $value) {
                    }
                    for ($i=0; $i <= $ugcount; $i++) { 
                        $ug[$i] = array(
                            'subject' => $subject[$i],
                            'university' => $university[$i],
                            'mark' => $mark[$i],
                        );
                    }
                }
                else {
                    $ug = FALSE;
                }
                
                if (isset($qua_data['PG_Subject'],$qua_data['PG_University'],$qua_data['PG_Mark'])) {
                    $subject = SplitAndRetrieve($qua_data['PG_Subject']);
                    $university = SplitAndRetrieve($qua_data['PG_University']);
                    $mark = SplitAndRetrieve($qua_data['PG_Mark']);

                    foreach ($subject as $pgcount => $value) {
                    }
                    for ($i=0; $i <= $pgcount; $i++) { 
                        $pg[$i] = array(
                            'subject' => $subject[$i],
                            'university' => $university[$i],
                            'mark' => $mark[$i],
                        );
                    }
                }
                else {
                    $pg = FALSE;
                }

                if (isset($qua_data['Mphill_Subject'],$qua_data['Mphill_University'],$qua_data['Mphill_Mark'])) {
                    $subject = SplitAndRetrieve($qua_data['Mphill_Subject']);
                    $university = SplitAndRetrieve($qua_data['Mphill_University']);
                    $mark = SplitAndRetrieve($qua_data['Mphill_Mark']);

                    foreach ($subject as $mphillcount => $value) {
                    }
                    for ($i=0; $i <= $mphillcount; $i++) { 
                        $mphill[$i] = array(
                            'subject' => $subject[$i],
                            'university' => $university[$i],
                            'mark' => $mark[$i],
                        );
                    }
                }
                else {
                    $mphill = FALSE;
                }

                if (isset($qua_data['PHD_Subject'],$qua_data['PHD_University'])) {
                    $subject = SplitAndRetrieve($qua_data['PHD_Subject']);
                    $university = SplitAndRetrieve($qua_data['PHD_University']);

                    foreach ($subject as $phdcount => $value) {
                    }
                    for ($i=0; $i <= $phdcount; $i++) { 
                        $phd[$i] = array(
                            'subject' => $subject[$i],
                            'university' => $university[$i],
                        );
                    }
                }
                else {
                    $phd = FALSE;
                }

                if (isset($qua_data['Other_Courses'])) {
                    $subject = SplitAndRetrieve($qua_data['Other_Courses']);

                    foreach ($subject as $othercoursecount => $value) {
                    }
                    for ($i=0; $i <= $othercoursecount; $i++) { 
                        $othercourse[$i] = array(
                            'subject' => $subject[$i],
                        );
                    }
                }
                else {
                    $othercourse = FALSE;
                }

                if ($sslc)
                    testArray($sslc);
                if ($hs)
                    testArray($hs);
                if ($diploma)
                    for ($i=0; $i <= $dipcount; $i++) {
                        echo $i;
                        testArray($diploma[$i]);
                    }
                if ($ug)
                    for ($i=0; $i <= $ugcount; $i++) {
                        echo $i;
                        testArray($ug[$i]);
                    }
                if ($pg)
                    for ($i=0; $i <= $pgcount; $i++) {
                        echo $i;
                        testArray($pg[$i]);
                    }
                if ($mphill)
                    for ($i=0; $i <= $mphillcount; $i++) {
                        echo $i;
                        testArray($mphill[$i]);
                    }
                if ($phd)
                    for ($i=0; $i <= $phdcount; $i++) {
                        echo $i;
                        testArray($phd[$i]);
                    }
                if ($othercourse)
                    for ($i=0; $i <= $othercoursecount; $i++) {
                        echo $i;
                        testArray($othercourse[$i]);
                    }
                
                $qualifications = array(
                    $sslc,
                    $hs,
                    $diploma,
                    $ug,
                    $pg,
                    $mphill,
                    $phd,
                    $othercourse,
                );

                testArray($qualifications);



                $b = $interest->result_array();
                $int_data = $b[0];
                // testArray($interest);
                testArray($int_data);
                
                if (isset($int_data['Place'])) {
                    $place = SplitAndRetrieve($int_data['Place']);
                }
                else {
                    $place = FALSE;
                }

                if (isset($int_data['Time'])) {
                    $time = SplitAndRetrieve($int_data['Time']);
                }
                else {
                    $time = FALSE;
                }

                if (isset($int_data['Hobbies'])) {
                    $hobby = SplitAndRetrieve($int_data['Hobbies']);
                }
                else {
                    $hobby = FALSE;
                }

                if (isset($int_data['Extra_Achievements'])) {
                    $achievement = SplitAndRetrieve($int_data['Extra_Achievements']);
                }
                else {
                    $achievement = FALSE;
                }

                $interests = array(
                    $place,
                    $time,
                    $hobby,
                    $achievement,
                );

                testArray($interests);

                    
            } else {
                $this->session->set_flashdata('error', "You doesn't Entered your details");
                return FALSE;
            }
        
        } else {
            $this->session->set_flashdata('error','User not exist');
            return FALSE;
        }
        
        $q = $this->db->query("SELECT * FROM tbl_job ");
        // testArray($q);
        // testArray($q->result_array());
    }

    
}



/* End of file m_hire.php */
