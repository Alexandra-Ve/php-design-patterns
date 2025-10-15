<?php

namespace App\Creational\Builder;

class House
{
    public $layout = [];

    public function __toString()
    {
        $output = '';
        foreach ($this->layout as $row) {
            $output .= implode('', $row) . PHP_EOL;
        }
        return $output;
    }
}
