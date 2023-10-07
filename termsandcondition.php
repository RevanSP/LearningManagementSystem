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
    <title>LKP Adicita | Syarat Dan Ketentuan</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Syarat Dan Ketentuan</b></h1>
        </center>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"><br>
            1. Peserta belajar dapat mengikuti kursus dan pelatihan dari mana saja kapan saja flexible.<br>
            2. Siapapun bisa menjadi instruktur untuk mengisi kursus dan pelatihan disini.<br>
            3. Lembaga pelatihan dapat bekerjasama untuk akses peserta melalu LMS ini.<br>
            4. Pengguna harus mendaftar dan membuat akun untuk mengakses LMS.<br>
            5. Pengguna bertanggung jawab atas keamanan dan kerahasiaan informasi login mereka.<br>
            6. LMS dapat menyediakan beberapa jenis akses pengguna berdasarkan peran, seperti siswa, instruktur, atau administrator.<br>


            7. Hak cipta dan kepemilikan konten tetap berada di tangan pemilik LMS atau pihak yang memberikan materi.<br>
            8. Pengguna tidak diizinkan untuk menyalin, mendistribusikan, atau menggunakan konten dari LMS tanpa izin tertulis.<br>


            9. LMS mungkin mengumpulkan data pribadi pengguna untuk keperluan administrasi dan pembelajaran.<br>
            10. LMS harus memiliki kebijakan privasi yang jelas tentang bagaimana data pribadi digunakan, disimpan, dan dilindungi.<br>


            11. Pengguna harus mematuhi etika dan aturan perilaku yang berlaku dalam LMS.<br>
            12. Tidak diizinkan untuk menggunakan LMS untuk tujuan ilegal atau melanggar hak cipta.<br>


            13. Jika LMS berbayar, pengguna harus membayar biaya berlangganan sesuai dengan ketentuan yang ditentukan.<br>


            14. LMS mungkin menyediakan dukungan teknis tertentu untuk membantu pengguna dengan masalah teknis atau pertanyaan.<br>


            15. Pengguna dapat membatalkan langganan atau menghapus akun mereka sesuai dengan prosedur yang ditentukan.<br>


            16. LMS berhak untuk mengubah syarat dan ketentuan tanpa pemberitahuan<br>
            17. Pengguna bertanggung jawab atas semua tindakan yang dilakukan menggunakan akun mereka.<br>
            18. Pengguna harus menjaga sikap yang sopan dan menghormati hak dan privasi pengguna lain di dalam LMS.

        </p>
        <br><br>



    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>