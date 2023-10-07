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
    <title>LKP Adicita | Monitor</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Monitor</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/Monitor.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa itu Monitor ?<br>
            Monitor komputer adalah salah satu jenis soft-copy device, karena keluarannya adalah berupa sinyal elektronik, dalam hal ini berupa gambar yang tampil di layar monitor. Gambar yang tampil adalah hasil pemrosesan data ataupun informasi masukan. Monitor memiliki berbagai ukuran layar seperti layaknya sebuah televisi. Tiap merek dan ukuran monitor memiliki tingkat resolusi yang berbeda. Resolusi inilah yang akan menentukan ketajaman gambar yang dapat ditampilkan pada layar monitor. Jenis-jenis monitor saat ini sudah sangat beragam, mulai dari bentuk yang besar dengan layar cembung, sampai dengan bentuk yang tipis dengan layar datar (flat).<br>

            Jenis-jenis monitor<br>
            Untuk saat ini monitor komputer terdiri dari beberapa jenis, di antaranya:<br>

            1. monitor Tabung sinar kathoda<br>
            2. monitor LCD<br>
            3. monitor plasma<br>
            4. monitor OLED<br>


        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>