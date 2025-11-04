<?php
class Windows7File implements OldFile {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function openInWindows7() {
        return "Abriendo archivo antiguo '{$this->filename}' en Windows 7...";
    }
}