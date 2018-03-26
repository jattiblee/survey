

# _Software Requirements Specification_

#
## for

## Aplikasi Form Online

Oleh:

171022000045 – Jati Prasetyo (Github : jattiblee)

171022000062 – Juri Pebrianto (Github : aquarink)

171022000044 – Riky Susanto (Github : riky-cloud)



Table of Contents

|         Pendahuluan        |
| --- |
|         Tujuan Penulisan Dokumen        |
|         Audien yang Dituju dan Pembaca yang Disarankan        |
|         Batasan Produk        |
|         Definisi dan Istilah        |
|         Refrensi        |
|         Deskripsi Keseluruhan        |
|         Deskripsi Produk        |
|         Fungsi Produk        |
|         Penggolongan Karakterik Pengguna        |
|         Lingkungan Operasi        |
|         Batasan Desain dan Implementasi        |
|         Dokumentasi Pengguna        |
|         KebutuhanAntarmuka Eksternal        |
|         User Interfaces        |
| 3.2        Hardware Interface        |
| 3.3        Software Interface        |
| 3.4        Communication Interface        |
|         Functional Requirement        |
| 4.1        Use Case Diagram        |
|         Nama Use Case 1        |
| 4.3        Nama Use Case 2        |
| 4.4        Class Diagram        |
| 5.        Non Functional Requirements        |
| |

Revision History

| **Name** | **Date** | **Reason For Changes** | **Version** |
| --- | --- | --- | --- |
|   |   |   |   |
|   |   |   |   |
|   |   |   |   |



1. 1.Pendahuluan
  1. 1.1Tujuan Penulisan Dokumen

Tujuan dari dokumen Software Requirement Specification ini adalah untuk memberikan gambaran yang spesifik mengenai kebutuhan software dari Aplikasi Form Online. Spesifikasi tersebut termasuk dari segi perangkat lunak dan perangkat keras, untuk memberikan gambaran dan penjelasan yang dibutuhkan untuk produk termasuk kebutuhan fungsional dan non fungsional, dan kebutuhan antar muka, mulai dari antar muka pengguna hingga antar muka komunikasi.

1.
  1. 1.2Audien yang Dituju dan Pembaca yang Disarankan

&lt;Jelaskan berbagai jenis pembaca bahwa dokumen ini ditujukan untuk, seperti pengembang, manajer proyek, staf pemasaran, pengguna, penguji, dan lainnya&gt;

1.
  1. 1.3Batasan Produk

Semua hal yang tercantum di dalam dokumen ini merupakan bagian dari ruang lingkup kebutuhan pembangunan perngkat lunak yang berupa aplikasi berbasis web yang digunakan untuk membuat form secara online, menjawab pertanyaan yang telah dibuat oleh user lain, dan melihat hasil jawaban yang telah dijawab oleh user lain.

1.
  1. 1.4Definisi dan Istilah

&lt;tulis istilah dan definisikan jika ada&gt;

- SRS        :        _Software Requirements Specification_, atau

          Spesifikasi Kebutuhan Perangkat Lunak (SKPL)

- IEEE        :        _Institute of Electrical and Electronics Engineering_

                Standar internasional untuk pengembangan dan perancangan produk.

1.
  1. 1.5Refrensi

IEEE Std. 830-1998, IEEE Recommended Practice for Software Requirement Specifications.



1. 2.Deskripsi Keseluruhan
  1. 2.1Deskripsi Produk

Aplikasi Form Online ini merupakan perankat lunak yang dapat digunakan untuk membuat pertanyaan – pertanyaan agar dapat dijawab atau direspon oleh user lain secara online. Pada aplikasi ini, user yang telah membuat pertanyaan juga dapat membagikan link kepada user lain agar user lain dapat menjawab pertanyaan yang telah dibuat. Setelah user lain menjawab pertanyaan tersebut, user pemberi pertanyaan dapat melihat jawaban yang diinput oleh user lain. Aplikasi ini dapat digunakan untuk membuat Survey Online, Kuis Online, dan bisa digunakan untuk Ujian Online.

1.
  1. 2.2Fungsi Produk

Produk ini memiliki beberapa fungsi dalam kebutuhan User antara lain:

- Login User
- Register User
- Buat pertanyaan
- Preview pertanyaan
- Melihat Respon (jawaban)
- Membagikan link pertanyaan
- Menjawab pertanyaan

1.
  1. 2.3Penggolongan Karakterik Pengguna

Adapun pengguna dalam sistem ini adalah sebagai berikut:

- User 1 (Pembuat pertanyaan)
- User 2 (Pemberi jawaban)

Tabel berikut menggambarkan         karakteristik umum pengguna yang akan mempengaruhi fungsionalitas dari produk perangkat lunak.

Tabel 1 Karakteristik Pengguna

