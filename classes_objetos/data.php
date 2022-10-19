<?php

// criação da Classe
class Data{
    // criando atributos
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        echo "Data: {$this->dia}/{$this->mes}/{$this->ano}";
    }

    public function apresentarComRetorno(){
        return "Data: {$this->dia}/{$this->mes}/{$this->ano}";
    }

    public function apresentarComRetornoEParametros(int $dia, int $mes, int $ano){
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
        return "Data: {$this->dia}/{$this->mes}/{$this->ano}";
    }

    public function somarDoisNumeros(int $num1 = 0, int $num2 = 0){
        return $num1+$num2;
    }
}

$data1 = new Data();

$data1->dia = 15;
$data1->mes = 9;
$data1->ano = 1990;
$data1->apresentar();

$data1->dia = 16;
$data1->mes = 9;
$data1->ano = 1990;
$mensagem = $data1->apresentarComRetorno();
echo "<br>";
echo $mensagem;
echo "<br>";

$mensagem2 = $data1->apresentarComRetornoEParametros(11,12,2005);
echo "<br>";
echo $mensagem2;
echo "<br>";

$soma = $data1->somarDoisNumeros();

echo "O valor da soma é {$soma}";
