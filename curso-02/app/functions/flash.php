<?php

function flash(String $key, String $message, String $type = 'danger')
{
    $styleGlobal = 'p-4 rounded-lg flex mb-4 text-base font-bold';
    $textColor = 'text-red-500 bg-red-100';
    if($type === 'success'){
        $textColor = 'text-green-500 bg-green-100';
    }

    if(!isset($_SESSION['flash'][$key])){

        $openSpanTag = "<span class='{$textColor} {$styleGlobal}'>";
        $closeSpanTag = "</span>";
        $result =  $openSpanTag . $message . $closeSpanTag;

        $_SESSION['flash'][$key] = $result;
    }
}

function get(String $key) 
{
    if(isset($_SESSION['flash'][$key])){
        $message = $_SESSION['flash'][$key];

        unset($_SESSION['flash'][$key]);

        return $message ?? '';
    }
}