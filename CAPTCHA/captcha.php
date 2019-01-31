<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba captcha</title>
</head>
<body>
	

<?php
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LeaMosUAAAAALAMft_Hhh1t_0Ppuyrk0OI722uX',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch); 

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $response=$_POST['g-recaptcha-response'];
    $res = post_captcha($response);
  	

    if (!$res['success']) {
        // What happens when the reCAPTCHA is not properly set up
        echo 'reCAPTCHA error: Check to make sure your keys match the registered domain and are in the correct locations. You may also want to doublecheck your code for typos or syntax errors.';
    } else {
        // If CAPTCHA is successful...

        // Paste mail function or whatever else you want to happen here!
        /*
        echo '<br><p>CAPTCHA was completed successfully!</p><br>';
        $secret="6LeaMosUAAAAALAMft_Hhh1t_0Ppuyrk0OI722uX";
        $ip=$_SERVER['REMOTE_ADDR'];
        $validation_server=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&remoteip=$ip");
        var_dump($validation_server);
        */
        //echo $validation_server;
	
    }
} 

?>
</body>
</html>