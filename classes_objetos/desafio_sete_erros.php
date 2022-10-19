<div class="titulo">Desafio dos 7 erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametros);
}

// Erro 1: Não da para extender usando extends para uma interface, a gente só pode implementar a interface
abstract class ClasseAbstrata implements Template {

    // Erro 2 implementar o metodo 1 da interface
    public function metodo1() {
        echo "Olá Cristian<br>";
    }

    // Erro 3 implementar o metodo 2 da interface 
    public function metodo2($parametros) {
        echo "metodo 2: $parametros<br>";
    }

    public function metodo3(){
        echo "Estou funcionando, Aleluia <br>";
    }
}

// Erro 4: Classe não pode implementar a ClasseAbstrata pois ela não é uma interface, nesse caso usa extends
// Erro 5: Precisa implementar os métodos da ClasseAbstrata metodo1() e metodo2()
class Classe extends ClasseAbstrata{
    function __constructor($parametros){

    }
}

// Erro 6: Ao criar uma nova Classe() precisamos utilizar o new na frente
$exemplo = new Classe();
//Erro 7: Para chamar um método de uma classe não usamos . e sim ->
$exemplo->metodo1();
$exemplo->metodo2("Amanda que não é Amanda, mas sim Angela");
$exemplo->metodo3();

