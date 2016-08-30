<?php
/**
 * Created by PhpStorm.
 * User: touko
 * Date: 16-8-29
 * Time: 下午10:26
 */

namespace Model;

class genPasswd{

    function genPasswd($eArray, $oArray, $newPass, $length){
        // init output data
        $result = "";
        // Get the array's length
        $arrayLength = sizeof($eArray);

        $pointer = 0;
        for($i=0; $i<$length; $i++){
            // Set an random offs
            $t = $this->findWhere($newPass[$i], $oArray)%17;
            $pointer += $t;
            // Get chars
            $char = $eArray[$pointer%$arrayLength];
            $result .= $char;
        }
        return $result;
    }

    function findWhere($str, $array){
        for($i=0; $i<sizeof($array); $i++){
            if ($array[$i] == $str)
                return $i+1;
        }
    }
}