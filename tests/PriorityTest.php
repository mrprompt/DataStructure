<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\Priotity;
use PHPUnit\Framework\TestCase;

class PriotityTest extends TestCase
{
    /**
     * @var Priotity
     */
    var $object;

    /**
     * Set Up
     */
    public function setUp()
    {
        parent::setUp();

        $this->object = new Priotity();
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

