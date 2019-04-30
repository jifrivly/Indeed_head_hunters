<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Bootstrap 4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- <link rel="stylesheet" type="text/css" href="/indeed1/css/dashboard.css"> -->

    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" >


<!-- My css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/my_style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dashboard.css">
</head>
<body>

            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card ">
                    <div class="card-title">
                        <?php echo $Job_Title; ?>
                    </div>
                    <div class="card-body">
                        <?php echo $Job_Description; ?>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-outline-success">Apply</button>
                        <span class="float-right text-muted">
                            <?php 
                                $date1 = date_create(date('Y-m-d'));
                                $date2 = date_create($Job_Deadline);
                            ?>
                            Only <?php echo date_diff($date1,$date2)->format("%a "); ?> days to go
                        </span>
                    </div>
                </div>
            </div>
        
    
            
</body>
</html>