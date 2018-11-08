<?php
namespace MrPrompt\DataStructure;

/**
 * DoublyLinked
 * The SplDoublyLinkedList class provides the main functionalities of a doubly linked list.
 */
class DoublyLinked extends \SplDoublyLinkedList
{
    /**
     * Constructor
     * 
     * @return void
     */
    public function __construct(Array $values = [])
    {
        $this->pushAll($values);
    }

    /**
     * Push many values
     * 
     * @return bool
     */
    public function pushAll(Array $toAdd = [])
    {
        return array_walk($toAdd, function($current) {
            return $this->push($current);
        });
    }
}
