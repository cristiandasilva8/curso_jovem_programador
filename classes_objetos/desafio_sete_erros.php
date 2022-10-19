<div class="titulo">Desafio dos 7 erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametros);
}

abstract class ClasseAbstrata implements Template{
    public function metodo3(){
        
        echo "Estou funcionando";
    }
    function metodo1(){
        echo "pau";
    }
    function metodo2($teste){
        $this->teste= $teste;
    }
}



class Classe  extends ClasseAbstrata{
    function __constructor($parametros){
        $this->paremetros = $parametros;
    }
}

$exemplo =new Classe('parametro');
$exemplo->metodo3();