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
    <title>LKP Adicita | INSTALASI WINDOWS</title>
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
        <center>
            <br>
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>INSTALASI WINDOWS 11</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/INSTALASIWINDOWS/windows11.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa itu Windows ?<br>
            Windows adalah serangkaian sistem operasi yang dikembangkan oleh perusahaan Microsoft. Sistem operasi ini dirancang untuk digunakan pada komputer pribadi (PC), laptop, tablet, dan perangkat lainnya. Windows dikenal sebagai salah satu sistem operasi paling populer di dunia dan telah mengalami berbagai versi dan perbaikan sejak diluncurkan pertama kali pada tahun 1985.<br>

            Sistem operasi Windows menyediakan lingkungan yang memungkinkan pengguna untuk menjalankan berbagai jenis aplikasi, seperti program perkantoran, permainan, program grafis, dan lain-lain. Windows juga mengelola sumber daya perangkat keras, seperti prosesor, memori, penyimpanan, dan perangkat input/output.<br>

            Setiap versi Windows memiliki antarmuka pengguna yang berbeda-beda, dengan fitur dan peningkatan baru yang ditambahkan dari waktu ke waktu. Beberapa versi Windows yang terkenal meliputi Windows 95, Windows XP, Windows 7, Windows 8, Windows 10, dan seterusnya. Windows juga telah hadir dalam berbagai edisi, seperti edisi Home, Professional, Enterprise, dan lain-lain, dengan fitur dan fungsi yang disesuaikan untuk berbagai keperluan pengguna dan perusahaan.<br><br>
            <b>Hal Yang Disiapkan Sebelum Install Windows 11</b><br>
            1. Download terlebih dahulu file ISO <i><a href="https://www.microsoft.com/software-download/windows11">Windows 11</a></i>, kita sudah berikan linknya di atas, karena ada beberapa link ISO yang sudah mati dan tidak bisa diakses.<br>
            2. Kemudian download aplikasi bernama <i><a href="https://rufus.ie/id/">Rufus</a></i>, kita nantinya membutuhkan aplikasi ini untuk memasukkan file ISO kedalam Flashdisk atau bisa disebut dengan tbootable.<br>
            3. Dan berikutnya adalah siapkan Flashdisk kosong. Usahakan pakai flashdisk berukuran minimal 8GB, kalau bisa lebih dari itu.<br><br>
            <b>Buat Bootable Di Flashdisk</b><br>
            Langkah pertama, kalian harus download terlebih dahulu aplikasi Rufus, karena lewat apps tersebut nantinya kita akan bikin bootable yang difungsikan untuk media pemasangan Windows 11.<br>

            Sebelumnya pastikan ISO Windows 11 dan Windows 10 sudah ready, kalau semuanya sudah langsung ikuti langkah berikut :<br>

            1. Tancapkan flashdisk ke PC.<br><br>
            2. Buka aplikasi <b>Rufus</b>.<br>
            <img src="../project/imgblog/INSTALASIWINDOWS/1.webp" style="max-width: 100%;"><br><br>
            3. Setelah terbuka, kamu bisa lihat flasdiskmu sudah terhubung apa belum di kotak Device. Selanjutnya ketuk tombol <b>Select</b>.
            <img src="../project/imgblog/INSTALASIWINDOWS/2.webp" style="max-width: 100%;"><br><br>

            <img src="../project/imgblog/INSTALASIWINDOWS/3.webp" style="max-width: 100%;"><br><br>
            <br>
            4. Silahkan kamu cari file <b>ISO Windows 11</b> dalam penyimpanan folder.
            <br><br>
            5. Sesuaikan Partition Scheme hardisk, untuk melihat jenis partisinya silahkan klik kanan <b>This PC ➜ Manage ➜ Disk Management ➜</b>silahkan pilih hardisk mana yang kalian ingin install, misalnya disk C, silahkan klik kanan <b>➜ Properties</b>. Jika sudah keluar jendela kecil arahkan ke menu tab <b>Volume</b>, disana bakal muncul partition style-nya.
            <img src="../project/imgblog/INSTALASIWINDOWS/4.webp" style="max-width: 100%;"><br>
            <img src="../project/imgblog/INSTALASIWINDOWS/5.webp" style="max-width: 100%;"><br>
            <br>
            6. Selanjutnya pilih <b>Start</b>, dan konfirmasi <b>OK</b>.
            <img src="../project/imgblog/INSTALASIWINDOWS/6.webp" style="max-width: 100%;"><br>
            <br>
            7. Tunggu sampai selesai.<br><br>
            <b>Proses Install Windows 11</b><br>
            Selanjutnya kita masuk ke cara install Windows 11 bagian inti. Yang perlu diingat flashdisk harus tetap terhubung, dan kamu bisa mulai dengan merestart PC.<br>

            Ketika booting atau layar mulai hitam, tekan tombol <b>F2</b> atau <b>delete</b> sampai muncul ke tampilan <b>BIOS</b>.<br>
            Biasanya beda jenis laptop beda juga tombol masuk ke BIOS.<br><br>
            1. Ketika booting tekan tombol <b>F2</b>.<br><br>
            2. Arahkan ke <b>Advance Mode</b>.
            <img src="../project/imgblog/INSTALASIWINDOWS/7.webp" style="max-width: 100%;"><br><br>
            3. Selanjutnya klik menu <b>Boot</b>.
            <img src="../project/imgblog/INSTALASIWINDOWS/8.webp" style="max-width: 100%;"><br><br>
            4. Tap Enter bagian Boot Options 1, lalu pilih <b>UFEE SanDisk (flashdisk), Partition 1</b>. <img src="../project/imgblog/INSTALASIWINDOWS/9.webp" style="max-width: 100%;"><br><br>
            5. Tap Enter bagian Boot Option 2, pilih memori hardisk yang ingin diinstall. <img src="../project/imgblog/INSTALASIWINDOWS/10.webp" style="max-width: 100%;"><br><br>
            6. Pencet <b>F10</b> untuk menyimpan konfigurasi, tekan <b>Yes</b>. <img src="../project/imgblog/INSTALASIWINDOWS/11.webp" style="max-width: 100%;"><br><br>
            Kalian jangan kaget, melihat tampilan BIOS berikut, karena setiap sistem PC punya tampilan yang berbeda-beda, tetapi langkah navigasinya tetap sama kok.<br><br>
            1. Mulailah masuk ke tampilan Install Windows 11, silahkan pilih Bahasa untuk Time and currency format ubah menjadi <b>Indonesia</b>, sedangkan Language to install biarkan saja bahasa <b>English</b>, dan untuk Keyboard or input method biarkan <b>US</b>. Lalu klik <b>Next</b>.
            <img src="../project/imgblog/INSTALASIWINDOWS/12.webp" style="max-width: 100%;"><br><br>
            2. Selanjutnya kalian tap tombol <b>Install Now</b>.
            <img src="../project/imgblog/INSTALASIWINDOWS/13.webp" style="max-width: 100%;"><br><br>
            3. Nanti akan muncul jendela input product key,karena disini kita belum punya kode maka ketuk tombol <b>Don’t have a product key</b>. Atau jika kamu punya, masukkan saja.
            <img src="../project/imgblog/INSTALASIWINDOWS/14.webp" style="max-width: 100%;"><br><br>
            4. Pilih jenis Windows 11 yang ingin kalian install. Tap salah satu dan klik <b>Next</b>.
            <img src="../project/imgblog/INSTALASIWINDOWS/15.webp" style="max-width: 100%;"><br><br>
            5. Selanjutnya centang <b>I accept license terms</b>, dan klik <b>Next</b>.<br><br>
            6. Ketuk kotak <b>Custom Install Windows Only</b>.
            <img src="../project/imgblog/INSTALASIWINDOWS/16.webp" style="max-width: 100%;"><br><br>
            7. Selanjutnya pilih partisi mana yang ingin kalian install, pilih Partisi kedua sesuai hardisk yang kita pilih di BIOS tadi. <b>Tap Format</b>, kemudian <b>OK</b>.
            <img src="../project/imgblog/INSTALASIWINDOWS/17.webp" style="max-width: 100%;"><br><br>
            8. Setelah proses format selesai, kita tinggal pilih <b>Next</b>.<br><br>
            9. Disini kalian tinggal tunggu proses install Windows 11, proses install makin cepat jika kamu menggunakan penyimpanan SSD.<br><br>
            10. Jika sudah selesai, tinggal <b>Restart PC</b>.<br><br>
            11. Terakhir kalian tinggal menyelesaikan registrasi awal sebagai pendatang baru Windows 11.
            <img src="../project/imgblog/INSTALASIWINDOWS/18.webp" style="max-width: 100%;"><br><br>

            Source : <a href="https://www.kompiwin.com/cara-install-windows-11/">Cara Install Windows 11</a>




        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>