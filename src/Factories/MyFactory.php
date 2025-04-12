<?php

namespace Serg\Repo\Factories;

use Serg\Repo\ChocolateFactory;
use Serg\Repo\Snack;
use Serg\Repo\Snacks\ChocolateBar;
use Serg\Repo\Snacks\Candy;
use Serg\Repo\Snacks\Cookie;

class MyFactory extends ChocolateFactory
{
    protected function createSnack(string $type): ?Snack
    {
        return match ($type) {
            'батончик' => new ChocolateBar(),
            'конфеты' => new Candy(),
            'печенье' => new Cookie(),
            default => parent::createSnack($type),
        };
    }
}