<?php 
namespace water;
 class pokemon {
    private $name;
    private $color;

    public function __construct($n,$c) {
        $this->name = $n;
        $this->name = $c;
    }

    public function getinfopokemon() {
        return "<li class='p-2 ring-1 ring-white/50 rounded'>".$this->color."</li>";
    }

 }
 ?>