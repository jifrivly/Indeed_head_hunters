<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// START of function SplitAndRetrieve
    function SplitAndRetrieve($string1)
    {
        $string2 = strtok($string1,',');
        $n = 0;
        while ($string2 !== false) {
            // echo "$string2 <br>";
            $string3[$n] = $string2;
            $n++;
            $string2 = strtok(',');
        }

        return $string3;
    }
// END of function SplitAndRetrieve

// START of function ArrayToString
    function ArrayToString($array1)
    {
        $string1 = $array1[0];
        for ($i=1; $i < count($array1); $i++) {
            $string1 = $string1 . "," . $array1[$i];
        }
        return $string1;
    }
// END of function ArrayToString

// GENERAL HELPER FUNCTIONS
    function testArray($arr)
    {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }

    

/* End of file filename.php */
?>
