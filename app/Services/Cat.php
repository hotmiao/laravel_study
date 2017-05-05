<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 2017/5/5
 * Time: 9:03
 */
namespace App\Services;

use App\Contracts\Animal;

class Cat implements Animal
{
    public function name() {
        echo 'cat';
    }

    public function color() {
        echo 'white';
    }
}