<?php
namespace app\index\controller;


use app\socket\Server;
use app\socket\Websocket;

class Base
{
    public function __construct()
    {
        //$server = Server::getInstance();
        $server = new Websocket();
        var_dump($server);die;
    }
}