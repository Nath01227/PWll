<?php
    class Ebook {
        private $id;
        private $titulo;
        private $descricao;
        private $isbn;
        private $data_puclicacao;
        private $preco;
        private $idioma;
        private $foto;

        public function __construct($titulo, $descricao, $isbn, $data_puclicacao, $preco, $idioma, $foto){
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->isbn = $isbn;
            $this->data_publicacao = $data_puclicacao;
            $this->preco = $preco;
            $this->idioma = $idioma;
            $this->foto = $foto;
        }

        public function inserir(){ }
     
        public function buscar($id){ }

        public function buscarTodos(){ }

        public function atualizar(){ }

        public function login(){ }

        public function input(){ }
    }
?>