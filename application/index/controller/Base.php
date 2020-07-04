<?php
namespace app\index\controller;


use app\socket\Server;

class Base
{
    public function __construct()
    {
        $server = Server::getInstance();
        var_dump($server);die;
    }
}