<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\Stack;
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    /**
     * @var Stack
     */
    var $object;

    /**
     * Set Up
     */
    public function setUp()
    {
        parent::setUp();

        $this->object = new Stack();
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
     * @covers \MrPrompt\Queue\Stack::setLifoMode
     */
    public function setLifoModeReturnEmpty()
    {
        $result = $this->object->setLifoMode();

        $this->assertEmpty($result);
    }

    /**
     * @test
     * @covers \MrPrompt\Queue\Stack::setKeepMode
     * @expectedException \RuntimeException
     */
    public function setKeepModeReturnEmpty()
    {
        $this->object->setKeepMode();
    }
}

