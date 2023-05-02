<?php 
include './utility/Logger.php';
include './utility/NameSpaceLogger.php';

use utility\NameSpaceLogger01 as YmdHis; // エイリアスの作成
use utility\NameSpaceLogger02 as Ymd; // エイリアスの作成

FirstStep::main();

class FirstStep
{
    public static function main()
    {
        YmdHis\dateEcho('Hello!');
        Ymd\dateEcho('Hello!');
    }
}