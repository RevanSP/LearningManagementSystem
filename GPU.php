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
    <title>LKP Adicita | GPU</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Graphics Processing Unit</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/GPU.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa Itu GPU ?<br>
            GPU adalah prosesor yang tersusun dari banyak core yang berukuran kecil dan spesifik.

            Core-core ini bekerja untuk memastikan komputer dapat mengolah data, khususnya gambar dengan baik.

            Mengutip Intel, GPU merupakan komponen yang memungkinkan kita mengerjakan banyak hal, mulai dari membuat konten, machine learning, gaming, dan tentunya masih banyak lagi.

            Bahkan, mining cryptocurrency yang makin populer juga sangat membutuhkan GPU, lho.

            Semakin canggih, prosesnya juga semakin cepat.

            Pada awalnya, GPU dibuat untuk mempercepat rendering grafis 3D.

            Akan tetapi, pada perkembangannya, GPU menjadi lebih fleksibel dan banyak kegunaannya.

            Pekerjaan graphic designer, programmer, animator, machine learning engineer, dan lainnya akan sangat bergantung pada GPU yang cepat untuk menyelesaikan pekerjaan mereka yang berat.

            Akan tetapi, bukan untuk pekerjaan profesional saja, GPU juga bisa dibutuhkan untuk kegunaan lainnya.
            <br><br>
            Pasalnya, banyak juga aplikasi yang membutuhkan proses GPU.
            Saat ini, mayoritas GPU diproduksi oleh dua perusahaan ternama, yaitu Nvidia dan AMD.

            Nvidia adalah perusahaan teknologi di California, AS, yang awalnya didirikan tahun 1993.

            Produk utama GPU yang diproduksi Nvidia bernama GeForce.<br>

            Beberapa GPU GeForce yang populer adalah:<br>

            - RTX 3080<br>
            - Nvidia Titan V<br>
            - Nvidia RTX A6000<br>
            - dan masih banyak lagi<br>
            Kompetitornya, AMD (Advanced Micro Devices), juga berpusat di California.<br>

            Perusahaan ini sudah berdiri lebih lama dan memproduksi beberapa komponen komputer lain selain GPU, seperti motherboard chipset, microprocessor, dan embedded processor.

            Produk GPU populernya adalah AMD Radeon dan Ryzen.

            Saat ini, salah satu spesialisasi dari AMD adalah prosesor yang cepat namun cocok untuk laptop bisnis yang tipis dan ringan.

            Pilihan ini bisa cocok untukmu yang membutuhkan GPU di laptop untuk pekerjaan sehari-hari.
            Fungsi GPU
            Setelah memahami apa itu GPU, yuk, pahami lebih dalam tentang apa saja kegunaan spesifik dari GPU serta tipe-tipenya.

            Seperti yang sudah dijelaskan sebelumnya, GPU memiliki begitu banyak kegunaan.

            - Pada umumnya, GPU diasosiasikan dengan pengolahan grafis yang realistis.<br>

            - Aplikasi seperti AutoCAD juga sangat membutuhkan GPU karena harus memproses render 3D.<br>

            - Untuk file–file resolusi tinggi, GPU canggih juga akan dapat memprosesnya dengan maksimal.<br>

            - Yang paling kekinian, GPU dipakai untuk membuat neural network dan mengolah fungsi machine learning.<br>

            - Tidak semua GPU dapat memenuhi fungsi yang sama.<br>

            - Beberapa GPU punya fungsi yang spesifik.<br><br>

            beberapa fungsi GPU lainnya adalah:<br>

            1. full scene anti-aliasing (FSAA) untuk tampilan objek 3D yang lebih halus<br>
            2. anisotropic filtering (AF) untuk meningkatkan ketajaman gambar<br>
            3. real-time physics dan particle effects<br>
            4. multi screen display<br>
            5. high frame rate video output<br>
            6. tampilan video ultra HD<br>
            7. kalkulasi cepat<br>
            8. GPU menyimpan informasi gambar di RAM.<br><br>

            Setiap pixel, warna, dan lokasinya di layar terjaga baik dalam RAM.

            Ada pula VRAM yang berguna sebagai frame buffer, yaitu menyimpan gambar untuk beberapa waktu hingga saatnya ditampilkan.

            Fungsi GPU yang kompleks inilah yang menghasilkan panas yang sangat tinggi, sehingga biasanya posisinya adalah di bawah heat sink atau kipas.

            Tipe-Tipe GPU
            ada dua tipe utama GPU yaitu integrated dan discrete.<br>

            - Integrated GPU adalah GPU yang sudah built-in dengan prosesornya.

            Jadi, tidak terpisah.

            GPU ini menggunakan sistem memori yang dibagi dengan CPU.<br><br>

            - GPU discrete merupakan GPU yang terpisah dari prosesor.

            GPU ini memiliki memori yang khusus untuk komponen tersebut sendiri, sehingga tidak harus berbagi dengan CPU.

            GPU tipe ini membutuhkan lebih banyak daya dan menghasilkan panas yang lebih tinggi daripada tipe yang integrated.

            Biasanya, integrated GPU dapat ditemukan di laptop.

            Sementara, discrete adalah GPU yang digunakan untuk PC, sehingga dapat dilepas pasang untuk diganti sesuai kebutuhan.

            Meski begitu, ada pula laptop yang memiliki discrete GPU.


        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>