<?php 



function query($query){
    
    global $con;
    
    return mysqli_query($con, $query);
}

function confirm($result) {
    
    global $con;
    
    if(!$result){
        
        die("Failed connection". mysqli_error($con));
    }
}

function fetch_array($result){
    
    global $con;
    
    return mysqli_fetch_array($result);
}












?>