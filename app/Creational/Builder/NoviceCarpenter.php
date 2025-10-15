<?php

namespace App\Creational\Builder;

class NoviceCarpenter extends Carpenter
{
    public function wall($rows, $columns, $wallType = 'left side')
    {
        $this->items($rows, $columns, '|');
    }

    public function sidewall($rows, $columns)
    {
        $this->items($rows, $columns, '--');
    }

    public function door($rows, $columns, $doorType = 'left entry')
    {
        $this->items($rows, $columns, '/');
    }

    public function blank($rows, $columns)
    {
        $this->items($rows, $columns, ' ');
    }

    public function label($rows, $columns, $label)
    {
        $this->items($rows, $columns, $label);
    }

    public function topOutsideWall($width, $height)
    {
        $this->items(0, range(0, $width - 1), '--');
    }

    public function leftOutsideWall($width, $height)
    {
        $this->items(range(1, $height - 1), 0, '|');
    }

    public function rightOutsideWall($width, $height)
    {
        $this->items(range(1, $height - 1), $width - 1, '|');
    }

    public function bottomOutsideWall($width, $height)
    {
        $this->items($height - 1, range(0, $width - 1), '--');
    }
}
