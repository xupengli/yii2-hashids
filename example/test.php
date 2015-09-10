<?php
require(__DIR__ . "/../vendor/autoload.php");
require(__DIR__ . "/../vendor/yiisoft/yii2/Yii.php");

//$hash = new \yii2\hashids\Hashids();

$hash = Yii::createObject([
    'class' => \yii2\hashids\Hashids::className(),
    'hashProperty' => ['12312312',12]
]);
//$hash->init();