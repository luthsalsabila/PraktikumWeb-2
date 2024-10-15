<?php
// Class abstrak Pengguna
abstract class Pengguna {
    protected $nama;

    // Constructor untuk menginisialisasi atribut nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak aksesFitur, harus diimplementasikan oleh subclass
    abstract public function aksesFitur();

    // Metode untuk mendapatkan nama
    public function getNama() {
        return $this->nama;
    }
}

// Class Dosen yang mewarisi class Pengguna dan mengimplementasikan metode abstrak
class Dosen extends Pengguna {
    private $mataKuliah;

    // Constructor untuk menginisialisasi nama dan mata kuliah
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    // Implementasi metode aksesFitur untuk Dosen
    public function aksesFitur() {
        echo "Dosen " . $this->getNama() . " dapat mengakses fitur untuk mengelola nilai dan mata kuliah.<br>";
    }

    // Metode untuk mendapatkan mata kuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}

// Class Mahasiswa yang mewarisi class Pengguna dan mengimplementasikan metode abstrak
class Mahasiswa extends Pengguna {
    private $nim;

    // Constructor untuk menginisialisasi nama dan nim
    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    // Implementasi metode aksesFitur untuk Mahasiswa
    public function aksesFitur() {
        echo "Mahasiswa " . $this->getNama() . " dapat mengakses fitur untuk melihat nilai dan jadwal kuliah.<br>";
    }

    // Metode untuk mendapatkan NIM
    public function getNim() {
        return $this->nim;
    }
}

// Instansiasi objek dari class Dosen
$dosen1 = new Dosen("Prih Diantoro Abda'u", "Pemrograman Web");

// Instansiasi objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("Andi Permana", "123456789");

// Memanggil metode aksesFitur dari objek Dosen
$dosen1->aksesFitur();

// Memanggil metode aksesFitur dari objek Mahasiswa
$mahasiswa1->aksesFitur();
?>
