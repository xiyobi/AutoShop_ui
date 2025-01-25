<?php

namespace App\Http\Controllers\WEB;

class HomeController
{
    public function home(): void
    {
        view("home");
    }
    public function about(): void
    {
        view("about");
    }
    public function catalog(): void
    {
        view("catalog");
    }
    public function login(): void
    {
        view("auth/login");
    }
    public function register(): void
    {
        view("auth/register");
    }
    public function productCard(): void
    {
        view("product-card");
    }
    public function contacts(): void
        {
            view("/contacts");
        }
    public function news(): void
            {
                view("/news");
            }

}