<?php 
// プログラムの定義
class Logger 
{
    /**
     * 実行すると日時データを付与してデータを出力します。
     */
    public static function echo($object) 
    {
        $now = date('[Y/m/d H:i:s]');
        echo $now . ' ' . $object . '<br>';
    }
}