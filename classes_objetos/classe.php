<div class="titulo">Primeira classe</div>

<?php
class Cliente{
    // atributos
    public $nome = 'Antonio';
    public $idade = 18;

    public function apresentar(){
        echo "Nome: {$this->nome} idade: {$this->idade}";
    }
}

$c1 = new Cliente();
$c1->nome = "Angela Boita";
$c1->idade = 32;
$c1->apresentar();
echo "<br>";
$c2 = new Cliente;
$c2->nome = "Amanda Cristina Dona";
$c2->idade = 33;
$c2->apresentar();
