<?php
    $x = 10;
    $y = 11;

    function add(){
        return $GLOBALS['x'] + $GLOBALS['y'];
    }

    echo add();
?>