<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Educational_Qualification extends CI_Controller{

// START of main function 
    function index()
    {
        if (isset($_POST['action'])) {
            $s = $this->AddData();
            if ($s) {
                echo "Success";
            } else {
                echo "fail";
            }
            
        } else {
            $this->load->view('educational_qualification');
        }
    }
// END of main function


// START of function AddData
    function AddData()
    {
        $this->load->model('M_Qualification');

        if ($_POST['SSLC_Board']) {
            $education['SSLC_Board'] = $_POST['SSLC_Board'];
            $education['SSLC_Mark'] = $_POST['SSLC_Mark'];
            // $education['SSLC_Certificate'] = $_POST['SSLC_Certificate'];
        // } else {

        }
        
        if ($_POST['HS_Board']) {
            $education['HS_Board'] = $_POST['HS_Board'];
            $education['HS_Mark'] = $_POST['HS_Mark'];
            // $education['HS_Certificate'] = $_POST['HS_Certificate'];  
        // } else {

        }

        if ($_POST['Diploma_Subject1']) {
            $n = 1;

            do {
                if ($n == 1) {
                    $education['Diploma_Subject'] = $_POST['Diploma_Subject1'];
                    $education['Diploma_University'] = $_POST['Diploma_University1'];
                    $education['Diploma_Mark'] = $_POST['Diploma_Mark1'];
                    // $education['Diploma_Certificate'] = $_POST['Diploma_Certificate1'];           
                }
                else {
                    $education['Diploma_Subject'] = $education['Diploma_Subject'] . ", " . $_POST[$index1];
                    $education['Diploma_University'] = $education['Diploma_University'] . ", " . $_POST[$index2];
                    $education['Diploma_Mark'] = $education['Diploma_Mark'] . ", " . $_POST[$index3];
                    // $education['Diploma_Certificate'] = $education['Diploma_Certificate'] . ", " . $_POST[$index4];
                }
                $n++;
                $index1 = "Diploma_Subject" . $n;
                $index2 = "Diploma_University" . $n;
                $index3 = "Diploma_Mark" . $n;
                $index4 = "Diploma_Certificate" . $n;

            } while (isset($_POST[$index1]) && $_POST[$index1]);

        // } else {
        }


        if ($_POST['UG_Subject1']) {
            $n = 1;

            do {
                if ($n == 1) {
                    $education['UG_Subject'] = $_POST['UG_Subject1'];
                    $education['UG_University'] = $_POST['UG_University1'];
                    $education['UG_Mark'] = $_POST['UG_Mark1'];
                    // $education['UG_Certificate'] = $_POST['UG_Certificate1'];           
                }
                else {
                    $education['UG_Subject'] = $education['UG_Subject'] . ", " . $_POST[$index1];
                    $education['UG_University'] = $education['UG_University'] . ", " . $_POST[$index2];
                    $education['UG_Mark'] = $education['UG_Mark'] . ", " . $_POST[$index3];
                    // $education['UG_Certificate'] = $education['UG_Certificate'] . ", " . $_POST[$index4];
                }
                $n++;
                $index1 = "UG_Subject" . $n;
                $index2 = "UG_University" . $n;
                $index3 = "UG_Mark" . $n;
                $index4 = "UG_Certificate" . $n;

            } while (isset($_POST[$index1]) && $_POST[$index1]);
            
        // } else {
        }


        if ($_POST['PG_Subject1']) {
            $n = 1;

            do {
                if ($n == 1) {
                    $education['PG_Subject'] = $_POST['PG_Subject1'];
                    $education['PG_University'] = $_POST['PG_University1'];
                    $education['PG_Mark'] = $_POST['PG_Mark1'];
                    // $education['PG_Certificate'] = $_POST['PG_Certificate1'];           
                }
                else {
                    $education['PG_Subject'] = $education['PG_Subject'] . ", " . $_POST[$index1];
                    $education['PG_University'] = $education['PG_University'] . ", " . $_POST[$index2];
                    $education['PG_Mark'] = $education['PG_Mark'] . ", " . $_POST[$index3];
                    // $education['PG_Certificate'] = $education['PG_Certificate'] . ", " . $_POST[$index4];
                }
                $n++;
                $index1 = "PG_Subject" . $n;
                $index2 = "PG_University" . $n;
                $index3 = "PG_Mark" . $n;
                $index4 = "PG_Certificate" . $n;

            } while (isset($_POST[$index1]) && $_POST[$index1]);
            
        // } else {
        }

        if ($_POST['MPhil_Subject1']) {
            $n = 1;

            do {
                if ($n == 1) {
                    $education['MPhil_Subject'] = $_POST['MPhil_Subject1'];
                    $education['MPhil_University'] = $_POST['MPhil_University1'];
                    $education['MPhil_Mark'] = $_POST['MPhil_Mark1'];
                    // $education['MPhil_Certificate'] = $_POST['MPhil_Certificate1'];           
                }
                else {
                    $education['MPhil_Subject'] = $education['MPhil_Subject'] . ", " . $_POST[$index1];
                    $education['MPhil_University'] = $education['MPhil_University'] . ", " . $_POST[$index2];
                    $education['MPhil_Mark'] = $education['MPhil_Mark'] . ", " . $_POST[$index3];
                    // $education['MPhil_Certificate'] = $education['MPhil_Certificate'] . ", " . $_POST[$index4];
                }
                $n++;
                $index1 = "MPhil_Subject" . $n;
                $index2 = "MPhil_University" . $n;
                $index3 = "MPhil_Mark" . $n;
                $index4 = "MPhil_Certificate" . $n;

            } while (isset($_POST[$index1]) && $_POST[$index1]);
            
        // } else {
        }

        if ($_POST['Doctorate_Subject1']) {
            $n = 1;

            do {
                if ($n == 1) {
                    $education['PHD_Subject'] = $_POST['Doctorate_Subject1'];
                    $education['PHD_University'] = $_POST['Doctorate_University1'];
                    // $education['PHD_Certificate'] = $_POST['Doctorate_Certificate1'];           
                }
                else {
                    $education['PHD_Subject'] = $education['PHD_Subject'] . ", " . $_POST[$index1];
                    $education['PHD_University'] = $education['PHD_University'] . ", " . $_POST[$index2];
                    // $education['PHD_Certificate'] = $education['PHD_Certificate'] . ", " . $_POST[$index4];
                }
                $n++;
                $index1 = "Doctorate_Subject" . $n;
                $index2 = "Doctorate_University" . $n;
                $index4 = "Doctorate_Certificate" . $n;

            } while (isset($_POST[$index1]) && $_POST[$index1]);
            
        // } else {
        }

        if ($_POST['Other_Courses1']) {
            $n = 1;

            do {
                if ($n == 1) {
                    $education['Other_Courses'] = $_POST['Other_Courses1'];
                    // $education['Other_Courses_Certificate'] = $_POST['Other_Courses_Certificate1'];           
                }
                else {
                    $education['Other_Courses'] = $education['Other_Courses'] . ", " . $_POST[$index1];
                    // $education['Other_Courses_Certificate'] = $education['Other_Courses_Certificate'] . ", " . $_POST[$index4];
                }
                $n++;
                $index1 = "Other_Courses" . $n;
                $index4 = "Other_Courses_Certificate" . $n;

            } while (isset($_POST[$index1]) && $_POST[$index1]);
            
        // } else {
        }
        
        $interest['Place'] = $_POST['Places'];
        $interest['Time'] = ArrayToString($_POST['Times']);
        $interest['Hobbies'] = $_POST['Hobbies'];
        $interest['Extra_Achievements'] = $_POST['Extras'];


        foreach ($_POST as $x => $y) {
            echo $x . ' = ';

            if ($x == 'Times') {
                $my_choices = $_POST['Times'];
                for ($i=0; $i < count($my_choices); $i++) { 
                    echo $my_choices[$i] . " , ";
                }
                echo '<br>';
                continue;
            }

            echo $y . '<br>';
        }


        if (isset($education)) {
            foreach ($education as $x => $y) {
                echo $x . ' = ' . $y . '<br>';
            }
        } else {
            echo "Educational qualifications are not set";
        }
        

        if (isset($interest)) {
            foreach ($interest as $x => $y) {
                echo $x . ' = ' . $y . '<br>';            
            }
        } else {
            echo "Interest and hobbies are not set";
        }
        
        
        $adding = $this->M_Qualification->AddDataToDB($education,$interest);

        if ($adding) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
// END of function AddData


}


?>