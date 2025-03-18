<?php
// compras.php
require_once('twig_carregar.php');
require('inc/banco.php');

$dados = $pdo->query('SELECT * from compras');

$comp = $dados->fetchAll(PDO::FETCH_ASSOC);
print_r($comp);

echo $twig->render('compras.html', [
    'titulo' => 'Compras',
    'compras' => $comp,
]);