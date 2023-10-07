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
    <title>LKP Adicita | BLOG</title>
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
            <h1 id="A.1" class="heading" style="font-size:20px;"><b>Blog</b></h1>
        </center>

        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            1.<a href="../project/DIGITALMARKETING.php" class="paragraf"> APA ITU DIGITAL MARKETING ?</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            2.<a href="../project/DESAINGRAFIS.php" class="paragraf"> APA ITU DESAIN GRAFIS ?</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            3.<a href="../project/WEBDEVELOPER.php" class="paragraf"> APA ITU WEB DEVELOPER ?</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            4.<a href="../project/NETWORKADMINISTRATOR.php" class="paragraf"> APA ITU NETWORK ADMINISTRATOR ?</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            5.<a href="../project/OPERATORKOMPUTER.php" class="paragraf"> APA ITU OPERATOR KOMPUTER ?</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            6.<a href="../project/WEBPROGRAMMER.php" class="paragraf"> APA ITU WEB PROGRAMMER ?</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            7.<a href="../project/MOBILEPROGRAMMER.php" class="paragraf"> APA ITU MOBILE PROGRAMMER ?</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            8.<a href="../project/COMPUTERTECHNICIAN.php" class="paragraf"> APA ITU COMPUTER TECHNICIAN ?</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            9.<a href="../project/MOTHERBOARD.php" class="paragraf"> PENGERTIAN MOTHERBOARD</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            10.<a href="../project/POWERSUPPLY.php" class="paragraf"> PENGERTIAN POWER SUPPLY</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            11.<a href="../project/RAM.php" class="paragraf"> PENGERTIAN RAM</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            12.<a href="../project/VGA.php" class="paragraf"> PENGERTIAN VGA</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            13.<a href="../project/PROCESSOR.php" class="paragraf"> PENGERTIAN PROCESSOR</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            14.<a href="../project/SSDHDD.php" class="paragraf"> PENGERTIAN SSD DAN HDD</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            15.<a href="../project/GPU.php" class="paragraf"> PENGERTIAN GPU</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            16.<a href="../project/HEADSET.php" class="paragraf"> PENGERTIAN HEADSET</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            17.<a href="../project/MICROPHONE.php" class="paragraf"> PENGERTIAN MICROPHONE</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            18.<a href="../project/WEBCAM.php" class="paragraf"> PENGERTIAN WEBCAM</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            19.<a href="../project/SPEAKER.php" class="paragraf"> PENGERTIAN SPEAKER</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            20.<a href="../project/SCANNER.php" class="paragraf"> PENGERTIAN SCANNER</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            21.<a href="../project/PRINTER.php" class="paragraf"> PENGERTIAN PRINTER</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            22.<a href="../project/MOUSE.php" class="paragraf"> PENGERTIAN MOUSE</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            23.<a href="../project/KEYBOARD.php" class="paragraf"> PENGERTIAN KEYBOARD</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            24.<a href="../project/MONITOR.php" class="paragraf"> PENGERTIAN MONITOR</a>

        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            25.<a href="../project/SOUNDCARD.php" class="paragraf"> PENGERTIAN SOUND CARD</a>
        </p>

        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            26.<a href="../project/rakitpc.php" class="paragraf"> CARA MERAKIT PC</a>
        </p>
        <p class="paragraf" style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:20px;">
            27.<a href="../project/INSTALLWINDOWS.php" class="paragraf"> CARA INSTALL WINDOWS TERBARU</a>
        </p>

    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>