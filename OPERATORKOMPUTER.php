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
    <title>LKP Adicita | OPERATOR KOMPUTER</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>OPERATOR KOMPUTER</b></h1>
        </center>

        <center>
            <img src="../project/imgblog/OperatorKomputer.png" alt="" style="max-width:100%; border-radius:15px">
        </center>
        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa Itu Operator Komputer<br>

            Operator komputer merupakan seseorang yang bertanggung jawab dan memiliki kewajiban dalam memantau, memeriksa, dan juga mengendalikan sistem komputer khususnya mainframe yang ada di dalam sebuah perusahaan maupun organisasi.

            Operator komputer wajib mempunyai keterampilan dan pengalaman yang akan sangat berguna dan membantu dalam segala kewajiban dan tanggung jawabnya. Hal yang utama ialah operator komputer harus dapat membaca dan menulis.

            Keterampilan dan pengalaman yang dimiliki komputer harus berupa keahlian utama yang sesuai dengan bidangnya. Selain harus pandai mengoperasikan komputer dengan baik dan benar sesuai dengan semestinya, operator komputer harus memiliki jiwa disiplin ilmu.

            Seseorang yang menjadi operator komputer harus memiliki keahlian terutama dalam bidang Teknologi Informasi dan pernah melakukan pelatihan pada bidang tersebut.

            Pada saat menjalankan tugasnya, operator komputer biasanya memiliki ruangan khusus yang tidak boleh dimasuki oleh siapapun. Mengingat kewajiban penuhnya mengenai console system dan juga aplikasi yang digunakan dalam produksi.<br><br>

            Tugas Operator Komputer<br>

            Operator komputer merupakan seorang operator yang memiliki tugas khusus terkait dengan semua peralatan yang terdapat di dalam sistem komputerisasi. Berikut beberapa tugas dari operator komputer :<br><br>

            - Bertanggung jawab atas segala permasalahan yang berkaitan dengan perangkat lunak maupun perangkat keras.<br>
            - Bertanggung jawab dalam pemantauan batch processing.<br>
            - Bertanggung jawab dalam meningkatkan dan juga mempertahankan kinerja suatu sistem serta ketersediaan untuk online.<br>
            - Bertanggung jawab dalam menjaga semua sistem yang ada beserta dengan dokumentasi aplikasi yang terkait.<br>
            - Bertanggung jawab dalam membantu personel atau anggota yang sedang mengalami permasalahan terkait komputer.<br><br>

            Tanggung Jawab Operator Komputer<br>

            Setiap pekerjaan pasti memiliki tanggung jawabnya masing – masing, begitu juga dengan operator komputer. Operator komputer bertanggung jawab atas beberapa hal, antara lain seperti pada berikut ini :<br><br>

            - Bertanggung jawab atas segala permasalahan yang berkaitan dengan perangkat lunak maupun perangkat keras.<br>
            - Bertanggung jawab dalam pemantauan batch processing.<br>
            - Bertanggung jawab dalam meningkatkan dan juga mempertahankan kinerja suatu sistem serta ketersediaan untuk online.<br>
            - Bertanggung jawab dalam menjaga semua sistem yang ada beserta dengan dokumentasi aplikasi yang terkait.<br>
            - Bertanggung jawab dalam membantu personel atau anggota yang sedang mengalami permasalahan terkait komputer.<br>
        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>