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
// Generate encrypt array
$eArray = $getEArray->getEArrayWithLetterAndNumber();
// Values initialize
$originPass = $_GET["originPass"];
$add1 = $_GET["add1"];
$add2 = $_GET["add2"];
$add3 = $_GET["add3"];
$length = $_GET["length"];

// Handle values
$newPass = hash('sha512', base64_encode($originPass . $add1 . $add2 . $add3));

// Generate password
$result = $genPasswd->genPasswd($eArray, $newPass, $length);

// Return JSON
echo json_encode(
    array(
        'result'=> $result,
        'passwdMap'=> $eArray
    )
);