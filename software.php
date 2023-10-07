<?php

include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
   $user_id = $_COOKIE['user_id'];
} else {
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LKP Adicita | Perangkat Lunak</title>
   <link href="../project/images/LogoPerusahaan.png" rel="icon" />
   <link href="../project/images/LogoPerusahaan.png" rel="apple-touch-icon" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <!-- teachers section starts  -->

   <section class="teachers">

      <h1 class="heading">Software Yang Sering Digunakan</h1>
      <div class="box-container">
         <div class="box offer">
            <h3>Microsoft Word</h3>
            <br>
            <center>
               <img src="../project/images/Word.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.1" class="inline-btn">Informasi</a>
         </div>

         <div class="box offer">
            <h3>Adobe Light Room</h3>
            <br>
            <center>
               <img src="../project/images/LR.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.7" class="inline-btn">Informasi</a>
         </div>

         <div class="box offer">
            <h3>XAMPP</h3>
            <br>
            <center>
               <img src="../project/images/XAMPP.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.10" class="inline-btn">Informasi</a>
         </div>

         <div class="box offer">
            <h3>Microsoft Visio</h3>
            <br>
            <center>
               <img src="../project/images/Visio.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.4" class="inline-btn">Informasi</a>
         </div>

         <div class="box offer">
            <h3>Adobe Photoshop</h3>
            <br>
            <center>
               <img src="../project/images/Ps.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.5" class="inline-btn">Informasi</a>
         </div>

         <div class="box offer">
            <h3>Visual Studio Code</h3>
            <br>
            <center>
               <img src="../project/images/VSCode.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.9" class="inline-btn">Informasi</a>
         </div>



         <div class="box offer">
            <h3>Microsoft Excel</h3>
            <br>
            <center>
               <img src="../project/images/Excel.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.2" class="inline-btn">Informasi</a>
         </div>

         <div class="box offer">
            <h3>Adobe Illustrator</h3>
            <br>
            <center>
               <img src="../project/images/IL.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.8" class="inline-btn">Informasi</a>
         </div>

         <div class="box offer">
            <h3>Canva</h3>
            <br>
            <center>
               <img src="../project/images/Canva.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.11" class="inline-btn">Informasi</a>
         </div>

         <div class="box offer">
            <h3>Microsoft Power Point</h3>
            <br>
            <center>
               <img src="../project/images/PowerPoint.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.3" class="inline-btn">Informasi</a>
         </div>

         <div class="box offer">
            <h3>Adobe After Effects</h3>
            <br>
            <center>
               <img src="../project/images/AE.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.6" class="inline-btn">Informasi</a>
         </div>



         <div class="box offer">
            <h3>Corel Draw</h3>
            <br>
            <center>
               <img src="../project/images/CorelDraw.png" width="50px" height="50px"></img>
            </center>
            <br>
            <a href="#A.12" class="inline-btn">Informasi</a>
         </div>

      </div>
      <br>
      <br>
      <br>
      <h1 id="A.1" class="heading"><b>Microsoft Word</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
         Microsoft Word adalah salah satu program pengolah kata yang sangat populer dan umum digunakan di komputer. Ini adalah bagian dari paket perangkat lunak Microsoft Office yang dikembangkan oleh perusahaan teknologi Microsoft.
         Microsoft Word memungkinkan pengguna untuk membuat, mengedit, menyimpan, dan mencetak dokumen teks, seperti surat, laporan, makalah, brosur, dan banyak jenis materi tulisan lainnya. Dengan berbagai fitur yang lengkap, program ini memungkinkan pengguna untuk mengatur teks, menambahkan gambar, membuat tabel, menggunakan template, dan banyak lagi.<br><br>
         Berikut adalah beberapa fitur umum yang ada di Microsoft Word:<br>
         1. Pengaturan Teks: Anda dapat memformat teks dengan berbagai gaya, ukuran, jenis huruf, dan warna.<br>
         2. Menyisipkan Gambar dan Objek: Anda dapat menambahkan gambar, grafik, dan objek lain ke dalam dokumen Anda.<br>
         3. Pembuatan Tabel: Anda dapat membuat tabel untuk mengorganisasi data dalam bentuk kolom dan baris.<br>
         4. Penggunaan Template: Microsoft Word menyediakan banyak template yang dapat digunakan untuk membuat dokumen dengan tata letak yang profesional.<br>
         5. Pengecekan Ejaan dan Tata Bahasa: Fitur pemeriksa ejaan dan tata bahasa otomatis membantu mengurangi kesalahan penulisan.<br>
         6. Mail Merge: Fitur ini memungkinkan Anda untuk menggabungkan data dari sumber lain, seperti daftar nama, ke dalam dokumen untuk membuat surat atau label yang disesuaikan.<br>
         7. Kolaborasi: Microsoft Word juga mendukung kolaborasi antar pengguna, di mana beberapa pengguna dapat bekerja secara bersamaan pada satu dokumen.<br>
         8. Simpan dan Bagikan: Anda dapat menyimpan dokumen di komputer Anda atau berbagi melalui email atau platform berbagi file lainnya.<br><br>
         Microsoft Word telah menjadi standar industri untuk pengolah kata, dan kebanyakan orang di seluruh dunia menggunakan program ini untuk pekerjaan, sekolah, dan banyak aktivitas lain yang melibatkan penulisan dan pengeditan dokumen teks.
      </p><br><br>

      <h1 id="A.2" class="heading"><b>Microsoft Excel</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">Microsoft Excel adalah program spreadsheet yang dikembangkan oleh perusahaan teknologi Microsoft. Seperti Microsoft Word, Excel juga merupakan bagian dari paket perangkat lunak Microsoft Office yang populer.
         Microsoft Excel memungkinkan pengguna untuk membuat, mengelola, dan menganalisis data dalam bentuk lembar kerja (spreadsheet). Lembar kerja terdiri dari sel-sel dalam baris dan kolom, yang dapat diisi dengan berbagai jenis data, termasuk angka, teks, tanggal, dan formula matematika.<br><br>
         Berikut adalah beberapa fitur utama dari Microsoft Excel:<br>
         1. Lembar Kerja dan Sel: Anda dapat membuat lembar kerja dengan banyak sel dan mengatur data dalam baris dan kolom.<br>
         2. Penghitungan dan Formula: Excel memiliki berbagai fungsi matematika dan formula yang memungkinkan Anda melakukan perhitungan dan analisis data dengan mudah.<br>
         3. Grafik dan Grafis: Excel menyediakan beragam jenis grafik dan grafis untuk memvisualisasikan data dengan lebih jelas dan mudah dipahami.<br>
         4. Pemformatan Sel: Anda dapat memformat sel-sel untuk menyoroti data penting, mengatur tampilan, dan menambahkan warna atau border.<br>
         5. Penggunaan Tabel dan Filter: Excel memungkinkan Anda untuk membuat tabel untuk mengelompokkan dan menganalisis data dengan lebih mudah. Anda juga dapat menggunakan filter untuk menyaring data berdasarkan kriteria tertentu.<br>
         6. Penggabungan Data: Excel dapat digunakan untuk menggabungkan data dari berbagai sumber dan melakukan analisis data terhadapnya.<br>
         7. Makro: Fitur makro memungkinkan Anda untuk merekam tindakan tertentu dalam Excel dan memainkannya kembali untuk otomatisasi tugas yang berulang.<br>
         8. Kolaborasi: Seperti Microsoft Word, Excel juga mendukung kolaborasi, sehingga beberapa pengguna dapat bekerja bersama-sama dalam satu lembar kerja.<br><br>
         Microsoft Excel sangat populer di dunia bisnis, keuangan, ilmu pengetahuan, dan banyak bidang lainnya. Ini membantu pengguna untuk mengelola data dengan efisien, membuat laporan keuangan, analisis statistik, perencanaan anggaran, dan banyak tugas lainnya yang melibatkan pengolahan dan analisis data.</p><br><br>

      <h1 id="A.3" class="heading"><b>Microsoft Power Point</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">Microsoft PowerPoint adalah program presentasi yang dikembangkan oleh perusahaan teknologi Microsoft. Seperti Microsoft Word dan Microsoft Excel, PowerPoint juga merupakan bagian dari paket perangkat lunak Microsoft Office yang populer.
         Microsoft PowerPoint memungkinkan pengguna untuk membuat presentasi multimedia yang menarik dengan menggunakan slide, teks, gambar, grafik, video, animasi, dan banyak elemen visual lainnya. Presentasi ini biasanya digunakan dalam berbagai situasi, termasuk presentasi bisnis, pidato, laporan proyek, pelatihan, pendidikan, dan banyak acara lainnya.<br><br>
         Berikut adalah beberapa fitur utama dari Microsoft PowerPoint:<br>
         1. Slide: Presentasi PowerPoint terdiri dari slide individu yang berisi konten seperti teks, gambar, dan grafik.<br>
         2. Pengaturan Slide: Anda dapat mengatur tata letak slide, latar belakang, tema, dan gaya presentasi untuk mencocokkan kebutuhan Anda.<br>
         3. Animasi: PowerPoint memungkinkan Anda untuk menambahkan animasi ke elemen-elemen di slide untuk memberikan efek visual yang menarik.<br>
         4. Transisi: Anda dapat menggunakan berbagai efek transisi untuk beralih dari satu slide ke slide berikutnya dengan mulus.<br>
         5. Penyisipan Media: PowerPoint mendukung penyisipan gambar, audio, video, dan objek multimedia lainnya untuk meningkatkan pengalaman presentasi.<br>
         6. Penyajian Berbasis Slide: Anda dapat menggunakan slide untuk menyajikan informasi secara terstruktur dan menarik perhatian audiens.<br>
         7. Speaker Notes: PowerPoint memungkinkan Anda menambahkan catatan pembicaraan untuk setiap slide, yang berguna sebagai panduan Anda saat presentasi.<br>
         8. Tampilan Presentator: Mode presentator memungkinkan Anda melihat slide berikutnya, catatan pembicaraan, dan waktu presentasi saat tampilan slide terlihat oleh audiens.<br><br>
         Microsoft PowerPoint telah menjadi alat standar untuk pembuatan dan penyajian presentasi di berbagai lingkungan, termasuk bisnis, pendidikan, pemerintahan, dan acara sosial. Dengan berbagai fitur yang kuat dan user-friendly, PowerPoint memudahkan pengguna untuk menyampaikan ide, informasi, dan pesan dengan cara yang efektif dan mengesankan.</p><br><br>

      <h1 id="A.4" class="heading"><b>Microsoft Visio</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">Microsoft Visio adalah program perangkat lunak yang dikembangkan oleh Microsoft yang dirancang khusus untuk membantu pengguna membuat diagram, bagan, dan ilustrasi visual lainnya. Visio memungkinkan pengguna untuk menyusun dan menyajikan informasi kompleks dalam bentuk yang lebih mudah dipahami dan diinterpretasikan.<br>
         Berbeda dengan program Microsoft Office lainnya seperti Word, Excel, atau PowerPoint yang berfokus pada pengolahan kata, data, dan presentasi, Microsoft Visio difokuskan pada visualisasi dan komunikasi informasi melalui gambar, grafik, dan diagram. Ini membuatnya sangat berguna untuk berbagai industri dan disiplin ilmu, termasuk teknik, arsitektur, bisnis, sistem informasi, jaringan, dan banyak lagi.<br><br>
         Beberapa fitur utama dari Microsoft Visio adalah:<br>
         1. Jenis Diagram yang Beragam: Visio menyediakan berbagai jenis diagram, termasuk aliran kerja (workflow), organisasi, jaringan, pemetaan proses, dan banyak lagi. Setiap jenis diagram dirancang untuk tujuan tertentu.<br>
         2. Alat Desain yang Kuat: Visio dilengkapi dengan alat desain intuitif yang memungkinkan pengguna untuk membuat, mengedit, dan memformat elemen-elemen dalam diagram dengan mudah.<br>
         3. Integrasi Data: Visio memungkinkan pengguna untuk mengintegrasikan data dari berbagai sumber, seperti Excel dan SharePoint, sehingga dapat digunakan untuk membuat diagram yang lebih dinamis dan terhubung dengan data aktual.<br>
         4. Stensil dan Bentuk: Visio menyediakan berbagai stensil (template gambar) yang berisi berbagai bentuk dan simbol yang relevan dengan jenis diagram tertentu.<br>
         5. Kolaborasi: Seperti program Microsoft Office lainnya, Visio juga mendukung kolaborasi, sehingga beberapa pengguna dapat bekerja bersama-sama dalam satu diagram.<br>
         6. Pengaturan Tampilan: Anda dapat mengatur tampilan dan tata letak diagram sesuai dengan kebutuhan dan preferensi Anda.<br><br>
         Microsoft Visio telah menjadi alat yang sangat berguna bagi banyak orang dan organisasi dalam menyusun, menganalisis, dan berkomunikasi dengan menggunakan diagram dan grafik. Dalam konteks bisnis, Visio sering digunakan untuk merencanakan proses bisnis, menggambarkan aliran kerja, mengorganisir struktur organisasi, dan banyak lagi.</p><br><br>


      <h1 id="A.5" class="heading"><b>Adobe Photoshop</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">Adobe Photoshop adalah perangkat lunak pengolah gambar dan foto yang dikembangkan oleh perusahaan perangkat lunak Adobe Inc. Program ini merupakan salah satu aplikasi pemrosesan gambar paling populer di dunia dan digunakan oleh fotografer, desainer grafis, seniman digital, dan banyak orang lain untuk mengedit, memanipulasi, dan menyempurnakan gambar.
         <br><br>
         Adobe Photoshop menyediakan berbagai fitur dan alat yang kuat untuk mengubah gambar secara kreatif dan menghasilkan efek visual yang menarik. Beberapa fitur utama dari Adobe Photoshop meliputi:<br>
         1. Pengeditan Gambar: Anda dapat melakukan berbagai jenis pengeditan gambar, termasuk memotong, memperbaiki warna, mengubah ukuran, menyesuaikan kontras dan kecerahan, dan banyak lagi.<br>
         2. Layers (Lapisan): Fitur lapisan memungkinkan Anda untuk menggabungkan beberapa elemen gambar menjadi satu, sehingga memungkinkan Anda untuk bekerja secara terpisah pada setiap elemen.<br>
         3. Filter: Adobe Photoshop menyediakan berbagai filter efek yang dapat diterapkan pada gambar, seperti efek blur, efek artistik, efek khusus, dan banyak lagi.<br>
         4. Penghapusan Objek: Anda dapat menghapus objek atau bagian yang tidak diinginkan dari gambar menggunakan alat khusus seperti "Content-Aware Fill" atau "Clone Stamp".<br>
         5. Alat Pensil dan Kuas: Photoshop menawarkan berbagai alat pensil dan kuas yang memungkinkan Anda untuk menggambar dan mewarnai gambar secara bebas.<br>
         6. Penyesuaian Warna dan Gradients: Anda dapat melakukan penyesuaian warna dan menerapkan gradien warna untuk menciptakan efek visual yang menarik.<br>
         7. Pembuatan Grafik: Photoshop dapat digunakan untuk membuat grafik dan ilustrasi dengan bebas, termasuk desain logo, poster, dan banyak lagi.<br>
         8. Integrasi dengan Aplikasi Lain: Adobe Photoshop berintegrasi dengan berbagai aplikasi Adobe lainnya, seperti Adobe Illustrator dan Adobe InDesign, untuk mengoptimalkan alur kerja desain.<br><br>
         Adobe Photoshop merupakan alat yang sangat kuat untuk pengolahan gambar dan kreativitas visual. Dengan berbagai fitur dan alat yang canggih, Photoshop memungkinkan para pengguna untuk menciptakan karya seni digital, mengedit foto, mendesain grafik, dan banyak lagi dengan tingkat presisi dan fleksibilitas yang tinggi.
      </p><br><br>

      <h1 id="A.6" class="heading"><b>Adobe After Effects</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">Adobe After Effects adalah perangkat lunak untuk produksi video dan komposisi digital yang dikembangkan oleh perusahaan perangkat lunak Adobe Inc. Program ini sangat populer di kalangan animator, editor video, desainer grafis, dan para profesional di industri film dan media.
         Adobe After Effects dirancang untuk membuat efek visual yang canggih, animasi, dan komposisi kreatif yang dapat diterapkan pada video, teks, gambar, dan elemen multimedia lainnya. Ini sering digunakan untuk membuat efek khusus, efek gerak, judul pembuka, efek transisi, dan animasi kompleks dalam produksi video.<br><br>
         Berikut adalah beberapa fitur utama dari Adobe After Effects:<br>
         1. Komposisi: After Effects memungkinkan Anda untuk membuat komposisi video dengan menggabungkan berbagai elemen, termasuk klip video, gambar, teks, dan lapisan animasi.<br>
         2. Animasi: Anda dapat membuat animasi yang kompleks dengan menggunakan keyframe dan alat animasi lainnya untuk mengubah properti dan posisi elemen dari waktu ke waktu.<br>
         3. Efek Visual: After Effects menyediakan berbagai efek visual yang dapat diterapkan pada elemen-elemen video, termasuk efek cahaya, efek warna, efek khusus, dan banyak lagi.<br>
         4. Penghapusan Latar Belakang (Chroma Key): Fitur chroma key memungkinkan Anda untuk menghapus latar belakang dari video dengan menggunakan teknik kunci warna, sehingga Anda dapat menyisipkan objek atau latar belakang baru.<br>
         5. Penyamaran dan Pelacakan Gerak: After Effects menyediakan alat untuk menyamarkan wajah atau objek yang bergerak dalam video, serta pelacakan gerak untuk mengikuti pergerakan objek dalam klip.<br>
         6. Integrasi dengan Adobe Creative Cloud: After Effects berintegrasi dengan aplikasi Adobe Creative Cloud lainnya, seperti Adobe Premiere Pro dan Adobe Illustrator, untuk memfasilitasi alur kerja produksi video yang mulus.<br>
         7. Penyimpanan dan Berbagi: Anda dapat menyimpan proyek Anda dalam berbagai format video dan berbagi karya Anda di berbagai platform.<br><br>
         Adobe After Effects adalah alat yang sangat kuat untuk produksi video dan efek visual yang mengesankan. Dengan kemampuannya untuk menciptakan animasi yang kompleks dan efek visual yang menakjubkan, After Effects membantu para profesional untuk menghasilkan karya-karya kreatif dan unik dalam dunia film, iklan, video musik, dan banyak lagi.</p><br><br>

      <h1 id="A.7" class="heading"><b>Adobe Light Room</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">Adobe Lightroom adalah perangkat lunak pengolahan foto yang dikembangkan oleh Adobe Inc. Program ini dirancang khusus untuk fotografer dan digunakan untuk mengatur, mengedit, dan mengelola foto dalam skala besar. Lightroom membantu fotografer untuk menyempurnakan gambar dan menciptakan tampilan yang lebih profesional dengan cepat dan efisien.
         Adobe Lightroom memiliki beberapa fitur dan alat yang kuat yang memungkinkan pengguna untuk mengelola koleksi foto mereka dengan mudah. <br><br>Beberapa fitur utama dari Adobe Lightroom meliputi:<br>
         1. Pengaturan Foto: Anda dapat melakukan berbagai pengaturan dan penyesuaian untuk foto, termasuk penyesuaian warna, kontras, kecerahan, ketajaman, dan banyak lagi.<br>
         2. Pengolahan Non-Destruktif: Lightroom menggunakan pengolahan non-destruktif, yang berarti setiap perubahan yang Anda buat pada foto tidak merusak data asli dan dapat diubah kapan saja.<br>
         3. Penyaringan dan Pemeringkatan: Anda dapat dengan mudah menyaring foto berdasarkan kriteria tertentu dan memberikan peringkat atau label untuk mengelompokkan dan mengidentifikasi foto favorit.<br>
         4. Sinkronisasi: Lightroom memungkinkan Anda untuk menyinkronkan pengaturan dan perubahan antara foto-foto yang serupa, sehingga mempercepat proses pengeditan.<br>
         5. Pembuatan Preset: Anda dapat membuat dan menggunakan preset (pengaturan pra-ditentukan) untuk memberikan gaya atau efek tertentu pada foto dengan cepat.<br>
         6. Manajemen Katalog: Lightroom memiliki sistem manajemen katalog yang memungkinkan Anda untuk mengatur dan mencari foto dengan mudah.<br>
         7. Integrasi dengan Adobe Creative Cloud: Lightroom berintegrasi dengan layanan Adobe Creative Cloud, yang memungkinkan sinkronisasi foto dan proyek Anda di berbagai perangkat.<br><br>
         Adobe Lightroom adalah alat yang sangat berguna bagi para fotografer profesional dan hobi. Dengan fitur-fitur canggihnya, Lightroom membantu pengguna untuk mengelola, mengedit, dan menyempurnakan koleksi foto mereka dengan lebih mudah dan efisien, sehingga memungkinkan mereka untuk menciptakan hasil yang mengesankan dalam fotografi.</p><br><br>

      <h1 id="A.8" class="heading"><b>Adobe Illustrator</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">Adobe Illustrator adalah program desain vektor yang dikembangkan oleh perusahaan perangkat lunak Adobe Inc. Program ini sangat populer di kalangan desainer grafis, ilustrator, dan seniman digital. Adobe Illustrator dirancang khusus untuk menciptakan grafik vektor, yang berbeda dengan grafik raster (gambar piksel) karena grafik vektor terdiri dari jalur matematika dan bentuk geometris yang dapat diubah ukurannya tanpa kehilangan kualitas.<br><br>
         Beberapa fitur utama dari Adobe Illustrator meliputi:<br>
         1. Grafik Vektor: Illustrator memungkinkan pengguna untuk membuat grafik vektor yang dapat diubah ukurannya tanpa batas tanpa menyebabkan distorsi.<br>
         2. Alat Desain: Program ini dilengkapi dengan berbagai alat desain yang kuat, seperti pena, kuas, bentuk geometris, dan alat untuk mengedit jalur dan titik.<br>
         3. Lapisan: Seperti banyak program desain, Illustrator menggunakan sistem lapisan yang memungkinkan pengguna untuk mengatur dan mengelompokkan elemen desain dengan mudah.<br>
         4. Penyesuaian Warna: Anda dapat menyesuaikan warna dengan presisi, menggunakan palet warna, gradien, dan alat untuk pencampuran warna.<br>
         5. Text Tool: Illustrator memiliki alat teks yang canggih untuk membuat dan mengedit teks dalam desain, serta mendukung berbagai gaya huruf dan efek teks.<br>
         6. Live Trace dan Live Paint: Fitur "Live Trace" memungkinkan Anda mengubah gambar raster menjadi objek vektor, sedangkan "Live Paint" memudahkan Anda dalam memberikan warna pada elemen gambar yang sudah di vektorisasi.<br>
         7. Integrasi dengan Adobe Creative Cloud: Illustrator terintegrasi dengan layanan Adobe Creative Cloud, sehingga memungkinkan sinkronisasi desain Anda di berbagai perangkat.<br><br>
         Adobe Illustrator sangat cocok untuk menciptakan desain logo, ilustrasi, poster, brosur, kartu nama, dan banyak lagi. Dengan kemampuannya dalam menciptakan grafik vektor yang bebas distorsi, Illustrator merupakan alat yang sangat kuat untuk desainer dan seniman dalam menghasilkan karya-karya kreatif yang dapat diaplikasikan dalam berbagai media dan ukuran.</p><br><br>

      <h1 id="A.9" class="heading"><b>Visual Studio Code</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">Visual Studio Code (sering disingkat sebagai VS Code) adalah editor teks sumber terbuka yang dikembangkan oleh Microsoft. Ini adalah salah satu perangkat lunak yang sangat populer di kalangan pengembang perangkat lunak dan digunakan untuk menulis dan mengedit kode dalam berbagai bahasa pemrograman.
         Visual Studio Code menyediakan banyak fitur yang kuat dan berguna yang membantu meningkatkan produktivitas pengembang.<br><br> Beberapa fitur utama dari Visual Studio Code meliputi:<br>
         1. Antar Muka Pengguna yang Ramah: VS Code memiliki antarmuka pengguna yang bersih dan intuitif, yang mudah dipahami dan digunakan oleh pengembang pemula maupun berpengalaman.<br>
         2. Penyorotan Kode (Syntax Highlighting): VS Code menyoroti kode dengan warna berbeda untuk mengidentifikasi elemen kode seperti kata kunci, variabel, fungsi, dan komentar, sehingga memudahkan pembacaan kode.<br>
         3. Pencarian dan Penggantian Cepat: Anda dapat dengan mudah mencari teks di seluruh proyek atau mengganti teks dalam berkas dengan alat pencarian yang kuat.<br>
         4. Integrasi Git: VS Code memiliki integrasi bawaan dengan Git, yang memungkinkan Anda untuk mengelola versi kode dengan mudah melalui kontrol versi.<br>
         5. Ekstensi: VS Code dapat diperluas dengan menggunakan ekstensi yang dikembangkan oleh komunitas, yang memungkinkan Anda menyesuaikan lingkungan pengembangan sesuai kebutuhan Anda.<br>
         6. Terminal Terintegrasi: VS Code menyediakan terminal terintegrasi yang memungkinkan Anda menjalankan perintah terminal langsung dari editor.<br>
         7. Pembuatan dan Debugging: VS Code menyediakan dukungan untuk membangun dan menjalankan kode dalam berbagai bahasa pemrograman serta dukungan debugging yang kuat.<br>
         8. Riset dan Intelisensi Kode: VS Code memberikan fitur riset dan intelisensi kode yang membantu Anda menemukan referensi kode, dokumentasi, dan saran pemformatan kode.<br>
         Visual Studio Code mendukung banyak bahasa pemrograman, termasuk JavaScript, Python, HTML, CSS, C++, Java, dan banyak lagi. Editor ini sangat populer karena kinerjanya yang ringan, fitur-fitur canggihnya, serta dukungannya untuk ekstensi dan integrasi dengan banyak alat pengembangan. VS Code digunakan oleh pengembang di seluruh dunia untuk mengembangkan berbagai jenis aplikasi dan proyek.</p><br><br>

      <h1 id="A.10" class="heading"><b>XAMPP</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">XAMPP adalah paket perangkat lunak yang digunakan untuk membuat dan mengelola lingkungan server lokal pada komputer pribadi. Nama "XAMPP" sendiri adalah singkatan dari X (sistem operasi apapun), Apache, MySQL, PHP, dan Perl. Ini adalah perangkat lunak yang populer di kalangan pengembang web dan digunakan untuk menghosting situs web dan aplikasi web di server lokal sebelum mereka diterbitkan ke server web yang sebenarnya.
         XAMPP menyediakan semua alat yang diperlukan untuk membuat dan menjalankan server web lokal.<br><br> Beberapa komponen utama yang termasuk dalam paket XAMPP adalah:<br>
         1. Apache: Web server yang populer yang digunakan untuk menghosting situs web dan mengirimkan konten web ke klien (browser).<br>
         2. MySQL: Sistem manajemen database relasional yang digunakan untuk menyimpan dan mengelola data untuk aplikasi web.<br>
         3. PHP: Bahasa pemrograman server-side yang kuat yang digunakan untuk mengembangkan skrip dan aplikasi web dinamis.<br>
         4. Perl: Bahasa pemrograman skrip umum yang juga termasuk dalam paket XAMPP.<br>
         Selain komponen utama di atas, XAMPP juga menyertakan komponen tambahan seperti phpMyAdmin (antarmuka pengelolaan database MySQL melalui web) dan FileZilla (klien FTP untuk mentransfer file ke dan dari server).<br><br>
         Dengan menggunakan XAMPP, pengembang web dapat membuat dan menguji situs web dan aplikasi web mereka di lingkungan lokal sebelum melakukan penerbitan ke server web live. Ini memungkinkan mereka untuk mengatasi masalah dan menguji perangkat lunak tanpa mengganggu situs web atau aplikasi yang sudah ada di server produksi.
         XAMPP adalah solusi yang mudah digunakan untuk membuat lingkungan pengembangan web lokal yang lengkap dan dapat diinstal dengan cepat di berbagai platform sistem operasi, seperti Windows, macOS, dan Linux. Ini adalah alat yang sangat berguna untuk pengembang web dan memungkinkan mereka untuk melakukan pengembangan dan pengujian aplikasi web dengan lebih efisien dan efektif.</p><br><br>

      <h1 id="A.11" class="heading"><b>Canva</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">Canva adalah platform desain grafis yang populer dan mudah digunakan yang memungkinkan pengguna untuk membuat berbagai konten visual, seperti poster, infografis, presentasi, materi pemasaran, media sosial, dan banyak lagi. Ini adalah alat yang sangat berguna bagi orang-orang yang tidak memiliki latar belakang desain grafis, karena menyediakan berbagai template dan alat yang intuitif untuk membuat desain yang menarik dan profesional.<br><br>
         Beberapa fitur utama dari Canva termasuk:<br>
         1. Template: Canva menyediakan banyak template desain yang sudah jadi untuk berbagai keperluan, seperti poster, brosur, undangan, sampul media sosial, dan banyak lagi. Pengguna dapat memilih template yang sesuai dan menyesuaikannya sesuai kebutuhan mereka.<br>
         2. Alat Desain: Canva menyediakan berbagai alat desain yang mudah digunakan, termasuk alat untuk menambahkan teks, gambar, bentuk, dan elemen grafis lainnya ke desain.<br>
         3. Media Library: Canva memiliki perpustakaan media yang kaya, yang menyediakan akses ke jutaan foto, gambar, ikon, dan elemen grafis lainnya yang dapat digunakan dalam desain.<br>
         4. Integrasi Foto Pribadi: Pengguna dapat mengunggah foto mereka sendiri dan menggunakannya dalam desain mereka.<br>
         5. Kolaborasi: Canva mendukung kolaborasi tim, di mana beberapa pengguna dapat bekerja bersama-sama pada satu desain.<br>
         6. Ekspor dan Berbagi: Setelah selesai membuat desain, pengguna dapat mengunduhnya dalam berbagai format file, seperti PNG, JPG, atau PDF, dan juga dapat berbagi desain secara langsung di media sosial atau mengundang orang lain untuk melihat dan berkontribusi dalam desain.<br><br>
         Canva menyediakan versi gratis dengan banyak fitur yang berguna, serta memiliki opsi langganan untuk akses ke lebih banyak fitur dan elemen desain premium. Platform ini digunakan oleh berbagai kalangan, termasuk pengusaha, pelajar, pemasar, dan banyak orang lain yang membutuhkan alat sederhana dan efektif untuk menciptakan desain visual yang menarik tanpa harus memiliki kemampuan desain grafis yang mendalam.</p><br><br>

      <h1 id="A.12" class="heading"><b>Corel Draw</b></h1>
      <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">CorelDRAW adalah perangkat lunak desain grafis yang dikembangkan oleh perusahaan perangkat lunak Kanada, Corel Corporation. Ini adalah salah satu program desain vektor yang populer dan digunakan oleh para desainer grafis, ilustrator, seniman, dan pengguna lainnya untuk menciptakan berbagai desain vektor, seperti logo, ilustrasi, brosur, poster, kartu nama, dan banyak lagi.
         CorelDRAW memiliki antarmuka pengguna yang intuitif dan menyediakan berbagai alat desain yang kuat untuk menciptakan karya-karya kreatif. <br><br>Beberapa fitur utama dari CorelDRAW meliputi:<br>
         1. Desain Vektor: CorelDRAW berfokus pada desain vektor, yang berbeda dengan desain gambar raster (bitmap). Desain vektor menggunakan jalur matematika dan bentuk geometris, sehingga dapat diubah ukurannya tanpa kehilangan kualitas.<br>
         2. Alat Desain: Program ini menyediakan berbagai alat desain, seperti pena, kuas, bentuk geometris, dan alat untuk mengedit jalur dan titik, yang memungkinkan pengguna untuk menggambar, mengedit, dan mengubah desain dengan presisi.<br>
         3. Penyorotan Objek: CorelDRAW menyorot objek yang berbeda dalam desain dengan warna yang berbeda, sehingga memudahkan pengguna untuk mengenali dan mengelompokkan elemen desain.<br>
         4. Efek dan Transparansi: Anda dapat menambahkan efek khusus dan transparansi pada desain untuk menciptakan tampilan yang menarik dan unik.<br>
         5. Integrasi dengan Aplikasi Lain: CorelDRAW juga berintegrasi dengan aplikasi lain dari Corel Corporation, seperti Corel PHOTO-PAINT (untuk pengeditan gambar raster) dan Corel CAPTURE (untuk tangkapan layar).<br>
         6. Kompatibilitas File: CorelDRAW mendukung berbagai format file grafis, sehingga pengguna dapat berbagi dan mengekspor desain mereka dengan mudah.<br><br>
         CorelDRAW merupakan alat yang sangat berguna untuk menciptakan desain vektor dengan kualitas profesional. Program ini digunakan oleh berbagai kalangan, termasuk desainer profesional, seniman, dan bahkan pengguna pemula yang tertarik dalam desain grafis.</p>






      <br><br>

   </section>

   <!-- teachers section ends -->






























   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>