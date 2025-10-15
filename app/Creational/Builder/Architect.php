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

namespace App\Creational\Builder;

class Architect
{
    public function createMyOldHouse(Carpenter $builder)
    {
        // house foundation
        $builder->outside(25, 13);

        // master bedroom
        $builder->sidewall(5, range(1, 9));
        $builder->wall(range(1, 5), 10);
        $builder->wall(range(2, 5), 5);
        $builder->door(5, 4, 'left bottom');
        $builder->door(1, 5, 'left bottom');
        $builder->door(5, 9, 'left bottom');

        // bathrooms
        $builder->sidewall(2, range(6, 9));

        // bedroom 2
        $builder->wall(range(8, 11), 10);
        $builder->wall(8, 7);
        $builder->wall(range(8, 11), 5);

        // labels for rooms
        $builder->label(8, 21, 'K');
        $builder->label(11, 22, 'U');
    }
}
