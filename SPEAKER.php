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
    <title>LKP Adicita | Speaker</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Speaker</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/Speaker.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa itu Speaker ?<br>
            Pengeras suara atau penyuara (bahasa Inggris: loud speaker, speaker) adalah transduser yang mengubah sinyal elektrik ke frekuensi suara melalui penggetaran komponen yang berbentuk membran untuk menggetarkan udara sehingga terjadilah gelombang suara yang terdengar sampai di gendang telinga dan dapat didengar sebagai suara.<br>
            Pada setiap sistem penghasil suara, pengeras suara juga menentukan kualitas suara di samping peralatan pengolah suara sebelumnya yang masih berbentuk listrik dalam rangkaian penguat.
            Sistem pada pengeras suara adalah suatu komponen yang mengubah kode sinyal elektronik terakhir menjadi gerakan mekanik. Dalam penyimpan suara pada kepingan CD, pita magnetik dari tape, dan kepingan DVD, suara dapat direproduksi oleh pengeras suara yang dapat mengeluarkan suara. Pengeras suara adalah sebuah teknologi yang juga memberikan dampak sangat besar terhadap banyak budaya di berbagai negara.
            <br><br>
            Sistem crossover pada penyuara elektronik<br>
            Sistem pemisah frekuensi sinyal suara pada audio ada dua macam, yaitu:<br>
            <br>
            - Pertama, crossover pasif dengan cara pemisah (filter) suara tanpa memerlukan sumber arus listrik, umumnya ditempatkan dalam kotak penyuara terbuat dari rangkaian L dan C yaitu lilitan kawat tembaga dan Elco.<br><br>
            - Kedua, crossover aktif berupa rangkaian elektronik memerlukan tegangan dan arus bentuk rangkaian pemisah R (resistor) dengan C (kondensator) dan semikonduktor bisa dengan IC atau Transistor. Dalam hal ini, terdapat beberapa sistem cross over, yaitu sistem dua jalur, tiga jalur, dan empat jalur.
            <br><br>
            1. Sistem dua jalur<br>
            Penggunaan penyuara elektronik yang paling sederhana adalah sistem 2 jalur atau sistem bi-amp, yang bisa memberi hasil yang baik. Keuntungannya adalah pengecilan erotan TIM (transient intermodulation) dan bisa menyetel bass dan treble secara mandiri. Bila menggunakan sub woofer untuk saluran bawah ini, harus mengubah dengan sakelar diubah di bawah 100 Hz.<br>

            Penyuara woofer, penguat daya (power amplifier) sebagai penggetar penyuara woofer dipilih sesuai kebutuhan. Daya penyuara woofer perlu dilebihkan dari daya power amplifier. Untuk ruang biasa, penguat daya yang cocok yaitu 20-30 Watt. Hendaknya dipilih power amplifier yang cocok untuk penggunaan nada rendah dan mempunyai faktor damping besar.<br>

            Penyuara tweeter bisa menggunakan tweeter atau dengan super tweeter, daya power amplifier dari tweeter ini lebih kecil dari woofer.

            Pada crossover aktif ini ada yang dilengkapi dengan sakelar untuk mengubah jalur frekuensi 100 Hz, jika digunakan subwoofer pada keluaran suara tengah dan treble dikombinasikan dengan crossover pasif. untuk saluran bawah frekuensi 100 Hz digunakan kotak yang terpisah.
            <br><br>
            2. Sistem tiga jalur<br>
            Sistem ini mirip dengan sistem 2 jalur, namun di sini nada tengah dipisahkan dengan band pass filter. Ada beberapa kemungkinan yang dapat diambil mengenai pemasangan penyuara:<br>

            - Pilihan pertama, SP1 woofer, SP2 mid range, SP3 tweeter (tiga power amplifier).<br>
            - Pilihan kedua, SP1 sub woofer, SP2 mid range, SP3 super tweeter, titik frekuensi peralihan 100 Hz ke bawah, 100 Hz sampai 5 Hz dan di atas 5 KHz (tiga power amplifier).<br>
            - Pilihan ketiga, SP1 sub woofer, SP2 speaker lengkap (woofer, mid range, tweeter dengan crossover pasif), SP3 super tweeter (dua power amplifier + satu crossover pasif tiga jalur).<br>
            Persyaratan power amplifier sama dengan sistem 2 jalur. Penyetelan suara dilakukan melalui pendengaran pada sistem yang sudah terpasang. Tiap jalur frekuensi pada crossover aktif disetel mula-mula dari sisi ground (suara volume terkecil) diputar perlahan sampai detail suara terdengar paling baik. Penyetelan optimal didapat dengan memutarnya mundur sedikit dari posisi mula-mula.<br><br>

            3. Sistem empat jalur<br>
            Pada sistem empat jalur crossover aktif dibagi menjadi titik frekuensi peralihan masing-masing adalah di bawah 100 Hz (super bass), 100 Hz sampai 500 Hz (suara bass tengah), 500 Hz sampai 5KHz (suara tengah) dan di atas 5KH suara tinggi (tweeter). Keluaran crossover aktif empat jalur masing-masing diperlukan power amplifier yang dayanya berbeda dari daya terkecil tweeter sampai daya terbesar super woofer, juga diperlukan penyuara yang diameternya berlainan pada masing-masing jalur frekuensi, diameter penyuara terkecil pada tweeter dan diameter terbesar pada super woofer.<br>

            Crossover aktif tiga jalur bisa juga dikombinasi untuk keperluan empat jalur jika spesifikasinya menunjang sistem empat jalur. Untuk menyetel supaya perincian suara mendekati suara natural setelah semua peralatan dan tataan kabel yang benar-benar ditata rapi, jika tataan kabel tidak rapi bisa timbul osilasi dan erotan yang bisa menurunkan kualitas suara.


        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>