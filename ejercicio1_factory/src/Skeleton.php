<?php
class Skeleton implements CharacterInterface {
    public function attack() {
        return "Esqueleto ataca con hueso afilado!";
    }

    public function getSpeed() {
        return 8;
    }
}