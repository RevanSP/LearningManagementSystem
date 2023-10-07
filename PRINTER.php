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
    <title>LKP Adicita | Printer</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Printer</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/Printer.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa itu Printer ?<br>
            Pencetak atau mesin cetak (bahasa Inggris: printer) adalah peranti yang menampilkan data dalam bentuk cetakan, baik berupa teks maupun gambar/grafik, di atas kertas. Pencetak biasanya terbagi atas beberapa bagian, yaitu penggetil (picker) sebagai alat mengambil kertas dari baki (tray). Baki ialah tempat menaruh kertas. Tinta atau tinta bubuk adalah alat pencetak sesungguhnya, karena ada sesuatu yang disebut tinta atau tinta bubuk yang digunakan untuk menulis/mencetak pada kertas. Perbedaan tinta bubuk dan tinta ialah perbedaan sistem; tinta bubuk atau laser butuh pemanasan, sedangkan tinta atau sembur tinta tak butuh pemanasan, hanya pembersihan pada hulu pencetak (print-head) tersebut. mencetak di atas kertas, mencetak di kain, kaca, film putih, ebonit, dll. Ada pula kabel lentur untuk pengiriman sinyal dari pengolah pencetak ke tinta atau tinta bubuk. Kabel ini tipis dan lentur, tetapi kuat. Pada bagian belakang pencetak biasanya ada colokan sejajar atau USB untuk penghubung ke komputer.<br>

            Pencetak modem merupakan alat canggih. Perkakasan elektronik yang terdapat dalam sebuah pencetak sama dengan perkakasan elektronik yang terdapat dalam komputer itu sendiri. Pencetak mempunyai enam jenis yaitu jenis Dot-Matrix, jenis Daisy Wheel, jenis Ink-Jet / jenis Bubble Jet, jenis Chain, jenis Drum dan jenis Laser.<br>

            Pencetak saat ini sangat banyak macamnya dari kombinasi mesin pencetak multifungsi dengan memiliki fitur yang lengkap dari berbagai aspek diluar fungsi utamanya sebagai alat pencetak, pencetak multifungsi ini memiliki tambahan berupa pemindai dan juga penyalinan yang memang disediakan untuk tambahan fitur pencetak, selain itu ada juga pencetakan jenis baru yang dapat membuat membuat cetakan dengan bentuk 3 dimensi yang terlihat lebih nyata dan berbentuk, salah satu pencetak terbaru saat ini selalu memberikan fasilitas lebih untuk semakin mempermudah para pengguna, baik itu digunakan perorangan di rumah, atau kelompok seperti di kantor


        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>