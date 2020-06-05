<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Program\Section;
use App\Program\Item;



class MenuControllers extends Controller
{
    public function index()
    {
        $s = new Item('123',1,2,3);
        return $s->__str();
        // return view('evento.departamento.gestion.index',compact('e','stands'));
    }
}
