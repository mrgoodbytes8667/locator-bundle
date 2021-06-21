<?php

namespace Bytes\LocatorBundle\Tests\Handler;

use Bytes\LocatorBundle\Handler\Locator;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ServiceLocator;

/**
 * Class LocatorTest
 * @package Bytes\LocatorBundle\Tests\Handler
 */
class LocatorTest extends TestCase
{
    /**
     *
     */
    public function testGet()
    {
        $mock = $this->getMockObject();
        $locator = new Locator($mock);

        $this->assertNull($locator->get('abc123'));
    }

    /**
     * @return ServiceLocator
     */
    protected function getMockObject()
    {
        $mock = $this->getMockBuilder(ServiceLocator::class)
            ->disableOriginalConstructor()
            ->getMock();
        $mock->method('get')
            ->willReturn(null);
        $mock->method('has')
            ->willReturn(false);
        return $mock;
    }

    /**
     *
     */
    public function testHas()
    {
        $mock = $this->getMockObject();
        $locator = new Locator($mock);

        $this->assertFalse($locator->has('abc123'));
    }
}
