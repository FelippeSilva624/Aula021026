<?php

class Administrador{
    private string $cargo;

    public function _construct(string $cargo){
        $this->cargo = $cargo;
    }

    public function banirJogador(string $jogador):void{
    echo "</br>O administrador está banindo o jogador: $jogador\n";
}

public function getCargo(): string{
    return $this->cargo;
}