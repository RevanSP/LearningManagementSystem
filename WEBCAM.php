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
    <title>LKP Adicita | Webcam</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Web Cam</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/WebCam.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa itu Web Cam ?<br>
            Kamera web atau kamera ramatraya (bahasa Inggris: webcam, singkatan dari web dan camera) adalah sebutan bagi kamera waktu-nyata (bermakna keadaan pada saat ini juga) yang gambarnya bisa dilihat melalui Waring Wera Wanua, program pengolahpesan cepat, atau aplikasi pemanggilan video. Istilah Webcam merujuk pada teknologi secara umumnya, sehingga istilah Webcam kadang-kadang diganti dengan kata lain yang memberikan pemandangan yang ditampilkan di kamera, misalnya StreetCam yang memperlihatkan pemandangan jalan. Ada juga Metrocam yang memperlihatkan pemandangan panorama kota dan perdesaan, TraffiCam yang digunakan untuk memantau keadaan jalan raya, cuaca dengan Weather Cam, bahkan keadaan gunung berapi dengan VolcanoCam. Webcam adalah sebuah kamera video bergana (digital) kecil yang dihubungkan ke komputer melalui (biasanya) colokan USB ataupun colokan COM.<br><br>

            Tipe-tipe<br>

            Slim1320 (True 1.3 Mega Pixels High Performance Web Cam), Slim 2020AF (Mega Pixel Web Camera Auto Focus), Eye 312 (Simplify Instant Video and Chat), Eye 110 (Instant Video Messenger WebCam) serta i-Look 1321 (Advance 1.3 Mega Pixel Camera), dan lain-lain. Sekarang hampir semua kamera digital dan HP bisa dijadikan sebagai kamera web (webcam).<br><br>

            Cara kerja<br>
            Sebuah web camera yang sederhana terdiri dari sebuah lensa standar, dipasang di sebuah papan sirkuit untuk menangkap sinyal gambar; casing (cover), termasuk casing depan dan casing samping untuk menutupi lensa standar dan memiliki sebuah lubang lensa di casing depan yang berguna untuk memasukkan gambar; kabel support, yang dibuat dari bahan yang fleksibel, salah satu ujungnya dihubungkan dengan papan sirkuit dan ujung satu lagi memiliki connector, kabel ini dikontrol untuk menyesuaikan ketinggian, arah dan sudut pandang web camera. Sebuah web camera biasanya dilengkapi dengan software, software ini mengambil gambar-gambar dari kamera digital secara terus menerus ataupun dalam interval waktu tertentu dan menyiarkannya melalui koneksi internet. Ada beberapa metode penyiaran, metode yang paling umum adalah hardware mengubah gambar ke dalam bentuk file JPG dan menguploadnya ke web server menggunakan File Transfer Protocol (FTP).<br>

            Frame rate mengindikasikan jumlah gambar sebuah software dapat ambil dan transfer dalam satu detik. Untuk streaming video, dibutuhkan minimal 15 frame per second (fps) atau idealnya 30 fps. Untuk mendapatkan frame rate yang tinggi, dibutuhkan koneksi internet yang tinggi kecepatannya. Sebuah web camera tidak harus selalu terhubung dengan komputer, ada web camera yang memiliki software webcam dan web server bulit-in, sehingga yang diperlukan hanyalah koneksi internet. Web camera seperti ini dinamakan “network camera”. Kita juga bisa menghindari penggunaan kabel dengan menggunakan hubungan radio, koneksi Eternet ataupun WiFi.<br><br>

            Sejarah<br>
            Pada awalnya, bentuk web camera terbatas pada bentuk-bentuk standar yang hanya terdiri dari lensa dan papan sirkuit serta casing yang biasa. Namun seiring dengan perkembangan teknologi, bentuk web camera pun sudah makin bervariasi dengan fitur-fitur yang makin canggih. Salah satu bentuk web camera yang unik adalah bentuk boneka yang lucu, web camera ini dapat disalahartikan hanya sebagai boneka dan bukan webcam. Sebuah penemuan oleh Microsoft pada tahun 2004 menggambarkan kemajuan perkembangan teknologi web camera. i2i adalah sebuah sistem dua-kamera yang dengan sangat hati-hati mengikuti pergerakan individu. Kamera ini menggunakan perhitungan algoritme yang secara spesial dikembangkan untuk memfusikan apa yang setiap kamera lihat untuk membuat gambar ‘cyclopean’ stereo yang akurat. Kamera ini juga dapat menampilkan emoticon 3D yang melayang. Sistem i2i dapat juga menghasilkan gambar background yang realistis sehingga pengguna dapat berpura-pura berada di tempat lain. Kemampuan sistem i2i ini, diantaranya yaitu kemampuan tracking (disebut smart framing) dan juga kemampuan smart focusing, dapat menambah pengalaman berkonferensi bagi pengguna.<br>

            Teknologi web camera pada awalnya mendapat dukungan komersial dari industri pornografi. Industri ini membutuhkan gambar-gambar ‘live’ dan meminta pembuatan software yang mampu melakukannya tanpa web browser plugins. Hal ini melahirkan teknologi live streaming webcam yang masih tetap ada hingga sekarang. Sekarang ini web camera yang ada di pasaran pada umumnya terbagi ke dalam dua tipe: web camera permanen (fixed) dan revolving web camera. Pada web camera permanen terdapat pengapit untuk mengapit lensa standar di posisi yang diinginkan untuk menangkap gambar pengguna. Sedangkan pada revolving web camera terdapat landasan dan lensa standar dipasang di landasan tersebut sehingga dapat disesuaikan ke sudut pandang yang terbaik untuk menangkap gambar pengguna. Penggunaan web camera mencakup video conferencing, internet dating, video messaging, home monitoring, images sharing, video interview, video phone-call, dan banyak hal lain. Kamera untuk video conference biasanya berbentuk kamera kecil yang terhubung langsung dengan komputer. Kamera analog juga kadang-kadang digunakan, kamera ini terhubung dengan video capture card dan tersambung dengan internet (baik langsung maupun tidak langsung). Saat ini kamera untuk video conference sudah makin maju, sudah ada web camera yang di dalamnya terdapat microphone maupun noise cancellation untuk memfokuskan audio ke speaker yang terletak di depan kamera sehingga noise yang ada tidak mengganggu jalannya konferensi.<br><br>

            Fitur dan setting<br>
            1. Motion sensing–web camera akan mengambil gambar ketika kamera mendeteksi gerakan.<br>
            2. Image archiving–pengguna dapat membuat sebuah archive yang menyimpan semua gambar dari web camera atau hanya gambar-gambar tertentu saat interval pre-set.<br>
            3. Video messaging–beberapa program messaging mendukung fitur ini.<br>
            4. Advanced connections–menyambungkan perangkat home theater ke web camera dengan kabel maupun nirkabel.<br>
            5. Automotion–kamera robotik yang memungkinkan pengambilan gambar secara pan atau tilt dan setting program pengambilan frame berdasarkan posisi kamera.<br>
            6. Streaming media–aplikasi profesional, setup web camera dapat menggunakan kompresi MPEG4 untuk mendapatkan streaming audio dan video yang sesungguhnya.<br>
            7. Custom coding–mengimport kode komputer pengguna untuk memberitahu web camera apa yang harus dilakukan (misalnya automatically refresh).<br>
            8. AutoCam–memungkinkan pengguna membuat web page untuk web cameranya secara gratis di server perusahaan pembuat web camera.<br>


        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>