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
   <title>LKP Adicita | Tentang Kami</title>
   <link href="../project/images/LogoPerusahaan.png" rel="icon" />
   <link href="../project/images/LogoPerusahaan.png" rel="apple-touch-icon" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <!-- about section starts  -->

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/about-img.svg" alt="">
         </div>

         <div class="content">
            <h3>LKP ADICITA</h3>
            <p>LKP ADICITA merupakan satuan dari Pendidikan Non Formal.<br>Bertujuan untuk pelengkap pendidikan formal juga sebagai perusahan yang bergerak di bidang jasa pendidikan. Tujuan memilih LKP ADICITA sebagai tempat kursus adalah untuk menunjang pelajaran atau materi kuliah yang belum sepenuhnya diperoleh dari sekolah atau lembaga formal lainnya.</p>
            <a href="courses.php" class="inline-btn">Kursus Kami</a>
         </div>

      </div>

    
   </section>

   <!-- about section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="heading">Visi Misi & Motto</h1>

      <div class="box-container">

         <div class="box offer">
            <h3>VISI</h3>
            <br>
            <p>Menjadi Lembaga yang berkualitas untuk mengembangkan diri, menciptakan Sumber Daya Manusia yang kompeten, dan wirausahawan yang sukses.</p>
         </div>


         <div class="box offer">
            <h3>MOTTO</h3>
            <br>
            <p>Pikiran yang cerdas adalah cerminan akhlak yang mulia.<br><br></p>
         </div>
      </div>
      <br>
      <div class="box-container">



         <div class="box">
            <h3>MISI</h3>
            <p> 1. Menciptakan Sumber Daya Manusia yang kompeten dibidangnya baik instruktur,

               maupun media pembelajaran yang sesuai dengan tuntutan jaman.<br> 2. Menjadi Lembaga berskala nasional, mengajarkan teknologi terapan, aplikasinya

               yang bermanfaat langsung bagi masyarakat.
               <br>
               3. Menjadi Lembaga yang mampu membangun manusia kerja cerdas, kerja keras, kerja tuntas, kerja ikhlas.
               <br>
               4. Menjadi Lembaga yang melayani live time learning dan pusat informasi teknologi
               bagi masyarakat.
               <br>
               5. Menyelenggarakan pendidikan dan pengabdian kepada masyarakat yang

               mendukung pembangunan dan relevan dengan kebutuhan masyarakat secara efektif dan efisien.
               <br>
               6. Membangun Sumber Daya Manusia yang beretika, profesional, dan mengembangkan suasana dan budaya pendidikan yang kondusif serta dinamis.
               <br>
               7. Membina Sumber Daya Manusia untuk berkembang menjadi tenaga profesional dibidang teknologi informasi dan mengurangi angka pengangguran.
               <br>
               8. Memperbaiki mutu sarana dan prasarana serta manajemen secara berkelanjutan.<br>
               9. Membentuk kepribadian sumber daya manusia yang memiliki jiwa dan kemampuan berwirausaha.
            </p>



         </div>

   </section>

   <!-- reviews section ends -->










   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>
