<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\Heap;
use PHPUnit\Framework\TestCase;

class HeapTest extends TestCase
{
    /**
     * @var Heap
     */
    var $object;

    /**
     * Set Up
     */
    public function setUp()
    {
        parent::setUp();

        $this->object = new Heap();
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

