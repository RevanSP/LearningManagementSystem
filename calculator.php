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
    <title>LKP Adicita | Kalkulator</title>
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
        <html lang="en" dir="ltr">

        <head>
            <meta charset="utf-8">
            <title>Simple Calculator using HTML, CSS and JavaScript</title>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');

                .calculator {
                    padding: 10px;
                    border-radius: 1em;
                    height: 380px;
                    width: 400px;
                    margin: auto;
                    background-color: #191b28;
                    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
                }

                .display-box {
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 10px;
                    background-color: #dcdbe1;
                    border: solid black 0.5px;
                    color: black;
                    border-radius: 5px;
                    width: 100%;
                    height: 65%;
                }

                #btn {
                    background-color: grey;
                }

                input[type=button] {
                    font-family: Arial, Helvetica, sans-serif;
                    background-color: red;
                    color: white;
                    border: solid black 0.5px;
                    width: 100%;
                    border-radius: 5px;
                    height: 70%;
                    outline: none;
                }

                input:active[type=button] {
                    background: #e5e5e5;
                    -webkit-box-shadow: inset 0px 0px 5px #c1c1c1;
                    -moz-box-shadow: inset 0px 0px 5px #c1c1c1;
                    box-shadow: inset 0px 0px 5px #c1c1c1;
                }
            </style>
        </head>

        <body>
            <center>
                <br>
                <h1 id="A.1" class="heading" style="font-size:20px;"><b>KALKULATOR ONLINE</b></h1>
            </center>

            <table class="calculator">
                <tr>
                    <td colspan="3"> <input class="display-box" type="text" id="result" disabled /> </td>

                    <!-- clearScreen() function clears all the values -->
                    <td> <input type="button" value="C" onclick="clearScreen()" id="btn" /> </td>
                </tr>
                <tr>
                    <!-- display() function displays the value of clicked button -->
                    <td> <input type="button" value="1" onclick="display('1')" /> </td>
                    <td> <input type="button" value="2" onclick="display('2')" /> </td>
                    <td> <input type="button" value="3" onclick="display('3')" /> </td>
                    <td> <input type="button" value="÷" onclick="display('/')" /> </td>
                </tr>
                <tr>
                    <td> <input type="button" value="4" onclick="display('4')" /> </td>
                    <td> <input type="button" value="5" onclick="display('5')" /> </td>
                    <td> <input type="button" value="6" onclick="display('6')" /> </td>
                    <td> <input type="button" value="-" onclick="display('-')" /> </td>
                </tr>
                <tr>
                    <td> <input type="button" value="7" onclick="display('7')" /> </td>
                    <td> <input type="button" value="8" onclick="display('8')" /> </td>
                    <td> <input type="button" value="9" onclick="display('9')" /> </td>
                    <td> <input type="button" value="+" onclick="display('+')" /> </td>
                </tr>
                <tr>
                    <td> <input type="button" value="." onclick="display('.')" /> </td>
                    <td> <input type="button" value="0" onclick="display('0')" /> </td>

                    <!-- calculate() function evaluates the mathematical expression -->
                    <td> <input type="button" value="=" onclick="calculate()" id="btn" /> </td>
                    <td> <input type="button" value="×" onclick="display('*')" /> </td>
                </tr>
            </table>

            <script>
                // This function clear all the values
                function clearScreen() {
                    document.getElementById("result").value = "";
                }

                // This function display values
                function display(value) {
                    document.getElementById("result").value += value;
                }

                // This function evaluates the expression and returns result
                function calculate() {
                    var p = document.getElementById("result").value;
                    var q = eval(p);
                    document.getElementById("result").value = q;
                }
            </script>

        </body>

        </html>


    </section>

    <!-- teachers section ends -->






























    <?php include 'components/footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>