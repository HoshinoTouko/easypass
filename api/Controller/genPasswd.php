<?php
/**
 * Created by PhpStorm.
 * User: touko
 * Date: 16-8-29
 * Time: 下午10:26
 */

namespace Model;

class genPasswd{

    function genPasswd($eArray, $newPass, $length){
        $result = "";
        $t = ord($newPass[0])%32;
        $arrayLength = sizeof($eArray);

        for($i=0; $i<$length; $i++){
            $char = $eArray[ord($newPass[$t+$i])%$arrayLength];
            $result .= $char;
        }
        return $result;
    }
}