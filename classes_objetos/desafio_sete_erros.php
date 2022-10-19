<div class="titulo">Desafio dos 7 erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2(array $parametros);
}

abstract class ClasseAbstrata implements Template {

    public function metodo1() {
        echo 'Metodo 1 implementado<br>';
    }

    public function metodo2($parametros) {
        echo 'Metodo 2 implementado com os parametros:';
        foreach($parametros as $p) {
            echo "<br>$p";
        }
        echo '<br>';
    }

    public function metodo3(){
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata {
    function __constructor($parametros){

    }
}

$exemplo = new Classe();
$exemplo->metodo1();
$exemplo->metodo2(array('teste' => 999, 'erro' => 7));
$exemplo->metodo3();