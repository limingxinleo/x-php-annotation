<?php
// +----------------------------------------------------------------------
// | BaseTest.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Tests\Test;

use Tests\App\IndexController;
use Tests\TestCase;
use Phalcon\Annotations\Adapter\Memory as MemoryAdapter;
use ReflectionClass;

class BaseTest extends TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testPhalconAnnotation()
    {
        $cls = IndexController::class;
        $adapter = new MemoryAdapter();
        $reflection = $adapter->get($cls);
        $annotations = $reflection->getPropertiesAnnotations();

        var_dump($reflection);exit;
    }
}