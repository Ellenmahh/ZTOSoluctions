<?php
function __construct(){
  require_once('../models/bd_class.php');
  $conexaoUser = new mysql_db();
  $conexaoUser->conectar();
}

$usuario = $_GET['nome_usuario'];
$cpf = $_GET['cpf_usuario'];
$rg= $_GET['rg_usuario'];
$senha = $_GET['senha_usuario'];
$telefone = $_GET['telefone_usuario'];
$celular = $_GET['celular_usuario'];
$email = $_GET['email_usuario'];

 $sql = "insert into tbl_usuario(nome_usuario, cpf_usuario, rg_usuario, email_usuario, senha_usuario, telefone_usuario, celular_usuario, foto_usuario)
 values('".$usuario."','".$cpf."','".$rg."','".$email."','".$senha."','".$telefone."','".$celular."','.0.')";

 mysql_query($sql);
 if(mysql_affected_rows($sql) == 0){
     echo "erro";
 }

 ?>
