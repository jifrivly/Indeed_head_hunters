<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Personality and IQ Test </title>

    <!-- Bootstrap 4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Font AWESOME -->
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" >

    <style>
        body{
            padding-top: 56px;
            padding-bottom: 25px;
        }
        .container{
            padding-top: 25px;
            background-color: white;
        }
    </style>

</head>
<body class="bg-info">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" >
        <a class="navbar-brand" href="#">INDEED HEADHUNTERS</a>
    </nav>
    <div class="container">

        <div class="card">
            <div class="card-header text-center">
                Personality Test
            </div>
            <div class="card-body">


                <?php echo form_open('test'); ?>
        

                    <?php
                    $j = 0;
                    for ($i=1; $i<=5 ; $i++) { 

                        $j++;
                        $data = array(
                            'count' => $i,
                            'question' => $type1[$j],
                        );

                        $this->load->view('test/test_view', $data);

                    }
                    $j = 0;                    
                    for ($i=6; $i<=10 ; $i++) { 

                        $j++;
                        $data = array(
                            'count' => $i,
                            'question' => $type2[$j],
                        );

                        $this->load->view('test/test_view', $data);

                    }
                    $j = 0;
                    for ($i=11; $i<=15 ; $i++) { 

                        $j++;
                        $data = array(
                            'count' => $i,
                            'question' => $type3[$j],
                        );

                        $this->load->view('test/test_view', $data);

                    }
                    $j = 0;
                    for ($i=16; $i<=20 ; $i++) { 
                        $j++;
                        $data = array(
                            'count' => $i,
                            'question' => $type5[$j],
                        );

                        $this->load->view('test/test_view', $data);

                    }
                    ?>

                    <div class="right-align">
                    <button class="btn waves-effect waves-light " type="submit" name="action">Submit


                <?php echo form_close(); ?>
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