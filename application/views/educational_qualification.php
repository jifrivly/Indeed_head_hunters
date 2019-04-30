<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Educational Qualification</title>
    
    
    <!-- Materialize Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/css/materialize.min.css">
    
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font AWESOME -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>
<body class="container cyan accent-4">
    
    <div class="card hoverable darken-1 ">
        <div class="card-content ">
            <span class="card-title purple-text center-align"><b>Educational Qualification</b></span>
            <hr>
<!-- FORM Start -->
            <?php echo form_open(); ?>
                <br>
<!-- SSLC Details -->
            <div class="switch row">
                <div class="col s12 m7" > 
                    Do you have SSLC ?
                </div>
                <div class="col s12 m5 left-align" >
                    <label >
                        No
                        <input type="checkbox" name="QSSLC" id="qsslc" onclick="toggling('#sslc')">
                        <span class="lever"></span>
                        Yes
                    </label>
                </div>
            </div>
            
            <div class="row " id="sslc" hidden>
                <h6> <b> <u> SSLC Details </u> </b> </h6>
                <div class="input-field col l6 s12">
                    <input type="text" name="SSLC_Board" id="sslcboard" >
                    <label for="sslcboard">Board Of Examination</label>
                </div>
                <div class="input-field col l6 s12">
                    <label for="sslcmark">MARK (in percentage) : </label>
                    <input type="number" name="SSLC_Mark" id="sslcmark">
                    <!-- <span> % </span> -->
                </div>
            </div>
            <br><br>
<!-- Higher Secondary Details -->
            <div class="switch row">
                <div class="col s12 m7" >
                    Do you have +2 ?
                </div>
                <div class="col s12 m5 left-align" >
                    <label >
                        No
                        <input type="checkbox" name="QHS" id="qhs" onclick="toggling('#hs')">
                        <span class="lever"></span>
                        Yes
                    </label>
                </div>
            </div>
            <div class="row" id="hs" hidden>
                <h6> <b> <u> Higher Secondary Details </u> </b> </h6>
                <div class="input-field col l6 s12">
                    <label for="plus2board">Board Of Examination</label>
                    <input type="text" name="HS_Board" id="plus2board">
                </div>
                <div class="input-field col l6 s12">
                    <label for="plus2mark">MARK (in percentage) : </label>
                    <input type="number" name="HS_Mark" id="plus2mark">
                    <!-- <span> % </span> -->
                </div>
            </div>
            <br><br>
<!-- Diploma Details -->
            <div class="switch row">
                <div class="col s12 m7" > 
                    Do you completed any Diploma Courses ? &ThickSpace;&ThickSpace;&ThickSpace;
                </div>
                <div class="col s12 m5 left-align">
                    <label >
                        No
                        <input type="checkbox" name="QDiploama" id="qhs" onclick="toggling('#diploma','#diplomaadd')">
                        <span class="lever"></span>
                        Yes
                    </label>
                </div>
            </div>
            <div id="diploma" hidden>
                <h6> <b> <u> Diploma Course's Details </u> </b> </h6>
                <div class="row" >
                <div class="input-field col l6 s12">
                    <label for="diplomasubject1">Subject : </label>
                    <input type="text" name="Diploma_Subject1" id="diplomasubject1">
                </div>
                <div class="input-field col l6 s12">
                    <label for="diplomauniversity1">University : </label>
                    <input type="text" name="Diploma_University1" id="uguniversity1">
                </div>
                </div>
                <div class="row" >
                <div class="input-field col l6 s12">
                    <label for="diplomamark1">MARK (in percentage) : </label>
                    <input type="number" name="Diploma_Mark1" id="diplomamark1">
                </div>
                
                </div>
            </div>
            <div id="diplomaadd" hidden>
                <span > <b> If you have more diploma, Click Here to add </b> </span>
                <a class="btn-floating btn-large waves-effect waves-light blue " onclick="addDiploma();">
                    <i class="material-icons">add</i>
                </a>
            </div>
            <br><br>
