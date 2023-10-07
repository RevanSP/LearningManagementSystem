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
    <title>LKP Adicita | PROCESSOR</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>PROCESSOR</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/Processor.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Processor adalah salah satu komponen penting komputer yang berfungsi untuk memproses data dan mengontrol sistem yang ada pada komputer. Processor juga bisa disebut sebagai otak dari komputer. Secara singkat, processor bekerja untuk melakukan perhitungan serta menjalankan perintah-perintah yang diperintahkan oleh pengguna komputer itu sendiri.
            Dan dalam sebuah komputer, Processor layaknya sebuah mesin yang mana kinerjanya harus dibantu oleh komponen-komponen lain seperti mainboard, memory, dan banyak hal lainnya.
            <br>
            Selain itu, processor biasanya terletak di motherboard dan diletakan pada socket yang telah disediakan. Uniknya, processor sebuah komputer ternyata bisa diganti dengan jenis-jenis lain, Namun, processor penggantinya harus sesuai dengan socket yang ada pada motherboard. Pasalnya, jika tidak sesuai, processor tidak akan terhubung dengan komputer. Bahkan, tidak bisa terpasang di socket motherboard.
            Dan perlu anda ketahui, semakin tinggi kecepatan processor, maka semakin tinggi dan cepat pula kinerja suatu komputer tersebut. Tapi tetap saja, kecepatan tersebut dipengaruhi oleh jenis dan kapasitas dari processor itu sendiri.
            Terlepas dari itu, pada sistem komputer yang sudah ada, ternyata jenis processor tidak hanya satu saja. Melainkan ada banyak sekali. <br><br>Dan inilah sedikitnya macam-macam processor komputer.<br>

            1. Processor Intel<br>
            Processor Intel tentu tidak asing lagi di dunia perkomputeran. Bahkan, mungkin saja komputer atau laptop yang tengah anda gunakan sekarang ini menggunakan processor berbasis Intel. Dan Intel tentu saja memang salah satu perusahaan yang berhasil merajai processor di dunia komputer. Mengingat begitu banyaknya komputer dan laptop memakai processor dari perusahaan ini.

            Processor Intel sendiri dilahirkan oleh perusahaan Intel Corporation yang merupakan sebuah perusahaan multinasional, bermarkas di Amerika Serikat dan sudah berdiri sejak tahun 1968. Hingga sekarang, processor Intel sudah banyak mengalami perkembangan. <br><br>Dan berikut ini adalah tipe-tipe processor yang telah dihasilkan Intel, antara lain:<br>
            - 4004 Micro processor<br>
            - 8008 Microprocessor<br>
            - 8080 Microprocessor<br>
            - 8086 – 8088 Microprocessor<br>
            - 286 Microprocessor<br>
            - Intel 386 TM<br>
            - Intel 486 TM DX CPU Microprocessor<br>
            - Intel Pentium Processor<br>
            - Intel Pentium Pro Processor<br>
            - Intel Pentium II Processor<br>
            - Intel Pentium II Xeon Processor<br>
            - Intel Celeron Processor1999<br>
            - Intel Pentium III Processor1999<br>
            - Intel Pentium III Xeon Processor2000<br>
            - Intel Pentium 4 Processor2001<br>
            - Intel Italium Processor2001<br>
            - Intel Italium II Processor2002<br>
            - Intel Pentium M Processor2003<br>
            - Intel Pentium M 735/ 745/ 7552004<br>
            - Intel Pentium 4 Extreme Edition2005<br>
            - Intel Pentium D2005<br>
            - Intel Core 2 Quad2006<br>
            - Intel Quad Core Xeon2006<br>
            - Intel Core i7, i5 dan i3<br>
            - Intel Core i9<br><br>
            2. Processor AMD<br>
            AMD meupakan salah satu kompetitor Intel yang nyata, terlebih untuk urusan yang berkaitan dengan processor. Selain itu, AMD merupakan perusahaan semikonduktor multinasional yang bertempat di Amerika Serikat di Sunnyvale, California. Bahkan, perusahaan ini juga merupakan perusahaan terbesar kedua setelah Intel Corporation untuk urusan pemasok mikroprosesor dalam ranah global.

            Pada tahun 2007, perusahaan AMD berhasil menempati peringkat ke-sebelas dari segi pendapatan. <br><br>Serta di bawah ini ada beberapa produk processor yang berhasil AMD ciptakan, antara lain:<br>

            - Opteron (untuk pangsa pasar server).<br>
            - AMD FX dan APU A SERIES (untuk pangsa pasar Desktop).<br>
            - APU Z SERIES (untuk pangsa pasar prodak tablet pc).<br><br>
            - Berikut contoh produk AMD processor yang beredar di pasaran:<br>
            - AMD K5<br>
            - AMD K6<br>
            - AMD Duron<br>
            - AMD Athlon<br>
            - AMD Athlon 64<br>
            - AMD Zambezi<br>
            - AMD Ryzen 3,5,7,9<br><br>
            3. Processor Apple<br>
            Brand yang satu ini rasanya juga tidak asing lagi di telinga kita. Sebab, Apple Inc. merupakan perusahaan yang bergerak di bidang teknologi multinasional dengan pusat kantornya berlokasi di Silicon Valley, Cupertino, California.

            perusahaan Apple memfokuskan diri dalam bidang perancangan, pengembangan, dan penjualan produk-produk elektronik. Seperti komputer pribadi hingga perangkat lunak komputer.

            Pada awalnya, perusahaan Apple Inc ini bernama Apple Computer, Inc diawal berdirinya pada 1 April 1976. Namun, kata “Computer” kemudian dihapuskan pada 9 Januari 2007 lalu. Sebab, pada saat itu Apple meluncurkan produk smartphone, yang dinamakan IPhone.

            <br><br>Kembali mengenai processor, mungkin ada beberapa produk processor yang berhasil dilahirkan dan dikembangkan oleh Apple. Yang antara lain adalah seperti berikut ini:<br>

            - Apple I<br>
            - Apple II<br>
            - Apple DOS<br>
            - Apple Pascal<br>
            - Apple CP/M<br>
            - Apple SOS<br>
            - Apple ProDOS<br>
            - Macintosh<br><br>
            4. Processor Cyrix VIA<br>
            Pengembang yang satu ini mungkin jarang atau tidak pernah kita ketahui mengenai keberadaanya. Akan tetapi, Cyrix juga mempunyai beberapa produk processor yang berhasil mereka kembangkan.

            Adapun Cyrix merupakan salah satu perusahaan pengembang mikroprosesor yang berdiri pada tahun 1988, dan berhasil didirikan di Richardson, Texas.

            Setelah satu dekade masa didirikannya, perusahaan Cyrix akhirnya resmi bergabung dengan National Semiconductor pada 11 November 1997. Kemudian, pada tahun 1999, perusahaan Cyrix pindah tangan dan diakusisi oleh VIA.
            <br><br>
            Sementara itu, inilah beberapa macam processor yang dihasilkan oleh perusahaan ini:<br>

            - Cyrix FasMath<br>
            - Cyrix 486SLC dan Cyrix 486DLC<br>
            - Cyrix 5×86<br>
            - Cyrix 6×86 (M1)<br>
            - Cyrix MII<br>
            - Cyrix MediaGX<br>
            - Cyrix MII-433GP<br>
            - VIA C3® Processor<br>
            - VIA CoreFusion™ Processor Platform<br>
            - VIA Eden™ Processors<br>
            - VIA C7® Processor<br>
            - VIA PV530 Processor<br>
            - VIA Nano™ Processor<br>
            - VIA Nano™ X2 Processor<br><br>
            5. Processor IBM<br>
            International Business Machines Corporation (IBM), merupakan salah satu perusahaan terbesar di Amerika Serikat. Dan lebih tepatnya berkantor pusat di Armonk, Town of North Castle, New York, Amerika Serikat. Perusahaan ini bergerak pada bidang elektronik, yang memproduksi serta menjual berbagai produk perangkat keras maupun perangkat lunak yang ada pada komputer.

            Perusahaan IBM sendiri berdiri sudah lama sekali. Bahkan, IBM lebih tepatnya didirikan pada 16 Juni 1911, dan mulai beroperasi sejak 1888. <br><br>Perusahaan ini juga banyak memproduksi komponen-komponen processor, yang antara lain sebagai berikut:<br>

            - 8008<br>
            - 8080<br>
            - 8088/8086sx<br>
            - 286<br>
            - 80386 DX<br>
            - IBM 486SLC2<br>
            - Pentium Classic (P54C)<br>
            - Pentium Pro<br>
            - Pentium II Xeon<br>
            - IBM POWER4<br>
            - IBM POWER5<br>
            - IBM POWER6<br>
            - IBM POWER7<br><br>
            6. Processor IDT<br>
            Berbeda dengan perusahaan mikroprosesor lainnya, IDT ( Integrated Device Technology ) merupakan perusahaan yang memiliki ruang lebih kecil. Yang menghasilkan CPU dengan harga murah. Perusahaan ini sendiri berdiri pada tahun 1980 dan memiliki kantor di San Jose, California, Amerika Serikat.
            Perusahaan ini juga telah berkontribusi untuk membuat processor WinChip yang diperkenalkan pertama kali pada Mei 1997.<br><br> Adapun macam karya processor yang telah dihasilkan perusahaan ini, antara lain:<br>

            - Winchip C6 (0.35 µm)<br>
            - WinChip 2 (0.35 µm)<br>
            - WinChip 2A (0.35 µm)<br>
            - WinChip 2B (0.25 µm)<br>
            - WinChip 3 (0.25 µm)<br><br>
            7. Processor Transmeta<br>
            Transmeta merupakan salah perusahaan yang serta berkiprah pada bidang semikonduktor mikroprocessor. Dan, pusat pengembangangan dan produksinya terletak di California, Amerika Serikat.
        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>