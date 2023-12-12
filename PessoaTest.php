<?php

require 'vendor/autoload.php';
require 'Pessoa.php';

use PHPUnit\Framework\TestCase;

// Classe de teste herda de PHPUnit\Framework\TestCase
class PessoaTest extends TestCase {

    // Método de teste que verifica se o construtor da classe Pessoa funciona corretamente
    public function testConstrutor() {
        // Cria uma instância da classe Pessoa com o nome "João" e a idade 25
        $pessoa = new Pessoa("João", 25);
        
        // Verifica se o nome da pessoa é "João"
        $this->assertEquals("João", $pessoa->getNome());
        
        // Verifica se a idade da pessoa é 25
        $this->assertEquals(25, $pessoa->getIdade());
    }

    // Método de teste que verifica se o método isMaiorDeIdade da classe Pessoa funciona corretamente
    public function testIsMaiorDeIdade() {
        // Cria uma instância da classe Pessoa com o nome "Maria" e a idade 17
        $pessoa = new Pessoa("Maria", 17);
        
        // Verifica se a pessoa é menor de idade
        $this->assertFalse($pessoa->isMaiorDeIdade());
        
        // Cria uma instância da classe Pessoa com o nome "Pedro" e a idade 18
        $pessoa = new Pessoa("Pedro", 18);
        
        // Verifica se a pessoa é maior de idade
        $this->assertTrue($pessoa->isMaiorDeIdade());
    }

}
