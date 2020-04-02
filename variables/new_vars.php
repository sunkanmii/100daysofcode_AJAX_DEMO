<?php
    $x = 5;
    $y = 10;

    function myFunc1() {
        /*
           Php stores all global variables in an array
            called $GLOBALS[index], index = name of the variable.
        */
        global $x, $y;
        $y = $x + $y;
    }
    
    myFunc1();
    echo $y;
    
    function myFunc2() {
        /*
        Php stores all global variables in an array
        called $GLOBALS[index], index = name of the variable.
        */
        
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myFunc2();
    echo $y;
    ?>