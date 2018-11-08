<?php
namespace  MrPrompt\DataStructure\Tests;

use MrPrompt\DataStructure\Heap;
use PHPUnit\Framework\TestCase;
use MrPrompt\DataStructure\Tests\Traits\Util;

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
     * @covers \MrPrompt\DataStructure\Heap::__construct
     * @covers \MrPrompt\DataStructure\Heap::insertAll
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
     * @covers \MrPrompt\DataStructure\Heap::__construct
     * @covers \MrPrompt\DataStructure\Heap::insertAll
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
     * @covers \MrPrompt\DataStructure\Heap::__construct
     * @covers \MrPrompt\DataStructure\Heap::compare
     */
    public function compareReturnBooleanWhenCompareElements($value1, $value2, $expected)
    {
        $object = new Heap();
        $result = $this->callMethod($object, 'compare', [ $value1, $value2 ]);

        $this->assertEquals($result, $expected);
    }
}

