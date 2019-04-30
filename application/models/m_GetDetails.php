<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_GetDetails extends CI_Model
{

// Details of JobSeeker by ID
    function JobSeeker($register_no)
    {
        $q = $this->db->query("SELECT * FROM tbl_job_seeker WHERE Register_No = '$register_no'");

        if ($q->num_rows()>0) {
            $js = $q->result_array();
            // testArray($js);

            $js = $js[0];
            // testArray($js);

            if ($js['Name']){
                $details['name'] = $js['Name'];
            }
            else {
                $details['name'] = FALSE;
            }
            
            if ($js['Gender']){
                $details['gender'] = $js['Gender'];
            }
            else {
                $details['gender'] = FALSE;
            }

            if ($js['DOB']){
                $details['dob'] = $js['DOB'];
            }
            else {
                $details['dob'] = FALSE;
            }

            if ($js['Address']){
                $details['address'] = $js['Address'];
            }
            else {
                $details['address'] = FALSE;
            }

            if ($js['Country']){
                $details['country'] = $js['Country'];
            }
            else {
                $details['country'] = FALSE;
            }

            if ($js['State']){
                $details['state'] = $js['State'];
            }
            else {
                $details['state'] = FALSE;
            }

            if ($js['District']){
                $details['district'] = $js['District'];
            }
            else {
                $details['district'] = FALSE;
            }

            if ($js['City']){
                $details['city'] = $js['City'];
            }
            else {
                $details['city'] = FALSE;
            }

            if ($js['Pin_Code']){
                $details['pin_code'] = $js['Pin_Code'];
            }
            else {
                $details['pin_code'] = FALSE;
            }

            if ($js['Email']){
                $details['email'] = $js['Email'];
            }
            else {
                $details['email'] = FALSE;
            }

            if ($js['M_Number']){
                $details['number'] = $js['M_Number'];
            }
            else {
                $details['number'] = FALSE;
            }

            if ($js['Register_Date']){
                $details['register_date'] = $js['Register_Date'];
            }
            else {
                $details['register_date'] = FALSE;
            }

            return $details;
        } else {
            $this->session->set_flashdata('jobseeker_error', 'JobSeeker not exists');
            return FALSE;
        }
        
    }

// ------------------------------------------------------------------------



// Qualification of JobSeeker by ID 
    function JSQualification($register_no)
    {
        $jobseeker = $this->db->query("SELECT * FROM tbl_job_seeker WHERE Register_No = '$register_no'");
        if ($jobseeker->num_rows()>0) {
            $qualification = $this->db->query("SELECT * FROM tbl_qualification WHERE Register_No = '$register_no'");
            
            if ($qualification->num_rows()>0) {
                $a = $qualification->result_array();
                $qua_data = $a[0];
                
                if (isset($qua_data['SSLC_Board'])) {
                    $details['sslc'] = array(
                        'board' => $qua_data['SSLC_Board'],
                        'mark' => $qua_data['SSLC_Mark'],
                    );
                    
                }
                else {
                    $details['sslc'] = FALSE;
                }
                    
                if (isset($qua_data['HS_Board'],$qua_data['HS_Mark'])) {
                    $details['hs'] = array(
                        'board' => $qua_data['HS_Board'],
                        'mark' => $qua_data['HS_Mark'],
                    );
                }
                else {
                    $details['hs'] = FALSE;
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
                    $details['diploma'] = $diploma;
                }
                else {
                    $details['diploma'] = FALSE;
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
                    $details['ug'] = $ug;
                }
                else {
                    $details['ug'] = FALSE;
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
                    $details['pg'] = $pg;
                }
                else {
                    $details['pg'] = FALSE;
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
                    $details['mphill'] = $mphill;
                }
                else {
                    $details['mphill'] = FALSE;
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
                    $details['phd'] = $phd;
                }
                else {
                    $details['phd'] = FALSE;
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
                    $details['othercourse'] = $othercourse;
                }
                else {
                    $details['othercourse'] = FALSE;
                }

                return $details;
            } else {
                $this->session->set_flashdata('jsqualification_error', "$register_no user doesn't Entered details");
                return FALSE;
            }
        } else {
            $this->session->set_flashdata('jsqualification_error','User not exist');
            return FALSE;
        }
    }

// ------------------------------------------------------------------------



// Interest of JobSeeker by ID
    function JSInterest($register_no)
    {
        $jobseeker = $this->db->query("SELECT * FROM tbl_job_seeker WHERE Register_No = '$register_no'");
        
        if ($jobseeker->num_rows()>0) {
            $interest = $this->db->query("SELECT * FROM tbl_interest WHERE Register_No = '$register_no'");
        
            if ($interest->num_rows()>0) {
                $b = $interest->result_array();
                $int_data = $b[0];
                
                if (isset($int_data['Place'])) {
                    $details['place'] = SplitAndRetrieve($int_data['Place']);
                }
                else {
                    $details['place'] = FALSE;
                }

                if (isset($int_data['Time'])) {
                    $details['time'] = SplitAndRetrieve($int_data['Time']);
                }
                else {
                    $details['time'] = FALSE;
                }

                if (isset($int_data['Hobbies'])) {
                    $details['hobby'] = SplitAndRetrieve($int_data['Hobbies']);
                }
                else {
                    $details['hobby'] = FALSE;
                }

                if (isset($int_data['Extra_Achievements'])) {
                    $details['achievement'] = SplitAndRetrieve($int_data['Extra_Achievements']);
                }
                else {
                    $details['achievement'] = FALSE;
                }

                return $details;
            } else {
                $this->session->set_flashdata('jsinterest_error', "$register_no user doesn't Entered details");
                return FALSE;
            }

        } else {
            $this->session->set_flashdata('jsinterest_error','User not exist');
            return FALSE;
        }
    }

// ------------------------------------------------------------------------



// Details of Company by ID
    function company($register_no)
    {
        $company = $this->db->query("SELECT * FROM tbl_company WHERE Register_No = '$register_no'");
        if ($company->num_rows()>0) {
            $company = $company->result_array();
            $company = $company[0];
            // testArray($company);

            if ($company['Name']) {
                $details['name'] = $company['Name'];
            }
            else {
                $details['name'] = FALSE;
            }

            if ($company['Description']) {
                $details['description'] = $company['Description'];
            }
            else {
                $details['description'] = FALSE;
            }

            if ($company['Company_Type']) {
                $details['company_type'] = $company['Company_Type'];
            }
            else {
                $details['company_type'] = FALSE;
            }

            if ($company['Address']) {
                $details['address'] = $company['Address'];
            }
            else {
                $details['address'] = FALSE;
            }

            if ($company['Country']) {
                $details['country'] = $company['Country'];
            }
            else {
                $details['country'] = FALSE;
            }

            if ($company['State']) {
                $details['state'] = $company['State'];
            }
            else {
                $details['state'] = FALSE;
            }

            if ($company['District']) {
                $details['district'] = $company['District'];
            }
            else {
                $details['district'] = FALSE;
            }

            if ($company['City']) {
                $details['city'] = $company['City'];
            }
            else {
                $details['city'] = FALSE;
            }

            if ($company['Pin_Code']) {
                $details['pin_Code'] = $company['Pin_Code'];
            }
            else {
                $details['pin_Code'] = FALSE;
            }

            if ($company['Email']) {
                $details['email'] = $company['Email'];
            }
            else {
                $details['email'] = FALSE;
            }

            if ($company['M_Number']) {
                $details['number'] = $company['M_Number'];
            }
            else {
                $details['number'] = FALSE;
            }

            if ($company['Web_Site']) {
                $details['website'] = $company['Web_Site'];
            }
            else {
                $details['website'] = FALSE;
            }

            if ($company['Person_Name']) {
                $details['person_name'] = $company['Person_Name'];
            }
            else {
                $details['person_name'] = FALSE;
            }

            if ($company['Person_Email']) {
                $details['person_email'] = $company['Person_Email'];
            }
            else {
                $details['person_email'] = FALSE;
            }

            if ($company['Person_Number']) {
                $details['person_number'] = $company['Person_Number'];
            }
            else {
                $details['person_number'] = FALSE;
            }

            if ($company['User_Name']) {
                $details['user_name'] = $company['User_Name'];
            }
            else {
                $details['user_name'] = FALSE;
            }

            if ($company['Register_Date']) {
                $details['register_date'] = $company['Register_Date'];
            }
            else {
                $details['register_date'] = FALSE;
            }

            return $details;
        } else {
            $this->session->set_flashdata('company_error', 'Company not exists');
            return FALSE;
        }
        
    }

// ------------------------------------------------------------------------



// Details of Job by ID 
    function Job($job_id)
    {
        $q = $this->db->query("SELECT * FROM tbl_job WHERE Job_Id = '$job_id'");
        if ($q->num_rows()>0) {
            $a = $q->result_array();
            $job = $a[0];

            if (isset($job['Job_Title'])) {
                $details['title'] = $job['Job_Title'];
            }
            else {
                $details['title'] = FALSE;
            }

            if (isset($job['Job_Types'])) {
                $details['type'] = SplitAndRetrieve($job['Job_Types']);
            }
            else {
                $details['type'] = FALSE;
            }

            if (isset($job['Job_Times'])) {
                $details['time'] = SplitAndRetrieve($job['Job_Times']);
            }
            else {
                $details['time'] = FALSE;
            }

            if (isset($job['Job_Places'])) {
                $details['place'] = SplitAndRetrieve($job['Job_Places']);
            }
            else {
                $details['place'] = FALSE;
            }

            if (isset($job['Job_Deadline'])) {
                $details['deadline'] = $job['Job_Deadline'];
            }
            else {
                $details['deadline'] = FALSE;
            }

            if (isset($job['Job_Salary'])) {
                $details['salary'] = $job['Job_Salary'];
            }
            else {
                $details['salary'] = FALSE;
            }

            if (isset($job['Job_Vacancy'])) {
                $details['vacancy'] = $job['Job_Vacancy'];
            }
            else {
                $details['vacancy'] = FALSE;
            }

            if (isset($job['Job_Sex'])) {
                $details['sex'] = $job['Job_Sex'];
            }
            else {
                $details['sex'] = FALSE;
            }

            if (isset($job['Job_Age'])) {
                $details['age'] = $job['Job_Age'];
            }
            else {
                $details['age'] = FALSE;
            }

            if (isset($job['Job_Qualifications'])) {
                $details['qualification'] = SplitAndRetrieve($job['Job_Qualifications']);
            }
            else {
                $details['qualification'] = FALSE;
            }

            if (isset($job['Job_Licenses'])) {
                $details['license'] = SplitAndRetrieve($job['Job_Licenses']);
            }
            else {
                $details['license'] = FALSE;
            }

            if (isset($job['Job_Languages'])) {
                $details['language'] = SplitAndRetrieve($job['Job_Languages']);
            }
            else {
                $details['language'] = FALSE;
            }

            if (isset($job['Job_Experience'])) {
                $details['experience'] = $job['Job_Experience'];
            }
            else {
                $details['experience'] = FALSE;
            }

            if (isset($job['Experience_Year'])) {
                $details['experience_year'] = $job['Experience_Year'];
            }
            else {
                $details['experience_year'] = FALSE;
            }

            if (isset($job['Posted_Date'])) {
                $details['posted_date'] = $job['Posted_Date'];
            }
            else {
                $details['posted_date'] = FALSE;
            }

            if (isset($job['Job_Description'])) {
                $details['description'] = $job['Job_Description'];
            }
            else {
                $details['description'] = FALSE;
            }

            return $details;
        } else {
            
            $this->session->set_flashdata('job_error', 'job doesn\'t exists');
            return FALSE;
        }
    }

// ------------------------------------------------------------------------



// List of Register Numbers of all jobseeker
    function JobSeekerList()
    {
        return $this->db->query("SELECT Register_No FROM tbl_job_seeker");
    }

// ------------------------------------------------------------------------



// List of Job IDs of all Jobs
function JobList()
{
    return $this->db->query("SELECT Job_ID FROM tbl_job");
}

// ------------------------------------------------------------------------



// List of Register Numbers of all Companies
function CompanyList()
{
    return $this->db->query("SELECT Register_No FROM tbl_company");
}

// ------------------------------------------------------------------------


function Test($id)
{
    $a = $this->db->query("SELECT * FROM tbl_test_result WHERE Register_No = '$id'");
    if ($a->num_rows()>0) {
        return TRUE;
    }
    else {
        FALSE;
    }
}


}

// ------------------------------------------------------------------------
/* End of file m_Details.php */
