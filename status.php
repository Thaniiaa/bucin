<?php
 
$access_token = "Ganti Sama Tokenmu";
$url = "https://graph.facebook.com/me/feed?method=POST";
if(!empty($_GET['x'])){
$status = $_GET['x'];
} else {
$send = file("https://www.ndtvx.com/bucin.php");
$nabila = $send[array_rand($send)];
$statusku= $nabila; 
} 
    $ch = curl_init();
    $attachment =  array(   'access_token'  => $access_token,                       
                        'message'          => $statusku,
                    );
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $attachment);
    $result= curl_exec($ch);
    curl_close ($ch);
?>
