<?php

namespace App\Http\Controllers;

use App\Http\Models\User;

class WelcomeController
{
    public function index()
    {
        $user_info = User::where(['uid' => 1])->first();
        var_dump($user_info);
        //return "<h1>控制器成功！</h1>";

    }
}