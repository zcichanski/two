<?php
/**
 * Created by PhpStorm.
 * User: Zbyszek Cichanski
 * Date: 30.12.2015
 * Time: 19:55
 */

namespace Two\Tests\Inf\Cache;

use Two\Inf\Cache\Redis;

require_once '../../../env_test.php';

class RedisTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Two\Inf\Cache\Redis redis
     */
    private $redis;

    public function setUp()
    {
        $this->redis = new Redis();
    }

    public function testSet()
    {
        $result = $this->redis->set('set', '123', 'Nie udalo sie zapisac do Redisa');
        $this->assertTrue($result);
    }

    public function testGet()
    {
        $result = $this->redis->set('get', '124');
        $this->assertTrue($result);
        $this->assertEquals($this->redis->get('get'), '124');
    }

    public function testGetAll()
    {
        $this->redis->set('testGetAll', '126');
        $result = $this->redis->getAll();
        $this->assertNotEmpty($result, 'Pusta tablica');
        $this->assertArrayHasKey('testGetAll', $result, 'Brak podanego klucza w tablicy');
    }

    public function testFlush()
    {
        $this->redis->set('testFlush', '126');
        $result = $this->redis->getAll();
        $this->assertNotEmpty($result);
        $this->redis->flush();
        $result = $this->redis->getAll();
        $this->assertEmpty($result);
    }
}
