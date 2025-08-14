<?php
    class Usuario {
        private $id;
        private $nome;
        private $biografia;
        private $foto;
    

        public function __construct($nome, $biografia, $foto){
            $this->nome = $nome;
            $this->email = $biografia;
            $this->senha = $foto;
        }

        public function inserir(){ }
     
        public function buscar($id){ }

        public function buscarTodos(){ }

        public function atualizar(){ }

        public function login(){ }

        public function input(){ }
    }
?>