| Kategori Pengguna | Fasilitas | Hak akses ke Aplikasi |
| --- | --- | --- |
|   User |
- Login/logout
- Register
- Membuat pertanyaan
- Melihat respon
- Membagikan _link_ pertanyaan
- Menjawab pertanyaan
 |
- Hak akses ke form login
- Hak akses ke form register
- Hak akses ke menu membuat pertanyaan
- Hak akses melihat respon User 2
 |



1.
  1. 2.4Lingkungan Operasi

&lt;Jelaskan lingkungan di mana perangkat lunak akan beroperasi, termasuk platform, perangkat keras, sistem operasi dan versi, dan komponen perangkat lunak lain atau aplikasi yangberdampingan&gt;

Aplikasi form online ini adalah aplikasi yang berjalan secara stand alone. Aplikasi ini tidak ada admin karena setiap user dapat membuat pertanyaan untuk dibagikan.

1.
  1. 2.5Batasan Desain dan Implementasi

&lt;Jelaskan setiap item atau masalah yang akan membatasi pilihan yang tersedia untuk para pengembang / developer. Ini mungkin termasuk: kebijakan perusahaan atau peraturan; keterbatasan hardware (persyaratan memori); teknologi tertentu, alat, dan database yang akan digunakan; persyaratan bahasa; protokol komunikasi; pertimbangan keamanan; atau standar pemrograman&gt;

Batasan aplikasi Form Online dalam konteks SRS ini adalah sebagai berikut:

1. a)Aplikasi ini akan dibangun menggunakan .... berbasis ....
2. b)Database yang digunakan adalah MySQL versi ....
3. c)Aplikasi ini dapat digunakan oleh semua user yang terhubung koneksi internet.



1. 3.KebutuhanAntarmuka Eksternal
  1. 3.1User Interfaces

Aplikasi ini menggunakan antarmuka berbasis web. Rancangan antarmuka ini bertujuan untuk memperjelas mengenai program pada sistem ini.

1.
2.
3.
  1. 1
    1. 1.1Login
    2. 1.2Register
    3. 1.3Dashboard
    4. 1.4Halaman Tambah Pertanyaan
    5. 1.5Halaman Preview Pertanyaan
    6. 1.6Halaman Lihat Respon
    7. 1.7Halaman Menjawab Pertanyaan

1.
  1. 3.2Hardware Interface

| **Hardware** | **Function** |
| --- | --- |
| Monitor |   |
| Mouse |   |

1.
  1. 3.3Software Interface

| **Jenis Software** | **Kebutuhan Hardware** |
| --- | --- |
| Sistem Operasi |   |
| Bahasa Pemrograman |   |
| Pengolah Database |   |
| Framework |   |
| Pemodelan Sistem |   |
| Perancangan Database |   |
| Perancangan Antar Muka |   |
|   |   |

1.
  1. 3.4Communication Interface

&lt;Describe the requirements associated with any communications functions required by this product, including e-mail, web browser, network server communications protocols, electronic forms, and so on. Define any pertinent message formatting. Identify any communication standards that will be used, such as FTP or HTTP. Specify any communication security or encryption issues, data transfer rates, and synchronization mechanisms.&gt;

1. 4.Functional Requirement

1.
  1. 1Login
    1. 1.1Description and Priority

Pada form login inputan untuk dapat masuk ke dalam aplikasi adalah username dan password yang sudah terdaftar di dalam database. Dari fungsi login ini maka sistem akan memeriksa valid tidaknya data yang dimasukkan dalam form login lalu sistem menampilkan halaman dashboard.

1.
  1.
    1. 1.2Stimulus / Response Sequence

| **Aksi Aktor** | **Reaksi Sistem** |
| --- | --- |
|
1. User memasukan email dan password
 |   |
|   |
1. Memeriksa valid tidaknya data masukan dengan memeriksa ke table user.
 |
|   |
1. Masuk ke sistem sesuai dengan profile yang terdaftar
 |

1.
  1.
    1. 1.3Functional Requirement

REQ 1 : Jika input yang dimasukan salah atau tidak terdaftar di database maka sistem akan menampilkan pesan kesalahan dan kembali ke menu form login.

1.
  1. 2Register
    1. 2.1Description and Priority

User harus melakukan register jika belum memiliki akun agar dapat mengakses aplikasi ini.

1.
  1.
    1. 2.2Stimulus / Response Sequence

| **Aksi Aktor** | **Reaksi Sistem** |
| --- | --- |
|
1. User mendaftarkan username
 |   |
|   |
1. Sistem memeriksa apakah username sudah terdaftar atau belum
 |
|
1. Jika username sudah ada, maka kembali ke form register. Jika belum ada maka user masuk ke form login
 |   |

1.
  1.
    1. 2.3Functional Requirement

REQ 1 : Jika input username sudah ada di database maka sistem akan menampilkan pesan bahwa username tersebut sudah ada dan akan dikembalikan ke halaman register untuk diinput username yang lainnya.

1.
  1. 3Halaman Buat Pertanyaan
    1. 3.1Description and Priority

