<?php

$url = "http://forex.cbm.gov.mm/api/latest";
// //$url = "localhost/laravel/laravel/public/client/currency.html";
// $cURL = curl_init();

// curl_setopt($cURL, CURLOPT_URL, $url);
// curl_setopt($cURL, CURLOPT_HTTPGET, true);

// curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json',
//     'Accept: application/json'
// ));

// $result = curl_exec($cURL);

// curl_close($cURL);



// print_r($result);

$ch = curl_init();
    $headers = array(
    'Accept: application/json',
    'Content-Type: application/json',

    );
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);

    $res = curl_exec($ch);

    echo  $res;



?>