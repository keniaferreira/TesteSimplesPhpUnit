<?php

class Pessoa {
    // Atributos privados da classe
    private $nome;
    private $idade;
    
    // Construtor da classe que recebe o nome e a idade da pessoa
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    // Método público que retorna o nome da pessoa
    public function getNome() {
        return $this->nome;
    }
    
    // Método público que retorna a idade da pessoa
    public function getIdade() {
        return $this->idade;
    }
    
    // Método público que verifica se a pessoa é maior de idade
    public function isMaiorDeIdade() {
        return $this->idade >= 18;
    }
}