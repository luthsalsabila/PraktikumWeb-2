<?php
class Mahasiswa {
    // Deklarasi atribut private
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor untuk menginisialisasi atribut
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Getter dan Setter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter dan Setter untuk atribut nim
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Getter dan Setter untuk atribut jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "NIM: " . $this->getNim() . "<br>";
        echo "Jurusan: " . $this->getJurusan() . "<br>";
    }
}

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Levi Ackerman", "123456789", "Teknik Informatika");

// Menampilkan data mahasiswa
$mahasiswa1->tampilkanData();

echo "<br>--- Update Data ---<br>";

// Mengubah data menggunakan setter
$mahasiswa1->setNama("Levi Ackerman");
$mahasiswa1->setNim("987654321");
$mahasiswa1->setJurusan("Sistem Informasi");

// Menampilkan data yang telah diubah
$mahasiswa1->tampilkanData();
?>
