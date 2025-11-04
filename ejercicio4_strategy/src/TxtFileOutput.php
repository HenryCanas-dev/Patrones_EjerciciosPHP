<?php
class TxtFileOutput implements OutputStrategy {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function output($message) {
        file_put_contents($this->filename, $message . PHP_EOL, FILE_APPEND);
        echo "Mensaje guardado en {$this->filename}" . PHP_EOL;
    }
}