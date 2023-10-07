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
      <img src="images/LogoPerusahaan.png" width="45px" height="45px" alt=""><a href="home.php" class="logo">LKP <span style="color:red">A</span>dicita</a>

      <form action="search_course.php" method="post" class="search-form">
         <input type="text" name="search_course" placeholder="Cari Kursus ... " required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_course_btn"></button>
      </form>


      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>

      </div>

      <div class="profile">
         <?php
         $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_profile->execute([$user_id]);
         if ($select_profile->rowCount() > 0) {
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
            <img src="uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
            <h3><?= $fetch_profile['name']; ?></h3>
            <span>Pelajar</span>
            <a href="profile.php" class="btn">Lihat Profile</a>
            <div class="flex-btn">
               <a href="login.php" class="option-btn">Masuk</a>
               <a href="register.php" class="option-btn">Daftar</a>
            </div>
            <a href="components/user_logout.php" onclick="return confirm('Keluar Dari Halaman Ini ?');" class="delete-btn">Keluar</a>
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
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      if ($select_profile->rowCount() > 0) {
         $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
      ?>
         <img src="uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
         <h3><?= $fetch_profile['name']; ?></h3>
         <span>Pelajar</span>
         <a href="profile.php" class="btn">Lihat Profil</a>
      <?php
      } else {
      ?>
         <h3>Silahkan Masuk atau Daftar</h3>
         <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">Masuk</a>
            <a href="register.php" class="option-btn">Daftar</a>
         </div>
      <?php
      }
      ?>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Halaman Utama</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Kursus</span></a>
      <a href="software.php"><i class="fa fa-cog" aria-hidden="true"></i><span>Perangkat Lunak</span></a>
      <a href="hardware.php"><i class="fa-solid fa-gear" aria-hidden="true"></i><span>Perangkat Keras</span></a>
      <a href="blog.php"><i class="fa-brands fa-blogger"></i><span>Blog</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Instruktur</span></a>
      <a href="calender.php"><i class="fa-solid fa-calendar-days"></i><span>Kalender</span></a>
      <a href="calculator.php"><i class="fa-solid fa-calculator"></i><span>Kalkulator</span></a>
      <a href="termsandcondition.php"><i class="fa-solid fa-circle-info"></i><span>Syarat Dan Ketentuan</span></a>
      <a href="privacypolicy.php"><i class="fa-solid fa-lock"></i><span>Kebijakan Privasi</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>Tentang Kami</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Kontak Kami</span></a>




   </nav>


</div>

</div>


<!-- side bar section ends -->