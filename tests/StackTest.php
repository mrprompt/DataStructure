<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\Stack;
use PHPUnit\Framework\TestCase;
use MrPrompt\Tests\Queue\Traits\Util;

/**
 * Stack Test Case
 */
class StackTest extends TestCase
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
     * @covers \MrPrompt\Queue\Stack::__construct
     * @covers \MrPrompt\Queue\Stack::insertAll
     */
    public function constructorReturnInstanceOfSplStackList($values)
    {
        $object = new Stack($values);
        
        $this->assertInstanceOf(\SplStack::class, $object);
        $this->assertEquals(count($values), count($object));
    }

    /**
     * @test
     * @dataProvider valuesProvider
     * @covers \MrPrompt\Queue\Stack::__construct
     * @covers \MrPrompt\Queue\Stack::insertAll
     */
    public function insertAllReturnBoolean($values)
    {
        $object = new Stack();
        $result = $object->insertAll($values);

        $this->assertEquals(count($values), count($object));
        $this->assertTrue($result);
    }
}

