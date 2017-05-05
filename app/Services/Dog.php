<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 2017/5/5
 * Time: 9:03
 */
namespace App\Services;

use App\Contracts\Animal;

class Dog implements Animal
{
    public function name() {
        echo 'dog';
    }

    public function color() {
        echo 'yellow';
    }
}