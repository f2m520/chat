<?php
namespace app\index\controller;


use app\socket\Server;
use app\socket\WsServer;

class Base
{
    public function __construct()
    {
        $server = WsServer::getInstance();
        var_dump($server);die;
    }
}