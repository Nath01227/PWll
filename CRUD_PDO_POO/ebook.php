<?php
    class Ebook {
        private $id;
        private $titulo;
        private $descricao;
        private $isbn;
        private $data_publicacao;
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

        public function inserir($titulo, $descricao, $isbn, $data_puclicacao, $preco, $idioma, $foto){ 
            $stmt = $pdo->prepare("INSERT INTO usuario (nome, email, senha, tipo) VALUES (:nome, :email, :senha, :tipo)");
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':isbn', $isbn);
            $stmt->bindParam(':data_publicacao', $tipo);
            $stmt->bindParam(':preco', $preco);
            $stmt->bindParam(':idioma', $idioma);
            $stmt->bindParam(':foto', $foto);
            $stmt->execute(); 
        }
     
        public function buscar($id){ 
            $stmt = $pdo->query("SELECT * FROM ebook WHERE id = $id");
	        $ebooks = $stmt->fetchAll();
        }

        public function buscarTodos(){ 
            $stmt = $pdo->query("SELECT * FROM ebook");
	        $ebooks = $stmt->fetchAll();
        }

        public function atualizar(){ }

        public function deletar(){
            $stmt = $pdo->prepare('DELETE FROM ebook WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }

        public function login(){ }

        public function input(){ }
    }
?>