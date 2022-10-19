<div class="titulo">Desafio dos 7 erros</div>


<?php

interface Template {
    function metodo1();
    public function metodo2($parametros);
}

abstract class ClasseAbstrata extends Template{
    public function metodo3(){

        echo "Estou funcionando";
    }
}

class Classe implements ClasseAbstrata{
    function __constructor($parametros){

    }
}

$exemplo = Classe();
$exemplo.metodo3();