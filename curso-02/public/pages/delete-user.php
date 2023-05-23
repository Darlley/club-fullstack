<?php 

$request = request();
$id = $request['id'];

$deleted = delete('users', 'id', $id);

if($deleted){
    flash('message',"Usuário deletado!", 'success');
    return redirectToHome();
}

flash('message','Erro ao deletar!');
redirectToHome();