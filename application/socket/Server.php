<?php
namespace app\socket;

use think\Config;
use Workerman\Events\Swoole;

class Server
{
    private static $instance;
    protected $server;

    private function __construct()
    {
        $config = config('socket');
        $this->server = new swoole_webwocket_server($config['host'], $config['port']);
        $this->server->set(array(
            'daemonize' => 0,
           'worker_num' => 4,
           'task_worker_num' => 4,
           'max_request' => 1000,
        ));
        $this->server->on('open', array($this, 'onOpen'));
    }

    //单例
    public static function getInstance(){
        if(!(self::$instance instanceof self)){
            self::$instance = new self();
        }

        return self::$instance;
    }

    protected function onOpen($server, $request)
    {
        var_dump($server);die;
    }

    private function __clone(){}
}