<?php

/**
 * Undocumented function
 *
 * @param String $key       
 * @param String $message
 * @param String $type
 * @return void
 */
function flash(String $key, String $message, String $type = 'danger')
{
    $textColor = 'text-red-500';
    if($type !== 'danger'){
        $textColor = 'text-blue-500';
    }

    if(!isset($_SESSION['flash'][$key])){

        $openSpanTag = "<span class='{$textColor}'>";
        $closeSpanTag = "</span>";
        $result =  $openSpanTag . $message . $closeSpanTag;

        $_SESSION['flash'][$key] = $result;
    }


}

/**
 * Undocumented function
 *
 * @param String $key
 * @return void
 */
function get(String $key) 
{
    if(isset($_SESSION['flash'][$key])){
        $message = $_SESSION['flash'][$key];

        unset($_SESSION['flash'][$key]);

        return $message ?? '';
    }
}