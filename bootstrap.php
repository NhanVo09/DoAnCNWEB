<?php
define('BASE_URL_PATH', '/');
require_once __DIR__ . '/src/functions.php';
require_once __DIR__ . '/libraries/Psr4AutoloaderClass.php';

$load = new Psr4AutoloaderClass;
$load->register();

$load->addNamespace('CT275\Labs',__DIR__.'/src');

try{
    $PDO = (new CT275\Labs\PDOFactory)->create([
        'dbhost' => 'localhost',
        'dbname' => 'DoAnCNWEB',
        'dbuser' => 'root',
        'dbpass' => 'k8E8f3@HU5'
    ]);
}catch (Exception $ex) {
    echo 'Không thể kết nối MySQL, kiểm tra lại username/passowrd đến MySQL. <br>';
    exit("<pre>${ex}</pre>");
}