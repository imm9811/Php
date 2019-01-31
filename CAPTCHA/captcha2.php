<?php

$response_recaptcha = $_POST['g-recaptcha-response'];
if(isset($response_recaptcha)&$response_recaptcha){
	$secret="6LeaMosUAAAAALAMft_Hhh1t_0Ppuyrk0OI722uX";
    $ip=$_SERVER['REMOTE_ADDR'];
    $validation_server=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");
        var_dump($validation_server);

}
?>