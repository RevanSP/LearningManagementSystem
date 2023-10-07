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
    <title>LKP Adicita | NETWORK ADMINISTRATOR</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>NETWORK ADMINSTRATOR</b></h1>
        </center>

        <center>
            <img src="../project/imgblog/NetworkAdministrator.png" alt="" style="max-width:100%; border-radius:15px">
        </center>
        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa Itu Network Administrator<br>
            Network administrator adalah orang yang selalu mengawasi sistem komunikasi di kantor agar tetap berjalan lancar.<br><br>

            Tugas Network Administrator<br>

            Tugas harian network administrator dapat dikelompokkan menjadi beberapa bidang yaitu implementasi, manajemen, pemecahan masalah, dan pendidikan mandiri.<br><br>

            1. Implementasi<br>
            Dalam bidang ini, cakupan pekerjaan network administrator adalah untuk meng-install dan mengonfigurasi networking software dan application software.<br><br>

            2. Manajemen<br>
            Dalam lingkup manajemen, seorang network administrator memiliki tugas untuk melatih pengguna baru dalam menggunakan perangkat perusahaan.
            Selanjutnya, mereka harus melakukan pembaruan jaringan, aplikasi, dan security software.<br><br>

            3. Pemecahan masalah<br>
            Pemecahan masalah di sini maksudnya adalah seorang network administrator harus menanggapi laporan pengguna jika ada gangguan layanan. termasuk menyesuaikan konfigurasi software, meng-install suatu aplikasi, memulihkan koneksi, dan me-reboot seluruh sistem.<br><br>
            4. Pendidikan mandiri<br>
            Pendidikan mandiri atau self education mencakup proses riset untuk upgrade software dan hardware yang diperlukan. Kemudian, mereka juga harus selalu update dengan tren teknologi jaringan terbaru, merekomendasikan pembelian, dan membantu merencanakan dan merancang proyek khusus.<br><br>

            Tanggung Jawab Network Administrator<br>

            - Memberikan pengawasan teknis WAN (Wide Area Network) termasuk perencanaan, implementasi, pemeliharaan, dan pemecahan masalah.<br>
            - Mempersiapkan dan memelihara dokumentasi konfigurasi jaringan dan tata letak kabel.<br>
            - Merancang dan mengelola infrastruktur nirkabel dan sistem pendukung.<br>
            - Merekomendasikan peningkatan jaringan dan peralatan baru.<br>
            - Memberikan pelatihan untuk anggota tim jika ada perangkat keras atau perangkat lunak yang baru.<br>
            - Melakukan riset dan merekomendasikan pendekatan untuk tugas system administration.<br>
            - Menganalisis dan memantau keamanan server dan perbaikan untuk mengatasi ancaman keamanan.<br>
            - Menyediakan perangkat keras dan sistem operasi untuk menunjang sistem komputer perusahaan.<br>
        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>