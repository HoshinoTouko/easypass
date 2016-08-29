<?php
/**
 * Created by PhpStorm.
 * User: touko
 * Date: 16-8-25
 * Time: 上午12:32
 */

namespace Controller;

use Core\Template;
use Model\getEArray;
use Model\genPasswd;

@include LIBRARY_PATH . 'Model/init.php';
@include LIBRARY_PATH . 'Model/genPasswd.php';

class api{
    /**
     * @DynamicRoute /api/encrypt/{string}
     * @param $pass
     */
    function dynamicRouteTest($pass)
    {
        echo $pass;
    }

    /**
     * @DynamicRoute /encrypt
     */
    function encrypt()
    {
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

    }
}
