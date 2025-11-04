<?php
class JsonOutput implements OutputStrategy {
    public function output($message) {
        echo json_encode(['message' => $message], JSON_PRETTY_PRINT) . PHP_EOL;
    }
}