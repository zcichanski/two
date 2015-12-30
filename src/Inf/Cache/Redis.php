<?php
/**
 * Created by PhpStorm.
 * User: Zbyszek Cichanski
 * Date: 30.12.2015
 * Time: 18:33
 */

namespace Two\Inf\Cache;

use Two\Inf\BaseCache;

class Redis extends BaseCache
{
    /**
     * Redis constructor.
     */
    public function __construct()
    {
        try{
            $host = REDIS_IP;
            $port = REDIS_PORT;
            $this->cache = new \Predis\Client(
                array('scheme'=>'tcp', 'host'=>$host, 'port'=>$port)
            );
        } catch (\Exception $e) {
            echo "Couldn't connected to Redis";
            echo $e->getMessage();
        }
    }
    /**
     * @param $key
     * @param $var
     * @return int
     */
    public function set($key, $var, $prefix = 'MongoId')
    {
        try {
            $this->cache->hset($prefix, $key, serialize($var));
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    /**
     * @param $key
     * @return string
     */
    public function get($key,$prefix = 'MongoId')
    {
        $value =  $this->cache->hget($prefix, $key);
        if($value == NULL) {
            return false;
        }
        return unserialize($value);
    }
    /**
     *
     * @param string $key
     */
    public function delete($key, $prefix = 'MongoId')
    {
        $this->cache->hdel($prefix ,$key);
    }
    /**
     *
     */
    public function flush()
    {
        $this->cache->flushall();
    }
    /**
     * @return array
     */
    public function getAll($prefix = 'MongoId')
    {
        return $this->cache->hgetall($prefix);
    }
    /**
     *
     */
    public function getStats()
    {
    }
}