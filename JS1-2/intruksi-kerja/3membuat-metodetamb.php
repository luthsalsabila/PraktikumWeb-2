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

    // Metode untuk mengubah jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Zahira", "12345", "JKB");
echo $mahasiswa1->tampilkanData();
echo "<br>";

// Mengubah jurusan menggunakan metode updateJurusan
$mahasiswa1->updateJurusan("JREM");
echo "Setelah update jurusan: <br>";
echo $mahasiswa1->tampilkanData();
?>
