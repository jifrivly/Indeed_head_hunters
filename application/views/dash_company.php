<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Dash Board</title>

<!-- Bootstrap 4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- <link rel="stylesheet" type="text/css" href="/indeed1/css/dashboard.css"> -->

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" >


<!-- My css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/my_style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dashboard.css">
<style>
    body {
        padding-top: 70px;
    }
    body .content-wrapper {
        min-height: calc(100vh - 70px - 56px);
    }
    .bg-white{
        background-color: white;
    }
    
</style>
    

</head>
<body class=" sticky-footer bg-info" id="page-top" >

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" >
        <a class="navbar-brand" href="#">INDEED HEADHUNTERS</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a href="" class="nav-link">
                    <!-- <?php echo base_url();?>index.php/> -->
                        
                        <i class="far fa-2x fa-fw fa-comment" style="color: skyblue;" title=" Contact With Admin "></i>
                        <span class="d-lg-none"> Contact With Admin </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?php echo base_url();?>index.php/Job_or_Internship/Post" class="nav-link">
                        <button class="btn btn-outline-info"><b> Add Job </b>
                            <i class="fa fa-fw fa-plus"></i>
                        </button>
                    </a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-2x fa-user-circle" style="color: skyblue;"></i>
                        <span class="d-lg-none">Account
                            <span class="badge badge-pill badge-primary">12 New</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Account</h6>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">
                            <i class="fa fa-fw fa-wrench"></i> View and Edit My Account
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item " data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out-alt"></i> Logout
                        </a>                     
                        
                    </div>
                </li>
                
            </ul>
        </div>
    </nav>




    <div class="px-0 py-3 bg-white content-wrapper">
        <div class="container-fluid">
<!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"> <?php echo $this->session->userdata('LoggedInUserName'); ?></li>
            </ol>


<!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-handshake"></i>
                            </div>
                            <div class="mr-5">12 New Applicants!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>
                

                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">26 New Messages!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>


                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">11 New !</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>


                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="far fa-fw fa-life-ring"></i>
                            </div>
                            <div class="mr-5">You Have A Problem !</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </div>
                </div>

            </div>

            <hr>
            <div id="jobs">
                <h5>Your Company Jobs and Details</h5>
                <br>
            <div class="row" >
                <?php 

                    $this->load->helper('job_helper');
                    
                    $id = $this->session->userdata("LoggedInRegisterNo");
                    $data = JobDatasForCompany($id);
                    
                    
                    foreach ($data as $singlerow ) {
                        // testArray($singlerow);
                        $this->load->view('jobsofcompany',$singlerow);
                    }
                    
                    
                ?>

            </div>
            </div>

        </div>
    




        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                <small>Copyright © Indeed Head-hunders 2018</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <!-- <a class="scroll-to-top rounded" href="#">
            <i class="fa fa-angle-up"></i>
        </a> -->
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url();?>index.php/Logout">Logout</a>
                </div>
                </div>
            </div>
        </div>
    </div>

<!-- JS -->

<!-- Bootstrap -->
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <!-- popper.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        
        <!-- Bootstrap Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!-- <script src="<?php base_url(); ?>js/dashboard.js"></script> -->
        

</body>
</html>