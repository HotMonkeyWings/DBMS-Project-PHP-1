<?php
    $otp = "123456";
    $mail_id = 'dev_b180297cs@nitc.ac.in';

    $tmp = exec("python3 ../py/AutoMail.py $mail_id $otp");
    echo $tmp;
?>

