<?php

function luasLingkaran(float $a){
    $r = $a/3;
    $luas = 3.14 * $r *$r;
    return $luas;
}

function kelilingLingkaran(float $a){
    $r = $a/5;
    $keliling = 2 * 3.14 * $r;
    return $keliling;
}

function luasPersegi(float $a) {
    $panjang = $a/3;
    $lebar = $a/5;
    $luas = $panjang * $lebar;
    return $luas;
}

for ($i = 1.00; $i <= 100; $i++){
    if ($i%3 == 0 && $i%5 == 0){
        echo number_format(luasPersegi($i)).PHP_EOL;
    }else if ($i%3 == 0){
        echo number_format(luasLingkaran($i),2).PHP_EOL;
    }else if($i%5 == 0){
        echo number_format(kelilingLingkaran($i),2).PHP_EOL;
    }else{
        echo number_format($i,2).PHP_EOL;
    }
}