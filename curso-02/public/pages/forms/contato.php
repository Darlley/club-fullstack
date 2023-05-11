<?php 

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message','Preencha todos os campos!');
    header("location:/?page=contato");
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'about' => 's',
]);

dd($validate);