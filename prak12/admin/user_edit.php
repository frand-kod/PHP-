<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit User</title>
</head>
<?php 
    include("config.php");
    $user=$_GET['user_nama'];

    $query = "SELECT * FROM user WHERE user_name = '$user'";

    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
?>
<body>
    <h2>Ubah Data <?php $user ?></h2>

    <form action="user_edit_aksi.php" method="post">

        <table>
             <tr>
            <td>Username</td>
            <td>:</td>
            <td>
                <input type="text" name="username" value="<?php echo $row['user_name']; ?>" disabled>
                <input type="hidden" name="username" value="<?php echo $row['user_name']; ?>">
            </td>
            </tr>

            <tr>
                <td>Password</td>
                <td> : </td>
                <td>
                <input type="text" name="password" id="" value="<?php echo $row['user_password']?>">
                </td>
            </tr>
            <tr>
                <td>nama lengkap</td>
                <td> : </td>
                <td>
                <input type="text" name="namalengkap" id="" value="<?php echo $row['user_namalengkap']?>">
                </td>
            </tr>
            <tr>
                <td>email</td>
                <td> : </td>
                <td>
                <input type="text" name="email" id="" value="<?php echo $row['user_email']?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="ubah" id="" value= "simpan">
                    <input type="reset" name="" id="">
                </td>

            </tr>
        </table>
    </form>
    
    
</body>
</html>