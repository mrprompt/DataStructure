<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\MinHeap;
use PHPUnit\Framework\TestCase;

class MinHeapTest extends TestCase
{
    use UtilTrait;

    /**
     * @var MinHeap
     */
    var $object;

    /**
     * Set Up
     */
    public function setUp()
    {
        parent::setUp();

        $this->object = new MinHeap();
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
        $this->assertInstanceOf(\SplMinHeap::class, $this->object);
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
                1, 0, false
            ],
            [
                0, 1, true
            ]
        ];
    }

    /**
     * @test
     * @dataProvider compareValues
     * @covers \MrPrompt\Queue\MinHeap::compare
     */
    public function compareReturnBooleanWhenCompareElements($value1, $value2, $expected)
    {
        $result = $this->callMethod($this->object, 'compare', [ $value1, $value2 ]);

        $this->assertEquals($result, $expected);
    }
}

