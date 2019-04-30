<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <style>
        /* body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        } */

        /* main {
        flex: 1 0 auto;
        } */

        body {
        background: #fff;
        }

        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
        color: #e91e63;
        }

        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
        border-bottom: 2px solid #e91e63;
        box-shadow: none;
        }

        .rounded_edge{
            border-radius: 30px;
        }
    </style>


</head>

<body>

    <div class="section"></div>
    <main>
        <center>
            <!-- <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" /> -->
            <h4 class="green-text">INDEED HEADHUNTERS</h3>
            <div class="section"></div>
    
            <h5 class="indigo-text">Please, login into your account</h5>
            <div class="section"></div>
    
            <div class="container">
                <div class="z-depth-1 grey lighten-4 row hoverable" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                    
                    <?php echo form_open('Login');
                    if(isset($error_msg))
                        echo $error_msg . "<br>";    
                    ?>

                    <div class="col s12">
                        <div class='row'>
                            <div class='col s12'>
                            </div>
                        </div>
    
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input type='text' name='username' id='username' class='validate' required/>
                                <label for='email'>Enter your Username</label>
                            </div>
                        </div>
    
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input type='password' name='password' id='password' class='validate' required/>
                                <label for='password'>Enter your password</label>
                            </div>
                            <label style='float: right;'>
                                <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                            </label>
                        </div>

                        <br>
                        
                        <center>
                            <div class='row'>
                                <button type='submit' value="LOGIN" name='submit' class='col s12 btn btn-large rounded_edge waves-effect indigo'>Login</button>
                            </div>
                        </center>
                    </div>
                    <?php echo form_close();?>

                </div>
            </div>

            <a href="#!">Registration</a>
        </center>
    
        <div class="section"></div>
        <div class="section"></div>
    </main>
    
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    

</body>
</html>