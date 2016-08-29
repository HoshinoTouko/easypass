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

@include LIBRARY_PATH . 'Model/init.php';

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
     * @DynamicRoute /api/encrypt
     */
    function encrypt()
    {
        $getEArray = new getEArray();
        // Values initialize
        $originPass = $_GET["originPass"];
        $add1 = $_GET["add1"];
        $add2 = $_GET["add2"];
        $add3 = $_GET["add3"];
        $length = $_GET["length"];

        // Handle values
        $newPass = $originPass . $add1 . $add2 . $add3;
        $eArray = $getEArray->getEArrayWithLetterAndNumber();
        echo json_encode($eArray);

    }
}
