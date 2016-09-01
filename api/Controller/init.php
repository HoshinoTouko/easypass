<?php
/**
 * Created by PhpStorm.
 * User: touko
 * Date: 16-8-29
 * Time: 下午8:09
 */
namespace Model;

class getArray{

    function getEArray($hasNumber, $hasPunctuation){
        // Array initialize
        $eArray = [];
        // Set the Punctuation's ASCII
        $punc = [33, 35, 36, 37, 38, 43, 45, 46, 63, 64, 95, 126];
        // Traversal all ASCII(10)
        for($i=0; $i<=127; $i++){
            // If hasNumber, push number to the array
            if($hasNumber == "true"){
                if($i>=48 and $i <= 57)
                    array_push($eArray, chr($i));
            }

            // If hasPunctuation, push punctuation to the array
            if($hasPunctuation == "true"){
                if(in_array($i, $punc)){
                    array_push($eArray, chr($i));
                    array_push($eArray, chr($i));
                }
            }


            // Push letters to the array
            if($i>=65 and $i <= 90)
                array_push($eArray, chr($i));
            if($i>=97 and $i <= 122)
                array_push($eArray, chr($i));
        }
        // Get the password for encrypting
        $encryptPass = __PASS__;
        $encryptPassN = hash('sha512', base64_encode($encryptPass));

        $i = 0;
        $j = 0;
        $arrayLength = sizeof($eArray);
        while( isset($eArray[$i]) ){
            $j = ($j+ord($encryptPassN[$i])) % $arrayLength;
            $temp = $eArray[$i];
            $eArray[$i] = $eArray[$j];
            $eArray[$j] = $temp;

            $i++;
        }

        return $eArray;
    }



    // The following function has no use temporarily
    function getOArray($hasNumber, $hasPunctuation){

        $oArray = [];
        $punc = [33, 35, 36, 37, 38, 45, 63, 64, 95, 126];
        for($i=0; $i<=127; $i++){

            // Number
            if($hasNumber == "true"){
                if($i>=48 and $i <= 57)
                    array_push($oArray, chr($i));
            }

            // Punctuation
            if($hasPunctuation == "true"){
                if(in_array($i, $punc))
                    array_push($oArray, chr($i));
            }

            // Letter
            if($i>=65 and $i <= 90)
                array_push($oArray, chr($i));
            if($i>=97 and $i <= 122)
                array_push($oArray, chr($i));
        }

        return $oArray;
    }
}