<?php
// Class Person sebagai superclass
class Person {
    protected $name;

    // Constructor untuk menginisialisasi atribut name
    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
}

// Class Student yang mewarisi class Person
class Student extends Person {
    private $studentID;

    // Constructor untuk menginisialisasi name dan studentID
    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil constructor dari class Person
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }
}

// Instansiasi objek dari class Student
$student1 = new Student("Luthfia Sasha", "S123456");

// Menampilkan nama dan studentID
echo "Nama: " . $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br>";
?>
