<?php
/**
 * Created by PhpStorm.
 * User: Zbyszek Cichanski
 * Date: 30.12.2015
 * Time: 23:39
 */

namespace Two\Inf;

/**
 * Interface Save
 * @package Two\Inf
 */
interface Save
{
    /**
     * @param $key
     * @param $value
     * @return mixed
     */
    public function set($key, $value);

    /**
     * @param $key
     * @return mixed
     */
    public function get($key);
}