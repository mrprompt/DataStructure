<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\DoublyLinked;
use PHPUnit\Framework\TestCase;

class DoublyLinkedTest extends TestCase
{
    /**
     * @var DoublyLinked
     */
    var $object;

    /**
     * @test
     */
    public function classExists()
    {
        $this->object = new DoublyLinked();
        $this->assertInstanceOf(\SplDoublyLinked::class, $this->object);
    }
}
