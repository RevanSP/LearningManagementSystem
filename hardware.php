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
    <title>LKP Adicita | Perangkat Keras</title>
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

        <h1 class="heading">Macam - Macam Hardware</h1>
        <div class="box-container">
            <div class="box offer">
                <h3>CPU</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/CPU.png" width="50px" height="50px"></img>
                </center>

            </div>

            <div class="box offer">
                <h3>Motherboard</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/Motherboard.png" width="50px" height="50px"></img>
                </center>

            </div>

            <div class="box offer">
                <h3>RAM</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/RAM.png" width="50px" height="50px"></img>
                </center>

            </div>

            <div class="box offer">
                <h3>HDD</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/HDD.png" width="50px" height="50px"></img>
                </center>

            </div>

            <div class="box offer">
                <h3>SSD</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/SSD.png" width="50px" height="50px"></img>
                </center>

            </div>

            <div class="box offer">
                <h3>GPU</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/GPU.png" width="50px" height="50px"></img>
                </center>

            </div>



            <div class="box offer">
                <h3>PSU</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/PSU.png" width="50px" height="50px"></img>
                </center>

            </div>



            <div class="box offer">
                <h3>Sound Card</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/SoundCard.png" width="50px" height="50px"></img>
                </center>

            </div>



            <div class="box offer">
                <h3>Monitor</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/Monitor.png" width="50px" height="50px"></img>
                </center>

            </div>



            <div class="box offer">
                <h3>Keyboard</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/Keyboard.png" width="50px" height="50px"></img>
                </center>

            </div>
            <div class="box offer">
                <h3>Mouse</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/Mouse.png" width="50px" height="50px"></img>
                </center>

            </div>
            <div class="box offer">
                <h3>Printer</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/Printer.png" width="50px" height="50px"></img>
                </center>

            </div>
            <div class="box offer">
                <h3>Scanner</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/Scanner.png" width="50px" height="50px"></img>
                </center>

            </div>
            <div class="box offer">
                <h3>Speaker</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/Speaker.png" width="50px" height="50px"></img>
                </center>

            </div>
            <div class="box offer">
                <h3>Webcam</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/Webcam.png" width="50px" height="50px"></img>
                </center>

            </div>

            <div class="box offer">
                <h3>Microphone</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/Mic.png" width="50px" height="50px"></img>
                </center>

            </div>


            <div class="box offer">
                <h3>Headset</h3>
                <br>
                <center>
                    <img src="../project/images/Hardware/Headset.png" width="50px" height="50px"></img>
                </center>

            </div>

        </div>

        <br>
        <br>
        <br>

        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - CPU adalah Unit pemrosesan utama dalam komputer yang menjalankan instruksi program dan mengkoordinasi operasi sistem.
        </p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - Motherboard adalah Papan sirkuit yang menghubungkan berbagai komponen dalam komputer, seperti CPU, RAM, dan kartu ekspansi.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - RAM adalah Memori semu yang digunakan untuk menyimpan data dan program yang sedang dijalankan oleh CPU.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - HDD adalah Media penyimpanan permanen yang digunakan untuk menyimpan data dalam komputer.</p>



        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - SSD adalah Media penyimpanan non-mekanis yang lebih cepat daripada HDD dan digunakan untuk penyimpanan data yang lebih responsif.
        </p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - GPU adalah Unit pemrosesan khusus yang digunakan untuk memproses grafik dan tugas komputasi paralel lainnya.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - PSU adalah Sumber daya listrik yang menyediakan daya untuk semua komponen dalam komputer.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - Sound Card adalah Kartu ekspansi yang memungkinkan komputer mengeluarkan suara dan mendukung fitur audio.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - Monitor adalah Layar output yang menampilkan informasi dan gambar dari komputer.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - Keyboard adalah Perangkat input yang memungkinkan pengguna memasukkan teks dan perintah ke komputer.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - Mouse adalah Perangkat input yang digunakan untuk mengendalikan kursor pada layar.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - Printer adalah Perangkat output yang digunakan untuk mencetak dokumen atau gambar dari komputer.</p>

        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - Scanner adalah Perangkat input yang dapat memindai dokumen atau gambar menjadi format digital.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - Speaker adalah Perangkat output yang menghasilkan suara dari komputer.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - Web Cam adalah Kamera kecil yang terhubung ke komputer untuk mengambil gambar atau video.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - Microphone adalah Perangkat input untuk merekam suara dan audio.</p>


        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:15px;"> - Headset adalah Perangkat yang menggabungkan headphone dan microphone, sering digunakan untuk komunikasi suara.</p>









        <br><br>
    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>