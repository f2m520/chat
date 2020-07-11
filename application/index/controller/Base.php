<?php
namespace app\index\controller;


use app\socket\Server;
use app\socket\WsServer;

class Base
{
    public function __construct()
    {
        $fd = WsServer::get('fd');
        var_dump($fd);die;
    }
}