<!-- Under Graduation Details -->
            <div class="switch row">
                <div class="col s12 m7" > 
                    Do you have Degree ? &ThickSpace;&ThickSpace;&ThickSpace;
                </div>
                <div class="col s12 m5 left-align">
                    <label >
                        No
                        <input type="checkbox" name="QUG" id="qug" onclick="toggling('#ug','#ugadd')">
                        <span class="lever"></span>
                        Yes
                    </label>
                </div>
            </div>
            <div id="ug" hidden>
            <h6> <b> <u> Under Graduation Details </u> </b> </h6>
            <div class="row">
                <div class="input-field col l6 s12">
                    <label for="ugsubject1">Subject : </label>
                    <input type="text" name="UG_Subject1" id="ugsubject1">
                </div>
                <div class="input-field col l6 s12">
                    <label for="uguniversity1">University : </label>
                    <input type="text" name="UG_University1" id="uguniversity1">
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6 s12">
                    <label for="ugmark1">MARK (in percentage) : </label>
                    <input type="number" name="UG_Mark1" id="ugmark1">
                </div>
                
            </div>
            </div>
            <div  id="ugadd" hidden>
                <span > <b> If you have more degrees, Click Here to add </b> </span>
                <a class="btn-floating btn-large waves-effect waves-light blue " onclick="addDegree();">
                    <i class="material-icons">add</i>
                </a>
            </div>
            <br><br>
<!-- Post Graduation Details -->
            <div class="switch row">
                <div class="col s12 m7" > 
                    Do you have POST GRADUATION ? &ThickSpace;&ThickSpace;&ThickSpace;
                </div>
                <div class="col s12 m5 left-align">
                    <label >
                        No
                        <input type="checkbox" name="QPG" id="qpg" onclick="toggling('#pg','#pgadd')">
                        <span class="lever"></span>
                        Yes
                    </label>
                </div>
            </div>
            <div id="pg" hidden>
            <h6> <b> <u> Post Graduation Details </u> </b> </h6>
            <div class="row">
                <div class="input-field col l6 s12">
                    <label for="pgsubject1">Subject : </label>
                    <input type="text" name="PG_Subject1" id="pgsubject1">
                </div>
                <div class="input-field col l6 s12">
                    <label for="pguniversity1">University : </label>
                    <input type="text" name="PG_University1" id="pguniversity1">
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6 s12">
                    <label for="pgmark1">MARK (in percentage) : </label>
                    <input type="number" name="PG_Mark1" id="pgmark1">
                </div>
                
            </div>
            </div>
            <div id="pgadd" hidden>
                <span > <b> If you have more post graduations, Click Here to add </b> </span>
                <a class="btn-floating btn-large waves-effect waves-light blue " onclick="addPg();">
                    <i class="material-icons">add</i>
                </a>
            </div>
            <br><br>
<!-- MPhil Details -->
            <div class="switch row">
                <div class="col s12 m7" > 
                    Do you have MPhil ? &ThickSpace;&ThickSpace;&ThickSpace;
                </div>
                <div class="col s12 m5 left-align">
                    <label >
                        No
                        <input type="checkbox" name="QMPHIL" id="qmphil" onclick="toggling('#mphil','#mphiladd')">
                        <span class="lever"></span>
                        Yes
                    </label>
                </div>
            </div>
            <div id="mphil" hidden>
            <h6> <b> <u> MPhil Details </u> </b> </h6>
            <div class="row">
                <div class="input-field col l6 s12">
                    <label for="mphilsubject1">Subject : </label>
                    <input type="text" name="MPhil_Subject1" id="mphilsubject1">
                </div>
                <div class="input-field col l6 s12">
                    <label for="mphiluniversity1">University : </label>
                    <input type="text" name="MPhil_University1" id="mphiluniversity1">
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6 s12">
                    <label for="mphilmark1">MARK (in percentage) : </label>
                    <input type="number" name="MPhil_Mark1" id="mphilmark1">
                </div>
                
            </div>
            </div>
            <div id="mphiladd" hidden>
                <span > <b> If you have more M-Phill, Click Here to add </b> </span>
                <a class="btn-floating btn-large waves-effect waves-light blue " onclick="addMphil();">
                    <i class="material-icons">add</i>
                </a>
            </div>
            <br><br>
