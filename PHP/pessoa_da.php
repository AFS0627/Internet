<?php
include_once("database.php");
function insere_usuario($nome, $email){
$db=connecta_db();
$sql="INSERT INTO usuario (nome, email) values (?, ?)";
$stmt=$db->prepare($sql);
$stmt->bindValue(1,$nome, PDO::PARAM_STR);
$stmt->bindValue(2,$email,PDO::PARAM_STR);
try{
    $stmt->execute();
    echo "Usuário inserido com sucesso!";

}catch (PDOException $e){
    echo "erro" . $e->getMessage();
}
$db=null;
}
function recuper_lista_usuarios() {
    $bd=connecta_db();
    $sql="select * from usuario"
    $stmt = $bd->prepare($sql);
    $stmt->execute();
    $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($resultado);
}
recuper_lista_usuarios();
?>