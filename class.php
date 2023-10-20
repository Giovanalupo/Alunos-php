<?php 
Class pessoa {

public $Nome;
public $Altura ;
public $Nascimento;
public $Hobbie;

public function MostrarPessoa(){
    echo "  Nome:". $this ->Nome . "<br/>";
    echo "  Altura:". $this ->Altura . "<br/>";
    echo "  nascimento". $this ->Nascimento . "<br/>";
    echo "  Hobbie:". $this ->Hobbie . "<br/>";
}

}

?>