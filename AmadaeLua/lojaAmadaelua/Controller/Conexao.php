<?php
$server="localhost";
$usuario="root";
$senha="";
$banco ="amadaelua";
try{
$conexao = new PDO('mysql:host='.$server.';dbname='.$banco, $usuario, $senha);
$conexao-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $erro){
echo"ocorreu um erro de conexao: {$erro->getMessage()}";
$conexao=null;
};






?>