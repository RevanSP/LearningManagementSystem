<?php

include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
   $user_id = $_COOKIE['user_id'];
} else {
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LKP Adicita | Halaman Utama</title>
   <link href="../project/images/LogoPerusahaan.png" rel="icon" />
   <link href="../project/images/LogoPerusahaan.png" rel="apple-touch-icon" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <!-- quick select section starts  -->

   <section class="quick-select">

      <h1 class="heading">Opsi Cepat</h1>

      <div class="box-container">

         <?php
         if ($user_id != '') {
         ?>
            <div class="box">
               <h3 class="title">Likes dan Komentar</h3>
               <p>Jumlah Likes : <span><?= $total_likes; ?></span></p>
               <a href="likes.php" class="inline-btn">Lihat Likes</a>
               <p>Jumlah Komentar : <span><?= $total_comments; ?></span></p>
               <a href="comments.php" class="inline-btn">Lihat Komentar</a>
               <p>Playlist Yang Disimpan : <span><?= $total_bookmarked; ?></span></p>
               <a href="bookmark.php" class="inline-btn">Lihat Bookmark</a>
            </div>
         <?php
         } else {
         ?>
            <div class="box" style="text-align: center;">
               <h3 class="title">Silahkan Login atau Daftar</h3>
               <div class="flex-btn" style="padding-top: .5rem;">
                  <a href="login.php" class="option-btn">Masuk</a>
                  <a href="register.php" class="option-btn">Daftar</a>
               </div>
            </div>
         <?php
         }
         ?>
         <center>
            <div class="box">
               <h3 class="title">PROGRAM LKP ADICITA</h3>
               <div class="flex">
                  <a href="../project/Program1Bulan.php"><i class="fa fa-calendar"></i><span>PROGRAM 1 BULAN</span></a>
                  <a href="../project/Program3Bulan.php"><i class="fa fa-calendar"></i><span>PROGRAM 3 BULAN</span></a>
                  <a href="../project/Program6Bulan.php"><i class="fa fa-calendar"></i><span>PROGRAM 6 BULAN</span></a>
               </div>
            </div>
         </center>
         <div class="box">
            <h3 class="title">KEJURUAN DI LKP ADICITA</h3>
            <div class="flex">
               <a href="playlist.php?get_id=EpIklyLyYCVKY5YFvznY"><i class="fa fa-desktop"></i><span>OPERATOR KOMPUTER MUDA</span></a>
               <a href="playlist.php?get_id=ryhoFNMvuSMCLqJ7ooAd"><i class="fa fa-desktop"></i><span>OPERATOR KOMPUTER MADYA</span></a>
               <a href="playlist.php?get_id=xeW9UVBAijhEBkLFT0Xa"><i class="fa fa-pencil"></i><span>DESIGN GRAFIS MUDA</span></a>
               <a href="playlist.php?get_id=L6ptDhvK5O7V7dum9tjB"><i class="fa fa-pencil"></i><span>DESIGN GRAFIS MADYA</span></a>
               <a href="playlist.php?get_id=c9MUcWCmXMpLvtAY2GXY"><i class="fa fa-shopping-cart"></i><span>DIGITAL MARKETING</span></a>
               <a href="playlist.php?get_id=ZPCHKdG9E4FMfF6Iv0HA"><i class="fa fa-code"></i><span>JUNIOR WEB DEVELOPER</span></a>
               <a href="playlist.php?get_id=YvDcUm5Mu8ABDl5OPKIt"><i class="fa fa-code"></i><span>JUNIOR WEB PROGRAMMER</span></a>
               <a href="playlist.php?get_id=pXp4y0Q7AMtav2AAbTBz"><i class="fa fa-code"></i><span>JUNIOR MOBILE PROGRAMMER</span></a>
               <a href="playlist.php?get_id=02hBhPqMwpnbUBMd5F8z"><i class="fa fa-desktop"></i><span>JUNIOR COMPUTER TECHNICIAN</span></a>
            </div>
         </div>

         <div class="box tutor">
            <h3 class="title">Menjadi Pengajar</h3>
            <p>Jadilah pengajar dan berikan perubahan positif dalam dunia pendidikan !</p>
            <a href="admin/register.php" class="inline-btn">Mulai Sekarang</a>
         </div>
      </div>
   </section>

   <!-- quick select section ends -->

   <!-- courses section starts  -->

   <section class="courses">

      <h1 class="heading">Kursus Terbaru</h1>

      <div class="box-container">

         <?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
         $select_courses->execute(['active']);
         if ($select_courses->rowCount() > 0) {
            while ($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)) {
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
         ?>
               <div class="box">
                  <div class="tutor">
                     <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
                     <div>
                        <h3><?= $fetch_tutor['name']; ?></h3>
                        <span><?= $fetch_course['date']; ?></span>
                     </div>
                  </div>
                  <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
                  <h3 class="title"><?= $fetch_course['title']; ?></h3>
                  <a href="playlist.php?get_id=<?= $course_id; ?>" class="inline-btn">Lihat Playlist</a>
               </div>
         <?php
            }
         } else {
            echo '<p class="empty">Belum Ada Kursus Yang Ditambahkan !</p>';
         }
         ?>

      </div>

      <div class="more-btn">
         <a href="courses.php" class="inline-option-btn">Lihat Lebih Lanjut</a>
      </div>
      <br>

   </section>

   <!-- courses section ends -->












   <!-- footer section starts  -->
   <?php include 'components/footer.php'; ?>
   <!-- footer section ends -->

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>