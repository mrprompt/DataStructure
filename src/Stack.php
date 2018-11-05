<?php
namespace MrPrompt\Queue;

class Stack extends \SplStack
{
    public function setLifoMode()
    {
        $this->setIteratorMode(\SplDoublyLinkedList::IT_MODE_LIFO);
    }

    public function setKeepMode()
    {
        $this->setIteratorMode(\SplDoublyLinkedList::IT_MODE_KEEP);
    }
}

