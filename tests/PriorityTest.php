<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\Priority;
use PHPUnit\Framework\TestCase;
use MrPrompt\Tests\Queue\Traits\Util;

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
     * @covers \MrPrompt\Queue\Priority::__construct
     * @covers \MrPrompt\Queue\Priority::insertAll
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
     * @covers \MrPrompt\Queue\Priority::__construct
     * @covers \MrPrompt\Queue\Priority::insertAll
     */
    public function insertAllReturnBoolean($values)
    {
        $object = new Priority();
        $result = $object->insertAll($values);

        $this->assertEquals(count($values), count($object));
        $this->assertTrue($result);
    }
}

