<?php 

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message','Preencha todos os campos!');
    redirect('create-user');
}


$validate = (array) validate([
    'firstname' => 's',
    'middlename' => 's',
    'email' => 'e',
    'password' => 's',
]);

$cadastrado = create('users', $validate);

if($cadastrado){
    flash('message',"Usuário ". $validate['firstname'] . " cadastrado com sucesso!", 'success');
    return redirect('create-user');
}

flash('message','Erro ao cadastrar!');
redirect('create-user');