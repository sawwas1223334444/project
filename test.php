<?php
// test.php
require 'vendor/autoload.php';

use Serg\Repo\Factories\MyFactory;

$factory = new MyFactory();
$factory->orderSnack('батончик');
