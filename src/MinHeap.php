<?php
namespace MrPrompt\Queue;

class MinHeap extends \SplMinHeap
{
    /**
     * Compare elements in order to place them correctly in the heap while
     * sifting up.
     *
     * @param mixed $value_orig
     * @param mixed $value_dest
     * @return mixed
     */
    protected function compare($value_orig, $value_dest)
    {
        return $value_orig < $value_dest;
    }
}

