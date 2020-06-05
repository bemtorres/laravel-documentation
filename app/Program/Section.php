<?php

namespace App\Program;

class Section {
    private $id;
    private $name;
    private $icon;
    private $items;

    public function __contruct($id,$name,$icon,$items = array()){
        $this->id      = $id;
        $this->name    = $name;
        $this->icon    = $icon;
        $this->items   = $items;

    }
}