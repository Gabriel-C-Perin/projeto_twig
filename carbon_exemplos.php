<?php

require_once('vendor/autoload.php');
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

echo Carbon::now() . '<br>';

echo Carbon::now()->addDay() . '<br>';

echo Carbon::now()->subWeek() . '<br>';

echo Carbon::createFromDate(2024)->addYears(4)->year . '<br>' ;

echo Carbon::createFromDate(2007, 9, 4)->age . '<br>';

if(Carbon::now()->isWeekend()){
    echo 'Aula';
}else{
    echo 'Festa!';
}

$nascimento = Carbon::createFromDate(2010, 07, 23);
echo Carbon::now()->diff($nascimento);