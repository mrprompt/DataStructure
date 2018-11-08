<?php
namespace MrPrompt\DataStructure;

/**
 * Queue
 * The SplQueue class provides the main functionalities of a queue implemented using a doubly linked list.
 */
class Queue extends \SplQueue
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
            return $this->enqueue($current);
        });
    }
}
