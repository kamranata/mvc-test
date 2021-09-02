<?php
use Illuminate\Container\Container;

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;

define('APP_ROOT', dirname(dirname(__FILE__)));

$dotenv = Dotenv\Dotenv::createImmutable(APP_ROOT);
$dotenv->load();

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => $_ENV['DB_HOST'],
    'database'  => $_ENV['DB_NAME'],
    'username'  => $_ENV['DB_USER'],
    'password'  => $_ENV['DB_PASS'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
