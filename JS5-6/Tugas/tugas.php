<?php
// Kelas Person sebagai induk dari Dosen dan Mahasiswa
class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    // Metode getRole() akan di-override oleh kelas turunan
    public function getRole() {
        return "Unknown Role";
    }
}

// Kelas Dosen yang merupakan turunan dari Person
class Dosen extends Person {
    private $nip;

    public function __construct($name, $age, $nip) {
        parent::__construct($name, $age);
        $this->nip = $nip;
    }

    // Override metode getRole()
    public function getRole() {
        return "Dosen";
    }

    // Encapsulation untuk melindungi NIP
    public function getNip() {
        return $this->nip;
    }

    public function setNip($nip) {
        $this->nip = $nip;
    }
}

// Kelas Mahasiswa yang merupakan turunan dari Person
class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $age, $nim) {
        parent::__construct($name, $age);
        $this->nim = $nim;
    }

    // Override metode getRole()
    public function getRole() {
        return "Mahasiswa";
    }

    // Encapsulation untuk melindungi NIM
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }

    // Fungsi abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function submitJurnal();
}

// Kelas JurnalDosen sebagai turunan dari Jurnal
class JurnalDosen extends Jurnal {
    private $nip;

    public function __construct($judul, $nip) {
        parent::__construct($judul);
        $this->nip = $nip;
    }

    public function submitJurnal() {
        return "Jurnal Dosen dengan judul '{$this->judul}' telah diajukan oleh dosen dengan NIP {$this->nip}.";
    }
}

// Kelas JurnalMahasiswa sebagai turunan dari Jurnal
class JurnalMahasiswa extends Jurnal {
    private $nim;

    public function __construct($judul, $nim) {
        parent::__construct($judul);
        $this->nim = $nim;
    }

    public function submitJurnal() {
        return "Jurnal Mahasiswa dengan judul '{$this->judul}' telah diajukan oleh mahasiswa dengan NIM {$this->nim}.";
    }
}

// Membuat objek Dosen dan Mahasiswa
$dosen = new Dosen("Prih Diantoro Abda'u", 45, "123456789");
$mahasiswa = new Mahasiswa("Luthfi Alsbrause", 21, "987654321");

// Menampilkan detail objek Dosen
echo $dosen->getName() . " adalah seorang " . $dosen->getRole() . " dengan NIP " . $dosen->getNip() . "<br>";

// Menampilkan detail objek Mahasiswa
echo $mahasiswa->getName() . " adalah seorang " . $mahasiswa->getRole() . " dengan NIM " . $mahasiswa->getNim() . "<br><br>";

// Membuat dan mengajukan jurnal dosen
$jurnalDosen = new JurnalDosen("Teknologi Pendidikan", $dosen->getNip());
echo $jurnalDosen->submitJurnal() . "<br>";

// Membuat dan mengajukan jurnal mahasiswa
$jurnalMahasiswa = new JurnalMahasiswa("Pembelajaran PHP", $mahasiswa->getNim());
echo $jurnalMahasiswa->submitJurnal() . "<br>";
?>
