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
    <title>LKP Adicita | Kebijakan Privasi</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Kebijakan Privasi</b></h1>
        </center>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            1. Pengumpulan Informasi:<br>
            - Kami mengumpulkan informasi pribadi seperti nama, alamat email, dan informasi akademis dari pengguna saat mereka mendaftar dan menggunakan LMS kami.
            <br><br>
            2. Penggunaan Informasi:<br>
            - Informasi yang dikumpulkan digunakan untuk menyediakan layanan pembelajaran kami dan untuk mengelola akun pengguna.<br>
            - Kami menggunakan informasi untuk memberikan akses ke konten pembelajaran dan untuk memberikan pemberitahuan terkait layanan dan materi baru.<br>
            <br>
            3. Bagikan Informasi dengan Pihak Ketiga:<br>
            - Kami tidak akan membagikan informasi pribadi pengguna dengan pihak ketiga tanpa izin dari pengguna, kecuali diperlukan oleh hukum atau untuk tujuan kemitraan layanan pembelajaran.<br><br>

            4. Keamanan Data:<br>
            - Kami menggunakan langkah-langkah keamanan teknis dan fisik untuk melindungi informasi pribadi pengguna dari akses, penggunaan, atau pengungkapan yang tidak sah.<br>
            - Akses ke informasi pengguna dibatasi dan hanya diizinkan bagi staf dan tenaga kerja yang memerlukan informasi tersebut untuk menjalankan layanan LMS.<br><br>

            5. Cookies dan Teknologi Pelacakan:<br>
            - Kami menggunakan cookies dan teknologi pelacakan lainnya untuk meningkatkan pengalaman pengguna di LMS.<br>
            - Teknologi ini membantu kami mengumpulkan data statistik anonim untuk memahami bagaimana pengguna berinteraksi dengan platform kami.<br><br>

            6. Akses dan Pilihan Pengguna:<br>
            - Pengguna memiliki hak untuk mengakses, memperbarui, dan menghapus informasi pribadi mereka dalam akun LMS.<br>
            - Jika pengguna ingin menghapus akun mereka, mereka dapat mengajukan permohonan melalui fitur "Hapus Akun" dalam pengaturan akun mereka.<br><br>

            7. Perubahan Kebijakan:<br>
            - Jika ada perubahan pada kebijakan privasi kami, kami akan memberi tahu pengguna melalui email atau pemberitahuan di dashboard LMS.<br>
            - Pengguna akan diminta untuk menyetujui kebijakan yang diperbarui sebelum dapat melanjutkan menggunakan layanan kami.<br><br>




        </p>




    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>