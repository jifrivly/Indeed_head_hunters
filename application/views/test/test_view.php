
    
    <div class="row">
        <p><?php echo $count . ":" . $question['question']; ?>
            <br>
            <br>

            <?php 

                if ($count == 6 || $count == 7 || $count == 8 || $count == 9 || $count == 10 ) {
                    echo '<input type="radio" name="group $count " id="" >&nbsp;&nbsp;';
                    echo '<label class="radio-inline"> ' . $question["opt1"] . '</label>';
                    echo "<br>";
                    echo '<input type="radio" name="group $count " id="" >&nbsp;&nbsp;';
                    echo '<label class="radio-inline"> ' . $question["opt2"] . '</label>';
                    echo '<br>';
                    echo '<input type="radio" name="group $count " id="" >&nbsp;&nbsp;';
                    echo '<label class="radio-inline"> ' . $question["opt3"] . '</label>';
                    echo '<br>';
                    echo '<input type="radio" name="group $count " id="" >&nbsp;&nbsp;';
                    echo '<label class="radio-inline"> ' . $question["opt4"] . '</label>';
                    echo '<br>';
                    echo '<input type="radio" name="group $count " id="" >&nbsp;&nbsp;';
                    echo '<label class="radio-inline"> ' . $question["opt5"] . '</label>';
                    echo "<br> <br> <br>";
                }
                else {
                    echo '<input type="radio" name="group $count " id="" >&nbsp;&nbsp;';
                    echo '<label class="radio-inline"> ' . $question["opt1"] . '</label>';
                    echo "<br>";
                    echo '<input type="radio" name="group $count " id="" >&nbsp;&nbsp;';
                    echo '<label class="radio-inline"> ' . $question["opt2"] . '</label>';
                    echo '<br>';
                    echo '<input type="radio" name="group $count " id="" >&nbsp;&nbsp;';
                    echo '<label class="radio-inline"> ' . $question["opt3"] . '</label>';
                    echo "<br> <br> <br>";
                } 

            ?>


        </p>
        
        
    </div>

    