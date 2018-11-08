<?php
namespace  MrPrompt\DataStructure\Tests;

use MrPrompt\DataStructure\DoublyLinked;
use PHPUnit\Framework\TestCase;

/**
 * DoublyLinked Test Case
 */
class DoublyLinkedTest extends TestCase
{
    /**
     * Data Provider
     */
    public function valuesProvider()
    {
        return [
            [ [ ] ],
            [ [ 0, 1, 2, 3 ] ],
        ];
    }
    
    /**
     * @test
     * @dataProvider valuesProvider
     * @covers \MrPrompt\DataStructure\DoublyLinked::__construct
     * @covers \MrPrompt\DataStructure\DoublyLinked::pushAll
     */
    public function constructorReturnInstanceOfSplDoublyLinkedList($values)
    {
        $object = new DoublyLinked($values);
        
        $this->assertInstanceOf(\SplDoublyLinkedList::class, $object);
        $this->assertEquals(count($values), count($object));
    }

    /**
     * @test
     * @dataProvider valuesProvider
     * @covers \MrPrompt\DataStructure\DoublyLinked::__construct
     * @covers \MrPrompt\DataStructure\DoublyLinked::pushAll
     */
    public function pushAllReturnBoolean($values)
    {
        $object = new DoublyLinked();
        $result = $object->pushAll($values);

        $this->assertEquals(count($values), count($object));
        $this->assertTrue($result);
    }
}
