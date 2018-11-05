<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\MinHeap;
use PHPUnit\Framework\TestCase;

class MinHeapTest extends TestCase
{
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
     * @covers \MrPrompt\Queue\MinHeap::compare
     */
    public function compareReturnBooleanWhenCompareElements($value1, $value2, $expected)
    {
        $class = new \ReflectionClass($this->object);
        $method = $class->getMethod('compare');
        $method->setAccessible(true);

        $result = $method->invokeArgs($this->object, [ $value1, $value2 ]);

        $this->assertEquals($result, $expected);
    }
}

