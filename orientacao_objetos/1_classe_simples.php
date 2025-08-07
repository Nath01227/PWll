<?php
    class Pessoa {
        //Opções para encapsulamento
        //public - A variavel é acessível de fora da classe
        //private - É acessível somente dentro da classe
        //protected - É acessível somente por herança
        public $nome;
        public $idade;

        public function apresentar(){
            echo "Olá, meu nome é $this->nome";
            echo '<hr>';
            echo "Tenho $this->idade anos";
        }
    }

    $aluno1 = new Pessoa();
    $aluno1->nome = 'Luciano';
    $aluno1->idade = '17';
    $aluno1->apresentar();

    $aluno2 = new Pessoa();
    $aluno2->nome = 'Kauany';
    $aluno2->idade = '16';
    $aluno2->apresentar();
?>
