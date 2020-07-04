<?php
namespace app\socket;

class Websocket
{
    protected $server;
    public function __construct()
    {
        $this->server = new swoole_websocket_server("192.168.1.250", 9501);
        var_dump($this->server);die;
    }
}