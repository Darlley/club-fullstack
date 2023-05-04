<?php

function validate(array $fields){
    $validate = [];

    $request = request();
    
    foreach($fields as $field => $type){
        switch($type){
            case 's':
                $validate[$field] = strip_tags($request[$field]);
                break;
            case 'e':
                $validate[$field] = filter_var($request[$field], FILTER_VALIDATE_EMAIL);
                break;
        }
    }

    return (object) $validate;
}