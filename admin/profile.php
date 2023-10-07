<?php
include '../components/connect.php';
if (isset($_COOKIE['tutor_id'])) {
   $tutor_id = $_COOKIE['tutor_id'];
} else {
   $tutor_id = '';
   header('location:login.php');
}
$select_playlists = $conn->prepare("SELECT * FROM `playlist` WHERE tutor_id = ?");
$select_playlists->execute([$tutor_id]);
$total_playlists = $select_playlists->rowCount();
$select_contents = $conn->prepare("SELECT * FROM `content` WHERE tutor_id = ?");
$select_contents->execute([$tutor_id]);
$total_contents = $select_contents->rowCount();
$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE tutor_id = ?");
$select_likes->execute([$tutor_id]);
$total_likes = $select_likes->rowCount();
$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE tutor_id = ?");
$select_comments->execute([$tutor_id]);
$total_comments = $select_comments->rowCount();
if (isset($_POST['delete_tutor'])) {
   $delete_id = $_POST['tutor_id'];
   $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);
   $verify_user = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
   $verify_user->execute([$delete_id]);
   if ($verify_user->rowCount() > 0) {
      $delete_tutor = $conn->prepare("DELETE FROM `tutors` WHERE id = ?");
      $delete_tutor->execute([$delete_id]);
      $message[] = 'Akun Berhasil Dihapus !';
      header('location:login.php');
   } else {
      $message[] = 'Akun Telah Dihapus !';
      header('location:login.php');
   }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LKP Adicita | Profil</title>
   <link href="../images/LogoPerusahaan.png" rel="icon" />
   <link href="../images/LogoPerusahaan.png" rel="apple-touch-icon" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>
   <?php include '../components/admin_header.php'; ?>
   <section class="tutor-profile" style="min-height: calc(100vh - 19rem);">
      <h1 class="heading">Detail Profil</h1>
      <div class="details">
         <div class="tutor">
            <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
            <h3><?= $fetch_profile['name']; ?></h3>
            <span><?= $fetch_profile['profession']; ?></span>
            <a href="update.php" class="inline-btn">Perbarui Profil</a>





         </div>
         <div class="flex">
            <div class="box">
               <span><?= $total_playlists; ?></span>
               <p>Jumlah Playlists</p>
               <a href="playlists.php" class="btn">Lihat Playlist</a>
            </div>
            <div class="box">
               <span><?= $total_contents; ?></span>
               <p>Jumlah Videos</p>
               <a href="contents.php" class="btn">Lihat Konten</a>
            </div>
            <div class="box">
               <span><?= $total_likes; ?></span>
               <p>Jumlah Likes</p>
               <a href="contents.php" class="btn">Lihat Jumlah Likes</a>
            </div>
            <div class="box">
               <span><?= $total_comments; ?></span>
               <p>Jumlah Komentar</p>
               <a href="comments.php" class="btn">Lihat Komentar</a>
            </div>




         </div>
         <form action="" method="post" class="flex-btn">
            <input type="hidden" name="tutor_id" value="<?= $tutor_id; ?>">
            <input type="submit" value="delete" class="delete-btn" onclick="return confirm('Hapus Akun Ini ?');" name="delete_tutor">
         </form>
      </div>


   </section>
   <?php include '../components/footer.php'; ?>
   <script src="../js/admin_script.js"></script>
</body>

</html>