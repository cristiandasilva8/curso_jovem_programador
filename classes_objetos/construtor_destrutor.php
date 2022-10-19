<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;
    public $data_nascimento;

    function __construct($novoNome, $data_nasc, $idade = 0){
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
        $this->data_nascimento = $data_nasc;
    }

    function __destruct(){
        echo "E Faliceu!";
    }

    public function apresentar(){
        echo "Nome: {$this->nome} idade: {$this->idade} anos Data de nascimento: {$this->data_nascimento}<br>";
    }

}

$p1 = new Pessoa("Amanda", "19/10/2022");

$p1->apresentar();

unset($p1);