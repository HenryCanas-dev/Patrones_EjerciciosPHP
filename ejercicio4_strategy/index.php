<?php
require_once 'src/OutputStrategy.php';
require_once 'src/ConsoleOutput.php';
require_once 'src/JsonOutput.php';
require_once 'src/TxtFileOutput.php';
require_once 'src/Message.php';

// Limpiar archivo anterior (opcional, para pruebas)
if (file_exists('output.txt')) {
    unlink('output.txt');
}

echo "<h2>Demostración del Patrón Strategy</h2>";
echo "<p>Mostrando el mismo mensaje en 3 formatos diferentes:</p><hr>";

// === 1. Salida por CONSOLA ===
echo "<h3>1. Salida por Consola</h3>";
$message = new Message();
$message->setOutputStrategy(new ConsoleOutput());
$message->send("Hola desde consola");

// === 2. Salida en JSON ===
echo "<h3>2. Salida en Formato JSON</h3>";
$message->setOutputStrategy(new JsonOutput());
$message->send("Hola en formato JSON");

// === 3. Salida en archivo TXT ===
echo "<h3>3. Salida en Archivo TXT</h3>";
$message->setOutputStrategy(new TxtFileOutput('output.txt'));
$message->send("Hola guardado en archivo TXT");

// Mostrar contenido del archivo TXT
echo "<h3>Contenido del archivo <code>output.txt</code>:</h3>";
echo "<pre style='background:#f4f4f4; padding:10px; border:1px solid #ddd;'>";
if (file_exists('output.txt')) {
    echo htmlspecialchars(file_get_contents('output.txt'));
} else {
    echo "El archivo no se generó.";
}
echo "</pre>";

// Limpieza final (opcional)
echo "<p><small><i>Nota: El archivo se crea en la misma carpeta del ejercicio.</i></small></p>";