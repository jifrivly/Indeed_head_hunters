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
    <?php echo $materialize_css; ?>


    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $my_css; ?>">
    

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font AWESOME -->
    <!-- <?php echo $font_awesome; ?> -->


    

</head>
<body class="container">

    <div class="row ">

        <div class="card hoverable darken-1 ">
            <div class="card-content ">
                <span class="card-title center-align">Job Seeker Registration</span>
                <hr>
<!-- FORM Start -->
                <form action="" method="POST">

        <!-- Name -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    
                    <div class="input-field col l6 s12">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>

        <!-- Gender -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <select>
                            <option value="" disabled selected>Choose your Gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Other</option>
                        </select>
                        <label>Gender</label>
                    </div>

        <!-- DOB -->
                
                    <div class="input-field col l6 s12">
                        <input type="text" class="datepicker" maxDate="Jan 1, 2010">
                        <label for="dob">Date of birth</label>
                    </div>

                </div>

        <!-- Permanent ADDRESS -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <textarea name="address" id="address" class="materialize-textarea" ></textarea>
                        <label for="address">Address</label>
                    </div>

        <!-- Country -->
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="">
                        <label for="country">Country</label>
                    </div>
                </div>

                
        <!-- state -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="">
                        <label for="state">State</label>
                    </div>

        <!-- District -->
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="">
                        <label for="District">District</label>
                    </div>
                </div>

        <!-- City -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="">
                        <label for="city">City</label>
                    </div>

        <!-- Pincode -->
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="">
                        <label for="pincode">Pincode</label>
                    </div>
                </div>



        <!-- Email -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">mail</i>
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right">Enter active email address</span>
                    </div>


        <!-- Phone Number -->
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">phone</i>
                        <input type="tel" name="mobile" id="" class="validate">
                        <label for="mobile">Mobile Number</label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right">Enter valid phone number</span>
                        
                    </div>
                </div>


        <!-- Create password -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input type="password" name="password_1" id="pass_1">
                        <label for="password_1">Create a password</label>
                        <span class="helper-text ">Minimum 8 charecter</span>
                    </div>
                    
        <!-- Conform password -->
                    <div class="input-field col l6 s12">
                        <input type="password" name="password_2" id="pass_2">
                        <label for="password_2">Conform the password</label>
                    </div>
                </div>


                
                <div class="right-align">
                    <button class="btn waves-effect waves-light " type="submit" name="action">Submit
                    <i class="material-icons right">send</i></button>
                </div>
                
                </form>

<!-- FORM END -->
            </div>

        </div>
    </div>


            

              


    <!-- jquery-3.2.1.slim.min.js -->
    <?php echo $jquery; ?>    

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