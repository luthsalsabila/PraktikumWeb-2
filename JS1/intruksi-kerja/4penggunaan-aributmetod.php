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

    // Metode untuk menampilkan data
    public function tampilkanData() {
        return "Mahasiswa tersebut dengan nama $this->nama, NIM $this->nim, jurusan $this->jurusan.";
    }

    // Metode untuk mengupdate jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Metode setter untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Zahira", "12345", "JKB");
echo $mahasiswa1->tampilkanData();
echo "\n";

// Mengubah jurusan
$mahasiswa1->updateJurusan("JREM");
echo $mahasiswa1->tampilkanData();
echo "\n";

// Mengubah NIM menggunakan setter
$mahasiswa1->setNim("67890");
echo $mahasiswa1->tampilkanData();
?>
