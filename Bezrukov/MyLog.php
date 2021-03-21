<?php

namespace Bezrukov;

use core\LogInterface;
use core\LogAbstract;

class MyLog extends LogAbstract implements LogInterface
{
    public static function write():void
    {
        self::Instance()->_write();
    }
	
	public function _write()
    {
		$da = date('d-m-Y\_H.i.s.u');
        foreach ($this->log as $v){
            echo $v . "\r\n";
			file_put_contents($_SERVER['DOCUMENT_ROOT'] . "log\\$da.log", trim($v."\r\n") . PHP_EOL, FILE_APPEND);
		}
    }

    public static function log(string $str):void
    {
        self::Instance()->_log($str);
    }

    public function _log($str)
    {
        $this->log[] = $str;
    }

    
}