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
    <title>LKP Adicita | MIC</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Microphone</b></h1>
        </center>
        <center>
            <img src="../project/imgblog/MIC.png" alt="" style="max-width:100%; border-radius:15px">
        </center>

        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Apa itu Microphone ?<br>
            Mikrofon atau pelantang (bahasa Inggris: microphone) adalah suatu jenis transduser yang mengubah energi-energi akustik (gelombang suara) menjadi sinyal listrik. Mikrofon merupakan salah satu alat untuk membantu komunikasi manusia. Mikrofon dipakai pada banyak alat seperti telepon, alat perekam, alat bantu dengar, dan pengudaraan radio serta televisi.<br><br>

            Istilah mikrofon berasal dari bahasa Yunani mikros yang berarti kecil dan fon yang berarti suara atau bunyi. Istilah ini awalnya mengacu kepada alat bantu dengar untuk suara berintensitas rendah. Penemuan mikrofon sangat penting pada masa awal perkembangan telepon. Pada awal penemuannya, mikrofon digunakan pada telepon, kemudian seiring berkembangnya waktu, mikrofon digunakan dalam pemancar radio hingga ke berbagai penggunaan lainnya. Penemuan mikrofon praktis sangat penting pada masa awal perkembangan telepon. Beberapa penemu telah membuat mikrofon primitif sebelum Alexander Graham Bell.
            <br><br>
            Pada tahun 1827, Sir Charles Wheatstone telah mengembangkan mikrofon. Ia merupakan orang pertama yang membuat “mikrofon frasa". Selanjutnya, pada tahun 1876, Emile Berliner menciptakan mikrofon pertama yang digunakan sebagai pemancar suara telepon. Mikrofon praktis komersial pertama adalah mikrofon karbon yang ditemukan pada bulan Oktober 1876 oleh Thomas Alfa Edison. Pada tahun 1878, David Edward Hughes juga mengambil andil dalam perkembangan mikrofon karbon. Mikrofon karbon tersebut mengalami perkembangan hingga tahun 1920-an.
            <br><br>
            James West dan Gerhard Sessler juga memainkan peranan yang besar dalam perkembangan mikrofon. Mereka mempatenkan temuan mereka yaitu mikrofon elektrik pada tahun 1964. Pada waktu itu, mikrofon tersebut menawarkan sesuatu yang tidak dimiliki oleh mikrofon sebelumnya, yaitu harga rendah, sehingga dapat dijangkau oleh seluruh konsumen. Bagian lain dalam sejarah perkembangan mikrofon ialah revolusionalisasi mikrofon dalam industri di mana memungkinkan masyarakat umum untuk mendapatkannya. Hampir satu juta mikrofon diproduksi tiap tahunnya. Lalu pada tahun 1970-an, mikrofon dinamik dan mikrofon kondenser mulai dikembangkan. Mikrofon ini memiliki tingkat kesensitifan yang tinggi. Oleh karena itu, hingga saat ini mikrofon tersebut digunakan dalam dunia penyiaran.
            Kegunaan
            Mikrofon digunakan pada beberapa alat seperti telepon, alat perekam, alat bantu dengar, pengudaraan radio serta televisi, dan sebagainya.
            <br><br>
            Pada dasarnya mikrofon berguna untuk mengubah suara menjadi getaran listrik sinyal Analog untuk selanjutnya diperkuat dan diolah sesuai dengan kebutuhan, pengolahan berikutnya dengan Power Amplifier dari suara yang berintensitas rendah menjadi lebih keras terakhir diumpan ke-Speaker.

            Pemilihan mikrofon harus dilakukan dengan lebih hati-hati. Hal ini dilakukan untuk mencegah berkurangnya kemampuan mikrofon dari performa yang optimal.

            Agar lebih efektif, mikrofon yang digunakan haruslah sesuai kebutuhan dan seimbang antara sumber suara yang ingin dicuplik, misalnya suara manusia, alat musik, suara kendaraan, atau yang lainnya dengan sistem tata suara yang digunakan seperti sound sistem untuk live music, alat perekaman, arena balap GP motor, dan sebagainya.<br>
            <br><br>

            Jenis - Jenis<br>
            1. Mikrofon karbon<br>
            Mikrofon karbon adalah mikrofon yang terbuat dari sebuah diagram logam yang terletak pada salah satu ujung kotak logam yang berbentuk silinder. Cara kerja mikrofon ini berdasarkan resistansi variabel di mana terdapat sebuah penghubung yang menghubungkan diafragma dengan butir-butir karbon di dalam mikrofon. Perubahan getaran suara yang ada akan menyebabkan nilai resistansi juga berubah sehingga mengakibatkan perubahan pada sinyal output mikrofon.<br><br>

            2. Mikrofon reluktansi variabel<br>
            Mikrofon Reluktansi Variabel adalah mikrofon yang terbuat dari sebuah diafragma berbahan magnetik. Cara kerjanya berdasarkan gerakan diafragma magnetik tersebut. Jika tekanan udara dalam diafragma meningkat karena adanya getaran suara, maka celah udara dalam rangkaian magnetik tersebut akan berkurang, akibatnya reluktansi semakin berkurang dan menimbulkan perubahan-perubahan magnetik yang terpusat di dalam struktur magnetik. Perubahan-perubahan tersebut menyebabkan perubahan sinyal yang keluar dari mikrofon.<br><br>

            3. Mikrofon kumparan yang bergerak<br>
            Mikrofon Kumparan yang Bergerak adalah mikrofon yang terbuat dari kumparan induksi yang digulungkan pada silinder yang berbahan non magnetik dan dilekatkan pada diafragma, kemudian dipasang ke dalam celah udara suatu magnet permanen. Sedangkan kawat-kawat penghubung listrik direkatkan pada diafragma yang terbuat dari bahan non logam. Jika diafragma bergerak karena adanya gelombang suara yang ditangkap, maka kumparan akan bergerak maju mundur di dalam medan magnet, sehingga muncullah perubahan magnetik yang melewati kumparan dan menghasilkan sinyal listrik.<br><br>

            4. Mikrofon kapasitor<br>
            Mikrofon Kapasitor adalah mikrofon yang terbuat dari sebuah diafragma berbahan logam, digantungkan pada sebuah pelat logam statis dengan jarak sangat dekat, sehingga keduanya terisolasi dan menyerupai bentuk sebuah kapasitor. Adanya getaran suara mengakibatkan diafragma bergerak-gerak. Diafragma yang bergerak menimbulkan adanya perubahan jarak pemisah antara diafragma dengan pelat statis sehingga mengakibatkan berubahnya nilai kapasitansi. Mikrofon kapasitor ini memerlukan tegangan DC konstan yang dihubungkan ke sebuah diafragma dan pelat statis melewati sebuah resistor beban, sehingga tegangan mikrofon dapat berubah-ubah seiring perubahan tekanan udara yang terjadi akibat getaran suara.<br><br>

            5. Mikrofon elektret<br>
            Mikrofon Elektret adalah jenis khusus mikrofon kapasitor yang telah memiliki sumber muatan tersendiri sehingga tidak membutuhkan pencatu daya dari luar. Sumber muatan berasal dari suatu alat penyimpan muatan yang terbuat dari bahan teflon. Bahan teflon tersebut diproses sedemikian rupa sehingga mampu menangkap muatan-muatan tetap dalam jumlah besar, kemudian mempertahankannya untuk waktu yang tak terbatas. Lapisan tipis teflon dilekatkan pada pelat logam statis dan mengandung muatan-muatan negatif dalam jumlah besar. Muatan-muatan tersebut terperangkap pada satu sisi yang kemudian menimbulkan medan listrik pada celah yang berbentuk kapasitor. Getaran suara yang ada mengubah tekanan udara di dalamnya sehingga membuat jarak antara diafragma dan pelat logam statis juga berubah-ubah. Akibatnya, nilai kapasitansi berubah dan tegangan terminal mikrofon pun juga berubah.<br><br>

            6. Mikrofon piezoelektris<br>
            Mikrofon Piezoelektris adalah mikrofon yang terbuat dari bahan kristal aktif. Bahan ini dapat menimbulkan tegangan sendiri saat menangkap adanya getaran dari luar jadi tidak membutuhkan pencatu daya. Cara kerjanya ialah kristal dipotong membentuk suatu irisan pada bidang-bidang tertentu, kemudian dilekatkan pada elektrode atau lempengan sehingga akan menunjukkan sifat-sifat piezoelektris. Kristal akan berubah bentuk bila mendapatkan suatu tekanan sehingga akan terjadi perpindahan muatan sesaat di dalam susunan kristal tersebut. Perpindahan muatan mengakibatkan adanya perbedaan potensial di antara kedua pelat-pelat lempengan. Uniknya, kristal tersebut dapat langsung menerima getaran suara tanpa harus dibentuk menjadi sebuah diafragma, sehingga respon frekuensi yang diterima akan lebih baik dari mikrofon lainnya walaupun tingkat keluarannya jauh lebih rendah, yaitu kurang dari 1 mV.<br><br>

            7. Mikrofon pita<br>
            Mikrofon Pita ialah mikrofon yang terbuat dari pita yang bersifat sangat sensitif dan teliti. Cara kerja mikrofon ini berpedoman pada suatu pusat pita yaitu kertas perak metal tipis yang digantungkan pada suatu medan magnet. Getaran suara yang ditangkap menimbulkan terjadinya pergerakan pita. Gerakan tersebut mengakibatkan berubahnya medan magnet yang kemudian menghasilkan sinyal listrik. Oleh karena mikrofon pita pada awal kemunculannya merupakan mikrofon yang dapat menampilkan suara paling alami, maka industri rekaman dan siaran segera memanfaatkan mikrofon ini pada awal tahun 1930-an. Mikrofon ini tidak memerlukan pencatu daya atau baterai dalam pengoperasiannya. Pertumbuhan besar pada jenis mikrofon ini terlihat dari besarnya minat masyarakat pada rumah perekaman yang menyediakan mikrofon pita dengan kualitas tinggi seperti mikrofon buatan perusahaan Royer AEA, yang kemudian menjadi standar bersama untuk studio perusahaan-perusahaan Tiongkok seperti Sontronics, SE dan Golden Age.


        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>