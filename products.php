<?php

$products = [
    ['name' => 'Комп1' , 'image' => 'img/home-cat__img.jpg', 'features'=>[
        'Процессор' => 'Amd',
        'Хз че ещё' => 'Не Amd',
    ]],
    ['name' => 'Комп2' , 'image' => 'img/home-cat__img.jpg', 'features'=>[
        'Процессор' => 'Amd',
        'Хз че ещё' => 'Не Amd',
    ]],
    ['name' => 'Комп3' , 'image' => 'img/home-cat__img.jpg', 'features'=>[
        'Процессор' => 'Amd',
        'Хз че ещё' => 'Не Amd',
    ]],
];

echo(json_encode($products));
?>