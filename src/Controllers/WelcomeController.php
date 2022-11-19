<?php

namespace App\Controllers;

use Socodo\Router\Attributes\Get;
use Socodo\Router\Attributes\Prefix;

#[Prefix('/test')]
class WelcomeController
{
    #[Get('/hello')]
    public function welcome (): string
    {
        return 'Hello, World!';
    }
}