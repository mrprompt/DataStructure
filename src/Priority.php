<?php
namespace MrPrompt\DataStructure;

/**
 * Priority
 * The SplPriorityQueue class provides the main functionalities of a prioritized queue, implemented using a max heap.
 */
class Priority extends \SplPriorityQueue
{
    /**
     * @var int
     */
    private $defaultPriority;

    /**
     * Constructor
     * 
     * @param array $values
     * @param int $defaultPriority
     * @return void
     */
    public function __construct(Array $values = [], int $defaultPriority = 0)
    {
        $this->defaultPriority = $defaultPriority;
        
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
            return $this->insert($current, $this->defaultPriority);
        });
    }
}
