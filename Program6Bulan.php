<?php

include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
   $user_id = $_COOKIE['user_id'];
} else {
   $user_id = '';
}

if (isset($_POST['submit'])) {

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg'];
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_contact = $conn->prepare("SELECT * FROM `contact` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_contact->execute([$name, $email, $number, $msg]);

   if ($select_contact->rowCount() > 0) {
      $message[] = 'Pesan Siap Untuk Dikirim !';
   } else {
      $insert_message = $conn->prepare("INSERT INTO `contact`(name, email, number, message) VALUES(?,?,?,?)");
      $insert_message->execute([$name, $email, $number, $msg]);
      $message[] = 'Pesan Telah Dikirim !';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LKP Adicita | Program 6 Bulan</title>
   <link href="../project/images/LogoPerusahaan.png" rel="icon" />
   <link href="../project/images/LogoPerusahaan.png" rel="apple-touch-icon" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <!-- contact section starts  -->

   <section class="contact">

      <div class="row">

         <div class="image">
            <img src="images/6B.jpg" alt="">
         </div>

         <form action="#" method="post">
            <h3>Program 6 Bulan</h3>
            <h1 class="ingfo">Program 6 bulan adalah program sampai bisa untuk pelatihan komputer selama 6 bulan yang masuk setiap hari dari pukul 08.00-16.00 WIB. Program ini termasuk program favorit setiap tahunnya.</h1><br>
            <h3>TATA TERTIB
               PESERTA DIDIK</h3>
            <h1 class="ingfo" style="text-align:start">Dalam rangka meningkatkan Sumber Daya Manusia melalui LKP ADICITA dalam pelaksanaan kegiatan sehari-hari perlu menerapkan tata tertib yang diatur sebagai berikut :<br>
               1. Hadir 15 menit sebelum pelatihan dimulai, bila terlambat lebih dari 30 menit makan peserta didik tidak diperkenankan mengikuti pelatihan pada hari tersebut, kecuali mendapatkan izin dari instruktur.<br>
               2. Peserta yang tidak dapat mengikuti pelatihan pada tanggal yang telah ditentukan, diwajibkan ke Sektretariat Pendaftaran paling lambat 1 hari sebelum tanggal pelaksanaan (Hari minggu dan Haris Besar tidak dihitung)<br>
               3. Peserta Pelatihan yang telah dinyatakan lulus akan mendapatkan sertifikat dan dapat diambil di Sekretariat Pendaftaran dengan menunjukan kwitansi pendaftaran pelatihan. LKP ADICITA tidak bertanggung jawab atas pengambilan sertifikat yang dilakukan lebih dari 6 bulan setelah dikeluarkan sertifikat.
               <br>
            </h1>


         </form>

      </div>



   </section>

   <!-- contact section ends -->











   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>