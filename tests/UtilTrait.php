<?php
namespace MrPrompt\Tests\Queue;

trait UtilTrait
{
    public function callMethod($object, $name, array $args)
    {
        $class = new \ReflectionClass($object);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $args);
    }
}

