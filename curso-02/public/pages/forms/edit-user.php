<?php 

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message','Preencha todos os campos!');
    redirect('edit-user');
}

$validate = (array) validate([
    'firstname' => 's',
    'middlename' => 's',
    'email' => 'e',
    'password' => 's',
]);

$cadastrado = create('users', $validate);

if($cadastrado){
    flash('message',"Informações de ". $validate['firstname'] . " alteradas com sucesso!", 'success');
    return redirect('edit-user');
}

flash('message','Erro ao editar!');
redirect('edit-user');