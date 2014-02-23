<?php
class pagespeed extends application{
    private static $start;
    public static function startLoading(){
        $time = microtime();
        $time = explode(' ', $time);
        $time = $time[1] + $time[0];
        self::$start = $time;
    }
    public static function getTime(){
        $time = microtime();
        $time = explode(' ', $time);
        $time = $time[1] + $time[0];
        $finish = $time;
        $total_time = round(($finish - self::$start), 4);
        return 'Page generated in '.$total_time.' seconds.';
    }
}