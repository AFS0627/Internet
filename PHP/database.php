<?php

function connecta_db(){
$user="root";
$pass="aluno";
$database="crud";
$host="localhost";
$db = new PDO("mysql:host=$host;dbname=$database",
$user, $pass);

$db->setAttribute(PDO::ATTR_ERRMODE,  PDO:: ERRMODE_EXCEPTION);


try {
    $result = $db->query('SHOW TABLES')->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}




if($db){
    return $db;
}else{
    return false;
}
}
function check_conn($conn_id){
    if ($conn_id){
        echo "certo";
    }else {
        echo"erro";
    }
}




var_dump(connecta_db());
check_conn(connecta_db());
?>