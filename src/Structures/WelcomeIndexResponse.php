<?php

namespace App\Structures;

use Socodo\Framework\Structure\Structure;

class WelcomeIndexResponse extends Structure
{
    /** @var string Welcome message. */
    public string $message;
}