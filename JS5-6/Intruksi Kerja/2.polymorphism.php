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
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Override metode getName untuk Student
    public function getName() {
        return "Student Name: " . $this->name;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return $this->studentID;
    }
}

// Class Teacher yang mewarisi class Person
class Teacher extends Person {
    private $teacherID;

    // Constructor untuk menginisialisasi name dan teacherID
    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    // Override metode getName untuk Teacher
    public function getName() {
        return "Teacher Name: " . $this->name;
    }

    // Metode untuk mendapatkan teacherID
    public function getTeacherID() {
        return $this->teacherID;
    }
}

// Instansiasi objek dari class Student
$student1 = new Student("Luthfia Sasha", "S123456");

// Instansiasi objek dari class Teacher
$teacher1 = new Teacher("Prih Diantoro Abda'u", "T987654");

// Menampilkan nama dan studentID
echo $student1->getName() . "<br>";
echo "Student ID: " . $student1->getStudentID() . "<br><br>";

// Menampilkan nama dan teacherID
echo $teacher1->getName() . "<br>";
echo "Teacher ID: " . $teacher1->getTeacherID() . "<br>";
?>
