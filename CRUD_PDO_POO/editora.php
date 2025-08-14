<?php
    class Editora {
        private $id;
        private $nome;
        private $site;
        private $email;
    

        public function __construct($nome, $site, $email){
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function inserir(){ }
     
        public function buscar($id){ }

        public function buscarTodos(){ }

        public function atualizar(){ }

        public function login(){ }

        public function input(){ }
    }
?>