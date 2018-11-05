<?php
namespace MrPrompt\Queue;

/**
 * Stack
 * The SplStack class provides the main functionalities of a stack implemented using a doubly linked list.
 */
class Stack extends \SplStack
{
    public function setLifoMode()
    {
        $this->setIteratorMode(static::IT_MODE_LIFO);
    }

    public function setKeepMode()
    {
        $this->setIteratorMode(static::IT_MODE_KEEP);
    }
}

