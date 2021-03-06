<?php
namespace MrPrompt\DataStructure;

/**
 * Heap
 * The SplHeap class provides the main functionalities of a Heap.
 */
class Heap extends \SplHeap
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
        return array_walk($toAdd, function ($current) {
            return $this->insert($current);
        });
    }

    /**
     * Compare elements in order to place them correctly in the heap while sifting up.
     *
     * @param mixed $value_orig
     * @param mixed $value_dest
     * @return mixed
     */
    protected function compare($value_orig, $value_dest)
    {
        return $value_orig <> $value_dest;
    }
}
