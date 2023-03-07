<?php
// classe com nome pessoa
class Pessoa {
    //objetos com visibilidade privada
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //metodo de captura do valor do objeto
    public function getNome() {
        return $this->nome;
    }

    // metodo de alteração de valor de objeto
    public function setNome($nome) {
        $this->nome = $nome; 
    }

    //metodo de captura do valor do objeto
    public function getEndereco() {
        return $this->endereco;
    }

    // metodo de alteração de valor de objeto
    public function setEndereco($endereco) {
        $this->endereco = $endereco; 
    }

    //metodo de captura do valor do objeto
    public function getBairro() {
        return $this->bairro;
    }

    // metodo de alteração de valor de objeto
    public function setBairro($bairro) {
        $this->bairro = $bairro; 
    }

    //metodo de captura do valor do objeto
    public function getCep() {
        return $this->cep;
    }

    // metodo de alteração de valor de objeto
    public function setCep($cep) {
        $this->cep = $cep; 
    }

    //metodo de captura do valor do objeto
    public function getCidade() {
        return $this->cidade;
    }

    // metodo de alteração de valor de objeto
    public function setCidade($cidade) {
        $this->cidade = $cidade; 
    }

    //metodo de captura do valor do objeto
    public function getEstado() {
        return $this->estado;
    }

    // metodo de alteração de valor de objeto
    public function setEstado($estado) {
        $this->estado = $estado; 
    }
}

?>