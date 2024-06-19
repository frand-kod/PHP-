<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil data user</title>
</head>
<body>
    <h2>data user</h2>

    <button><a href="user_tambah.php">Tambah User</a></button>
    <hr>
    <table width="720" border="1">

        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th width="150">kelola</th>
        </tr>
        <?php
            include("config.php");
            $query = "SELECT user_name, user_password, user_namalengkap, user_email FROM user ORDER BY user_namalengkap";
            $result = mysqli_query($conn, $query);

            $no = 1;

            while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['user_password']; ?></td>
            <td><?php echo $row['user_namalengkap']; ?></td>
            <td><?php echo $row['user_email']; ?></td>
            <td>
                <a href="user_edit.php?user_nama=<?php echo $row['user_name'];?>">edit</a>
                <a href="user_hapus.php?user_nama=<?php echo $row['user_name'];?>">hapus</a>
            </td>
        </tr>
        <?php
                $no++;
            }
        ?>
    </table>
</body>
</html>
