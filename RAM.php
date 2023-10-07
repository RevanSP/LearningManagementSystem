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
    <title>LKP Adicita | RAM</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>RAM</b></h1>
        </center>

        <center>
            <img src="../project/imgblog/RAM.png" alt="" style="max-width:100%; border-radius:15px">
        </center>
        <br><br>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;">
            Istilah RAM sendiri sudah tidak asing ditelinga kita, namun sebenarnya apasih RAM itu?<br>

            RAM atau Random Access Memory merupakan hardware yang terdapat di dalam perangkat gadget seperti komputer, laptop, dan smartphone. RAM ini berfungsi sebagai tempat penyimpanan data sementara dan hanya bekerja saat perangkat tersebut hidup atau beroperasi. Hal ini dimaksudkan bahwa, saat perangkat elektronik yang dijalankan oleh suatu aplikasi program akan menggunakan RAM untuk menempatkan data sementara. Kapasitas RAM di dalam suatu perangkat sangat berpengaruh pada tingkat kecepatan proses data di perangkat tersebut. Sehingga kegiatan yang dilakukan pada perangkat seperti proses penyimpanan data, membuka data, dan menjalankan program akan semakin cepat sesuai besarnya RAM komputer tersebut.
            <br><br>
            Fungsi RAM
            Fungsi utama RAM adalah untuk mempercepat pemrosesan data pada perangkat. Tak heran jika semakin besar kapasitas RAM yang dipasang, maka semakin cepat juga perangkat tersebut bekerja. Tidak hanya itu berikut fungsi RAM.<br>

            - Dapat menyimpan data yang berasal dari piranti masuk sampai data dikirim ke ALU atau Arithmetic Logic Unit untuk diproses.<br>
            - Dapat digunakan untuk menyimpan data hasil pemrosesan ALU sebelum dikirim ke piranti keluaran.<br>
            - Dapat menampung program atau intruksi yang berasal dari piranti masuk atau dari piranti pengingat sekunder.<br>
            - Dapat mempercepat proses pengolahan data.<br><br>
            Jenis-Jenis RAM<br>
            1. Dynamic RAM (DRAM)<br>
            Dynamic RAM merupakan jenis-jenis RAM yang disegarkan atau refresh oleh Central Processing Unit (CPU) secara berkala agar data yang ada di dalamnya tidak hilang.
            Keuntungan dari Dynamic RAM ini adalah kesederhanaan structural karena hanya membutuhkan satu transistor dan kapasitor yang diperlukan per bit, dibandingkan dengan empat buah transistor S RAM.<br><br>

            2. SD RAM<br>
            Sychronous Dynamic Random Access Memor atau SDRAM merupakan RAM lanjutan dari DRAM. Namun jenis-jenis RAM ini telah mengalami sinkronisasi oleh clock sistem. Umumnya, SDRAM lebih cepat dibandingkan DRAM.

            Kecepatan RAM ini bisa mencapai 100 hingga 133 MHz. Ciri-ciri dari SD RAM sendiri adalah terdapat dua celah pada bagian kakinya dan diletakkan pada slot DIMM/SD RAM di motherhood, serta mampu menampung memori hingga 1 GB.<br><br>

            3. DDR RAM<br>
            Double Rate Random Access Memory atau DDR RAM merupakan jenis-jenis RAM dengan teknologi lanjutan dari SD RAM. RAM ini mampu menjalankan dua instruksi sekaligus dalam satuan waktu yang sama. Jenis RAM ini mempunyai kapasitas 184 pin dan mengonsumsi daya listrik yang lebih rendah.

            DDR RAM ini juga memiliki generasi terbaru, yaitu DDR2 dan DDR3 dan DDR4 merupakan pengembangan dari DDR RAM. Jenis RAM ini banyak digunakan pada laptop guna untuk menghemat daya listrik dan lebih maksimal dengan kecepatan tinggi. Untuk kapasitas memori jenis ini pun cukup besar hingga 16 GB per chipnya.<br><br>

            4. RD RAM<br>
            Rambus Dynamic Random Access Memory atau RDR RAM proses kerjanya lebih cepat dan umumnya lebih mahal dari SD RAM. Jenis SD RAM ini digunakan pada perangkat komputer yang menggunakan Pentium 4 dengan slot memori mencapai 184 pin.

            Jenis RAM ini menggunakan slot RIMM yang sama dengan SD RAM. Merupakan sebuah teknologi chip dinamis besutan Rambus, Inc ini mempunyai lisensi khusus untuk teknologi semi konduktor yang memproduksi chip.<br><br>

            5. S RAM<br>
            Static Random Access Memory atau S RAM ini merupakan jenis-jenis RAM yang dapat menyimpan data di dalamnya tanpa harus ada penyegaran atau refresh dari CPU. Jenis RAM ini memiliki proses kerja yang lebih cepat dari D RAM dan SD RAM.

            Memiliki desain cluster enam transistor yang berguna untuk menyimpan setiap bit informasi. Desain inilah yang membuat S RAM lebih mahal dan lebih cepat. Ya, secara fisik chip, biaya pemanufakturan chip pun kira-kira 30 kali lebih besar dari D RAM. Namun sayangnya, S RAM memiliki kekurangan yaitu biaya produksi yang malah. Hal ini membuat persediaannya hanya dalam kapasitas kecil dan dipergunakan untuk bagian yang benar-benar penting saja.<br><br>

            6. EDO RAM<br>
            Extended Data Out Random Access Memory atau EDO RAM merupakan jenis-jenis RAM yang digunakan pada perangkat dengan OS Pentium dan cocok dipasang pada komputer dengan bus mencapai 66 MHz. Jenis memori ini dapat melakukan proses penyimpanan dan mengambil data dalam waktu bersamaan.

            Jenis memori ini banyak digunakan untuk menggantikan primary memori yang ada pada komputer terdahulu yakni FPM RAM. Karena bisa menyimpan dan membaca secara bersamaan, maka kecepatan baca tulis pada EDO RAM bisa lebih cepat juga.<br><br>

            7. NV RAM<br>
            Non Volatile Random Access Memory atau NV RAM merupakan jenis memori komputer dengan akses acak yang biasanya digunakan untuk menyimpan konfigurasi yang dilakukan oleh firmware seperti EFI, BIOS, atau firmware-firmware lainnya pada perangkat embedded misalnya router.

            Pada umumnya NV RAM dirancang dengan manufaktur CMOS agar daya yang dibutuhkan juga kecil. Untuk menghidupkannya agar data yang disimpan tidak hilang, maka NV RAM menggunakan baterai Litium dengan CR-2032. Data yang tersimpan pada memori ini pun tidak akan hilang walaupun daya dimatikan.<br><br>

            Ciri – ciri RAM Yang Rusak<br>
            Adapun beberapa ciri-ciri RAM yang mengalami kerusakan antara lain yaitu:<br>

            - Kinerja pada program komputer semakin menurun.<br>
            - Komputer/laptop sering Restart sendiri.<br>
            - Tiba-tiba layar komputer Blue Screen.<br>
            - Berbunyi apabila ingin mengganti booting.<br>
            - Berbunyi apabila mengganti slot.<br>
            - Pada kipas berbunyi “krek krek krek”.<br>
            - Jika menyalakan HDD LED , tetap menyala tetapi tidak dapat booting, lalu tidak terdapat suara lain selain kipas.<br>

            RAM yang rusak parah (mungkin) akan dideteksi oleh CPU dengan bunyi BEEP ERROR CODE, tapi RAM yang rusaknya kira-kira 30 %, akan lolos diuji hardware saat booting tapi akan error bila diguanakan untuk melakukan penginstallan atau sering blue screen. Biasanya ketika kita hendak menginstall software sering gagal.<br><br>

            Struktur RAM<br>
            Adapun 4 struktur RAM diantaranya yakni:<br>

            - Input storage, digunakan untuk menampung input yang dimasukkan melalui alat input.<br>
            - Program storage, digunakan untuk menyimpan semua instruksi-instruksi program yang akan diakses.<br>
            - Working storage, digunakan untuk menyimpan data yang akan diolah dan hasil pengolahan.<br>
            - Output storage, digunakan untuk menampung hasil akhir dari pengolahan data yang akan ditampilkan ke alat output.<br><br>

            Komponen RAM<br>
            Tipe menjelaskan jenis (variasi) RAM berdasarkan teknologi yang digunakannya, seperti SDRAM, DDR atau DDR2. Hal ini kadang juga disebut sebagai “interface”. Contoh : Visipro DDR 256Mb PC266 berarti menggunakan teknologi DDR.<br><br>

            1. Capacity menerangkan seberapa besar kapasitas penyimpanan data RAM dalam satuan Gigabyte (GB) atau Megabyte (MB). Kapasitas merupakan faktor terpenting pada sebuah RAM karena fungsiny sebagai penyimpan data. Contoh : Visipro DDR2 512Mb PC4300 berarti memiliki kapasitas 512 Megabyte.<br><br>
            2. FSB (singkatan dari Front Side Bus), yaitu besar jalur data antara Processor dam RAM dalam satuan Megahertz. Satuan FSB Processor dan RAM harusnya memiliki angka yg sama agar data dapat ditransfer secara optimal [Lihat pada tabel Dual Channel RAM]. Contoh : Visipro DDR2 256MB PC3200 berarti memiliki FSB 400MHz (PC3200 dibagi 8 byte).<br><br>
            3. Fungsi, menerangkan fungsi dari RAM, seperti Unbuffered (digunakan pada Desktop), ECC, atau Registered (keduanya digunakan pada Server). [Lihat pada segmen Apa itu Unbuffered, ECC dan Registered ?] Unbuffered merupakan tipe RAM biasa yg digunakan oleh komputer secara umum, ECC (Error Correction Code) biasa dipakai pada komputer Workstation / Low End Server & ECC Registered umum dipakai pada Medium to High End Server. Contoh : Visipro DDR2 1GB PC4300 ECC Registered artinya memiliki fungsi ECC Registered pada modulnya.<br><br>
            4. Bandwith merupakan besarnya data yang dapat ditransfer atau diolah dalam waktu satu detik (satuan MB/s atau Megabyte per-secon). Umumnya saat ini RAM DDR/DDR2 mencantumkan bandwidth pada Module RAM. Bandwidth bisa didapat dari perkalian FSB x Arsitektur. Arsitektur RAM adalah 64-bit (8byte), sehingga jika DDR PC266 memiliki FSB 266 MHz sama dengan 266 MHz x 8 byte = 2100 MB/s. Ini artinya bahwa DDR PC266 (FSB) sama dengan DDR PC2100 (Bandwidth). Contoh : Visipro DDR2 512MB PC4300 artinya memiliki bandwidth 4300MB/s.
        </p>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>