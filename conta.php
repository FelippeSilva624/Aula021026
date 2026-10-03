<?php
class Conta{    
private int $id;
private string $email;
private string $senha;

public function __construct(int $id,string $email, $id);
$this->id=$id;
$this->email=$email;
$this->senha=password_hash($senha, PASSWORD_DEFAULT)
}

public function login(string $senha): bool
{
    return password_verify($senha, $this->senha);
}

public function alterarSenha(string $nova): void{
    $this->senha=password_has($nova, PASSWORD_DEFAULT)
    echo "ei Psiu deu certo.\n";
}

?>