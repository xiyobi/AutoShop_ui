<?php

namespace App\Http\Controllers\WEB;

class UserController
{
    public function about():void
    {
        view('dashboard/about');
    }
    public function accountSettings():void
    {
        view('dashboard/account-settings');
    }
    public function listings():void
    {
        view('dashboard/listings');
    }
    public function favorites():void
    {
        view('dashboard/favorites');
    }


}