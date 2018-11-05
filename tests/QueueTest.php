<?php
namespace MrPrompt\Tests\Queue;

use MrPrompt\Queue\Queue;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    /**
     * @var Queue
     */
    var $object;

        /**
         * @test
         * @coverage \MrPrompt\Queue\Queue::add
         */
        public function addObjectReturnEmpty()
        {
            $this->object = new Queue;

            $result = $this->object->add(0, new \stdClass);

            $this->assertEmpty($result);
            $this->assertEquals(1, $this->object->count());
    }
}
