<?php
    defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $reg_js; ?></title>


    <!-- Materialize Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/css/materialize.min.css">


    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/my_style.css'); ?>">
    

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font AWESOME -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


    

</head>
<body class="container cyan accent-4">

    <div class="row ">

        <div class="card hoverable darken-1 ">
            <div class="card-content ">
                <span class="card-title purple-text center-align"> <b> Job Seeker Registration </b></span>
                <hr>
<!-- FORM Start -->
                <?php echo form_open('JobSeeker/Registration'); ?>
                <!-- <form action="<?php base_url('/index.php/JobSeeker/createJobSeeker'); ?>" method="POST"> -->
                <!-- <?php echo validation_errors(); ?> -->
        <!-- Name -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="first_name" type="text" name="first_name" class="validate" required>
                        <label for="first_name" >First Name * </label>
                    </div>
                    
                    <div class="input-field col l6 s12">
                        <input id="last_name" type="text" name="last_name" >
                        <label for="last_name">Last Name</label>
                    </div>
                </div>

        <!-- Gender -->
                <div class="row">
                    <div class="input-field col l6 s12" >
                        <select name="sex" class="validate" required>
                            <option value="Null" disabled selected>Choose your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        <label>Gender * </label>
                    </div>

        <!-- DOB -->
                
                    <div class=" col l6 s12">
                        <label for="dob">Date of birth * </label>
                        <input type="date" class="validate" id="dob" name="dob" maxDate="01/01/2010" required>
                    </div>

                </div>

        <!-- Permanent ADDRESS -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <textarea name="address" id="address" name="address" class="materialize-textarea" ></textarea>
                        <label for="address">Address </label>
                    </div>

        <!-- Country -->
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="validate" name="country" required>
                        <label for="country">Country * </label>
                    </div>
                </div>

                
        <!-- state -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="validate" name="state" required>
                        <label for="state">State * </label>
                    </div>

        <!-- District -->
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="validate" name="district" required>
                        <label for="District">District * </label>
                    </div>
                </div>

        <!-- City -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="" name="city">
                        <label for="city">City</label>
                    </div>

        <!-- Pincode -->
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="" name="pincode" pattern="[0-9]{6,10}" >
                        <label for="pincode">Pincode</label>
                    </div>
                </div>



        <!-- Email -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">mail</i>
                        <input id="email" type="email" class="validate" name="email" required>
                        <label for="email">Email * </label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right">Please specify valid and active email address</span>
                    </div>


        <!-- Phone Number -->
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">phone</i>
                        <input type="tel" name="mobile" id="" class="validate" name="mobile" pattern="[0-9]{10,13}" required>
                        <label for="mobile">Mobile Number * </label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right">Please specify valid phone number ( including country code with out + ) . Recruiters will contact you on this number</span>
                        
                    </div>
                </div>


        <!-- Create password -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input type="password" name="password" id="password" class="validate" minlength="8" maxlength="20" required>
                        <label for="password">Create a password * </label>
                        <span class="helper-text ">Password is Case-Sensitive. Use 8 to 20 character </span>
                    </div>
                    
        <!-- Confirm password -->
                    <div class="input-field col l6 s12">
                        <input type="password" name="password_2" id="password_2" required>
                        <label for="password_2">Confirm the password</label>
                        <span class="helper-text">Same as above password </span>
                    </div>
                </div>


                
                <div class="right-align">
                    <button class="btn waves-effect waves-light " type="submit" name="action">Submit
                    <i class="material-icons right">send</i></button>
                </div>
                
                <!-- </form> -->
                <?php echo form_close(); ?>

<!-- FORM END -->
            </div>

        </div>
    </div>


            

              


    <!-- jquery-3.2.1.slim.min.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Materialize Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('select').select();
        });
        
        $(document).ready(function(){
            $('.datepicker').datepicker();
        });

        // var elem = document.querySelector('.datepicker');
        // var instance = M.Datepicker.init(elem, );
        //  maxDate='01,01,2010',

    </script>
    
    
</body>
</html>