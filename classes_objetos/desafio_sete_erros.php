<div class="titulo">Desafio dos 7 erros</div>

<?php
interface Template {
    public function metodo1();
    public function metodo2($parametros);
}

 class ClasseAbstrata implements Template{
    public function metodo2($parametros){

        echo "Estou funcionando";
    }

    public function metodo1(){
        echo 'Cristiaaaaannn';
    }
}

class Classe extends ClasseAbstrata{
    function __constructor($parametros){
        echo 'Teste!';
    }
}

$exemplo = new Classe();
$exemplo->metodo2("Teste");