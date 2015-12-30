<?php
/**
 * Created by PhpStorm.
 * User: Zbyszek Cichanski
 * Date: 29.12.2015
 * Time: 22:41
 */

namespace Two\tests;

use Two\Dm\Save;
use Two\Inf\SaveFabric;
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
        $this->assertInstanceOf('Two\Inf\Cache', $object->getInfSave());
    }
}
