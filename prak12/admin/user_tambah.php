<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah user</title>
</head>
<body>
<h2>tambah user</h2>
<form action="user_tambah_aksi.php" method="post">
    <table>
        <tr>
            <td>username</td>
            <td> : </td>
            <td> <input type="text" name="username" id=""></td>
        </tr>
        <tr>
            <td>password</td>
            <td> : </td>
            <td> <input type="text" name="password" id=""></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td> : </td>
            <td> <input type="text" name="namalengkap" id=""></td>
        </tr>
        <tr>
            <td>Email</td>
            <td> : </td>
            <td> <input type="text" name="email" id=""></td>
        </tr>
        <tr>
            <td colspan="2">
             <input type="submit" name="simpan" id="" value="simpan">
             <input type="reset" name="batal" id="">
             </td>
        </tr>
    </table>

</form>


</body>
</html>