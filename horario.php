<?php
require('twig_carregar.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

$hj = Carbon::now() . '<br>';

$amnh = Carbon::now()->addDay() . '<br>';

echo $twig->render('horario.html', [
    'hj' => Carbon::parse($hj)->format('d/m/Y'),
    'amnh' => Carbon::parse($amnh)->format('d/m/Y')
]);