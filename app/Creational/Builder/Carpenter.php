<?php
namespace App\Creational\Builder;

abstract class Carpenter
{
    protected $house;

    public function __construct(House $house = null)
    {
        $this->house = $house ?: new House;
    }

    public function getHouse()
    {
        return $this->house;
    }

    public function outside($width, $height)
    {
        $this->house->layout = array_fill(0, $height, array_fill(0, $width, ' '));
        $this->topOutsideWall($width, $height);
        $this->leftOutsideWall($width, $height);
        $this->rightOutsideWall($width, $height);
        $this->bottomOutsideWall($width, $height);
    }

    // Abstract methods — subclasses implement them
    abstract public function wall($rows, $columns, $wallType = 'left side');
    abstract public function sidewall($rows, $columns);
    abstract public function door($rows, $columns, $doorType = 'left entry');
    abstract public function blank($rows, $columns);
    abstract public function label($rows, $columns, $label);
    abstract public function topOutsideWall($width, $height);
    abstract public function leftOutsideWall($width, $height);
    abstract public function rightOutsideWall($width, $height);
    abstract public function bottomOutsideWall($width, $height);

    // Helper: place characters inside layout
    protected function items($rows, $columns, $item)
    {
        foreach ((array) $rows as $r) {
            foreach ((array) $columns as $c) {
                if (isset($this->house->layout[$r][$c])) {
                    $this->house->layout[$r][$c] = $item;
                }
            }
        }
    }
}
