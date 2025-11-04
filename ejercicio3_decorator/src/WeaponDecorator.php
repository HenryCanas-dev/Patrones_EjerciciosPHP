<?php
abstract class WeaponDecorator implements Character {
    protected $character;

    public function __construct(Character $character) {
        $this->character = $character;
    }

    public function getDescription() {
        return $this->character->getDescription();
    }

    public function getAttackPower() {
        return $this->character->getAttackPower();
    }
}