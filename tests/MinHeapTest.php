<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\MinHeap;
use PHPUnit\Framework\TestCase;

class MinHeapTest extends TestCase
{
    use UtilTrait;

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
     * @covers \MrPrompt\Queue\MinHeap::__construct
     * @covers \MrPrompt\Queue\MinHeap::insertAll
     */
    public function constructorReturnInstanceOfSplMinHeapList($values)
    {
        $object = new MinHeap($values);
        
        $this->assertInstanceOf(\SplMinHeap::class, $object);
        $this->assertEquals(count($values), count($object));
    }

    /**
     * @test
     * @dataProvider valuesProvider
     * @covers \MrPrompt\Queue\MinHeap::__construct
     * @covers \MrPrompt\Queue\MinHeap::insertAll
     */
    public function insertAllReturnBoolean($values)
    {
        $object = new MinHeap();
        $result = $object->insertAll($values);

        $this->assertEquals(count($values), count($object));
        $this->assertTrue($result);
    }

    /**
     * Data provider
     *
     * @return array
     */
    public function compareValues()
    {
        return [
            [ 1, 0, false ],
            [ 0, 1, true ]
        ];
    }

    /**
     * @test
     * @dataProvider compareValues
     * @covers \MrPrompt\Queue\MinHeap::__construct
     * @covers \MrPrompt\Queue\MinHeap::compare
     */
    public function compareReturnBooleanWhenCompareElements($value1, $value2, $expected)
    {
        $object = new MinHeap();
        $result = $this->callMethod($object, 'compare', [ $value1, $value2 ]);

        $this->assertEquals($result, $expected);
    }
}

