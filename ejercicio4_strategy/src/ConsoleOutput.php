<?php
class ConsoleOutput implements OutputStrategy {
    public function output($message) {
        echo $message . PHP_EOL;
    }
}