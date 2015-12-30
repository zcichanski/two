<?php
/**
 * Created by PhpStorm.
 * User: Zbyszek Cichanski
 * Date: 29.12.2015
 * Time: 19:47
 */

namespace Two\Inf;

/**
 * Class Cache
 * @package Two\Inf
 */
abstract class BaseCache
{
    /**
     * @var
     */
    protected $cache;

    /**
     * @var
     */
    protected static $instance;

    /**
     * Cache constructor.
     */
    protected function __construct()
    {

    }

    /**
     * @return instance class type Cache
     */
    public static function getInstance()
    {
        if(self::$instance === null){
            //późne wiązanie statyczne
            //tworzy obiiekt klasy potomnej do klasy Cache
            //na której obiekcie została wywołana metoda getInstance
            static::$instance = new static();
        }
        return self::$instance;
    }
}