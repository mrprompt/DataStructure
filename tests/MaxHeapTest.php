<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\MaxHeap;
use PHPUnit\Framework\TestCase;

class MaxHeapTest extends TestCase
{
    use UtilTrait;

    /**
     * @var MaxHeap
     */
    var $object;

    /**
     * Set Up
     */
    public function setUp()
    {
        parent::setUp();

        $this->object = new MaxHeap();
    }

    /**
     * Tear Down
     */
    public function tearDown()
    {
        $this->object = null;

        parent::tearDown();
    }

    /**
     * @test
     */
    public function classExists()
    {
        $this->assertInstanceOf(\SplHeap::class, $this->object);
    }

    /**
     * Data provider
     *
     * @return array
     */
    public function compareValues()
    {
        return [
            [
                1, 0, true
            ],
            [
                0, 1, false
            ]
        ];
    }

    /**
     * @test
     * @dataProvider compareValues
     * @covers \MrPrompt\Queue\Heap::compare
     */
    public function compareReturnBooleanWhenCompareElements($value1, $value2, $expected)
    {
        $result = $this->callMethod($this->object, 'compare', [ $value1, $value2 ]);

        $this->assertEquals($result, $expected);
    }
}

