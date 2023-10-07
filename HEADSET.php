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
    <title>LKP Adicita | Headset</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Headset</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/Headset.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa itu Headset ?<br>
            Headset adalah perangkat elektronik gabungan antara headphone dan mikrofon. Biasanya headset digunakan untuk mendengarkan suara dan sekaligus berbicara dengan perangkat komunikasi atau komputer, misalnya untuk VoIP.
            Umumnya headset ditujukan untuk digunakan pada perangkat yang lebih besar seperti laptop, komputer, atau lainnya tapi bisa juga digunakan untuk perangkat kecil sebasis mobile dan sejenisnya.
            Secara desain, umumnya headset melingkar pada bagian kepala dan memiliki dua buah speaker yang menutup keseluruhan telinga pemakainya. Desain tersebut dimaksudkan agar suara yang dihasilkan lebih terdengar maksimal. Headset juga cenderung digunakan untuk tujuan seperti video chat, video call, skype dan lainnya.
            Di bagian konektifitasnya ataupun portnya, headset memiliki 2 buah jack berukuran 3,5 mm yang dapat dipasangkan pada soundcard PC. Dua buah port jack tersebut memiliki fungsinya masing-masing, jack pertama berfungsi untuk input mikrofon, dan jack kedua berfungsi sebagai output speaker. Akan tetapi, perkembangan teknologi canggih telah banyak membuahkan inovasi baru yang lebih efisien. Karena sebagian besar headset sudah tidak lagi menggunakan fitur konektifas dua buah jack, namun justru banyak yang menggunakan fitur koneksi bluetooth dan USB yang terinegrasi di dalamnya.
            <br><br>
            Fungsi Headset<br>
            Fungsi utama headset yaitu sebagai alat reproduksi suara. Headset ini sebuah teknologi yang dapat menghasilkan suara atau audio yang lebih jernih.
            <br><br>
            Cara Kerja Headset<br>
            Cara kerja headset yaitu mengubah arus listrik menjadi gelombang suara yang dapat di dengar di telinga pengguna masing-masing.<br><br>
            Jenis-Jenis Headset<br>
            Berikut ini macam-macam jenis headset diantaranya yaitu:<br>

            - Headset, yaitu gabungan antara headphone dan microphone. Headset ini berbentuk seperti bando dengan speaker kecil berbentuk lingkaran di ujungnya dan di salah satu sisinya terdapat microfon kecil. Alat ini sering digunakan untuk keperluan komunikasi misalnya digunakan oleh seorang customer service.<br><br>

            - Headphone, ini memiliki bentuk seperti Headset, tapi ini tidak memiliki microphone. Biasa digunakan untuk mendengarkan musik, tapi tidak bisa digunakan sebagai alat komunikasi. Biasanya headphone lebih portable dibandingkan Headset.<br><br>

            - Backphone, ini sama dengan headphone tapi penggunaannya sedikit berbeda. Backphone ini tidak dilingkarkan diatas kepala namun dilingkarkan di belakang kepala. Alat ini lebih portable dibandingkan headphone dan biasanya digunakan untuk kegiatan olahraga.<br><br>

            - Earphone, ini memiliki bentuk lebih kecil daripada headphone ataupun headset. Cara menggunakannya juga berbeda yaitu tidak dilingkarkan di atas kepala seperti bando, tapi dimasukan atau ditempelkan pada lubang telinga.


        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>