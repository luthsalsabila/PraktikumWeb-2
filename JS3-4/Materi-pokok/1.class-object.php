<?php
//Definisi Class
Class Buku {
    public $judul;
    public $penulis;

    //Constructor
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    //Metode atau Function
    public function tampilkanInfo() {
        return "Judul: $this->judul, Penulis: $this->penulis";
    }
}

//Instiasi Objek
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->tampilkanInfo();
?>