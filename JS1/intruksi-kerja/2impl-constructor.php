<?php
class Mahasiswa {
    // Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi properti
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode atau Function
    public function tampilkanData() {
        return "Mahasiswa tersebut dengan nama $this->nama, NIM $this->nim, jurusan $this->jurusan.";
    }
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Zahira", "12345", "JKB");
echo $mahasiswa1->tampilkanData();
?>
