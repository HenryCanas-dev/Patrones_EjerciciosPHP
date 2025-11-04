<?php
require_once 'src/OldFile.php';
require_once 'src/Windows7File.php';
require_once 'src/Windows10File.php';
require_once 'src/FileAdapter.php';

// Archivo antiguo (Windows 7)
$oldFile = new Windows7File("documento.docx");
echo $oldFile->openInWindows7() . "<br>";

// Windows 10 intenta abrirlo → usamos Adapter
$windows10 = new Windows10File();
$adaptedFile = new FileAdapter($windows10, "documento.docx");
echo $adaptedFile->openInWindows7() . "<br>";