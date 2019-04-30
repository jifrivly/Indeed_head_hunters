<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

    public function index()
    {
        $this->load->model('m_test');

        $questions = $this->m_test->GetTestQuestions();
        // testArray($questions);

        $i = 0;
        $j = 0;
        $k = 0;
        $l = 0;
        $m = 0;
        foreach ($questions as $key => $value) {
            if ($value['Question_Type'] == 'cope_under_pressure') {
                $type1[$i] = array(
                    'question' => $value['Question'],
                    'opt1' => $value['Option_1'],
                    'opt2' => $value['Option_2'],
                    'opt3' => $value['Option_3'],
                );
                $i++;
            }
            elseif ($value['Question_Type'] == 'people_or_person') {
                $type2[$j] = array(
                    'question' => $value['Question'],
                    'opt1' => 1,
                    'opt2' => 2,
                    'opt3' => 3,
                    'opt4' => 4,
                    'opt5' => 5,
                );
                $j++;
                
            }
            elseif ($value['Question_Type'] == 'OPTIMIST_OR_PESSIMIS') {
                $type3[$k] = array(
                    'question' => $value['Question'],
                    'opt1' => $value['Option_1'],
                    'opt2' => $value['Option_2'],
                    'opt3' => $value['Option_3'],
                );
                $k++;
                
            }
            elseif ($value['Question_Type'] == 'good_team_player') {
                $type4[$l] = array(
                    'opt1' => $value['Option_1'],
                    'opt2' => $value['Option_2'],
                    'opt3' => $value['Option_3'],
                    'opt4' => $value['Option_4'],
                );
                $l++;
                
            }
            else {
                $type5[$m] = array(
                    'question' => $value['Question'],
                    'opt1' => $value['Option_1'],
                    'opt2' => $value['Option_2'],
                    'opt3' => $value['Option_3'],
                );
                $m++;
            }
        }

        $data = array(
            'type1' => $type1,
            'type2' => $type2,
            'type3' => $type3,
            // $type4,
            'type5' => $type5,
        );

        if (isset($_POST['action'])) {
            $id = $_SESSION['LoggedInRegisterNo'];
            if ( $this->m_test->ReadResult($id))
            {
                redirect('dashboard','refresh');
            }
            else {
                echo "test failed";
            }
            
        } else {
            $this->load->view('test/test_page', $data); 
        }
        
        // testArray($array);
        

    }

}

/* End of file test.php */
