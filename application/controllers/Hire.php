<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hire extends CI_Controller 
{
    function index()
    {
        $this->load->model('M_Hire');
        $this->load->model('M_GetDetails');

        if (isset($_SESSION['LoginType']) && $_SESSION['LoginType'] == "JOBSEEKER") {

            $id = $_SESSION['LoggedInRegisterNo'];

            $h = $this->Jobseeker($id);
            if ($h) {
                // testArray($h);           
                $_SESSION['jobs'] = $h;
                redirect('Job_Notify','refresh');
            }
            else {
                // echo "redirecting from hire.php";
                redirect('dashboard','refresh');
            }

        }
        elseif (isset($_SESSION['LoginType']) && $_SESSION['LoginType'] == "COMPANY") {
            $id = $_SESSION['CurrentJobID'];
            // $id = "JOB_100001";

            $h = $this->Job($id);
            if ($h) {
                // testArray($h);
                
                $_SESSION['jobseekers'] = $h;
                redirect('Job_Notify','refresh');
            }
            else {
                unset($_SESSION['CurrentJobID']);
                redirect('dashboard','refresh');
            }
            

        }
        else {
            redirect('Login','refresh');
        }
       
        
    }
 


    private function Jobseeker($id)
    {
        $i = 0;
        // echo "jobseeker <br>";
        $jobseeker = $this->M_GetDetails->jobseeker($id);
        // testArray($jobseeker);

        // echo "<hr> qualifications <br>";
        $qualification = $this->M_GetDetails->JSQualification($id);
        // testArray($qualification);

        // echo "<hr> interest <br>";
        $interest = $this->M_GetDetails->JSInterest($id);
        // testArray($interest);

        // echo "<hr> job id <br>";
        $joblist = $this->M_GetDetails->joblist();
        $job_id = $joblist->result_array();
        // testArray($job_id);

        // echo "<hr> <u>hiring started</u> <br>";
        foreach ($job_id as $x => $y) {
            
            $job = $this->M_GetDetails->job($y['Job_ID']);
            // testArray($job);

    // time condition checking
            if ($job['time']) {
                $all1 = array_search('All',$job['time']);
                $all2 = array_search('All',$interest['time']);
                if ($all1 === FALSE && $all2 === FALSE) {
                    
                    foreach ($job['time'] as $key => $value) {
                        $a = array_search($value,$interest['time']);

                        if ($a !== FALSE) {
                            $time_condition = TRUE;
                            break;
                        }
                        $time_condition = FALSE;
                    }
                }
                else {
                    $time_condition = TRUE;
                }
            } 
            else {
                $time_condition = TRUE;
            }

    // place condition checking
            if ($job['place']) {
                $all1 = array_search('All',$job['place']);
                $all2 = array_search('All',$interest['place']);
                if ($all1 === FALSE && $all2 === FALSE) {
                    
                    foreach ($job['place'] as $key => $value) {
                        $a = array_search($value,$interest['place']);

                        if ($a !== FALSE) {
                            $place_condition = TRUE;
                            break;
                        }
                        $place_condition = FALSE;
                    }
                }
                else {
                    $place_condition = TRUE;
                }
            } else {
                $place_condition = TRUE;
            }
            
    // checking deadline is finished or not
            if ($job['deadline']) {
                $date1 = date_create(date('Y-m-d'));
                $date2 = date_create($job['deadline']);
                
                if (time($date2 > $date1)) {
                    $deadline_condition = TRUE;
                } else {
                    $deadline_condition = FALSE;
                }
            } else {
                $deadline_condition = TRUE;
            }

    // checking sex condition
            if ($job['sex']) {
                if ($job['sex'] == 'All') {
                    $sex_condition = TRUE;
                } else {
                    if ($job['sex'] == $jobseeker['gender']) {
                        $sex_condition = TRUE;
                    }
                    else {
                        $sex_condition = FALSE;                            
                    }
                }
            } else {
                $sex_condition = TRUE;
            }
            
    // checking age condition
            if ($job['age']) {
                // $date2 = date_create(date('Y'));

                // $date = date_create($jobseeker['dob']);
                // $date1 = date_format($date,"Y");
                // $dob = date_create($date1);

                // $diff = date_diff($dob,$date2,'absolute');
                // $age = $diff->format("%a")/365.25;
                // echo $age;

                // echo '<br>' . $date2->format("%a days") . " = " . $dob->format("%a days");
                
                $age_condition = TRUE;
            } else {
                $age_condition = TRUE;
            }
            
    // checking qualification condition
            if ($job['qualification']) {
                $qualification_condition = TRUE;                    
            } else {
                $qualification_condition = TRUE;
            }
            
    // checking licence condition
            if ($job['license']) {
                $license_condition = TRUE;
            } else {
                $license_condition = TRUE;
            }
            
    // checking language condition
            if ($job['language']) {
                $language_condition = TRUE;
            } else {
                $language_condition = TRUE;                    
            }
            
    // checking experience condition and year of experience
            if ($job['experience']) {
                $experience_condition = TRUE;                    
            }
            else {
                $experience_condition = TRUE;
            }

            if ($job['experience_year']) {
                $experience_year_condition = TRUE;
            } else {
                $experience_year_condition = TRUE;                        
            }




            if ($time_condition === TRUE && $place_condition === TRUE 
                && $deadline_condition === TRUE && $sex_condition === TRUE
                && $age_condition === TRUE && $qualification_condition === TRUE
                && $license_condition === TRUE && $language_condition === TRUE
                && $experience_condition === TRUE && $experience_year_condition === TRUE ) 
            {
                $hired[$i] = $y['Job_ID'];
                $i++;
                // echo $y['Job_ID'] . " matches with your profile <br>"; 
            }
            // else {
                // $nothired[$i] = $y['Job_ID'];
                // echo $y['Job_ID'] . " does not matches with your profile <br>";
                // $i++;                   
            // }
            
        }
        if ($i == 0) {
            $hired = FALSE;                
        }
        // return $h = array($hired, $nothired);
        return $hired;
    }


    private function Job($id)
    {
        $i = 0;
        // echo "job <br>";
        $job = $this->M_GetDetails->job($id);
        // testArray($job);

        // echo "<hr> jobseeker ids <br>";
        $jobseekerlist = $this->M_GetDetails->JobSeekerList();
        $jobseeker_id = $jobseekerlist->result_array();
        // testArray($jobseeker_id);

        // foreach ($job_id as $key => $value) {
        //     echo "<hr> job details of id " . $value['Job_ID'] . "<br>";
        //     $job = $this->M_GetDetails->job($value['Job_ID']);
        //     testArray($job);
        // }

        // echo "<hr> <u>hiring started</u> <br>";
        foreach ($jobseeker_id as $x => $y) {
            
            $jobseeker = $this->M_GetDetails->JobSeeker($y['Register_No']);
            // testArray($jobseeker);

            // echo "<hr> qualifications <br>";
            $qualification = $this->M_GetDetails->JSQualification($y['Register_No']);
            // testArray($qualification);

            // echo "<hr> interest <br>";
            $interest = $this->M_GetDetails->JSInterest($y['Register_No']);
            // testArray($interest);


    // time condition checking
            if ($job['time']) {
                $all1 = array_search('All',$job['time']);
                $all2 = array_search('All',$interest['time']);
                if ($all1 === FALSE && $all2 === FALSE) {
                    
                    foreach ($job['time'] as $key => $value) {
                        $a = array_search($value,$interest['time']);

                        if ($a !== FALSE) {
                            $time_condition = TRUE;
                            break;
                        }
                        $time_condition = FALSE;
                    }
                }
                else {
                    $time_condition = TRUE;
                }
            } 
            else {
                $time_condition = TRUE;
            }

    // place condition checking
            if ($job['place']) {
                $all1 = array_search('All',$job['place']);
                $all2 = array_search('All',$interest['place']);
                if ($all1 === FALSE && $all2 === FALSE) {
                    
                    foreach ($job['place'] as $key => $value) {
                        $a = array_search($value,$interest['place']);

                        if ($a !== FALSE) {
                            $place_condition = TRUE;
                            break;
                        }
                        $place_condition = FALSE;
                    }
                }
                else {
                    $place_condition = TRUE;
                }
            } else {
                $place_condition = TRUE;
            }
            
    // checking deadline is finished or not
            if ($job['deadline']) {
                $date1 = date_create(date('Y-m-d'));
                $date2 = date_create($job['deadline']);
                
                if (time($date2 > $date1)) {
                    $deadline_condition = TRUE;
                } else {
                    $deadline_condition = FALSE;
                }
            } else {
                $deadline_condition = TRUE;
            }

    // checking sex condition
            if ($job['sex']) {
                if ($job['sex'] == 'All') {
                    $sex_condition = TRUE;
                } else {
                    if ($job['sex'] == $jobseeker['gender']) {
                        $sex_condition = TRUE;
                    }
                    else {
                        $sex_condition = FALSE;                            
                    }
                }
            } else {
                $sex_condition = TRUE;
            }
            
    // checking age condition
            if ($job['age']) {
                // $date2 = date_create(date('Y'));

                // $date = date_create($jobseeker['dob']);
                // $date1 = date_format($date,"Y");
                // $dob = date_create($date1);

                // $diff = date_diff($dob,$date2,'absolute');
                // $age = $diff->format("%a")/365.25;
                // echo $age;

                // echo '<br>' . $date2->format("%a days") . " = " . $dob->format("%a days");
                
                $age_condition = TRUE;
            } else {
                $age_condition = TRUE;
            }
            
    // checking qualification condition
            if ($job['qualification']) {
                $qualification_condition = TRUE;                   
            } else {
                $qualification_condition = TRUE;
            }
            
    // checking licence condition
            if ($job['license']) {
                $license_condition = TRUE;
            } else {
                $license_condition = TRUE;
            }
            
    // checking language condition
            if ($job['language']) {
                $language_condition = TRUE;
            } else {
                $language_condition = TRUE;                    
            }
            
    // checking experience condition and year of experience
            if ($job['experience']) {
                $experience_condition = TRUE;                    
            }
            else {
                $experience_condition = TRUE;
            }

            if ($job['experience_year']) {
                $experience_year_condition = TRUE;
            } else {
                $experience_year_condition = TRUE;                        
            }




            if ($time_condition === TRUE && $place_condition === TRUE 
                && $deadline_condition === TRUE && $sex_condition === TRUE
                && $age_condition === TRUE && $qualification_condition === TRUE
                && $license_condition === TRUE && $language_condition === TRUE
                && $experience_condition === TRUE && $experience_year_condition === TRUE ) 
            {
                $hired[$i] = $y['Register_No'];
                $i++;
                // echo $y['Register_No'] . " profile matches with this Job <br>";
            }
            // else {
                // $nothired[$i] = $y['Register_No'];
                // $i++;
                // echo $y['Register_No'] . " profile does not matches with this Job <br>";
            // }
        }
        if ($i == 0) {
            $hired = FALSE;                
        }

        // return $h = array($hired, $nothired);
        return $hired;
    }

}

/* End of file Job_Notify.php */


// $job (
        //     // title 
        //     // type
        //     time
        //     place 
        //     deadline
        //     salary 
        //     vacancy 
        //     sex 
        //     age 
        //     qualification
        //     license 
        //     language

        //     experience 
        //     experience_year 
        //     posted_date 
        //     description
        // );


        // $jobseeker (
        //     name
        //     gender  
        //     dob 
        //     address 
        //     country 
        //     state
        //     district
        //     city
        //     pin_code
        //     email
        //     number  
        //     register_date
        // );



        // $qualification (
        //     sslc
        //     hs  
        //     diploma
        //         subject 
        //         university
        //         mark
        //     ug  
        //     pg  
        //     mphill  
        //     phd 
        //     othercourse
        // );


        // $interest (
        //     place
        //     time
        //     hobby
        //     achievement
        // );




            // $var = $this->M_GetDetails->jobseekerlist();
            // echo $var->num_rows();
            // testArray($var->result_array());

            
            
            // $var = $this->M_GetDetails->companylist();
            // echo $var->num_rows();
            // testArray($var->result_array());