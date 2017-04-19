<?php
namespace app\server\controller;
use think\worker\Server;

/**
 * Worker 长链接服务
 *
 * @package app\home\controller
 */
class Worker extends Server
{
	protected $socket = 'websocket://0.0.0.0:2346';

	/**
	 * 收到信息
	 * @param $connection
	 * @param $data
	 */
	public function onMessage($connection, $data)
	{
		$connection->send('我收到你的信息了' . $data);
	}

	/**
	 * 当连接建立时触发的回调函数
	 * @param $connection
	 */
	public function onConnect($connection)
	{

	}

	/**
	 * 当连接断开时触发的回调函数
	 * @param $connection
	 */
	public function onClose($connection)
	{

	}

	/**
	 * 当客户端的连接上发生错误时触发
	 * @param $connection
	 * @param $code
	 * @param $msg
	 */
	public function onError($connection, $code, $msg)
	{
		echo "error $code $msg\n";
	}

	/**
	 * 每个进程启动
	 * @param $worker
	 */
	public function onWorkerStart($worker)
	{

	}
}