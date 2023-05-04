<?php 

require "../../../bootstrap.php";

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'about' => 's',
]);

dd($validate->email);