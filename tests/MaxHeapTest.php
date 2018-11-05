<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\MaxHeap;
use PHPUnit\Framework\TestCase;

class MaxHeapTest extends TestCase
{
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

}

