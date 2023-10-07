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
   <title>LKP Adicita | Kontak</title>
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
            <img src="images/contact-img.svg" alt="">
         </div>

         <form action="" method="post">
            <h3>Hubungi Kami</h3>
            <input type="text" placeholder="Masukan Nama Anda" required maxlength="100" name="name" class="box">
            <input type="email" placeholder="Masukan Email Anda" required maxlength="100" name="email" class="box">
            <input type="text" placeholder="Masukan Nomor Telepon Anda" required maxlength="69" name="number" class="box">
            <textarea name="msg" class="box" placeholder="Masukan Pesan Anda" required cols="30" rows="10" maxlength="1000"></textarea>
            <input type="submit" value="send message" class="inline-btn" name="submit">
         </form>

      </div>

      <div class="box-container">


         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Nomor Telepon</h3>
            <a href="https://api.whatsapp.com/send?phone=082116240118&text=Saya%20tertarik%20untuk%20mengikuti%20pelatihan%20di%20LPK%20Kanira.">082116240118</a>
            <a href="#">085172381503</a>
         </div>

         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Alamat Email</h3>
            <a href="mailto:pklsmkn7adicita@gmail.com">pklsmkn7adicita@gmail.com</a>
            <a href="mailto:yysn.cpp@gmail.com">yysn.cpp@gmail.com</a>
         </div>

         <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Alamat Kantor</h3>
            <a href="https://maps.app.goo.gl/nQom4gZ1AZJjQG3c8">Perum Tatar Pakutandang B5 RT 003 RW 014 Desa Pakutandang Kec. Ciparay Kab. Bandung</a>
         </div>







      </div>

   </section>

   <!-- contact section ends -->











   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>