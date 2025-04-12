<?php

namespace Serg\Repo\Snacks;

use Serg\Repo\Snack;

class ChocolateBar extends Snack
{
    public function __construct()
    {
        parent::__construct('Шоколадный батончик', 'молочный', ['орехи', 'карамель']);
    }

    public function cut(): void
    {
        echo "Режем батончик на плитки\n\n";
    }
}