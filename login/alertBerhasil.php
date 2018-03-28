<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="Assets/image/Gmail-icon.png">
        <link rel="stylesheet"href="Assets/css/bootstrap.css">
        <script src="Assets/js/jquery.min.js"></script>
        <script src="Assets/js/popper.min.js"></script>
        <script src="Assets/js/bootstrap.min.js"></script>
        <title>Home</title>
    </head>
    <body>
        <div class="alert alert-primary alert-dismissible fade show " role="alert">
            Selamat Anda Berhasil Login
        </div>
        <?php
        include_once './Config/dao.php';
        $dao = new Dao();
        $res = $dao->read();
        $result = $dao->read();
        ?>
        <h3><center>Tabel Login</center></h3>
        <table class="table table-bordered table-light">
            <tr class="table-primary">
                <th>ID</th><th>User Name</th><th>Full Name</th>
                <th>Password</th><th>Email</th><th>Telepon</th>
                <th>Banned</th><th>Log In Time</th>
                <th>Akses</th></tr>
            <?php
            foreach ($result as $row) {
                echo "<tr>
            <td>" . $row['id'] . "</td>
            <td>" . $row['usrnm'] . "</td>
            <td>" . $row['fullname'] . "</td>
            <td>" . $row['pasword'] . "</td>
            <td>" . $row['email'] . "</td>
            <td>" . $row['telp'] . "</td>
            <td>" . $row['banned'] . "</td>
            <td>" . $row['logintime'] . "</td>
            <td>" . $row['akses'] . "</td>
              </tr>";
            }
            ?>
        </table>
    </body>
</html>