<!-- Doctorate Details -->
            <div class="switch row">
                <div class="col s12 m7" > 
                    Do you have DOCTORATE ? &ThickSpace;&ThickSpace;&ThickSpace;
                </div>
                <div class="col s12 m5 left-align">
                    <label >
                        No
                        <input type="checkbox" name="QPHD" id="qphd" onclick="toggling('#phd','#phdadd')">
                        <span class=" lever"></span>
                        Yes
                    </label>
                </div>
            </div>
            <div id="phd" class="row" hidden>
            <h6> <b> <u> Doctorate Details </u> </b> </h6>
                <div class="input-field col l6 s12">
                    <label for="doctoratesubject1">Subject : </label>
                    <input type="text" name="Doctorate_Subject1" id="doctoratesubject1">
                </div>
                <div class="input-field col l6 s12">
                    <label for="doctorateuniversity1">University : </label>
                    <input type="text" name="Doctorate_University1" id="doctorateuniversity1">
                </div>
                
            </div>
            <div id="phdadd" hidden>
                <span > <b> If you have more Doctorates, Click Here to add </b> </span>
                <a class="btn-floating btn-large waves-effect waves-light blue " onclick="addphd();">
                    <i class="material-icons">add</i>
                </a>
            </div>
            <br><br>
<!-- Other Courses -->
            <div class="switch row">
                <div class="col s12 m7" > 
                    Do you completed any other courses ? &ThickSpace;&ThickSpace;&ThickSpace;
                </div>
                <div class="col s12 m5 left-align">
                    <label >
                        No
                        <input type="checkbox" name="QOther" id="qother" onclick="toggling('#other','#otheradd')">
                        <span class="lever"></span>
                        Yes
                    </label>
                </div>
            </div>
            
            <div id="other" hidden>
            <h6> <b> <u> Extra Courses Details </u> </b> </h6>
            <div class="row">
                <div class="input-field col l6 s12">        
                    <label for="othercourses1">Cource Subject : </label>
                    <input type="text" name="Other_Courses1" id="othercourses1">
                </div>
            </div>
            </div>
            <div id="otheradd" hidden>
                <span > <b> If you have more Other Courses, Click Here to add </b> </span>
                <a class="btn-floating btn-large waves-effect waves-light blue " onclick="addCourses();">
                    <i class="material-icons">add</i>
                </a>
            </div>
            <br><br><br>
<!-- Interests and hobbies -->
            <h6><b><u> About your interests and hobbies </u></b></h6>
            <div class="row">
                <div class="input-field col l6 s12">
                    <select name="Places[]" id="places" multiple required>
                        <option value="All">ALL</option>
                        <?php 
                            foreach (_JOB_PLACES as $x) {
                                echo '<option value="' . $x . '">' . $x . '</option>';
                            }
                        ?>
                    </select>
                    <label for="places">Interested places to work <b class="red-text"> * </b> </label>
                    <span class="helper-text"></span>
                </div>
                <div class="input-field col l6 s12">
                    <select name="Times[]" id="times" multiple required>
                        <?php
                            foreach (_JOB_TIMES as $x => $y) {
                                echo '<option value="' . $x . '">' . $y . '</option>';
                            }
                        ?>
                    </select>
                    <label for="times">Select your interested times to work <b class="red-text"> * </b> </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6 s12">
                    <label for="extras">Extra curricular achievements : </label>
                    <textarea name="Extras" id="extras" class="materialize-textarea"></textarea>
                    <span class="helper-text"> Specify one by one seperated with commas (e.g - cricket state winner,Kolkali university champion ) </span>
                </div>
                <div class="input-field col l6 s12">
                    <label for="hobbies">Your Hobbies : </label>
                    <textarea name="Hobbies" id="hobbies" class="materialize-textarea"></textarea>
                    <span class="helper-text"> Specify your hobbies one by one seperated with commas (e.g - Shuttil,Football ) </span>
                </div>

            </div>



<!-- Submit button -->
             <div class="right-align">
                <button class="btn waves-effect waves-light " type="submit" name="action"> Save & Next 
                <i class="material-icons right">send</i></button>
            </div>

            <?php echo form_close(); ?>
<!-- Form close -->
        </div>
    </div>
    

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