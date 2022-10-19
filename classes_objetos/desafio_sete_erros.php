<div class="titulo">Desafio dos 7 erros</div>

<?php
interface Template {   
    function metodo1();
    function metodo2($parametros);
}

abstract class ClasseAbstrata implements Template{
    public function metodo3(){
        echo "Estou funcionando";
    }
    function metodo1(){
        echo "Acho que agora vai!";
    }

    public function metodo2($parametros){
        echo "Parâmetro: {$this->parametros}<br>";
    }
}

class Classe extends ClasseAbstrata{
    public $parametros;

    function __construct($parametros = 0){
        $this->parametros = $parametros;
    }
}

$exemplo = new Classe();
$exemplo->metodo3();