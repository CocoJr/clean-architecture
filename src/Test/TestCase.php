<?php

declare(strict_types=1);

namespace CocoJr\CleanArchitecture\Test;

use PHPUnit\Framework\TestCase as BaseTestCase;

/**
 * @internal
 * @coversNothing
 */
class TestCase extends BaseTestCase
{
    protected function getMock($class, array $constructorArgs = [])
    {
        $classFragments = explode('\\', $class);

        return $this
            ->getMockBuilder($class)
            ->setMockClassName(end($classFragments))
            ->setConstructorArgs($constructorArgs)
            ->getMock()
        ;
    }
}
