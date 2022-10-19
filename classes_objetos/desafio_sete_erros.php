<div class="titulo">Desafio dos 7 erros</div>

<?php
interface Template {
    public function metodo1();
    public function metodo2($parametros);
}

class ClasseAbstrata implements Template{//extends Template{
    public function metodo1(){
        echo "Estou funcionando";
    }
    public function metodo2($parametros){
        echo "Estou funcionando";
    }

}

class Classe extends ClasseAbstrata {
    function __constructor($parametros){
        echo "claudinei";
    }

}

$exemplo = new Classe('teste');
$exemplo->metodo2('Claudinei');