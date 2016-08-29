<?php
/**
 * Created by PhpStorm.
 * User: touko
 * Date: 16-8-29
 * Time: 下午8:09
 */
namespace Model;

class getEArray{

    function getEArrayWithLetterAndNumber(){

        $eArray = [];
        $num = 62;
        for($i=0; $i<=127; $i++){
            if($i>=48 and $i <= 57)
                array_push($eArray, chr($i));
            if($i>=65 and $i <= 90)
                array_push($eArray, chr($i));
            if($i>=97 and $i <= 122)
                array_push($eArray, chr($i));
        }
        $encryptPass = 'TestPass';
        $encryptPassN = hash('sha512', base64_encode($encryptPass));

        $i = 0;
        $j = 0;
        while( isset($eArray[$i]) ){

            $j = ($j+ord($encryptPassN[$i])) % 62;
            $temp = $eArray[$i];
            $eArray[$i] = $eArray[$j];
            $eArray[$j] = $temp;

            $i++;
        }

        return $eArray;
    }
}