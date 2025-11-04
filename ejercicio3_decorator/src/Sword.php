<?php
class Sword extends WeaponDecorator {
    public function getDescription() {
        return $this->character->getDescription() . " con Espada";
    }

    public function getAttackPower() {
        return $this->character->getAttackPower() + 15;
    }
}