<?php

    defined('YII_DEBUG') or define('YII_DEBUG',true);//Показывает дебаг не должно быть на основнрм сайте
    defined('YII_ENV') or define('YII_ENV',true);
    require __DIR__.'/../vendor/autoload.php';
    require __DIR__.'/../vendor/yiisoft/yii2/Yii.php'; // Подключаем библиотеку Yii
    $config = require __DIR__.'/../config/web.php';
   (new yii\web\Application($config))->run();


?>
