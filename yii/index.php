<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
//Ссылка на папку с наполнением сайта
require __DIR__ . '/cirno/vendor/autoload.php';
require __DIR__ . '/cirno/vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/cirno/config/web.php';

(new yii\web\Application($config))->run();
