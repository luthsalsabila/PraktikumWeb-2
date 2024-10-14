<?php
class Mahasiswa {
    // Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;

    // Metode atau Function
    public function tampilkanData() {
        return "Mahasiswa tersebut dengan nama $this->nama, NIM $this->nim, jurusan $this->jurusan.";
    }
}

// Instansiasi Objek tanpa konstruktor
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Zahira";
$mahasiswa1->nim = "12345";
$mahasiswa1->jurusan = "JKB";

echo $mahasiswa1->tampilkanData();
?>
