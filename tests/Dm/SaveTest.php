<?php
/**
 * Created by PhpStorm.
 * User: Zbyszek Cichanski
 * Date: 29.12.2015
 * Time: 22:41
 */

namespace Two\Tests\Dm;

use Two\Dm\Save;
require_once '../../env_test.php';

class SaveTest extends \PHPUnit_Framework_TestCase
{
    private $instance;

    public function setUp()
    {

    }
    public function testCreateObject()
    {
        $object = new Save();
        $this->assertInstanceOf('Two\Inf\BaseCache', $object->getInfSave());
    }
}
