<?php

namespace Serg\Repo\Snacks;

use Serg\Repo\Snack;

class Candy extends Snack
{
    public function __construct()
    {
        parent::__construct('Конфеты', 'белый', ['крем', 'ягоды']);
    }

    public function cut(): void
    {
        echo "Режем конфеты на кубики\n\n";
    }
}