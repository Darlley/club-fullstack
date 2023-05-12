<?php 

function dd($dump){
    var_dump($dump);
    die(); 
}

function request(){
    $request = $_SERVER['REQUEST_METHOD'];
    
    if($request === 'POST'){
        return $_POST;
    }

    return $_GET;
}

function redirect($page)
{
    header('location:/?page=' . $page);
}

function redirectToHome()
{
    header('location:/');
}