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
    <title>LKP Adicita | VGA</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>VGA CARD</b></h1>
        </center>

        <center>
            <img src="../project/imgblog/VGA.png" alt="" style="max-width:100%; border-radius:15px;">
        </center>
        <br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            VGA Card adalah sebuah komponen CPU komputer yang biasanya banyak digunakan untuk keperluan pengolah video dan juga grafis. Namun, besar kecilnya kapasitas VGA Card tidak mempengaruhi kinerja dari komputer tersebut. Asalkan, komputer hanya digunakan untuk kepentingan standar saja seperti mengetik, browsing, mendengarkan lagu, dll.

            Intinya, selagi tidak melakukan hal-hal yang berat, maka besar kecilnya kapasitas VGA Card tidak berpengaruh besar terhadap kinerja komputer bersangkutan.
            Namun, VGA Card sangat beperan penting jika anda ingin mengunakan komputer maupun laptop tersebut untuk keperluan berat; misalkan saja desain, bermain game HD, dan mengedit video. Maka jika anda ingin melakukan seperti hal-hal tersebut, otomatis VGA Card akan menjadi faktor utama yang patut anda perhatikan.
            <br><br>
            Terlepas dari itu, VGA sendiri rasanya terbagi menjadi dua jenis, yakni adalah VGA On-Board dan VGA Add-On. Yang akan kita bahas dua jenis tersebut sebagai berikut.
            <br><br>
            1. VGA On-Board<br>


            VGA On-Board merupakan jenis VGA yang banyak digunakan pada komputer dan laptop versi standar. Selain itu, VGA yang satu ini juga sudah tertanam menjadi satu dengan motherboard komputer. Dalam artian, VGA On-Board tidak bisa dilepas. Bahkan, mungkin juga tidak dapat diganti dengan VGA lainnya.<br>
            Sedangkan untuk cara kerjanya, VGA On-Board sendiri rasanya hanya dapat bekerja dengan bantuan RAM komputer anda. Tanpa hal tersebut maka kemungkinan VGA On-Board tidak dapat berfungsi seutuhnya.<br>
            Komputer dan Laptop Seperti Apa yang Terdapat Komponen VGA On-Board? VGA On-Board umumnya digunakan dan ditujukkan untuk komputer dengan spesifikasi rendah. Yang tentunya aktivitas seperti desain, bermain game HD, dan mengedit foto bukan kebutuhan utama. <br><br>Selain itu, VGA On-Board biasanya ditemukan pada laptop atau komputer dengan detail seperti ini:
            <br>
            - Komputer server kecil.<br>
            - Laptop atau netbook dengan layar kecil (10”).<br>
            - Laptop dengan harga kisaran 2 hingga 3 jutaan (low end)
            <br><br>
            Keunggulan VGA On-Board<br>
            - Perawatannya cenderung lebih mudah<br>
            - Harga jauh lebih terjangkau<br>
            - Sudah cukup untuk dapat menjalankan keperluan standar komputer
            <br><br>
            Kelemahan VGA On-Board<br>
            - Lemah ketika menangani grafik berkualitas tinggi.<br>
            - Tidak support dengan game beresolusi tinggi dan modern.<br>
            - Terkadang sering mengalami gejala lag atau lemot ketika memutar video beresolusi tinggi.<br>
            <br><br>
            2. VGA Add-On
            Berbeda dengan VGA On-Board, VGA yang satu ini dapat dilepas dan diganti sesuai keinginan. Dan, VGA Add-On juga tidak tertanam langsung di motherboard komputer. Selain hal tersebut, VGA Add-On serta dapat bekerja sendiri tanpa harus mengandalkan kemampuan dari memori RAM yang ada pada komputer.
            Dengan adanya VGA Add-On, maka komputer tersebut dipastikan dapat melakukan hal-hal berat semacam desain grafis, bermain game HD, serta melakukan hal-hal lainnya yang dirasa merupakan aktivitas berat bagi komputer. VGA Add-On dapat bekerja lebih maksimal dibandingkan dengan VGA On-Board.<br>
            <br>
            Dan, inilah spesifikasi komputer yang biasanya mendukung VGA Add-On.<br>
            - Komputer atau laptop mid hingga high end.<br>
            - Komputer gaming dan design.<br><br>

            Keunggulan VGA Add-On<br>
            - Memiliki sistem pendingin terpisah, sehingga lebih tahan lama.<br>
            - Mampu menjalankan grafik 3D dan aktivitas gaming yang berat.<br>
            - Bisa diupgrade<br>
            - Mampu digunakan untuk memutar film dengan kualitas tinggi.<br>
            - Tampilan gambar menjadi lebih tajam.<br><br>

            Kelemahan VGA add-On<br>
            - Harga relatif mahal.<br>
            - Tidak semua komputer mendukung pergantian VGA Card.<br><br>

            Beberapa Jenis VGA Card yang Beredar di Pasaran<br>
            Karena kebutuhan masyarakat untuk keperluan aktivitas desain dan juga gaming semakin meningkat, hal ini membuat banyak perusahaan teknologi meluncurkan VGA Card. Utamanya VGA Add-On.<br><br>
            Maka demikian, inilah beberapa tipe VGA Card yang pernah dibuat lalu kemudian dipasarkan.<br>
            - S3 ViRGE<br>
            - ATI RAGE 3D<br>
            - NVIDIA NV3<br>
            - NVIDIA NV4<br>
            - NVIDIA GEFORCE Series<br>
            - ATI RADEON Series<br>

        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>