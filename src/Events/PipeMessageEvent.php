<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 */

namespace iPaya\Swoole\Events;


class PipeMessageEvent extends ServerEvent
{
    public $workerId;
    public $message;
}
