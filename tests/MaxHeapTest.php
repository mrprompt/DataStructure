<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\MaxHeap;
use PHPUnit\Framework\TestCase;

class MaxHeapTest extends TestCase
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
     * @covers \MrPrompt\Queue\MaxHeap::__construct
     * @covers \MrPrompt\Queue\MaxHeap::insertAll
     */
    public function constructorReturnInstanceOfSplMaxHeapList($values)
    {
        $object = new MaxHeap($values);
        
        $this->assertInstanceOf(\SplMaxHeap::class, $object);
        $this->assertEquals(count($values), count($object));
    }

    /**
     * @test
     * @dataProvider valuesProvider
     * @covers \MrPrompt\Queue\MaxHeap::__construct
     * @covers \MrPrompt\Queue\MaxHeap::insertAll
     */
    public function insertAllReturnBoolean($values)
    {
        $object = new MaxHeap();
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
            [ 1, 0, true ],
            [ 0, 1, false ]
        ];
    }

    /**
     * @test
     * @dataProvider compareValues
     * @covers \MrPrompt\Queue\MaxHeap::__construct
     * @covers \MrPrompt\Queue\MaxHeap::compare
     */
    public function compareReturnBooleanWhenCompareElements($value1, $value2, $expected)
    {
        $object = new MaxHeap();
        $result = $this->callMethod($object, 'compare', [ $value1, $value2 ]);

        $this->assertEquals($result, $expected);
    }
}

