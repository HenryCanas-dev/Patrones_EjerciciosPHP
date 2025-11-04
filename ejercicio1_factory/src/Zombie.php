<?php
class Zombie implements CharacterInterface {
    public function attack() {
        return "Zombi muerde con fuerza!";
    }

    public function getSpeed() {
        return 4;
    }
}