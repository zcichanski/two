<?php
/**
 * Created by PhpStorm.
 * User: Zbyszek Cichanski
 * Date: 29.12.2015
 * Time: 19:48
 */

namespace Two\Test\Inf;

use Two\Inf\Cache;
require_once '../../Inf/Cache.php';

class CacheTest extends \PHPUnit_Framework_TestCase
{
    private $cache;

    public function setUp()
    {
        $this->cache = new Cache();
    }

    public function testSet()
    {
        $value = $this->cache->set('key', 'value');
        $this->assertEquals($value, 'value');
    }
}
