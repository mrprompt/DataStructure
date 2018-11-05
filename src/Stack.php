<?php
namespace MrPrompt\Queue;

/**
 * Stack
 * The SplStack class provides the main functionalities of a stack implemented using a doubly linked list.
 */
class Stack extends \SplStack
{
    /**
     * Constructor
     * 
     * @return void
     */
    public function __construct(Array $values = [])
    {
        $this->insertAll($values);
    }

    /**
     * Insert many values
     * 
     * @return bool
     */
    public function insertAll(Array $toAdd = [])
    {
        return array_walk($toAdd, function($current) {
            return $this->push($current);
        });
    }
}

