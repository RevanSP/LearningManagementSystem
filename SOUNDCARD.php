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
    <title>LKP Adicita | Sound Card</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Sound Card</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/SoundCard.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa itu Sound Card ?<br>
            Sound Card adalah salah satu perangkat keras komputer yang memiliki fungsi utama sebagai pengolah data berjenis audio atau suara. Saat kalian mendengar lagu atau berbicara melalui headset yang terhubung pada PC atau laptop, suara yang kalian dengar tersebut diolah oleh sound card. Jadi, sound card bertanggung jawab dalam segala urusan mengenai audio atau suara.<br><br>
            Fungsi Sound Card<br>
            Fungsi dasar sound card adalah mengkonversi file audio yang notabenenya berisikan data digital atau sebagaimana semua file yang ada di dalam komputer menjadi sinyal analog sehingga dapat ditangkap oleh indera pendengaran. Berikut ini fungsi sound card diantaranya yaitu:<br>

            - Sebagai synthesizer atau penghasil suara<br>
            - Sebagai suatu MIDI interface<br>
            - Sebagai konverter analog-ke-digital; kasus yang paling umum ditemukan yaitu perekaman suara<br>
            - Sebagai konverter digital-ke-analog; ilustrasi yang paling gampang yaitu keluarnya suara saat berbicara melalui headset atau voice call.<br><br>
            Agar bisa melakukan fungsinya dengan baik, sound card umumnya memiliki 4 (empat) bagian utama, yaitu:<br>
            - Suatu interface yang terhubung dengan motherboard, biasanya menggunakan -Peripheral Component Interconnect (PCI)<br>
            - Sejumlah konektor input dan output. Dengan begitu, user bisa memasang headphone, speaker atau mikrofon<br>
            - Fasilitas Digital to Analog Converter (DAC); yang memungkinkan mengkonversi data digital ke suara analog<br>
            - Fasilitas Analog to Digital Converter (ADC); yang memungkinkan untuk membuat rekaman digital dari input berupa suara analog.<br><br>
            Cara Kerja Sound Card<br>
            Secara garis besar, ada 3 (tiga) metode sintesis suara yang dijalankan oleh sebuah sound card dalam mengemban tugasnya:<br>

            1. Frequency Modulation (FM)<br>
            Sintesis suara jenis ini merupakan yang paling murah namun kurang efektif. Disini, suara disimulasikan menggunakan algoritma-algoritma tertentu agar tercipta gelombang sinus yang karakteristiknya sedekat mungkin dengan suara asli.<br><br>

            2. Wavetable<br>
            Pada mekanisme kerja ini, sampel-sampel suara yang sudah direkam “disimpan” dalam kartu suara agar menghasilkan kualitas suara terbaik.<br><br>
            3. Physical Modeling<br>
            Mekanisme ini termasuk cukup rumit dan merupakan tipe sintesis jenis baru dimana suara-suara disimulasikan oleh prosedur pemrograman yang kompleks. Berikut mekanisme kerja sound card sehingga dapat mengeluarkan suara adalah sebagai berikut:<br>

            - Aksi yang dilakukan user membuat data digital berupa berkas audio atau yang mengandung konten audio dibaca dari harddisk lalu diteruskan kepada CPU<br>
            - CPU meneruskan data digital tersebut ke unit DSP yang ada di sound card<br>
            - DSP kemudian mengekstrak data digital tersebut<br>
            - Aliran data digital yang terekstrak oleh DSP tersebut menjalani proses secara real-time oleh sirkuit chip DAC dan menciptakan sinyal analog yang bisa pengguna nikmati via headphone atau speaker.



        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>