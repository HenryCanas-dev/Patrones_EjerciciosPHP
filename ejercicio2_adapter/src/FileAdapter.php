<?php
class FileAdapter implements OldFile {
    private $windows10File;
    private $filename;

    public function __construct(Windows10File $windows10File, $filename) {
        $this->windows10File = $windows10File;
        $this->filename = $filename;
    }

    public function openInWindows7() {
        // Adaptamos el archivo antiguo para que funcione en Windows 10
        return $this->windows10File->openModernFile($this->filename . " (convertido)");
    }
}