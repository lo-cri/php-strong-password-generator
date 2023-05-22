<?php
//    if( isset($_GET["password"]) ) {

    if($_GET["password"] == ""){
        echo "Invalido, devi inserire un numero per generare una password";

        exit();
    }

        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $special ="!?@#";
        $pass = "";
        $count = 0;
        for ($i = 0; $i < $_GET["password"]; $i++) {
            if(random_int(0,1) && $count < 1){
                $n = rand(0, strlen($special) - 1);
                $pass .= $special[$n];
                $count++;
            }else{
                $n = rand(0, strlen($alphabet) - 1);
                $pass .= $alphabet[$n];
            }

        }
        echo "Your password is" . ' ' . $pass;
      
        exit();
    // }
?>