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
    <title>LKP Adicita | WEB DEVELOPER</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>WEB DEVELOPER</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/WebDeveloper.png" alt="" style="max-width:100%; border-radius:15px">
        </center>
        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa Itu Web Developer ?<br>
            Web developer adalah orang yang bertugas membuat dan mengembangkan website, atau web development. Untuk melakukannya, mereka menulis kode dengan berbagai bahasa pemrograman web sesuai keahlian mereka. Contohnya, Python, JavaScript, dan HTML.
            <br><br>
            Apa Saja Jenis dan Tugas Web Developer ?<br><br>
            Setelah tahu apa itu web developer, Anda juga perlu tahu jenis-jenis web developer, yaitu:<br>
            1. Front End Developer
            Tugas web developer front end adalah mendesain antarmuka website. Tujuannya, agar website memiliki tampilan yang baik dan fitur-fitur yang mudah digunakan pengunjung.
            Untuk bisa melaksanakan tanggung jawab itu, developer setidaknya wajib menguasai tiga bahasa pemrograman, yaitu:<br>
            HTML: berfungsi untuk membangun struktur halaman web dan memasukkan konten ke halaman, seperti paragraf, heading, dan gambar.<br>
            CSS: diperlukan untuk menentukan tampilan teks, tombol, dan elemen lainnya pada halaman web.<br>
            JavaScript: digunakan untuk membuat konten yang berubah-ubah dan interaktif, seperti slider gambar, animasi, dan pop-up.<br>
            <br>
            2. Back End Developer<br>
            Back end developer adalah seorang web developer yang pekerjaannya banyak berkaitan dengan server dalam fungsinya untuk mendukung performa website.
            Mereka bertanggung jawab memastikan agar website selalu cepat, aman, dan berfungsi sesuai tujuan penggunaannya.<br><br>
            Sesuai dengan tanggung jawab yang dimiliki, tugas web developer back end meliputi :<br>
            - Merancang alur website sesuai jenis website yang dibuat. Misalnya, untuk toko online, developer bisa membuat alur agar setiap pengunjung diarahkan untuk membuat akun atau log in, sebelum akhirnya memilih produk dan melakukan pembayaran.<br><br>
            - Membuat database untuk menyimpan data website, seperti berbagai foto dan informasi produk, akun pengunjung, dan data pesanan. Selain itu, developer juga harus mengelola database agar tidak membebani kinerja website <br><br>
            - Mencari celah-celah keamanan di website dan server dan memperbaikinya. Ini dilakukan agar website selalu aman dari serangan hacker dan kepercayaan pengunjung terjaga.<br><br>
            - Untuk melaksanakan beberapa tanggung jawab itu, back end developer wajib menguasai bahasa pemrograman untuk sisi server. Beberapa di antaranya adalah PHP, SQL, dan Python.<br><br>
            3. Full Stack Developer<br>
            Full stack web developer adalah seorang developer yang melakukan pekerjaan front end dan back end sekaligus. Dengan kata lain, ia harus mampu membuat tampilan dan fitur website sembari mengoptimalkan kecepatan dan keamanannya dari sisi server.
            Karena memiliki kemampuan yang lebih lengkap, full stack developer bisa mengerjakan website sendirian. Tak jarang, seorang full stack developer ditunjuk sebagai pimpinan tim developer untuk mengawasi proyek website keseluruhan.
        </p>
    </section>
    <!-- teachers section ends -->
    <?php include 'components/footer.php'; ?>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>