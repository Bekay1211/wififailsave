<?php
    $ssid = $_POST['wifi'];
    $password = $_POST['password'];
    exec(sprintf("nmcli -t -w 10 d wifi connect \"%s\" password \"%s\"", $ssid, $password), $retval);
    foreach($retval as $value){
        echo sprintf("%s<br>", $value);
    }
?>