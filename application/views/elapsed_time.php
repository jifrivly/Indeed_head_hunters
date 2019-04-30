<?php 
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        

        
    </head>
    <body>
        <div class="perfomance">
            
            <p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            <p class="visible-lg">this is large screen</p>
            <p class="visible-md">this is medium screen</p>
            <p class="visible-sm">this is small screen</p>
            <p class="visible-xs">this is extra_small screen</p>
            
            
            
        </div>
    </body>

    


</html>
