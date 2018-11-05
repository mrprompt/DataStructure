<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\Heap;
use PHPUnit\Framework\TestCase;
use MrPrompt\Tests\Queue\Traits\Util;

/**
 * Heap Test Case
 */
class HeapTest extends TestCase
{
    use Util;

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
     * @covers \MrPrompt\Queue\Heap::__construct
     * @covers \MrPrompt\Queue\Heap::insertAll
     */
    public function constructorReturnInstanceOfSplHeapList($values)
    {
        $object = new Heap($values);
        
        $this->assertInstanceOf(\SplHeap::class, $object);
        $this->assertEquals(count($values), count($object));
    }

    /**
     * @test
     * @dataProvider valuesProvider
     * @covers \MrPrompt\Queue\Heap::__construct
     * @covers \MrPrompt\Queue\Heap::insertAll
     */
    public function insertAllReturnBoolean($values)
    {
        $object = new Heap();
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
            [ 0, 1, true ]
        ];
    }

    /**
     * @test
     * @dataProvider compareValues
     * @covers \MrPrompt\Queue\Heap::__construct
     * @covers \MrPrompt\Queue\Heap::compare
     */
    public function compareReturnBooleanWhenCompareElements($value1, $value2, $expected)
    {
        $object = new Heap();
        $result = $this->callMethod($object, 'compare', [ $value1, $value2 ]);

        $this->assertEquals($result, $expected);
    }
}

