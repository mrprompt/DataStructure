<?php
namespace MrPrompt\DataStructure\Tests\Traits;

/**
 * General utilities for tests
 */
trait Util
{
    /**
     * Call a protected/private method using reflection.
     * 
     * @param object $object
     * @param string $name 
     * @param array $args
     */
    public function callMethod($object, $name, array $args)
    {
        $class = new \ReflectionClass($object);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        
        return $method->invokeArgs($object, $args);
    }
}

