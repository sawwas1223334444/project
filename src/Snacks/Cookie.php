<?php

namespace Serg\Repo\Snacks;

use Serg\Repo\Snack;

class Cookie extends Snack
{
    public function __construct()
    {
        parent::__construct('Печенье', 'тёмный', ['изюм', 'орехи']);
    }

    public function cut(): void
    {
        echo "Режем печенье на треугольники\n\n";
    }
}