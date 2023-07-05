<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Latihan</title>
</head>
<body>
    <form action="loginTugas.php" method="post" style="margin-top: 200px;">
        <p align="center">
            Username : <input type="text" name="username"><br><br>
            Password : <input type="password" name="password"><br><br>
            <input type="submit" name="submit">
        </p>
    </form>
    <?php
        session_start();
        error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
        $conn = mysqli_connect('localhost','root','', 'informatika');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $submit = $_POST['submit'];
    ?>

    <?php if($submit): ?>
        <?php 
            $query = "select * from user where username='$username' and password='$password'";
            $go = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($go);
        ?>

        <?php if($row['username'] != '' && $row['status'] == 'Administrator'): ?>
            <!-- berhasil login admin -->
            <?php
                $_SESSION['username'] = $row['username'];
                $_SESSION['status'] = $row['status'];
            ?>
            <script>
                alert("Anda berhasil login sebagai <?= $row['username']; ?>")
                window.location = "pageAdmin.php"
            </script>

        <?php elseif($row['username'] != '' && $row['status'] == 'Member'): ?>
            <!-- berhasil login member -->
            <?php
                $_SESSION['username'] = $row['username'];
                $_SESSION['status'] = $row['status'];
            ?>
            <script>
                alert("Anda berhasil login sebagai <?= $row['username']; ?>")
                window.location = "pageMember.php"
            </script>

        <?php else: ?>
            <!-- gagal login -->
            <script>
                alert("Gagal login!")
                window.location = "loginTugas.php"
            </script>

        <?php endif; ?>
    <?php endif; ?>
</body>
</html>