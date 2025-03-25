<?php

require('inc/banco.php');

if($_SERVER['REQUEST_METHOD'] == 'get'){
$id = $_GET['id'] ?? null;

if($id){
$query = $pdo->prepare('SELECT * FROM compras WHERE id = :id');

$item->execute([]);
$dados = $item->fetch();

echo $twig->render('edit.html', [

])
}
}
else{

}
header('location:compras.php');