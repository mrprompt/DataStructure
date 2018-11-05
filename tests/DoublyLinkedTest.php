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
    public function addObjectReturnEmpty()
    {
        $this->object = new DoublyLinked;

        $result = $this->object->add(0, new \stdClass);

        $this->assertEmpty($result);
        $this->assertEquals(1, $this->object->count());
    }
}
