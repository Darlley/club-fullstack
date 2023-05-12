<?php 

require "../../../bootstrap.php";

if(isEmpty()){
    flash('message','Preencha todos os campos!');
    redirect('contato');
}


$validate = validate([
    'name' => 's',
    'email' => 'e',
    'about' => 's',
]);

$data = [
    'quem'      => $validate->email,
    'para'      => "darlleybrito@gmail.com",
    'mensagem'  => $validate->about,
    'assunto'   => "Testando PHP Mailer"
];

// if(send($data)){
    flash('message','E-mail enviado com sucesso!', 'success');
    return redirect('contato');
// }
