<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Registration</title>

    
    <!-- Materialize Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.3/css/materialize.min.css">


    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/my_style.css'); ?>">
    

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font AWESOME -->
    <!-- <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> -->


    <?php
        $company_type = array('AGRICULTURE AND ALLIED INDUSTRIES' => 'AGRICULTURE AND ALLIED INDUSTRIES',
                            'AUTOMOBILES' => 'AUTOMOBILES',
                            'AUTO COMPONENTS' => 'AUTO COMPONENTS',
                            'AVIATION' => 'AVIATION',
                            'BANKING' => 'BANKING',
                            'CEMENT' => 'CEMENT',
                            'CONSUMER DURABLES' => 'CONSUMER DURABLES',
                            'EDUCATION AND TRAINING' => 'EDUCATION AND TRAINING',
                            'ENGINEERING AND CAPITAL GOODS' => 'ENGINEERING AND CAPITAL GOODS',
                            'FINANCIAL SERVICES' => 'FINANCIAL SERVICES',
                            'GEMS AND JEWELLERY' => 'GEMS AND JEWELLERY',
                            'HEALTHCARE' => 'HEALTHCARE',
                            'INFRASTRUCTURE' => 'INFRASTRUCTURE',
                            'INSURANCE' => 'INSURANCE',
                            'IT & ITES' => 'IT & ITES',
                            'MANUFACTURING' => 'MANUFACTURING',
                            'MEDIA AND ENTERTAINMENT' => 'MEDIA AND ENTERTAINMENT',
                            'OIL AND GAS' => 'OIL AND GAS',
                            'PHARMACEUTICALS' => 'PHARMACEUTICALS',
                            'PORTS' => 'PORTS',
                            'REAL ESTATE' => 'REAL ESTATE',
                            'RETAIL' => 'RETAIL',
                            'SCIENCE AND TECHNOLOGY' => 'SCIENCE AND TECHNOLOGY',
                            'SERVICES' => 'SERVICES',
                            'STEEL' => 'STEEL',
                            'TELECOMMUNICATIONS' => 'TELECOMMUNICATIONS',
                            'TEXTILES' => 'TEXTILES',
                            'TOURISM AND HOSPITALITY' => 'TOURISM AND HOSPITALITY',
                        );

    ?>

    

</head>
<body class="container cyan accent-4">

        <div class="card hoverable darken-1 ">
            <div class="card-content ">
                <span class="card-title purple-text center-align"><b>Company Registration</b></span>
                <hr>
<!-- FORM Start -->
                <?php echo form_open('Company/Registration'); ?>
                <!-- <form action="Company/Registration" method="POST"> -->
                    <br>
<!-- Company Details -->
                <h6> <b> <u> Company Details </u> </b>  </h6>
                
        <!-- Company Name -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="name" type="text" name="name" class="validate" required>
                        <label for="name">Name of company * </label>
                    </div>

        <!-- Description -->

                    <div class="input-field col l6 s12">
                        <textarea name="description" id="description" class="materialize-textarea validate" required ></textarea>
                        <label for="description">Company Description * </label>
                        <span class="helper-text" > Few words about Company ( MOTO etc. ) </span>                        
                    </div>
                </div>


        <!-- Type of Industry -->

                <div class="row"> 
                    <div class="input-field col l6 s12">
                        <select name="company_type" id="company_type" class="validate" required>
                            <option value="" disabled selected>Choose type of Company</option>

                            <?php
                                foreach ($company_type as $x => $y) {
                                    echo '<option value="' . $x . '">' . $y . '</option>';
                                }
                            ?>
                            
                        </select>
                        <label for="industry_type">Company Type * </label>
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
                        <input id="country" name="country" type="text" class="validate" required>
                        <label for="country">Country * </label>
                    </div>
                </div>

                
        <!-- state -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="state" name="state" type="text" class="validate" required>
                        <label for="state">State * </label>
                    </div>

        <!-- District -->
                    <div class="input-field col l6 s12">
                        <input id="district" name="district" type="text" class="">
                        <label for="district">District</label>
                    </div>
                </div>

        <!-- City -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="city" name="city" type="text" class="">
                        <label for="city">City</label>
                    </div>

        <!-- Pincode -->
                    <div class="input-field col l6 s12">
                        <input id="pincode" name="pincode" type="text" class="validate" >
                        <label for="pincode">Pincode </label>
                    </div>
                </div>



        <!-- Email -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">mail</i>
                        <input id="email" name="email" type="email" class="validate" required>
                        <label for="email">Email * </label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right"> Enter active email address </span>
                    </div>


        <!-- Phone Number -->
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">phone</i>
                        <input type="tel" name="mobile" id="mobile" class="validate" required>
                        <label for="mobile">Mobile Number * </label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right"> Enter valid phone number </span>
                        
                    </div>
                </div>


        <!-- website -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="website" name="website" type="url" class="validate">
                        <label for="website">Website </label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right"> URL of company website </span>
                    </div>
    
        <!--  -->
    
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="">
                        <label for="">Something</label>
                    </div>
                </div>


                <hr>  
                <br>
<!-- Contact persone Details -->

                <h6> <b> <u> Contact persone Details </u> </b>  </h6>
                <p style="font-size: 10px;">Details of authorized person for job recruitment</p>


        <!-- Person Name -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="person_name" name="person_name" type="text" class="validate" required >
                        <label for="person_name">Contact person name * </label>
                    </div>
    
        <!--  -->
    
                    <div class="input-field col l6 s12">
                        <input id="" type="text" >
                        <label for="">Something</label>
                    </div>
                </div>
                
        <!-- Email -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">mail</i>
                        <input id="person_email" name="person_email" type="email" class="validate" required>
                        <label for="person_email">Email * </label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right"> Email address of persone </span>
                    </div>


        <!-- Phone Number -->
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">phone</i>
                        <input type="tel" name="person_mobile" id="person_mobile" class="validate" required>
                        <label for="person_mobile">Mobile Number * </label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right"> Phone number of persone </span>
                        
                    </div>
                </div>

                <hr>
                <br>
<!-- Login Data -->
                <h6> <b> <u> Account Details </u> </b>  </h6>
        <!-- Username -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="user_name" name="user_name" type="text" class="validate" required>
                        <label for="user_name">Create your Username * </label>
                    </div>
        
        <!-- password -->
        
                    <div class="input-field col l6 s12">
                        <input id="password" type="password" name="password" class="validate" required>
                        <label for="password">Create your Password * </label>
                    </div>
                </div>

        <!-- retype password -->
                <div class="row">

                    <div class="input-field col l6 s12">
                        <input id="re_password" name="re_password" type="password" >
                        <label for="re_password">Conform Password</label>
                    </div>
        <!--  -->
                    <div class="input-field col l6 s12">
                        <input id="" name="" class="" type="text" >
                        <label for="">Something</label>
                    </div>

                </div>


                <div class="right-align">
                    <button class="btn waves-effect waves-light " type="submit" name="action">Submit
                    <i class="material-icons right">send</i></button>
                </div>

                <?php echo form_close(); ?>
                <!-- </form> -->
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