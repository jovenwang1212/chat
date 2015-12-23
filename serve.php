<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Libs\App;

//定义项目目录
const _ROOT_ = __DIR__.'/';

//定义项目其他目录
const CONF_PATH = _ROOT_.'config/';

$app->bind('users', new App\Repositories\UserRepository);
$app->bind('messages', new App\Repositories\MessageRepository);

require __DIR__ . '/app/events.php';

//Libs\Server\ServerFactory::createTcpServer($app)
Libs\Server\ServerFactory::createWebSocket($app)
->configure(Config::get('database');)
->listen(9501);

echo "server running...\n";

