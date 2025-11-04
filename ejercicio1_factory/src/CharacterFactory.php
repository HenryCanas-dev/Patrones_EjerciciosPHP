<?php
class CharacterFactory {
    public static function create(string $level): CharacterInterface {
        return match (strtolower($level)) {
            'facil', 'easy' => new Skeleton(),
            'dificil', 'hard' => new Zombie(),
            default => throw new InvalidArgumentException("Nivel desconocido: $level"),
        };
    }
}