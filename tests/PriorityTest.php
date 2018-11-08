<?php
namespace  MrPrompt\DataStructure\Tests;

use MrPrompt\DataStructure\Priority;
use PHPUnit\Framework\TestCase;
use MrPrompt\DataStructure\Tests\Traits\Util;

/**
 * Priority Test Case
 */
class PriorityTest extends TestCase
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
     * @covers \MrPrompt\DataStructure\Priority::__construct
     * @covers \MrPrompt\DataStructure\Priority::insertAll
     */
    public function constructorReturnInstanceOfSplPriorityList($values)
    {
        $object = new Priority($values);
        
        $this->assertInstanceOf(\SplPriorityQueue::class, $object);
        $this->assertEquals(count($values), count($object));
    }

    /**
     * @test
     * @dataProvider valuesProvider
     * @covers \MrPrompt\DataStructure\Priority::__construct
     * @covers \MrPrompt\DataStructure\Priority::insertAll
     */
    public function insertAllReturnBoolean($values)
    {
        $object = new Priority();
        $result = $object->insertAll($values);

        $this->assertEquals(count($values), count($object));
        $this->assertTrue($result);
    }
}

