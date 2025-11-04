<?php
class Bow extends WeaponDecorator {
    public function getDescription() {
        return $this->character->getDescription() . " con Arco";
    }

    public function getAttackPower() {
        return $this->character->getAttackPower() + 12;
    }
}