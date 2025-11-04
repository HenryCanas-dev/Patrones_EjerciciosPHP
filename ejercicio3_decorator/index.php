<?php
require_once 'src/Character.php';
require_once 'src/Warrior.php';
require_once 'src/Archer.php';
require_once 'src/WeaponDecorator.php';
require_once 'src/Sword.php';
require_once 'src/Bow.php';

$warrior = new Warrior();
$warriorWithSword = new Sword($warrior);

$archer = new Archer();
$archerWithBow = new Bow($archer);

echo $warriorWithSword->getDescription() . " - Poder: " . $warriorWithSword->getAttackPower() . "<br>";
echo $archerWithBow->getDescription() . " - Poder: " . $archerWithBow->getAttackPower() . "<br>";