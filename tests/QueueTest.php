<?php
namespace  MrPrompt\DataStructure\Tests;

use MrPrompt\DataStructure\Queue;
use PHPUnit\Framework\TestCase;
use MrPrompt\DataStructure\Tests\Traits\Util;

/**
 * Queue Test Case
 */
class QueueTest extends TestCase
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
     * @covers \MrPrompt\DataStructure\Queue::__construct
     * @covers \MrPrompt\DataStructure\Queue::insertAll
     */
    public function constructorReturnInstanceOfSplQueue($values)
    {
        $object = new Queue($values);
        
        $this->assertInstanceOf(\SplQueue::class, $object);
        $this->assertEquals(count($values), count($object));
    }

    /**
     * @test
     * @dataProvider valuesProvider
     * @covers \MrPrompt\DataStructure\Queue::__construct
     * @covers \MrPrompt\DataStructure\Queue::insertAll
     */
    public function insertAllReturnBoolean($values)
    {
        $object = new Queue();
        $result = $object->insertAll($values);

        $this->assertEquals(count($values), count($object));
        $this->assertTrue($result);
    }
}
