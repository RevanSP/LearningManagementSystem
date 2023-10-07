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
    <title>LKP Adicita | WEB PROGRAMMER</title>
    <link href="images/LogoPerusahaan.png" rel="icon" />
    <link href="images/LogoPerusahaan.png" rel="apple-touch-icon" />

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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>WEB PROGRAMMER</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/WebProgrammer.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa Itu Web Programer<br>

            Web programmer ialah seseorang yang perannya yaitu menghubungkan semua sumber daya yang akan dipergunakan pada suatu website atau pun aplikasi.
            <br><br>
            Tugas Web Programer<br>

            Tugas seorang web programmer yaitu melakukan pengcodingan dan pemrograman sebuah website agar terlihan lebih dinamis dan agar web tersebut bisa terlihat mudah bagi seorang web admin.

            Lebih jelasnya berikut ini penjabaran tugas dari web programmer:<br><br>

            1. Memahami Layout, Struktur, dan Fitur Web<br>
            Seorang web programmer juga harus mengerti mengenai gambaran desain keseluruhan dari website. Tugas pertama ini sangat penting bagi web programmer untuk memahami detail dari rancangan web yang akan dibuat. Sehingga rancangan tersebut nantinya bisa langsung dikerjakan dengan maksimal.<br><br>

            2. Bertanggung Jawab atas code yang dibuat<br>
            Tugas yang kedua yaitu merancang dan mengelola dari hasil code yang telah dibuat. Programmer akan menulis kode pemrograman dan juga memperbaikinya sehingga bisa digunakan. Perlu pemilihan bahasa pemrograman pada semua elemen serta fitur yang akan diciptakan.<br><br>

            3. Melakukan pengecekan semua elemen program<br>
            Tidak berenti dalam pembuatan coding saja, tugas web programmer juga harus memeriksa semua fitur yang telah dibuat. Uji coba diperlukan untuk mengetahui bahwa semua elemennya berfungsi dengan benar.<br><br>

            Kemampuan Yang Harus Dimiliki Web Programer<br>

            Setelah mengetahui tugas seorang web programmer, berikut ini beberapa kemampuan yang wajib dimiliki oleh web programmer :<br><br>

            1. Menguasai HTML<br>
            Kenapa HTML termasuk? karena boleh dikatakan bahwa ibu dari bahasa pemrograman halaman web adalah HTML. Siapapun yang terlibat dengan perancangan dan pembuatan web, tidak bisa lepas dari HTML. Karena sebuah website, hingga saat ini hanya bisa dibuka lewat browser, documentnya mesti dikemas dengan HTML.<br><br>

            2. Menguasai CSS<br>
            Meskipun seorang Web Programmer tugasnya adalah membuat program sebuah halaman web, tapi dalam prakteknya, banyak sedikitnya tetap bersinggungan dengan tampilan perwajahan sebuah website secara global. Karena untuk membuat sebuah elemen, fitur, widget dan plugin tertentu pada sebuah halaman web, tidak mungkin tanpa sekaligus menentukan tampilan standarnya. Minimal soal posisi dan ukuran. Dan bahasa pemrograman yang digunakan untuk itu adalah CSS.<br><br>

            3. Menguasai PHP<br>
            PHP adalah Personal Home Page, Sebuah bahasa pemrograman web yang berfungsi untuk merancang halaman yang dinamis dan interaktif. PHP bisa melayani berbagai bentuk form seperti fitur daftar, login, komentar, survey, hasil penghitungan, statistik dan sejenisnya. Singkatnya fitur-fitur yang ada interaksi antara klien dengan server, antara pengunjung dengan pengelola sebuah web. Boleh dikatakan, ini termasuk program wajib yang harus dikuasai oleh seorang Web Programmer.<br><br>

            4. Menguasai MySQL<br>
            Program yang satu ini berkaitan langsung dengan PHP. Jika salah satu digunakan, maka serentak yang satu lagi juga harus digunakan. Karena MySQL adalah program database untuk mengolah input dan output data, sedang PHP untuk menampilkan entri data yang dilakukann oleh pengguna atau user sebuah halaman web. Jadi keduanya, berkeja secara berpasangan. Boleh dikatakan, ini 2 program 2 sejoli di tubuh sebuah web. Yang satu untuk menampilkan, menampung data masuk, sedang yang kedua mengolah dan melaporkan hasilnya.<br><br>

            4. Menguasai JavaScript<br>
            Fungsinya hampir sama dengan PHP, yaitu untuk membuat fitur-fitur interaktif pada sebuah halaman web. Bedanya, JavaScript juga bisa digunakan untuk mendandani halaman web agar terlihat lebih menarik. Karena selain bisa melayani aksi reaksi antara client dengan server, antara pengunjung dengan admin, JavaScript juga bisa digunakan untuk menampilkan animasi, misalnya membuat link-link tombol menjadi atraktif, membuat gambar dan teks melayang dan sejenisnya. Boleh dikatakan, JavaScript adalah PHP Plus. Ada nilai tambah dari sisi artistiknya selain sisi fungsi.
        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>