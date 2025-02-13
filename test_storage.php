<?php 

use Services\FileStorage;

$store = new FileStorage();
$arrData = [
    [
        'id' => 11, 
        'name' => 'Двигатель ВАЗ 21124', 
        'description' => 'Объем двигателя ВАЗ 21124 – 1599 см. куб. Мощность двигателя 21124 – 89 л.с. /5000 об.мин. Крутящий момент – 131Нм/3700 об.мин Топливо – АИ95. Расход топлива — город 8,9л. | трасса 6,4 л. | смешанн. 7,5 л/100 км. Расход масла – 50 г/1000 км.',
        'image' => "./img/becon_krasburgers.jpg",
        'weigth' => 110, 
        'price' => 369000.00,
    ],
    [
        'id' => 12, 
        'name' => 'Роботизированная коробка переключения передач DSG6 02E (DQ 250 6F/DQ 250 6Q)', 
        'description' => 'Является 6-ступенчатой механической, с автоматическим переключением без разрыва мощности, коробкой передач. Передает крутящий момент до 350 Нм, Управление электрогидравлическое. Установлен мехатроник, включающий в себя ЭБУ',
        'image' => "./img/chika_burgers.jpg",
        'weigth' => 70, 
        'price' => 149950.00,
    ],
    [
        'id' => 13,
        'name' => 'Синтетическое моторное масло zic X9 5w40 4л 162613', 
        'description' => 'Полностью синтетическое моторное масло для бензиновых и дизельных двигателей легковых автомобилей. Выполняет требования API SP',
        'image' => "./img/double_bamburgers.jpg",
        'weigth' => 400, 
        'price' => 3000,
    ]
];
    
$store->saveData('data.json', $arrData);
$arrData = $store->loadData('data.json');
var_dump($arrData);