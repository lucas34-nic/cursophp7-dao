<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando loçgin e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");

//echo $usuario;

/*
//Criando novo usuario
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
*/

/*
//Alterar um usuario
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$%*");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;



?>