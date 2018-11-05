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

}

