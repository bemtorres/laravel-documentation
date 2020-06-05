<?php

namespace App\Program;

class Item {
    private $id;
    private $name;
    private $icon;
    private $archive;

    public function __contruct($id,$name,$icon,$archive){
        $this->id = $id;
        $this->name = $name;
        $this->icon = $icon;
        $this->archive = $archive;
    }

    public function __str(){
        return $this->id .": $this->name : $this->icon : $this->archive";
    }
}
