<?php
namespace webSocket;

use app\socket\WsServer;

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
        $this->server->start();
    }

    public function onOpen($server, $request)
    {
        WsServer::set('server', $server);
        WsServer::set('fd', $request->fd);
    }

    public function onMessage($server, $frame)
    {
        $server->push($frame->fd, 'this is server');
    }

    public function onClose($server, $fd)
    {

    }
}