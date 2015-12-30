<?php
/**
 * Created by PhpStorm.
 * User: Zbyszek Cichanski
 * Date: 29.12.2015
 * Time: 22:25
 */

namespace Two\Inf;


class SaveFabric
{
    private static $instance;

    public static function create()
    {
        $className = 'Two\Inf\\'.SAVE_TYPE;
        if(self::$instance instanceof $className){
            return self::$instance;
        }
        if(class_exists($className) ){
            $object = $className::getInstance();
            self::$instance = $object;
            return $object;

        } else {
            throw new Exception ('Podana klasa nie istnieje.');
        }
    }
}