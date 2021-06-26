<?php 

//include_once("functions.php");


//include("parts/header.php");
//include("inc/db.php");
//include("parts/navbar.php");

if(!empty($_GET['id'])) {
    
    $url = 'http://api.alquran.cloud/v1/juz/en.asad';
    $ch = curl_init();
    //////////////////
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //postavljanje url-a
    curl_setopt($ch, CURLOPT_URL,$url);
    //Izvrši
    $result = curl_exec($ch);
    //zarvori
    curl_close($ch);
    
    
    //dumpiranje iz json-a
    $data = json_decode($result,true);
    
    if(!empty($data) && $data['status'] == 'OK') {
        
        print_r($data['data']['surahs']);
    }
}

?>
