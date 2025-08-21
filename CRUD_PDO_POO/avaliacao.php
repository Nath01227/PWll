<?php
    class Avaliacao {
        private $id;
        private $nota;
        private $comentario;
        private $data;

        public function __construct($nota, $comentario, $data){
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->tipo = $tipo;
        }

        public function inserir($nome, $email, $senha, $tipo){ 
            $stmt = $pdo->prepare("INSERT INTO usuario (nome, email, senha, tipo) VALUES (:nome, :email, :senha, :tipo)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->execute();
        }
     
        public function buscar($id){ 
            $stmt = $pdo->query("SELECT * FROM avaliacao WHERE id = $id");
	        $avaliacoes = $stmt->fetchAll();
        }

        public function buscarTodos(){ 
            $stmt = $pdo->query("SELECT * FROM avaliacao");
	        $avaliacoes = $stmt->fetchAll();
        }

        public function atualizar($id, $nome, $email, $senha, $tipo){ 
            $stmt = $pdo->prepare("UPDATE pessoas SET nome = :nome WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->execute();
        }

        public function deletar(){
            $stmt = $pdo->prepare('DELETE FROM avaliacao WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }

        public function login(){ }

        public function input(){ }
    }
?>