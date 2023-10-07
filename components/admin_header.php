<?php
if (isset($message)) {
   foreach ($message as $message) {
      echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">

      <img src="../images/LogoPerusahaan.png" width="45px" height="45px" alt=""><a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=course_db2" class="logo">LKP <span style="color:red">A</span>dicita</a>

      <form action="search_page.php" method="post" class="search-form">
         <input type="text" name="search" placeholder="Cari Disini ..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_btn"></button>

      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <?php
         $select_profile = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
         $select_profile->execute([$tutor_id]);
         if ($select_profile->rowCount() > 0) {
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
            <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
            <h3><?= $fetch_profile['name']; ?></h3>
            <span><?= $fetch_profile['profession']; ?></span>
            <a href="profile.php" class="btn">Lihat Profil</a>
            <div class="flex-btn">
               <a href="login.php" class="option-btn">Masuk</a>
               <a href="register.php" class="option-btn">Daftar</a>
            </div>
            <a href="../components/admin_logout.php" onclick="return confirm('Keluar Dari Halaman Ini ?');" class="delete-btn">Keluar</a>
         <?php
         } else {
         ?>
            <h3>Silahkan Masuk atau Daftar</h3>
            <div class="flex-btn">
               <a href="login.php" class="option-btn">Masuk</a>
               <a href="register.php" class="option-btn">Daftar</a>
            </div>
         <?php
         }
         ?>
      </div>

   </section>

</header>

<!-- header section ends -->

<!-- side bar section starts  -->

<div class="side-bar">

   <div class="close-side-bar">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <?php
      $select_profile = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
      $select_profile->execute([$tutor_id]);
      if ($select_profile->rowCount() > 0) {
         $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>
         <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
         <h3><?= $fetch_profile['name']; ?></h3>
         <span><?= $fetch_profile['profession']; ?></span>
         <a href="profile.php" class="btn">Lihat Profil</a>
      <?php
      } else {
      ?>
         <h3>Silahkan Masuk atau Daftar</h3>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">Masuk</a>
            <a href="register.php" class="option-btn">Daftar</a>
         </div>
      <?php
      }
      ?>
   </div>

   <nav class="navbar">
      <a href="dashboard.php"><i class="fas fa-home"></i><span>Halaman Utama</span></a>
      <a href="playlists.php"><i class="fa-solid fa-bars-staggered"></i><span>Playlists</span></a>
      <a href="contents.php"><i class="fa-solid fa-file-video"></i><span>Konten</span></a>
      <a href="comments.php"><i class="fas fa-comment"></i><span>Komentar</span></a>

      <a href="calender.php"><i class="fa-solid fa-calendar-days"></i><span>Kalender</span></a>
      <a href="member.php"><i class="fa-solid fa-user"></i><span>Peserta</span></a>

   </nav>

</div>

<!-- side bar section ends -->