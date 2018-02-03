<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no ">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Registration</title>

    
    <!-- Materialize Compiled and minified CSS -->
    <?php echo $materialize_css; ?>


    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $my_css; ?>">
    

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font AWESOME -->
    <!-- <?php echo $font_awesome; ?> -->


    <?php
        $company_type = array('1' => 'AGRICULTURE AND ALLIED INDUSTRIES',
                            '2' => 'AUTOMOBILES',
                            '3' => 'AUTO COMPONENTS',
                            '4' => 'AVIATION',
                            '5' => 'BANKING',
                            '6' => 'CEMENT',
                            '7' => 'CONSUMER DURABLES',
                            '8' => 'EDUCATION AND TRAINING',
                            '9' => 'ENGINEERING AND CAPITAL GOODS',
                            '10' => 'FINANCIAL SERVICES',
                            '11' => 'GEMS AND JEWELLERY',
                            '12' => 'HEALTHCARE',
                            '13' => 'INFRASTRUCTURE',
                            '14' => 'INSURANCE',
                            '15' => 'IT & ITES',
                            '16' => 'MANUFACTURING',
                            '17' => 'MEDIA AND ENTERTAINMENT',
                            '18' => 'OIL AND GAS',
                            '19' => 'PHARMACEUTICALS',
                            '20' => 'PORTS',
                            '21' => 'REAL ESTATE',
                            '22' => 'RETAIL',
                            '23' => 'SCIENCE AND TECHNOLOGY',
                            '24' => 'SERVICES',
                            '25' => 'STEEL',
                            '26' => 'TELECOMMUNICATIONS',
                            '27' => 'TEXTILES',
                            '28' => 'TOURISM AND HOSPITALITY',
                        );

    ?>

    

</head>
<body class="container">

    <div class="row ">

        <div class="card hoverable darken-1 ">
            <div class="card-content ">
                <span class="card-title center-align">Company Registration</span>
                <hr>
<!-- FORM Start -->
                <form action="" method="POST">
                    <br>
<!-- Company Details -->
                <h6> <b> <u> Company Details </u> </b>  </h6>
                
        <!-- Company Name -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="first_name" type="text" >
                        <label for="first_name">Name of company</label>
                    </div>

        <!-- Description -->

                    <div class="input-field col l6 s12">
                        <textarea name="description" id="description" class="materialize-textarea" ></textarea>
                        <label for="description">Description </label>
                        <span class="helper-text" > Few words about Company ( MOTO etc. ) </span>                        
                    </div>
                </div>


        <!-- Type of Industry -->

                <div class="row"> 
                    <div class="input-field col l6 s12">
                        <select>
                            <option value="" disabled selected>Choose type of Company</option>

                            <?php
                                foreach ($company_type as $x => $y) {
                                    echo '<option value="' . $x . '">' . $y . '</option>';
                                }
                            ?>
                            
                        </select>
                        <label>Company Type</label>
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
                        <span class="helper-text" data-error="it seems wrong" data-success="right"> Enter active email address </span>
                    </div>


        <!-- Phone Number -->
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">phone</i>
                        <input type="tel" name="mobile" id="" class="validate">
                        <label for="mobile">Mobile Number</label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right"> Enter valid phone number </span>
                        
                    </div>
                </div>


        <!-- website -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="website" type="url" class="validate">
                        <label for="website">Website</label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right"> URL of company website </span>
                    </div>
    
        <!--  -->
    
                    <div class="input-field col l6 s12">
                        <input id="" type="text" class="validate">
                        <label for="">Something</label>
                    </div>
                </div>


                <hr>  
                <br>
<!-- Contact persone Details -->

                <h6> <b> <u> Contact persone Details </u> </b>  </h6>
                <p style="font-size: 10px;">Details of authorized person for job recruitment</p>


        <!--  -->
                <div class="row">
                    <div class="input-field col l6 s12">
                        <input id="person_name" type="text" >
                        <label for="person name">Contact person name</label>
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
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="it seems wrong" data-success="right"> Email address of persone </span>
                    </div>


        <!-- Phone Number -->
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">phone</i>
                        <input type="tel" name="mobile" id="" class="validate">
                        <label for="mobile">Mobile Number</label>
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
                        <input id="user_name" type="text" >
                        <label for="username">Create your Username</label>
                    </div>
        
        <!-- password -->
        
                    <div class="input-field col l6 s12">
                        <input id="pass1" type="password" >
                        <label for="password">Create your Password</label>
                    </div>
                </div>

        <!-- retype password -->
                <div class="row">

                    <div class="input-field col l6 s12">
                        <input id="pass2" type="password" >
                        <label for="re_password">Conform Password</label>
                    </div>
        <!--  -->
                    <div class="input-field col l6 s12">
                        <input id="" type="text" >
                        <label for="">Something</label>
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