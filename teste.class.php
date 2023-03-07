<?php
//importação
require_once ("pessoa.class.php");

class Teste {
    //objeto pessoa com a visibilidade privada
    private $pessoa;

    public function __construct(){
        //objeto chamado pessoa que recebe a classe Pessoa()
        $pessoa = new Pessoa();
        // Passar um valor para o método setNome
        $pessoa->setNome($_POST['nome']."<br>" );
        //imprimir um valor do metodo getNome
        echo $pessoa->getNome();
        // Passar um valor para o método setEndereco
        $pessoa->setEndereco($_POST['endereco']."<br>");
        //imprimir um valor do metodo getEndereco
        echo $pessoa->getEndereco();
        // Passar um valor para o método setBairro
        $pessoa->setBairro($_POST['bairro']."<br>");
        //imprimir um valor do metodo getBairro
        echo $pessoa->getBairro();
        // Passar um valor para o método setCep
        $pessoa->setCep($_POST['cep']."<br>");
        //imprimir um valor do metodo getCep
        echo $pessoa->getCep();
        // Passar um valor para o método setCidade
        $pessoa->setCidade($_POST['cidade']."<br>");
        //imprimir um valor do metodo getCidade
        echo $pessoa->getCidade();
        // Passar um valor para o método setEstado
        $pessoa->setEstado($_POST['estado']."<br>");
        //imprimir um valor do metodo getEstado
        echo $pessoa->getEstado();
    }
    //instancia
}new Teste ();

?>