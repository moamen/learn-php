<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'ConnectionClass.php';
$Cnn = new Connection();
$link = $Cnn->Connect();
if($link){
    echo "connected";
}
?>
