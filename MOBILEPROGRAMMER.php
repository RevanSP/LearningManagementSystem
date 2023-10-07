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
    <title>LKP Adicita | MOBILE PROGRAMMER</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>MOBILE PROGRAMMER</b></h1>
        </center>
        <center>
            <img src="../project/imgblog//MobileProgrammer.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa itu Pemrograman Mobile ?<br>
            Pemrograman Mobile merupakan suatu proses pembuatan aplikasi pada perangkat mobile. Aplikasi Mobile biasanya akan dikembangkan oleh platform tertentu seperti iOS, Android dan Windows Phone.<br><br>

            Jenis Perangkat Mobile<br>
            Adapun jenis jenis dari perangkat mobile sendiri beragam, termasuk :<br><br>

            1. Handphone / Smartphone<br>
            Handphone, khususnya smartphone merupakan jenis perangkat mobile paling populer. Smartphone sendiri paling banyak yang menggunakan sistem operasi android dan ios.<br><br>

            2. Komputer Tablet<br>
            Komputer tablet merupakan jenis perangkat mobile yang banyak digunakan orang untuk menunjang pekerjaan dan kegiatan sehari harinya. Walaupun, penggunannya masih kalah jika dibandingkan dengan penggunaan Smartphone.<br><br>
            Alat Baca Elektronik (e reader)<br>
            eReader atau alat baca alaktronik juga termasuk dalam perangkat mobile. Contohnya, ereader dari amazon yang bernama kindle.<br><br>

            3. Smartwatch<br>
            Saat ini, bukan hanya ada smartphone saja, melainka ada juga perangkat mobil jam bernama smartwatch. Sebagaimana smarphone, smartwatch juga menggunakan sistem operasi baik android maupun ios.<br><br>

            Sistem Operasi Mobile<br>
            Sistem operasi mobile sendiri ada beragam, termasuk:<br>

            - Android<br>
            Android merupakan sistem operasi pada perangkat mobile smartphone maupun komputer yang berbasis Linux. Pengembang pertamanya adalah Android Inc. Untuk kemudian dibeli oleh Google pada tahun 2005.<br><br>
            - IOS<br>
            iOS merupakan sistem operasi pada perangkat mobile khususnya iPhone, iPod, iPad dan Apple TV. Pengembangnya bernama Apple Inc.<br><br>

            - Windows Phone<br>
            Windows Phone adalah sistem operasi pada perangkat mobile yang pengembangnya adalah Microsoft.<br><br>

            - Blackberry<br>
            BlackBerry OS merupakan sistem operasi perangkat mobile yang dikembangkan oleh Research In Motion.<br><br>
            Bahasa Pemrograman untuk Pemrograman Mobile<br>
            Bahasa pemrograman harus diketahui secara pasti agar seseorang dapat melakukan Pemrograman Mobile atau sederhana membuat aplikasi perangkat mobile. Bahasa pemrogramannya akan berbeda beda untuk setiap sistem operasi. Lebih lengkapnya akan dijelaskan sebagai berikut:<br><br>

            Bahasa Pemrograman untuk Sistem Operasi Android<br>
            Untuk sistem operasi android, bahasa pemrogramannya ada dua yaitu:<br><br>

            1. Java<br>
            Bahasa pemrograman Java merupakan salah satu bahasa pemrograman paling populer. Mengingat, komunitasnya sendiri sangat banyak dan luas, baik di Indonesia maupun di seluruh dunia. Oleh karena itu, kesulitan akan dapat terbantu oleh komunitas ini.<br><br>

            2. Kotlin<br>
            JetBrains telah mengembangkan bahasa pemrograman yang diberi nama Kotlin. Bahasa pemrograman Kotlin ini dinilai dapat mengatasi kekurangan bahasa pemrograman Java. Mengingat, Kotlin dapat dipakai bersamaan dengan Java dalam satu aplikasi.<br><br>

            Bahasa Pemrograman untuk Sistem Operasi iOS<br>
            Sistem Operasi IOS diketahui memiliki dua bahasa pemrograman seperti:<br><br>

            1. Swift<br>
            Swifet merupakan bahasa pemrograman paling populer untuk sistem operasi IOS. Bahkan, Swift ini digadang gadang sebagai bahasa pemrograman utama bagi ekosistem IOS.<br><br>

            2. Objective-C<br>
            Objective-C merupakan bahasa pemrograman yang ada sebelum Swift. Namun, hingga sekarang bahasa pemrograman ini masih banyak dipakai untuk project IOS.<br><br>

            Cross-Platform<br>
            Untuk bahasa pemrograman cross-platform adalah beberapa, termasuk:<br><br>

            - JavaScript<br>
            - TypeScript<br>
            - C#<br>
            - C<br>
            - C++<br>
            - Python<br>
            - Ruby<br><br>
            Aplikasi Pemrograman Mobile<br>
            Berikut ini merupakan beberapa aplikasi yang dapat digunakan untuk pemrograman mobile:<br>

            1. Adobe Flash Builder<br>
            Adobe Flash Builder merupakan aplikasi atau perangkat lunak yang telah banyak digunakan untuk membuat aplikasi android. Untuk fitur yang lengkap sebaiknya menggunakan Adobe Flash Builder versi premium.

            Beberapa hal yang harus dikuasai sebelum menggunakan Adobe Flash Builder yaitu:<br><br>

            - Bahasa ActionScript<br>
            - Framework open source Flex<br>
            - Xamarin<br>


            - Xamarin Studio<br>
            - Xamarin Visual Studio<br>
            - Android Studio<br><br>

            Aplikasi Lainnya<br>
            Berikut ini merupakan beberapa aplikasi lain yang dapat digunakan untuk Pemrograman Mobile:<br>

            1. Eclipse<br>
            2. Netbeans<br>
            3. Apache Cordova<br>
            4. Unity<br>
            5. Ionic<br>
            6. MIT App Inventor<br>
            7. React Native<br><br>
            Tutorial Pemrograman Mobile Android<br>
            Berikut ini merupakan tutorial yang sebaiknya dilakukan ketika akan melakukan pemrograman mobile android:<br><br>

            - Memilih Bahasa Pemrograman<br>
            Pilih bahasa pemrograman yang tepat untuk aplikasi yang ingin dikembangkan, mulai dari Java, C++, Kotlin, Javascript, Dart dan lainnya. Adapun biasanya bahasa pemrograman yang lebih disarankan untuk pemula yaitu bahasa pemrograman Java.<br><br>

            - Menentukkan Tools atau Software<br>
            Dalam pemrograman mobile android sangat disarankan untuk menggunakan Android Studio karena mendapat dukungan penuh dari Google.<br><br>

            - Membuat Project Sederhana<br>
            Bagi pemula, sebaiknya membuat project sederhana dulu untuk memulai lebih mempelajari dasar dasar pemrograman mobile android.


        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>