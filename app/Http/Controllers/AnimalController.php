<?php

namespace App\Http\Controllers;

use App\Contracts\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animal;

    public function __construct(Animal $animal) {
        $this->animal = $animal;
    }

    public function getAnimal() {
        echo $this->animal->name();
        echo ' ';
        echo $this->animal->color();
    }
}
