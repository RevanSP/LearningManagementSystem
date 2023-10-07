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
    <title>LKP Adicita | Scanner</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Scanner</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/Scanner.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa itu Scanner ?<br>
            Pemindai (bahasa Inggris: scanner) merupakan suatu alat yang digunakan untuk memindai suatu bentuk maupun sifat benda, seperti dokumen, foto, gelombang, suhu dan lain-lain. Hasil pemindaian itu pada umumnya akan ditransformasikan ke dalam komputer sebagai data digital. Terdapat beberapa jenis pemindai bergantung pada kegunaan dan cara kerjanya, antara lain:<br>

            1. pemindai gambar<br>
            2. pemindai barcode<br>
            3. pemindai sinar-X<br>
            4. pemindai cek<br>
            5. pemindai logam<br>
            6. pemindai Optical Mark Reader (OMR)<br>
            7. pemindai 3 Dimensi<br>
            Di antara jenis-jenis pemindai tersebut, pemindai gambar adalah yang paling sering disebut sebagai pemindai.<br>
            Seperti halnya pada pemindai OMR, pemindai gambar juga dapat digunakan sebagai pemindai LJK. Agar hal tersebut dapat tercapai, dibutuhkan perangkat lunak dengan teknologi Digital Mark Reader (DMR).<br>
            Bila dikelompokkan berdasarkan cara memasukkan kertas, pemindai gambar terdiri atas 2 jenis, yaitu:<br>

            1. Flatbed<br>
            Pada pemindai gambar Flatbed, kertas diletakkan di atas kaca pemindai, kemudian lampu dan sensor pemindai akan bergerak menyusuri kertas tersebut untuk memperoleh gambarnya.<br>
            2. Automatic Document Feeder (ADF)<br>
            Pada pemindai gambar Automatic Document Feeder (ADF), kertas diletakkan pada baki/tray, lalu satu per satu kertas akan dimasukkan oleh bagian mekanik pemindai dengan adanya pad assy dan roller. Pada saat kertas bergerak di atas lampu pemindai, sensor pemindai bekerja untuk memperoleh gambar yang merepresentasikan kertas tersebut. Keunggulan pemindai Automatic Document Feeder (ADF) adalah:<br>
            - kecepatannya tinggi, dapat mencapai > 10.000 lembar per jam<br>
            - dapat membaca dua sisi kertas sekaligus pada saat yang bersamaan<br>
            - dengan imprinter, pemindai dapat memberikan tanda pada lembaran yang telah dipindai<br>
            - sangat tepat dipasangkan dengan perangkat lunak berteknologi Digital Mark Reader serta untuk pengarsipan dan manajemen dokumen


        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>