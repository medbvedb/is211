<?php

use Routers\Router;

$obj = new Router();
echo $obj->route('https://mysite.ru/products') ."\n";      // должен быть вызван метод getAll() класса Product'
echo $obj->route('https://mysite.ru/products/1') ."\n";      // должен быть вызван метод get(1) класса Product
echo $obj->route('https://mysite.ru/products/100') ."\n";      // 404