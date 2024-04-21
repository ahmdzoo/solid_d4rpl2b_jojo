<?php
include("Mahasiswa.php");
include("ViewMahasiswa.php");


$mahasiswa = new Mahasiswa("2205017", "Maskani");


$view = new ViewMahasiswa();

$view->showMahasiswa($mahasiswa);
