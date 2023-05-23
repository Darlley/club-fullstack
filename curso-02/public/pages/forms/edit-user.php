<?php 

require "../../../bootstrap.php";

$request = request();
$id = $request['id'];

if(isEmpty()){
    flash('message','Preencha todos os campos!');
    return redirect("edit-user&id=".$id);
}

$validate = (array) validate([
    'firstname' => 's',
    'middlename' => 's',
    'email' => 'e',
]);

if(update('users', $validate, ['id', $id])){
    flash('message',"Atualizado com sucesso!", 'success');
    return redirect("edit-user&id=".$id);
}

flash('message','Erro ao editar!');
redirect("edit-user&id=".$id);