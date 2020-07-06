<?php

namespace app\socket;

class WsServer
{
    protected $server = null;
    protected $fd = null;
    protected $frame = null;

    private function __construct()
    {
    }

    public static function getInstance(){
        if(!(self::$instance instanceof self)){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getServer()
    {
        return $this->server;
    }

    public function setServer($server)
    {
        $this->server = $server;
    }

    public function getFd()
    {
        return $this->fd;
    }

    public function setFd($fd)
    {
        $this->fd = $fd;
    }

    public function getFrame()
    {
        return $this->frame;
    }

    public function setFrame($frame)
    {
        $this->frame = $frame;
    }

    private function __clone(){}
}