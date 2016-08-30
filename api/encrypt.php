<?php
/**
 * Created by PhpStorm.
 * User: touko
 * Date: 16-8-29
 * Time: 下午11:47
 */



use Model\getEArray;
use Model\genPasswd;

include 'Controller/genPasswd.php';
include 'Controller/init.php';

//init
$getEArray = new getEArray();
$genPasswd = new genPasswd();
// Values initialize
$originPass = $_GET["originPass"];
$add1 = $_GET["add1"];
$add2 = $_GET["add2"];
$add3 = $_GET["add3"];
$length = $_GET["length"];
$hasNumber = $_GET["hasNumber"];
$hasPunctuation = $_GET["hasPunctuation"];

// Generate encrypt array
$eArray = $getEArray->getEArray();

// Handle values
$newPass = hash('sha512', base64_encode($originPass . $add1 . $add2 . $add3));

// Generate password
try{
    $result = $genPasswd->genPasswd($eArray, $newPass, $length);
    $status = true;
    $info = "Success";
}
catch (Exception $e) {
    $status = false;
    $info = $e->getMessage();
}

// Return JSON
echo json_encode(
    array(
        'status'=> $status,
        'info'=> $info,
        'result'=> $result
        //'passwdMap'=> $eArray
    )
);