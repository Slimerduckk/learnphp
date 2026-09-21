<?php

class Box {
    
    use HasSmell;
    public $isOpen = false;
    public $hasBeenOpened = false;
}
@@ -19,13 +19,29 @@ public function volume(){
}

class MetalBox extends Box {
    use HasColor, HasSmell;
    public $weightPerUnit;

    public function mass(){
        return $this->weightPerUnit * $this->volume();
    }
}

trait HasColor {
    public $color;
    public function showColor(){
        return $this->color;
    }
}

trait HasSmell {
    public $smell;
    public function sniff(){
        return $this->smell;
    }
}


$metal1 = new MetalBox(1,2,3);
$metal1->weightPerUnit = 1;
var_dump($metal1->mass(), $metal1);