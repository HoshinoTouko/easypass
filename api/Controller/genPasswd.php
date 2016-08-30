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
        // init output data
        $result = "";
        // Get the array's length
        $arrayLength = sizeof($eArray);

        $pointer = 0;
        for($i=0; $i<$length; $i++){
            // Set an random offs
            $t = $this->findWhere($newPass[$i])%17;
            $pointer += $t;
            // Get chars
            $char = $eArray[$pointer%$arrayLength];
            $result .= $char;
        }
        return $result;
    }

    function findWhere($char){
        $t = ord($char);
        if ($t >= 48 and $t <= 57){
            return $t-47;
        }
        elseif ($t >= 97 and $t <= 122){
            return $t-86;
        }
        else{
            return $t%32;
        }
    }
}