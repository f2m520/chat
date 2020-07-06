<?php

$server = new Websocket();

class Websocket
{
    protected $server;
    protected $ws_server;
    public function __construct()
    {
        $this->server = new swoole_websocket_server("192.168.1.250", 9501);
        $this->server->on('open', array($this, 'onOpen'));
        $this->server->on('message', array($this, 'onMessage'));
        $this->server->on('close', array($this, 'onClose'));
        $this->start();
        $this->ws_server = \app\socket\WsServer::getInstance();
    }

    public function onOpen($server, $request)
    {
        var_dump($server);
        var_dump($request);
        $this->ws_server->setServer($server);
        $this->ws_server->setFd($request->fd);
    }

    public function onMessage($server, $frame)
    {
        $this->ws_server->setFrame($frame);
    }

    public function onClose($server, $fd)
    {

    }
}