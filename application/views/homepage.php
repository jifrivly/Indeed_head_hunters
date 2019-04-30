<?php
    defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> <?php echo $project_name; ?> </title>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<!-- CSS -->
    
<!-- BOOTSTRAP -->
    <!-- Bootstrap Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/bootstrap.min.css'); ?>"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- MATERIALIZE -->
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/materialize.min.css"  media="screen,projection"/>


    
<!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $my_css; ?>">



<!-- Fonts -->

<!-- BOOTSTRAP -->
    <!--Import Google Icon Font-->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" > -->

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">


    <!-- Font AWESOME -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" >
    <!-- <?php echo $font_awesome; ?> -->

  


    <style>
        body, html {
            position: relative;
            margin: 0px;
            padding: 0px;
            height: 100%;
        }

        .ss > * {
            margin: 3px;
        }

    </style>

</head>


<body data-spy="scroll" data-target=".navbar" data-offset="100">

    <?php include('navbar.php') ?>

<!-- header -->

    <div class="main" id="main">
        <h3 class="center-align" style=" font-size: 8vw; color: rgb(15, 194, 234);"> INDEED HEADHUNTERS </h3>
        <a href="#registrationorlogin"> <button type="button" class="btn btn-outline-primary waves-effect waves-light" >Registration / Login</button></a>
        <a href="#companies"> <button type="button" class="btn btn-outline-danger waves-effect waves-light" >Companies</button></a>
        <a href="#contact"> <button type="button" class="btn btn-outline-primary waves-effect waves-light" >Contact</button></a>
        <a href="#about"> <button type="button" class="btn btn-outline-danger waves-effect waves-light" >About</button></a>

    </div>



    <div class="row regilogi" id="registrationorlogin">
<!-- Registration -->
    <div class="regibg col-md-6">
        <div id="registration" class="regi">
                
            <a href="<?php echo base_url();?>index.php/JobSeeker/Registration"> 
                <button type="button" class="btn btn-outline-success waves-effect waves-light" >Register as JOB SEEKER</button>
            </a>
            <br><br><br><br><br>
            <a href="<?php echo base_url();?>index.php/Company/Registration">
                <button type="button" class="btn btn-outline-info waves-effect waves-light" >Register as COMPANY</button>
            </a>
            
        
        </div>

        <div class="devider visible-sm">
            <a href="#login"> <i class="fas fa-angle-double-down"></i> </a>            
        </div>

        
    </div>
    

<!-- Login -->
    <div class="logibg col-md-6">

        <div id="login" class="logi">

            <a href="<?php echo base_url();?>index.php/Login">
                <button class="btn btn-outline-primary waves-effect waves-light" > LOGIN </button>
            </a>

        </div>

    </div>

    <div class="devider col-md-12">
        <a href="#companies"> <i class="fas fa-angle-double-down"></i> </a>            
    </div>
        
    </div>



<!-- Companies -->
    <div class="ss" style=" margin: 3px; " id="companies" >
    <!-- Card-Deck starts -->
        <div class="card-deck text-center">

            <div class="card " >
                <div class="card-header">Name of company</div>
                <img class="card-img-top" src="<?php echo base_url();?>images/swisscom.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card " >
                <div class="card-header">Name of company</div>
                <img class="card-img-top" src="<?php echo base_url();?>images/" alt="Card image cap">
                <div class="card-body"> 
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card " >
                <div class="card-header">Name of company</div>   
                <img class="card-img-top" src="<?php echo base_url();?>images/" alt="Card image cap">
                <div class="card-body"> 
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card " >
                <div class="card-header">Name of company</div>
                <img class="card-img-top" src="<?php echo base_url();?>images/"  alt="Card image cap">
                <div class="card-body"> 
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>

    <!-- Card-Deck 2nd raw starts -->

        <div class="card-deck text-center">

            <div class="card text-white bg-info border-primary" >
                <div class="card-header">Name of company</div>
                <img class="card-img-top" src="<?php echo base_url();?>images/swisscom.png" alt="Card image cap">
                <div class="card-body"> 
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card text-white bg-info" >
                <div class="card-header">Name of company</div>
                <img class="card-img-top" src="<?php echo base_url();?>images/" alt="Card image cap">
                <div class="card-body"> 
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card border-success">
                <div class="card-header bg-transparent border-success">Name of company</div>
                <div class="card-body text-success">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer bg-transparent border-success">Footer</div>
            </div>
            

        </div>
            
            
        <div class="devider">
                <a href="#contact"> <i class="fas fa-angle-double-down"></i> </a>            
        </div>

            
    </div>


        



<!-- Contact with Admin -->
    <div id="contact" >
        <div class="row">
        <div class=" col-lg-offset-2 col-lg-8 col-sm-12">
            <div class="card hoverable">
            <div class="card-header center-align"> <h5> Contact with us </h5></div>                
            <form action="" method="post">

    <!-- Email -->
                <div class="row">
                    <div class="input-field col l12 s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                        <span class="helper-text pull-left" data-error="it seems wrong" data-success="right">Enter active email address</span>
                    </div>
                </div>


    <!-- Subject -->
                <div class="row">
                    <div class="input-field col l12 s12">
                        <input id="e_subject" type="text" >
                        <label for="email">Subject</label>
                        <span class="helper-text pull-left" >Subject of your message</span>
                    </div>
                </div> 


    <!-- Message -->
                <div class="row">
                    <div class="input-field col l12 s12">
                        <textarea name="message" id="common_message" class="materialize-textarea" ></textarea>
                        <label for="common_message">Message </label>
                        <span class="helper-text pull-left">(Request, Comment, etc. )</span>
                    </div>
                </div>
                <div class="right-align">
                        <button class="btn waves-effect waves-light " type="submit" name="action">Submit
                        <i class="material-icons right">send</i></button>
                </div>
            </form>
            </div>

        </div>
        </div>
            

        <div class="devider">
            <a href="#about"> <i class="fas fa-angle-double-down"></i> </a>&emsp;&emsp;&emsp;&emsp;
            <a href="#main"> <i class="fas fa-angle-double-up"></i> </a>
        </div>

    </div>
        


        

<!-- About  -->



    <div id="about">

            <?php include('footer.php'); ?>

    </div>

    <?php
        foreach ($_SESSION as $x => $y) {
            echo $x . " = " . $y . "<br>";
        }
    ?>

        

<!-- JS -->

<!-- Bootstrap -->
        <!-- Bootstrap Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        
        <!-- popper.js -->
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" 
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>

<!-- Materialize -->
        <!--Materialize JavaScript -->
        <!-- <script type="text/javascript" src="<?php echo base_url();?>js/materialize.min.js"></script> -->

    </body>
</html>  

        