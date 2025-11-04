<?php
require_once 'src/CharacterInterface.php';
require_once 'src/Skeleton.php';
require_once 'src/Zombie.php';
require_once 'src/CharacterFactory.php';

// Función para mostrar personaje
function mostrarPersonaje($nivel) {
    echo "<h3>Nivel: " . ucfirst($nivel) . "</h3>";
    try {
        $personaje = CharacterFactory::create($nivel);
        echo "<p><strong>Personaje:</strong> " . get_class($personaje) . "</p>";
        echo "<p><strong>Ataque:</strong> " . $personaje->attack() . "</p>";
        echo "<p><strong>Velocidad:</strong> " . $personaje->getSpeed() . "</p>";
        echo "<hr>";
    } catch (InvalidArgumentException $e) {
        echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
    }
}

// === DEMOSTRACIÓN DE AMBOS NIVELES ===
mostrarPersonaje('facil');
mostrarPersonaje('dificil');
mostrarPersonaje('medio'); // Esto mostrará error (opcional, para robustez)