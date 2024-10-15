<?php
// Class Pengguna sebagai superclass
class Pengguna {
    protected $nama;

    // Constructor untuk menginisialisasi atribut nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nama
    public function getNama() {
        return $this->nama;
    }
}

// Class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna {
    private $mataKuliah;

    // Constructor untuk menginisialisasi nama dan mata kuliah
    public function __construct($nama, $mataKuliah) {
        // Memanggil constructor parent class (Pengguna)
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk mendapatkan mata kuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    // Metode untuk menampilkan data dosen
    public function tampilkanDataDosen() {
        echo "Nama Dosen : " . $this->getNama() . "<br>";
        echo "Mata Kuliah : " . $this->getMataKuliah() . "<br>";
    }
}

// Instansiasi objek dari class Dosen
$dosen1 = new Dosen("Prih Diantoro Abda'u", "Pemrograman Web");

// Menampilkan data dosen
$dosen1->tampilkanDataDosen();
?>
