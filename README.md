# PraktikumWeb-2
Berikut Merupakan Tugas Praktikum Web 2

## Panduan Penggunaan
### 1. Class & Object
Class adalah blueprint untuk membuat objek. Objek adalah instansi dari class yang memiliki atribut (properties) dan metode (functions).

Contoh Penggunaan :
![image](https://github.com/user-attachments/assets/ff6a73cb-edf4-4810-a669-bf3fa1896c06)

### 2. Encapsulation
Encapsulation adalah teknik untuk melindungi data dengan menyembunyikan atribut dan hanya memperbolehkan akses melalui metode. Atribut yang dilindungi biasanya dideklarasikan sebagai private atau protected.

Contoh Penggunaan :
![image](https://github.com/user-attachments/assets/5b4cce11-834e-479f-bbc9-64802d1d0b02)

### 3. Inheritance
Inheritance adalah konsep di mana sebuah class dapat mewarisi sifat dan metode dari class lain. Class yang mewarisi disebut subclass, dan class yang diwarisi disebut superclass.

Contoh Penggunaan :
![code](https://github.com/user-attachments/assets/4c4a85b2-17d5-4029-9da1-e31b69fc3a09)

### 4. Polymorphism
Polymorphism memungkinkan metode yang sama untuk berfungsi dengan cara yang berbeda berdasarkan objek yang memanggilnya. Hal ini sering digunakan dalam konteks method overriding.

Contoh Penggunaan :
![code1](https://github.com/user-attachments/assets/43df20ca-ca76-48b2-ba68-989d3adf9401)

## JOBSHEET 1-2
### Materi Pokok
### 1. Class dan Object
Program ini mendefinisikan kelas Mobil, yang menyimpan informasi tentang mobil, termasuk merk dan warna. Kelas ini dilengkapi dengan metode untuk memberikan deskripsi mobil.

##### Langkah-langkah
1. Definisi Kelas: Kelas Mobil didefinisikan dengan dua atribut: merk dan warna.
2. Konstruktor: Metode __construct() digunakan untuk mengatur nilai awal atribut ketika objek dibuat.
3. Metode deskripsi(): Metode ini mengembalikan string yang berisi informasi tentang mobil.
4. Instansiasi Objek: Membuat objek mobil dari kelas Mobil dengan merk dan warna yang ditentukan.
5. Menampilkan Deskripsi: Memanggil metode deskripsi() untuk mencetak informasi tentang mobil.

##### Kode Sumber
![code2](https://github.com/user-attachments/assets/73fb0e3f-95bb-4289-9737-843d3a013835)

##### Output yang dapat diberikan
![image](https://github.com/user-attachments/assets/c4acc8bf-bb35-4555-a0fc-eae0a2eab4b5)

### 2. Atribut dan Metode
Program ini mendefinisikan kelas Buku, yang berfungsi sebagai blueprint untuk objek buku dengan atribut judul dan penulis. Kelas ini memiliki konstruktor untuk menginisialisasi atribut saat objek dibuat dan metode tampilkanInfo() untuk menampilkan informasi buku. Pengguna dapat membuat objek Buku dan memanggil metode tersebut untuk mendapatkan deskripsi buku.

#### Langkah-langkah 
1. Definisi Kelas: Kelas Buku didefinisikan dengan dua atribut: judul dan penulis.
2. Konstruktor: Metode __construct() digunakan untuk mengatur nilai awal atribut ketika objek dibuat.
3. Metode tampilkanInfo(): Metode ini mengembalikan string yang berisi informasi tentang buku.
4. Instansiasi Objek: Membuat objek buku1 dari kelas Buku dengan judul dan penulis yang ditentukan.
5. Menampilkan Info: Memanggil metode tampilkanInfo() untuk mencetak informasi buku.

#### Kode Sumber
![codee](https://github.com/user-attachments/assets/1a7a1d5c-34ba-4104-9501-4ddbdf7f7ad4)

#### Output yang dapat diberikan
![image](https://github.com/user-attachments/assets/2f02a2a9-434c-46a6-b288-536bd2818417)

### Instruksi Kerja

#### 1. Class & object
Program ini mendefinisikan kelas Mahasiswa, yang menyimpan informasi tentang mahasiswa melalui atribut $nama, $nim, dan $jurusan. Kelas ini dilengkapi dengan metode tampilkanData(), yang mengembalikan string yang berisi informasi lengkap mengenai mahasiswa, termasuk nama, NIM, dan jurusan. Program ini membuat instansi dari kelas Mahasiswa tanpa menggunakan konstruktor, sehingga nilai atribut diatur secara langsung setelah objek dibuat. Dengan mengisi atribut pada objek mahasiswa1 dengan nama "Zahira", NIM "12345", dan jurusan "JKB", pengguna dapat memanggil metode tampilkanData() untuk menampilkan informasi mahasiswa tersebut. Contoh ini menunjukkan penerapan dasar konsep pemrograman berorientasi objek (OOP) dalam PHP, termasuk class, object, atribut, dan metode.

#### Langkah-langkah
1. Definisi Kelas: Kelas Mahasiswa didefinisikan dengan tiga atribut: nama, nim, dan jurusan.
2. Metode tampilkanData(): Metode ini mengembalikan string yang berisi informasi tentang mahasiswa berdasarkan atribut yang telah diatur.
3. Instansiasi Objek: Membuat objek mahasiswa1 dari kelas Mahasiswa tanpa menggunakan konstruktor.
4. Pengaturan Atribut: Mengatur nilai atribut nama, nim, dan jurusan untuk objek mahasiswa1.
5. Menampilkan Informasi: Memanggil metode tampilkanData() untuk mencetak informasi tentang mahasiswa.

#### Kode Sumber
![cod](https://github.com/user-attachments/assets/a26984ae-c15b-481a-a9af-7ef0cf33fabf)

#### Output yang diberikan
![image](https://github.com/user-attachments/assets/4acdf6de-d184-465f-be0f-f75297d5d06f)

#### 2. Implementasi Constructor
Kode ini mendemonstrasikan penggunaan Object-Oriented Programming (OOP) dalam PHP dengan mendefinisikan kelas Mahasiswa, yang memiliki atribut nama, nim, dan jurusan. Melalui konstruktor, objek Mahasiswa diinisialisasi dengan nilai-nilai tersebut. Metode tampilkanData() menghasilkan string berisi informasi mahasiswa. Objek mahasiswa1 diinstansiasi dengan nilai yang relevan, dan echo digunakan untuk mencetak informasi yang diperoleh dari metode tersebut, memungkinkan pemahaman dasar OOP dalam PHP dan penggunaan objek.

#### Langkah-langkah
1. Definisi Kelas: Kelas Mahasiswa didefinisikan dengan tiga atribut: nama, nim, dan jurusan.
2. Konstruktor: Metode __construct() digunakan untuk menginisialisasi nilai awal atribut ketika objek dibuat, sehingga objek dapat langsung memiliki informasi yang diperlukan saat dibuat.
3. Metode tampilkanData(): Metode ini mengembalikan string yang berisi informasi tentang mahasiswa berdasarkan atribut yang telah diatur.
4. Instansiasi Objek: Membuat objek mahasiswa1 dari kelas Mahasiswa dengan memberikan nilai untuk nama, nim, dan jurusan saat pembuatan objek.
5. Menampilkan Informasi: Memanggil metode tampilkanData() untuk mencetak informasi tentang mahasiswa.

#### Kode Sumber
![aaaa](https://github.com/user-attachments/assets/72d6b41d-05c9-47f3-a4c7-e753e5a10a31)

#### Output yang diberikan
![image](https://github.com/user-attachments/assets/e00f97b4-e284-44ca-b568-d0f8f7e13620)

#### 3. Membuat Metode Tambahan
Proyek ini mendemonstrasikan penggunaan konsep Object-Oriented Programming (OOP) dalam PHP dengan mendefinisikan kelas Mahasiswa. Kelas ini memiliki atribut untuk menyimpan informasi tentang mahasiswa, termasuk nama, NIM, dan jurusan, serta menyediakan metode untuk menampilkan data dan memperbarui jurusan. Proyek ini mendemonstrasikan penggunaan konsep Object-Oriented Programming (OOP) dalam PHP dengan mendefinisikan kelas Mahasiswa. Kelas ini memiliki atribut untuk menyimpan informasi tentang mahasiswa, termasuk nama, NIM, dan jurusan. Selain itu, kelas ini menyediakan beberapa metode, seperti:
1. Konstruktor: Menginisialisasi atribut nama, nim, dan jurusan saat objek dibuat.
2. Metode tampilkanData(): Mengembalikan string yang berisi informasi lengkap tentang mahasiswa.
3. Metode updateJurusan($jurusanBaru): Memungkinkan pengubahan jurusan mahasiswa.

#### Langkah-langkah
1. Definisi Kelas: Kelas Mahasiswa didefinisikan dengan atribut nama, nim, dan jurusan.
2. Konstruktor: Konstruktor digunakan untuk menginisialisasi nilai awal atribut saat objek dibuat.
3. Metode tampilkanData(): Metode ini mengembalikan string yang mencetak informasi tentang mahasiswa.
4. Instansiasi Objek: Membuat objek mahasiswa1 dari kelas Mahasiswa dengan nilai yang ditentukan.
5. Mengubah Jurusan: Metode updateJurusan() digunakan untuk memperbarui jurusan mahasiswa,

#### Kode Sumber :
![bbbb](https://github.com/user-attachments/assets/687855ef-0eaf-47c7-8ead-086cf790661c)

#### Output yang diberikan
![image](https://github.com/user-attachments/assets/65bf42ce-e6b1-42cd-a541-c96537f229da)

#### 4. Penggunaan Atribut Method
Contoh implementasi OOP dalam PHP menggunakan kelas Mahasiswa, yang memiliki atribut nama, nim, dan jurusan. Kelas ini menyediakan beberapa fitur, yaitu tampilkanData() untuk menampilkan informasi mahasiswa, updateJurusan($jurusanBaru) untuk mengubah jurusan, dan setNim($nimBaru) untuk memperbarui NIM. Dalam contoh penggunaannya, objek mahasiswa dibuat dengan nama, NIM, dan jurusan, kemudian jurusan dan NIM dapat diubah menggunakan metode yang tersedia.

#### Langkah-langkah
1. Definisi Kelas: Kelas Mahasiswa dengan atribut nama, nim, dan jurusan.
2. Konstruktor: Menginisialisasi atribut saat objek dibuat.
3. Metode tampilkanData(): Menampilkan informasi lengkap mahasiswa.
4. Metode updateJurusan(): Mengubah jurusan mahasiswa.
5. Metode setNim(): Mengubah NIM mahasiswa.

#### Kode Sumber
![cccc](https://github.com/user-attachments/assets/26d31009-1921-4614-8089-585fcd8500c4)

#### Output yang diberikan
![image](https://github.com/user-attachments/assets/08e54e85-79c3-47eb-bfda-ceb10485daed)


### Tugas
1. dosen.php
Contoh implementasi konsep Object-Oriented Programming (OOP) dalam PHP menggunakan kelas Dosen. Kelas ini memiliki atribut nama, nip, dan mataKuliah, yang diinisialisasi melalui konstruktor saat pembuatan objek. Kelas ini menyediakan metode tampilkanDosen() untuk menampilkan informasi lengkap dari dosen. Pada contoh ini, sebuah objek dosen dibuat dengan nama, NIP, dan mata kuliah, yang kemudian informasinya ditampilkan melalui metode tersebut. Dengan fitur utama, Inisialisasi atribut dosen (nama, NIP, mata kuliah) melalui konstruktor dan metode untuk menampilkan informasi dosen secara lengkap.

#### Langkah-langkah
1. Definisi Kelas Dosen: Kelas Dosen didefinisikan dengan tiga atribut: nama, nip, dan mataKuliah.
2. Konstruktor: Metode __construct() digunakan untuk menginisialisasi atribut nama, nip, dan mataKuliah saat objek dibuat.
3. Metode tampilkanDosen(): Metode ini mengembalikan string yang berisi informasi lengkap tentang dosen (nama, NIP, dan mata kuliah).
4. Instansiasi Objek: Objek dosen1 dibuat dari kelas Dosen dengan mengisi nama, NIP, dan mata kuliah.
5. Menampilkan Informasi: Memanggil metode tampilkanDosen() untuk mencetak informasi dosen pada layar.

#### Kode Sumber
![ddd](https://github.com/user-attachments/assets/f18ec1bf-6a6d-4e5c-817f-8ac59b6b41bc)

#### Output yang diberikan
![image](https://github.com/user-attachments/assets/c030eb60-14a9-48f3-8e4f-06831a36fe54)

## JOBSHEET 3-4
### Materi Pokok
#### Output Materi Pokok
1. Class & Object
![image](https://github.com/user-attachments/assets/5f74b5b9-f4d0-4e14-bd9e-4b7dd3be14a0)

2. Encapsulation
![image](https://github.com/user-attachments/assets/0270ed0b-6da7-4e52-8ce9-ced64a27b15c)

3. Inheritance
![image](https://github.com/user-attachments/assets/fab11d44-a872-4e41-98dc-dc3b5eb22c6d)

### Tugas (Instruksi) 
### 1.Class & Object
Script ini menunjukan penggunaan class untuk mengelola informasi mahasiswa, termasuk penerapan prinsip pemrograman berorientasi objek seperti atribut, konstruktor, dan metode untuk menampilkan data. Dengan class mahasiswa memiliki 3 atribut yaitu, nama, nim, dan jurusan. Constructor dalam script ini digunakan untuk menginisialisasi objek dengan nilai-nilai yang diberikan untuk nama, NIM, dan jurusan. Serta metode untuk menampilkan detail mahasiswa seperti nama, NIM, dan jurusan.

#### Langkah-langkah
1. Kelas Mahasiswa didefinisikan dengan atribut dan metode untuk mengelola data mahasiswa.
2. Konstruktor digunakan untuk menginisialisasi detail mahasiswa saat objek dibuat.
3. Metode tampilkanData() digunakan untuk menampilkan nama, NIM, dan jurusan mahasiswa.
4. Script membuat objek dari kelas Mahasiswa dengan nama "Levi Ackerman," NIM "123456789," dan jurusan "Teknik Informatika."
5. Metode tampilkanData() dipanggil untuk mencetak informasi mahasiswa.

#### Kode Sumber
![ffff](https://github.com/user-attachments/assets/4e0aded7-fc0b-4815-a732-3a332b7520f2)

#### Output yang dihasilkan
![image](https://github.com/user-attachments/assets/79e353e8-e976-4bab-bcb1-324636c86fea)

### 2. Encapsulation
Script ini merupakan implementasi OOP (Object-Oriented Programming) dengan penerapan Encapsulation menggunakan metode getter dan setter. Kode ini mengelola informasi mahasiswa menggunakan atribut private, serta menyediakan akses dan modifikasi data melalui metode getter dan setter.

#### Langkah-langkah
1. Definisikan atribut nama, nim, dan jurusan sebagai private.
2. Gunakan constructor untuk menginisialisasi atribut saat objek dibuat.
3. Implementasikan metode getter dan setter untuk mengakses dan mengubah atribut.
4. Buat metode tampilkanData() untuk mencetak data mahasiswa.
5. Instansiasi objek mahasiswa dan tampilkan data.
6. Perbarui data menggunakan setter dan tampilkan perubahan data.

#### Kode Sumber
![eee](https://github.com/user-attachments/assets/0cf0b1b7-09f0-4998-95ab-d7c5ea3c6c7a)

#### Output yang diberikan
![image](https://github.com/user-attachments/assets/df724fa8-9f71-4ed2-91e3-292057234f9f)

3. Ingeritance
![image](https://github.com/user-attachments/assets/49c88459-1d57-460d-a92e-a9061b8a6c9c)

4. Polymorphism
![image](https://github.com/user-attachments/assets/63497f72-8da2-44cb-8724-11e76fd8b167)

5. Abstraction
![image](https://github.com/user-attachments/assets/40cbb12f-2136-42bd-8dc7-0fb57b32f88a)



