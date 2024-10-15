<?php
// Kelas abstrak Course
abstract class Course {
    protected $courseName;

    // Constructor untuk menginisialisasi nama kursus
    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    // Metode abstrak untuk mendapatkan detail kursus
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    private $platform;

    // Constructor untuk menginisialisasi nama kursus dan platform
    public function __construct($courseName, $platform) {
        parent::__construct($courseName);
        $this->platform = $platform;
    }

    // Implementasi metode getCourseDetails untuk OnlineCourse
    public function getCourseDetails() {
        return "Online Course: " . $this->courseName . " di platform " . $this->platform;
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    private $location;

    // Constructor untuk menginisialisasi nama kursus dan lokasi
    public function __construct($courseName, $location) {
        parent::__construct($courseName);
        $this->location = $location;
    }

    // Implementasi metode getCourseDetails untuk OfflineCourse
    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName . " di lokasi " . $this->location;
    }
}

// Instansiasi objek dari class OnlineCourse
$onlineCourse = new OnlineCourse("Pemrograman Web", "W3 School");

// Instansiasi objek dari class OfflineCourse
$offlineCourse = new OfflineCourse("Pengantar Data Science", "Ruang Kelas A101");

// Menampilkan detail kursus
echo $onlineCourse->getCourseDetails() . "<br>";
echo $offlineCourse->getCourseDetails() . "<br>";
?>
