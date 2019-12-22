<?php


namespace engine;


class Debug
{
    public static function pr($arr)
    {
        self::show($arr, "pr");
    }
    
    public static function dd($arr)
    {
        self::show($arr,'dd');
    }
    
    private static function show($arr, $m_show)
    {
        echo "<pre style=\"color: darkred\">Hello";
        if ($m_show === 'pr') {
            print_r($arr);
        } elseif ($m_show === 'dd') {
            var_dump($arr);
            die(' ******* the end *******');
        }
        echo '</pre>';
    }
}