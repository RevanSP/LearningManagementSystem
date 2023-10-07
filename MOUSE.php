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
    <title>LKP Adicita | Mouse</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Mouse</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/Mouse.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa itu Mouse ?<br>
            Tetikus (terjemahan harfiah dari bahasa Inggris: mouse) adalah peranti penunjuk yang digunakan untuk memasukkan data dan perintah ke dalam komputer selain dengan papan ketik. Tetikus memperoleh nama demikian karena kabel yang menjulur berbentuk seperti ekor tikus.<br>

            Tetikus pertama kali dibuat pada tahun 1963 oleh Douglas Engelbart yang berbahan dasar kayu dengan satu tombol. Model kedua sudah dilengkapi dengan tiga tombol. Pada tahun 1970, Douglas Engelbart memperkenalkan tetikus yang dapat mengetahui posisi X-Y pada layar komputer, tetikus ini dikenal dengan nama Indikator Posisi X-Y (X-Y Position Indicator).<br>

            Bentuk tetikus yang paling umum mempunyai dua tombol utama, masing-masing di sebelah kiri atas dan kanan atas yang dapat ditekan. Tetikus modern umumnya dilengkapi dengan tombol gulir yang juga dapat ditekan sebagai tombol ketiga. Walaupun demikian, komputer berbasis Macintosh biasanya menggunakan tetikus satu tombol.<br>

            Tetikus bekerja dengan menangkap gerakan menggunakan bola yang menyentuh permukaan keras dan rata. Tetikus yang lebih modern sudah tidak menggunakan bola lagi, tetapi menggunakan sinar optis untuk mendeteksi gerakan. Selain itu, ada pula yang sudah menggunakan teknologi nirkabel, baik yang berbasis radio, sinar inframerah, maupun bluetooth.<br>

            Saat ini, teknologi terbaru sudah memungkinkan tetikus memakai sistem laser, memungkinkan resolusi mencapai 2.000 titik per inci (dpi) hingga 4.800 titik per inci. Biasanya tetikus model ini diperuntukkan bagi penggemar permainan video.


        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>