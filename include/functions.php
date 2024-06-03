<?php
session_start();
$dbconn;
dbConnection();

/*Funksioni per Lidhjen me databaze */
function dbConnection(){
    global $dbconn;
    $dbconn=mysqli_connect("localhost",'root','','beautyandmakeup');
    if(!$dbconn){
        die("Deshtoi lidhja me DB".mysqli_error($dbconn));
    }
}

?>