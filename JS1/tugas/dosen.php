<?php
class Dosen {
    // Atribut atau Properties
    public $nama;
    public $nip;
    public $mataKuliah;

    // Konstruktor untuk menginisialisasi properti
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan informasi dosen
    public function tampilkanDosen() {
        return "Dosen: $this->nama, NIP: $this->nip, Mata Kuliah: $this->mataKuliah.";
    }
}

// Instansiasi Objek
$dosen1 = new Dosen("Prih Diantoro Abda'u", "123456789", "Pemrograman Web");
echo $dosen1->tampilkanDosen();
?>
