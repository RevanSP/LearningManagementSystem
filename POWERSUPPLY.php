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
    <title>LKP Adicita | POWER SUPPLY</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>POWER SUPPLY</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/PowerSupply.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Power supply hampir ada di setiap rumah dan bangunan komersial. Mengetahui cara kerja dan fungsi power supply akan sangat membantu memenuhi kebutuhan daya. Misalnya, menyalakan lampu di atas kapal, menyalakan komputer, dan lainnya. Setiap model memiliki fungsi power supply yang berbeda. Pahami apa saja fungsi power supply AC-DC, bagaimana cara kerjanya, serta apa saja jenis power supply.<br>
            <br>
            Apa Itu Power Supply?<br>
            Power supply adalah komponen yang memasok daya ke satu atau lebih beban listrik. Umumnya, power supply mengubah satu jenis daya listrik ke yang lain. Tetapi, juga mampu mengubah bentuk energi yang berbeda. Contohnya matahari, mekanik, atau kimia menjadi energi listrik. Power supply menyediakan komponen dengan daya listrik. Misalnya, power supply komputer mengubah arus AC menjadi DC. Umumnya, power supply untuk komputer ada di sisi belakang CPU dilengkapi satu kipas.<br><br>

            Bagaimana Cara Kerja Power Supply?<br>
            Power supply menghasilkan tegangan dan mengubahnya menjadi daya DC. Proses ini mengirim tegangan yang tidak teratur atau tidak stabil yang dihasilkan dari power supply. Tetapi, kalau kamu ingin menghasilkan daya yang bisa diatur, butuh perangkat untuk mengatur tegangan seperti trafo.<br><br>

            Fungsi Power Supply<br>

            Pada dasarnya, fungsi power supply bisa dijumpai di semua model dengan fitur tambahan tergantung jenis perangkat. Power supply dapat diatur agar bisa mengubah tegangan naik atau turun, mengubah daya menjadi arus searah atau mengatur daya untuk tegangan output yang lebih lancar.
            <br><br>
            Fungsi power supply yang banyak bisa memenuhi berbagai kebutuhan listrik. Diantaranya:<br>

            - Dapat menaikkan atau menurunkan tegangan, dengan trafo kita bisa mengubah tegangan menjadi AC/DC sesuai kebutuhan.<br>
            - Menyediakan beberapa metode pembagian tegangan untuk memenuhi kebutuhan peralatan listrik.<br>
            - Mengubah tegangan AC ke tegangan DC dengan penyearah setengah gelombang atau gelombang penuh.<br>
            - Memfilter atau menyaring tegangan DC non stabil ke tegangan stabil DC untuk kebutuhan peralatan.<br>
            - Mengatur output power supply secara proporsional dengan beban yang diterapkan.<br>
            <br>
            3 Komponen Power Supply<br>

            1. Transformator<br>
            Trafo mengubah tegangan input ke level tegangan output yang dibutuhkan. Perangkat ini dapat menaikkan atau menurunkan tegangan. Biasanya, tegangan DC yang dibutuhkan jauh lebih kecil daripada tegangan AC yang masuk dari sumber listrik utama.<br>

            2. Rectifier<br>
            Untuk mengubah daya yang masuk dari AC ke DC, power supply menggunakan penyearah, yaitu suatu perangkat yang dapat mengubah tegangan menjadi setengah gelombang, gelombang penuh, atau bridge.<br>

            3. Filter<br>
            Ketika fungsi power supply mengubah daya AC berubah menjadi DC, tegangannya masih belum stabil atau tidak teratur. Sekalipun, filter tak sepenuhnya mengubah gelombang menjadi nol, namun sangat membantu dalam stabilitas tegangan.<br><br>

            Jenis-jenis Power Supply<br>

            1. High voltage power supply<br>
            Jenis power supply yang pertama adalah high voltage power supply. Fungsi power supply bertegangan tinggi umumnya untuk peralatan industri maupun perkantoran. Terutama, peralatan yang membutuhkan tegangan hingga ratusan sampai ribuan volt. Contohnya seperti mesin x-ray, mesin pabrik, dan sebagainya.<br><br>

            2. AC power supply<br>
            Berikutnya, jenis yang kedua adalah AC power supply, yaitu power supply yang menghasilkan arus bolak balik atau alternating current. Fungsi power supply ini mengubah tegangan AC ke tegangan lain. Sebagai contoh AC power supply dipakai untuk menaikkan tegangan AC 110 volt ke 220 volt. Atau sebaliknya, menurunkan tegangan 220 volt ke 110 volt.<br><br>

            3. DC power supply<br>
            Jenis selanjutnya adalah DC power supply atau direct current yang menghasilkan arus listrik searah. Fungsi power supply DC, yaitu menyediakan tegangan arus listrik dengan polaritas tetap yakni positif dan negatif sebagai beban. <br>Terdiri dari dua jenis, yaitu:
            <br>
            Linear regulator. Sebagai pengubah tegangan DC yang berubah-ubah menjadi stabil dan menurunkan tegangan input DC.<br>
            AC to DC power supply. Sebagai peralatan dengan fungsi power supply berupa pengubah tegangan AC menjadi DC yang dilengkapi trafo (penurun tegangan), kapasitor (penyaring), serta dioda (penyearah arus listrik).<br><br>
            4. Programmable power supply<br>
            Jenis catu daya berikutnya adalah programmable power supply. Fungsi power supply ini menghasilkan tegangan arus listrik yang dioperasikan lewat remote control model digital maupun analog. Contohnya seperti GPIB atau RS232.<br><br>

            5. Switch-mode power supply (SMPS)<br>
            Untuk menyearahkan dan menyaring tegangan AC menjadi DC, kita membutuhkan fungsi switch-mode power supply. Dinamakan switch mode, sebab tegangan DC dapat dinyalakan atau dimatikan (switch on/off) pada sirkuit frekuensi tinggi. Kemudian nantinya menghasilkan output berupa tegangan AC untuk melewati trafo berfrekuensi tinggi.<br><br>

            6. Uninterruptible power supply (UPS)<br>
            UPS adalah jenis fungsi power supply lainnya yang umum ditemui dalam seperangkat komputer. Dengan UPS baterai dapat menyediakan arus listrik sebagai cadangan ketika listrik padam. Sehingga, pengguna komputer masih tetap bisa mengoperasikan komputernya selama beberapa saat ketika listrik mati, seperti menyimpan data atau tugas di komputernya agar tidak hilang
        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>