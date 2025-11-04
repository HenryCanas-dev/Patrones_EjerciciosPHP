<?php
class Message {
    private $strategy;

    public function setOutputStrategy(OutputStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function send($text) {
        if ($this->strategy) {
            $this->strategy->output($text);
        }
    }
}