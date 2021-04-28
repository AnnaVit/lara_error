<?php


namespace App\Models;


class Users
{
    private $user = [

        'name' => 'name1',
        'login' => 'login1',
        'pass' => '1234'
    ];

    public function getName(){
        return $this->user['name'];

    }
}
