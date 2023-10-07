<?php

include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
   $user_id = $_COOKIE['user_id'];
} else {
   $user_id = '';
   header('location:home.php');
}

if (isset($_POST['remove'])) {

   if ($user_id != '') {
      $content_id = $_POST['content_id'];
      $content_id = filter_var($content_id, FILTER_SANITIZE_STRING);

      $verify_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ? AND content_id = ?");
      $verify_likes->execute([$user_id, $content_id]);

      if ($verify_likes->rowCount() > 0) {
         $remove_likes = $conn->prepare("DELETE FROM `likes` WHERE user_id = ? AND content_id = ?");
         $remove_likes->execute([$user_id, $content_id]);
         $message[] = 'Hapus Dari Likes !';
      }
   } else {
      $message[] = 'Silahkan Login Terlebih Dahulu !';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LKP Adicita | Video Yang Disukai</title>
   <link href="../project/images/LogoPerusahaan.png" rel="icon" />
   <link href="../project/images/LogoPerusahaan.png" rel="apple-touch-icon" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <!-- courses section starts  -->

   <section class="liked-videos">

      <h1 class="heading">Video Yang Disukai </h1>

      <div class="box-container">

         <?php
         $select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
         $select_likes->execute([$user_id]);
         if ($select_likes->rowCount() > 0) {
            while ($fetch_likes = $select_likes->fetch(PDO::FETCH_ASSOC)) {

               $select_contents = $conn->prepare("SELECT * FROM `content` WHERE id = ? ORDER BY date DESC");
               $select_contents->execute([$fetch_likes['content_id']]);

               if ($select_contents->rowCount() > 0) {
                  while ($fetch_contents = $select_contents->fetch(PDO::FETCH_ASSOC)) {

                     $select_tutors = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
                     $select_tutors->execute([$fetch_contents['tutor_id']]);
                     $fetch_tutor = $select_tutors->fetch(PDO::FETCH_ASSOC);
         ?>
                     <div class="box">
                        <div class="tutor">
                           <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
                           <div>
                              <h3><?= $fetch_tutor['name']; ?></h3>
                              <span><?= $fetch_contents['date']; ?></span>
                           </div>
                        </div>
                        <img src="uploaded_files/<?= $fetch_contents['thumb']; ?>" alt="" class="thumb">
                        <h3 class="title"><?= $fetch_contents['title']; ?></h3>
                        <form action="" method="post" class="flex-btn">
                           <input type="hidden" name="content_id" value="<?= $fetch_contents['id']; ?>">
                           <a href="watch_video.php?get_id=<?= $fetch_contents['id']; ?>" class="inline-btn">Lihat Video</a>
                           <input type="submit" value="remove" class="inline-delete-btn" name="remove">
                        </form>
                     </div>
         <?php
                  }
               } else {
                  echo '<p class="emtpy">Konten Tidak Ditemukan !</p>';
               }
            }
         } else {
            echo '<p class="empty">Belum Ada Yang Menambahkan Likes !</p>';
         }
         ?>

      </div>
      <br>
      <center><button onclick="topFunction()" id="myBtn" title="Go to top" class="inline-option-btn"><i class="fa-solid fa-arrow-up">
               <span>KE ATAS</span>
            </i></button></center>
   </section>
   <script>
      // Get the button
      let mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
         scrollFunction()
      };

      function scrollFunction() {
         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
         } else {
            mybutton.style.display = "none";
         }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
      }
   </script>









   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>