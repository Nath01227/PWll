<?php
    //classe PAI
    class Pessoa {
        public $nome;
        public $tipo;

        public function mostrarTipo() {
            echo "A pessoa <b>$this->nome </b> é do tipo <b>$this->tipo</b> <hr>";
        }
    }

    class PessoaComum extends Pessoa {
        public $cpf;
    }

    class Empresa extends Pessoa {
        public $cnpj;
    }

    $pessoa = new PessoaComum();
    $pessoa->nome = 'Spani';
    $pessoa->tipo = 'fisica';

    $empresa = new Empresa();
    $empresa->nome = 'Software Bugado Ltda';
    $empresa->tipo = 'juridica';

    $pessoa->mostrarTipo();
    $empresa->mostrarTipo();
    
?>