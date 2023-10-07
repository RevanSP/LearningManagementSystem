<?php
include '../components/connect.php';
if (isset($_COOKIE['tutor_id'])) {
    $tutor_id = $_COOKIE['tutor_id'];
} else {
    $tutor_id = '';
    header('location:login.php');
}
if (isset($_POST['delete_member'])) {
    $delete_id = $_POST['users_id'];
    $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);
    $verify_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $verify_user->execute([$delete_id]);
    if ($verify_user->rowCount() > 0) {
        $delete_member = $conn->prepare("DELETE FROM `users` WHERE id = ?");
        $delete_member->execute([$delete_id]);
        $message[] = 'Anggota Berhasil Dihapus !';
    } else {
        $message[] = 'Anggota Telah Dihapus !';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKP Adicita | Anggota</title>
    <link href="../images/LogoPerusahaan.png" rel="icon" />
    <link href="../images/LogoPerusahaan.png" rel="apple-touch-icon" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/admin_style.css">
    <link rel="stylesheet" href="../css/table.css">
    <style>
        table.roundedCorners {
            border-radius: 10px;
            border-spacing: 0;
        }

        table.roundedCorners td,
        table.roundedCorners th {
            padding: 10px;
        }

        table.roundedCorners tr:last-child>td {
            border-bottom: none;
        }
    </style>
</head>

<body>
    <?php include '../components/admin_header.php'; ?>
    <div class="container">
        <section class="teachers">
            <h1 class="heading">Peserta</h1>
            <div class="box offer">
                <div class="table-3">
                    <table class="roundedCorners">
                        <tbody>
                            <tr>
                                <th>
                                    <center>NAMA</center>
                                </th>
                                <th>
                                    <center>EMAIL</center>
                                </th>
                                <th>
                                    <center>ACTION</center>
                                </th>
                            </tr>
                            <?php
                            $select_users = $conn->prepare("SELECT * FROM `users`");
                            $select_users->execute();
                            if ($select_users->rowCount() > 0) {
                                while ($fetch_users = $select_users->fetch(PDO::FETCH_ASSOC)) {
                                    $users_id = $fetch_users['id'];
                            ?>
                                    <tr>
                                        <td>
                                            <center>
                                                <div class=" font-weight-600"><?php echo $fetch_users['name']; ?>
                                                </div>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <div class="font-weight-600"><?php echo $fetch_users['email']; ?>
                                                    <center>
                                        </td>
                                        <td>
                                            <form action="" method="post" class="flex-btn">
                                                <input type="hidden" name="users_id" value="<?= $users_id; ?>">
                                                <input type="submit" value="delete" class="delete-btn" onclick="return confirm('Hapus Anggota Ini ?');" name="delete_member">
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo '<p class="empty">Tidak Ada Anggota Yang Daftar !</p> <br>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
        </section>
    </div>
    <?php include '../components/footer.php'; ?>
    <script src="../js/admin_script.js"></script>
</body>

</html>