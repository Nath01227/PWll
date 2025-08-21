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

        public function inserir($nome, $site, $email){ 
            $stmt = $pdo->prepare("INSERT INTO usuario (nome, biografia, foto) VALUES (:nome, :biografia, :foto)");
	    $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
	    $stmt->execute();
        }
     
        public function buscar($id){ 
            $stmt = $pdo->query("SELECT * FROM editora WHERE id = $id");
	        $editoras = $stmt->fetchAll();
        }

        public function buscarTodos(){ 
            $stmt = $pdo->query("SELECT * FROM editora");
	        $editoras = $stmt->fetchAll();
        }

        public function atualizar($id, $nome, $site, $email){ 
            $stmt = $pdo->prepare("UPDATE pessoas SET nome = :nome WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->execute();
        }

        public function deletar(){
            $stmt = $pdo->prepare('DELETE FROM editora WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }

        public function login(){ }

        public function input(){ }
    }
?>