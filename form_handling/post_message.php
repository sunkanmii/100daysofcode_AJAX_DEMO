<?php
    if(htmlspecialchars($_SERVER["REQUEST_METHOD"]) == "POST"){
        //collect value of input field.
        $pieName = $_POST["fname"];
        if(empty($pieName)){
            echo "Name is empty";
        }
        else {
            echo $pieName;
        }
    }

?>