User dapat membuat pertanyaan dengan input judul pertanyaan terlebih dahulu, lalu klik tombol tambah pertanyaan dan kemudian dapat membuat bermacam – macam pertanyaan.

1.
  1.
    1. 3.2Stimulus / Response Sequence

| **Aksi Aktor** | **Reaksi Sistem** |
| --- | --- |
|
1. User input judul pertanyaan
 |   |
|
1. User Klik tombol Tambah Pertanyaan
 |   |
|   |
1. Aplikasi akan menampilkan window pop up untuk user agar dapat input pertanyaan dan pilihan – pilihannya.
 |
|
1. User klik Simpan Pertanyaan
 |   |
|   |
1. Aplikasi akan menyimpan pertanyaan ke database.
 |

1.
  1.
    1. 3.3Functional Requirement

REQ 1        : Jika User tidak input judul pertanyaan, maka user tidak dapat klik tombol tambah pertanyaan.

REQ 2        : Jika User input pilihan hanya 1, maka user tidak dapat melanjutkan untuk menambahkan jumlah pertanyaan.

1.
  1. 4



&lt;Tulis Kebutuhan Fungsional / Functional Requirement disini&gt;

Diawali dengan membuat daftar kebutuhan fungsional P/L, lengkap dengan ID dan penjelasan jika perlu. Bisa dibuat dalam bentuk tabel.

| **ID** | **Kebutuhan Fungsional** | **Penjelasan** |
| --- | --- | --- |
|   |   |   |
|   |   |   |
|   |   |   |
|   |   |   |
|   |   |   |
|   |   |   |
|   |   |   |
|   |   |   |
|   |   |   |
|   |   |   |
|   |   |   |
|   |   |   |

1.
  1. 4.1Use Case Diagram

&lt;_Gambarkan use case diagramnya dari functional requirement yang didapatkan_&gt;

1.
  1. 4.2Nama Use Case 1

4.1.1 Deskripsi Use Case

&lt;desripsikan / jabarkan mengenai use case ini &gt;

4.1.2 Stimulus and Respon

&lt;menyediakan daftar aksi yang dilakukan oleh user dan respon dari sistem.&gt;

| Action by user | Response from system |
| --- | --- |
| 1 |   |
|   | 2 |
| 3 |   |
|   | 4 .. |

4.1.4 _Activity Diagram_

1.
  1. 4.3Nama Use Case 2

&lt;Sama seperti di atas, dan seterusnya sesuai jumlah use case yang didapatkan&gt;

1.
  1. 4.4Class Diagram

&lt;_identifikasi kelas yang terkait dan hubungannya pada sistem yang dikembangkan_&gt;





1. 5.Non Functional Requirements

&lt;_Uraikan dengan ringkas kebutuhan non fungsional dalam tabel sebagai berikut. Isilah Kolom_ _Kebutuhan_ _dengan kalimat yang jelas dan kelak dapat ditest untuk dipenuhi._ _ID_ _adalah nomor_ _kebutuhan_ _yang harus ditelusuri pada saat test. Tuliskan N/A bila Not Applicable&gt;_

| **ID** | **Parameter** | **Kebutuhan** |
| --- | --- | --- |
|   | Availability |   |
|   | Reliability |   |
|   | Ergonomy |   |
|   | Portability |   |
|   | Memory |   |
|   | Response time |   |
|   | Safety | N/A |
|   | Security |   |
|   |   |   |
|   | Others 1: Bahasa komunikasi | Misalnya : semua tanya jawab harus dalam bahasa Indonesia |
|   |   | Setiap layar harus mengandung logo PT Pos Indonesia |
|   |   |   |

Catatan :

_Availability : ketersediaan aplikasi, misalnya harus terus menerus beroperasi 7 hari perminggu, 24 jam per haritanpa gagal_

_Reliability : keandalan, misalnya tidak pernah boleh gagal(atau kegagalan yang ditolerir adalah …%)  __sehingga harus dipikirkan fault tolerant architecture. Biasanya hanya perlu untuk Critical Application yang jika gagal akan berakibat fatal._

_Ergonomy : kenyamanan pakai bagi pengguna_

_Portability : kemudahan untuk dibawa dan dioperasikan ke mesin/sistem operasi/platform yang lain_

_Memory : jika perhitungan kapasitas memori internal kritis (misalnya untuk SW yang harus dijadikan CHIPS dan ukurannya harus kecil_

_Response time : Batasan waktu yang harus dipenuhi. Sangat penting untuk aplikasi Real Time. Contoh: &quot;Aaplikasi harus mampu menampilkan hasil dalam 4 detik&quot;, atau &quot;ATM harus menarik kembali kartu yang tidak diambil dalam waktu 3 menit&quot;_

_Safety: yang menyangkut keselamatan manusia, misalnya untuk SW yang dipakai pada sistem kontrol di pabrik_

_Security : aspek keamanan yang harus dipenuhi_

