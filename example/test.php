<?php
require(__DIR__ . "/../vendor/autoload.php");
require(__DIR__ . "/../vendor/yiisoft/yii2/Yii.php");


$hash = Yii::createObject([
    'class' => \yii2\object\Hashids::className(),
    'initArgs' => ['f025cbe831358dec228e74f5725d08ee', 12]
]);
echo $str = $hash->encode(123);
//echo "\n";
//echo $hash->decode($str)[0];
//$hash->init();