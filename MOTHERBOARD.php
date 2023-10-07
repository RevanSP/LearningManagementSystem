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
    <title>LKP Adicita | MOTHERBOARD</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>MOTHERBOARD</b></h1>
        </center>

        <center>
            <img src="../project/imgblog/Motherboard.png" alt="" style="max-width:100%; border-radius:15px">
        </center>
        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Pada dasarnya, motherboard adalah papan sirkuit yang ada di dalam sebuah casing komputer dimana semua komponen komputer terhubung.
            Motherboard menyediakan konektivitas antara komponen perangkat keras komputer, seperti prosesor (CPU), memori (RAM), hard drive, dan kartu video. Lebih tepatnya, motherboard adalah perangkat keras komputer yang berfungsi sebagai “tulang punggung” atau “ibu” yang menyatukan semua bagian. Motherboard sendiri juga datang dalam berbagai jenis dan ukuran yang berbeda. Tujuannya agar sesuai dengan berbagai jenis dan ukuran perangkat keras.<br><br>
            Setiap jenis motherboard dirancang untuk bekerja dengan jenis prosesor dan memori tertentu, sehingga tidak semua jenis bisa cocok dengan perangkat Anda. Namun, umumnya hard drive yang bersifat universal akan bekerja dengan sebagian besar motherboard, terlepas dari jenis atau brand nya. Sebenarnya, motherboard tidak mempengaruhi kinerja sebuah perangkat keras atau hardware. Performa perangkat akan meningkat bergantung pada chipset yang terpasang.Secara fisik, motherboard terdiri dari lembaran bahan non-konduktif yang kuat dan kaku. Kemudian, lapisan aluminium foil akan dicetak pada lembaran ini.<br><br>
            Lapisan tembaga yang juga sering disebut dengan traces itu umumnya kecil dan membentuk sirkuit antara berbagai komponen. Selain sirkuit, motherboard juga berisi sejumlah soket dan slot untuk menghubungkan komponen-komponen lainnya yang ada di dalamnya.
            Umumnya, motherboard dilengkapi dengan beberapa konektivitas interface input/output yang terletak pada panel input/output di belakang perangkat tersebut. Interface paling umum pada motherboard adalah port USB. Umumnya, motherboard memiliki beberapa port USB karena banyaknya jenis konektivitas USB yang ada.<br><br>

            Fungsi Motherboard
            Tujuan utama dari motherboard adalah untuk memindahkan daya dan menyediakan tempat di mana semua komponen dapat berkomunikasi satu sama lain.<br><br>
            Beberapa fungsi lain dari motherboard :<br>
            Mentransfer data ke semua komponen komputer.
        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>