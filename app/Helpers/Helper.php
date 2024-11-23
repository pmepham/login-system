<?php
namespace App\Helpers;
class Helper {
    
    public static function Log(...$objs){
        $bt = debug_backtrace();
        $caller = array_shift($bt);
        error_log('[Log - File:'.$caller['file'].' Line:'.$caller['line'].']');
        foreach($objs as $obj){
            if(is_bool($obj))
                $obj = ($obj)? 'true' : 'false';
            error_log(print_r($obj , true));
        }
    }
    
    public static function Warning(...$objs){
        $bt = debug_backtrace();
        $caller = array_shift($bt);
        error_log('[Warning - File:'.$caller['file'].' Line:'.$caller['line'].']');
        foreach($objs as $obj){
            if(is_bool($obj))
                $obj = ($obj)? 'true' : 'false';
            error_log(print_r($obj, true));
        }
    }
    

}


?>