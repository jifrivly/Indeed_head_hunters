<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOB or INTERNSHIP POST</title>

    <!-- Materialize Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/css/materialize.min.css">
    
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font AWESOME -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>
<body class="container cyan accent-4">
    
    <div class="card hoverable darken-1 ">
        <div class="card-content ">
            <span class="card-title purple-text center-align"><b>JOB DETAILS</b></span>
            <hr>
            <br>
<!-- FORM Start -->
            <?php echo form_open(); ?>
            <div class="row ">
                <div class="input-field col l12 s12">
                    <input type="text" name="Job_Title" id="jobtitle" required>
                    <label for="jobtitle"> JOB TITLE </label>
                    <span class="helper-text"> <b class="red-text"> * Required </b> </span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6 s12">
                    <select name="Job_Type[]" id="jobtype" multiple required>
                        <?php
                            foreach (_JOB_TYPES as $x => $y) {
                                echo '<option value="' . $x . '">' . $y . '</option>';
                            }
                        ?>
                    </select>
                    <label for="times">SELECT JOB TYPE </label>
                    <span class="helper-text"> <b class="red-text"> * Required </b> </span>                                        
                </div>
                <div class="input-field col l6 s12">
                    <select name="Job_Times[]" id="jobtimes" multiple required>
                        <?php
                            foreach (_JOB_TIMES as $x => $y) {
                                echo '<option value="' . $x . '">' . $y . '</option>';
                            }
                        ?>
                    </select>
                    <label for="times">SELECT JOB STATUS ( WORKING TIMES ) </label>
                    <span class="helper-text"> <b class="red-text"> * Required </b> </span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6 s12" >
                    <select name="Job_Places[]" id="jobplaces" multiple required>
                        <option value="All">ALL</option>
                        <?php 
                            foreach (_JOB_PLACES as $x) {
                                echo '<option value="' . $x . '">' . $x . '</option>';
                            }
                        ?>
                    </select>
                    <label for="jobplaces">SELECT JOB LOCATIONS ( WORKING PLACES ) </label>
                    <span class="helper-text">Specify What cities is the job located in? <b class="red-text"> * Required </b> </span>
                </div>
                <div class=" col l6 s12" >
                    <label for="jobdeadline"> LAST DATE OF SUBMISSION </label>
                    <input type="date" name="Job_Deadline" id="jobdeadline" required="required" >
                    <span class="input-field"><span class="helper-text"> <b class="red-text"> * Required </b> </span></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6 s12">
                    <label for="salary">SALARY AMOUNT OR SALARY RANGE </label>
                    <input type="text" name="Salary" id="salary" pattern="[0-9-_\.]+">
                    <span class="helper-text">Specify exact amount or a amound range (e.g.- 20000 or 10000 - 50000) <b class="green-text"> ( Optional ) </b> </span>
                </div>
                <div class="input-field col l2 s12">
                    <label for="vacancy"> VACANCY </label>
                    <input type="number" name="Vacancy" id="vacancy" min="1" >
                    <span class="helper-text"> Number of vacancy <b class="red-text"> * Required </b> </span>
                </div>
                <div class="input-field col l2 s6">
                    <select name="Sex" id="sex">
                        <option value="All" selected disabled>SEX</option>
                        <option value="Male">MALE</option>
                        <option value="Female">FEMALE</option>
                    </select>
                    <span class="helper-text"> <b class="green-text"> ( Optional ) </b> </span>
                </div>
                <div class="input-field col l2 s6">
                    <label for="age"> AGE LIMIT </label>
                    <input type="text" name="Age" id="age" pattern="[0-9-_\-]{1,5}">
                    <span class="helper-text"> Keep the Format : ( AGE or AGE-AGE ) ( e.g: 25 or 20-40 )  <b class="green-text"> ( Optional ) </b> </span>
                </div>
            </div>
            <h6><b><u> JOB REQUIREMENTS </u></b></h6>
            <div class="row">
                <div class="input-field col l6 s12" >
                    <select name="Education[]" id="education" multiple>
                        <optgroup label="UG">
                            <?php
                                foreach (_BACHELOR_DEGREES as $x => $y) {
                                    echo '<option value="' . $x . '">' . $y . '</option>';
                                }
                            ?>
                        </optgroup>
                        <optgroup label="PG">
                            <?php
                                foreach (_MASTER_DEGREES as $x => $y) {
                                    echo '<option value="' . $x . '">' . $y . '</option>';
                                }
                            ?>
                        </optgroup>
                    </select>
                    <label for="jobplaces">EDUCATIONAL LEVEL ( QUALIFICATION ) </label>
                    <span class="helper-text"> <b class="green-text"> ( Optional ) </b> </span>
                </div>
                <div class="input-field col l6 s12" >
                    <label for="licensesorcertificates"> LICENSES OR CERTIFICATES </label>
                    <input type="text" name="Licenses" id="licensesorcertificates" spellcheck="true" >
                    <span class="helper-text">If any special certificates or licenses are required, Specify one by one using "Comma" (<b style="font-size: 18px">,</b>) <b class="green-text"> ( Optional ) </b> </span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6 s12" >
                    <select name="Languages[]" id="languages" multiple>
                        <option value="NULL" selected disabled>LANGUAGES</option>
                        <?php
                            foreach (_SELECT_LANGUAGES as $x ) {
                                echo '<option value="' . $x . '">' . $x . '</option>';
                            }
                        ?>
                    </select>
                    <span class="helper-text">If any additional languages are required, Specify one by one using " Comma (<b style="font-size: 18px">,</b>) " <b class="green-text"> ( Optional ) </b> </span>
                </div>
                <div class="input-field col l5 s10" >
                    <label for="field"> FIELD OF EXPERIENCE </label> 
                    <input type="text" list="jobslist" name="Field" id="field" spellcheck="true"> 
                    <span class="helper-text">Specify expierience requirement with number of years <b class="green-text"> (Optional) </b> </span>
                </div>
                <div class="input-field col l1 s2" >
                    <label for="year"> YEAR </label>
                    <input type="number" name="Year" id="year" min="1" max="60">
                </div>            
            </div>
            <div class="row">
                <div class="input-field col l12 s12" >
                    <label for="description"> FEW WORDS ABOUT THE JOB </label>
                    <textarea name="Description" id="description" class="materialize-textarea" required="required"></textarea>
                    <span class="helper-text"> To simply understand about job or your requirements <b class="red-text"> * Required </b> </span>
                </div>
            </div>    
            

            <!-- <?php
                foreach (_JOB_TYPES as $x => $y) {
                    echo $x . " = " . $y . "<br>";
                }
            ?> -->


            <!-- Submit button -->
            <div class="right-align">
                <button class="btn waves-effect waves-light " type="submit" name="post">POST
                <i class="material-icons right">send</i></button>
            </div>

            <?php echo form_close();?>
<!-- Form close -->
        </div>
    </div>

    <datalist id="jobslist">
        <?php
            foreach (_JOB_ARRAY as $x) {
                echo '<option value="' . $x . '">';
            }
        ?>
    </datalist>

<!-- JS -->
    <!-- jquery-3.2.1.slim.min.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
	integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>   

    <!-- Materialize Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/js/materialize.min.js"></script>
    
    <script src="<?php echo base_url();?>js/form.js"></script>
    <script>
        $(document).ready(function(){
            $('select').select();
        });
    </script>

</body>
</html>



<!-- End of file job_or_internship_post.php -->

