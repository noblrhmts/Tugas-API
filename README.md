1.	Konsumsi Data dengan GET Request
![image](https://github.com/user-attachments/assets/6463d965-c232-496b-b28b-473d8b26ae17)

2.	Mengirim Data dengan POST Request
![image](https://github.com/user-attachments/assets/981b11ee-f64f-4a5b-a155-58baf061810e)

3.	Menghapus Data dengan DELETE Request
![image](https://github.com/user-attachments/assets/453295f7-be73-451d-80c2-3faaf74a89e2)

4. Analisis Metode HTTP
- Jelaskan perbedaan antara metode GET, POST, dan DELETE.

GET:

Metode GET biasanya digunakan ketika klien ingin "mengamati" atau "mengambil" data dari server tanpa melakukan perubahan apapun di server. Permintaan GET yang sama dapat dikirim berulang kali tanpa menghasilkan efek yang berbeda di server.

POST:

POST digunakan ketika klien ingin "mengirimkan" data atau melakukan "aksi" di server yang dapat menyebabkan perubahan atau pembaruan. Berbeda dengan GET, setiap kali Anda mengirimkan permintaan POST, efek yang dihasilkan bisa berbeda.

DELETE:

DELETE digunakan untuk "menghapus" sumber daya di server. Sama seperti GET, setelah sumber daya dihapus, melakukan DELETE yang sama lagi tidak akan mengubah status lebih lanjut.

- Diskusikan skenario kapan harus menggunakan masing-masing metode dalam aplikasi nyata.

GET:

Dalam skenario Dasbor Analitik Real-Time, GET digunakan untuk mengambil data tanpa mengubah server, seperti dalam sistem pemantauan lalu lintas atau perangkat IoT. Misalnya, mengambil statistik penggunaan CPU atau kinerja perangkat secara real-time.
Kenapa harus menggunakan GET? Karena sifat GET yang Tak berubah setelah eksekusi ulang dan bisa di-cache sangat efisien untuk pengambilan data berulang.

POST:

Dalam skenario Pengajuan Tugas atau Proposal, POST digunakan untuk mengirim data baru, seperti dalam aplikasi pengajuan tugas atau proposal proyek di universitas. Setiap pengajuan menghasilkan data unik yang disimpan di server.
Kenapa harus menggunakan POST? Karena sifat POST yang Dinamis sangat cocok untuk menyimpan data baru dan memicu tindakan lebih lanjut, seperti mengirimkan email notifikasi.

DELETE:

Dalam skenario Penghapusan Akun, DELETE digunakan untuk menghapus sumber daya, misalnya menghapus akun pengguna di media sosial. Data yang dihapus bisa bersifat permanen atau soft delete (dapat dipulihkan).
Kenapa harus menggunakan DELETE? Karena sifat DELETE yang Stabil, memastikan penghapusan sumber daya dengan konsekuensi jelas.
