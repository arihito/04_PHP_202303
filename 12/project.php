<?php declare(strict_types=1);
require_once dirname(__FILE__) . '/SportsCar.php';
require_once dirname(__FILE__) . '/Track.php';

$t = new Track('青', 6);
$t->lift(3);
$t->getList();

$s = new SportsCar('赤', 4);
$s->accel(300);
$s->getList();
