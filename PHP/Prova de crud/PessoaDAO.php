<?php 
    include_once("Database.php");
    
    function save($nome, $idade, $cpf, $senha) {
        $db = conecta();
    
        $sql = "insert into usuario (nome, idade, cpf, senha) values (?, ?, ?, ?)";
    
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $idade);
        $stmt->bindValue(3, $cpf);
        $stmt->bindValue(4, $senha);
        $stmt->execute();
    }
    

    function getUsuario(){
        $db =conecta();
        $sql = "select * from usuario";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $resultado;
    }
    function login($usuario, $senha) {
        $db = conecta();
        
        $sql = "SELECT * FROM usuario WHERE usuario = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $usuario);
        $stmt->execute();
        
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($resultado && $senha == $resultado['senha']) { 
            return $resultado;
        } else {
            return false;
        }
    }
    
    function getUsuario($id){
        $db =conecta();
        $sql = "select * from usuario where id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        $cpf = $stmt->fetch(PDO::FETCH_ASSOC);
        return $cpf;
    }
    function deletUsuario($id){
        $db = conecta();
        $sql = "DELETE FROM usuario WHERE id = ?";
        $stmt = $db -> prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }
    function editUsuario($id, $nome, $idade, $cpf, $senha) {
        $db = conecta();
        $sql = "UPDATE usuario SET nome = ?, idade = ?, cpf = ?, senha = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1, $nome);
        $stmt->bindValue(2, $idade);
        $stmt->bindValue(3, $cpf);
        $stmt->bindValue(4, $senha);
        $stmt->bindValue(5, $id);
        $stmt->execute();
    }
    
?>