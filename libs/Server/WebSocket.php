<?php

namespace Libs\Server;

use \swoole_websocket_server;

class WebSocket extends Server
{
	public function listen($port)
	{
		$server = new swoole_websocket_server("0.0.0.0", $port);

		$server->on('open', function (swoole_websocket_server $server, $request) {
		    $this->app->emit('open', compact('server', 'request'));
		});

		$server->on('message', function (swoole_websocket_server $server, $frame) {
			if (!$frame->finish) {
				return;
			}

			if ($frame->opcode == WEBSOCKET_OPCODE_BINARY) {
				
			} else {
				echo "Receive: {$frame->data}\n";

				list($type, $message) = $this->parseData($frame->data);
				if (!is_null($message)) {
					$fd=$frame->fd;
					$this->app->emit($type, compact('server', 'fd', 'message'));	
				}
			}
		});

		$server->on('close', function ($server, $fd) {
		    $this->app->emit('close', compact('server', 'fd'));
		});

		$server->start();
	}
}