<?php 
    function myTest(){
        static $x = 0;
        echo $x;
        $x++;
    }


    myTest();
    myTest();
    myTest();
    myTest();
    myTest();
    myTest();
    myTest();
    myTest();
    myTest(); //Ouput is 8 instead of one;

?>