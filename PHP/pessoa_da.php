<?php
include_once("database.php");
function insere_usuario($nome, $email){
$db=connecta_db();
$sql="INSERT INTO usuario (nome, email) values (?, ?)";
$stmt=$db->prepare($sql);
$stmt->bindValue(1,$nome);
$stmt->bindValue(2,$email);
$stmt->execute();
try{
    $stmt->execute();
    echo "Usuário inserido com sucesso!";

}catch (PDOException $e){
    echo "erro" . $e->getMessage();
}
$db=null;
}
function getUsuarios(){
    $db =connecta_db();
    $sql = "select * from usuario";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
    var_dump($resultado);
    return $resultado;
}


?>