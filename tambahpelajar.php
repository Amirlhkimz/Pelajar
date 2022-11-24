<?php

    include('conn.php');

    if(isset($_POST['noKP']))
    {
        $id = $_POST['id'];
        $nama = $_POST['namapelajar'];
        $nokp = $_POST['nokp'];
        $jantina = $_POST['jantina'];
        $nohp = $_POST['nohp'];

        $sql="INSERT INTO datapelajar (id, namapelajar, nokp, jantina, nohp)
        VALUES ($id,$nama,$nokp,$jantina,$nohp";

        $result = mysqli_query($conn, $sql);
        if($result)
            echo"<script>alert('Kemaskini Berjaya')</script>";
        else
        echo"<script>alert('Kemaskini Tidak Berjaya')</script>";
        echo"<script><window.location='index.php'</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <form action="tambahpelajar.php">
            <table>
                <tr>
                    <td class="entah"> Id </td>
                    <td><input require type="text" name="id"></td>
                </tr>
                <tr>
                    <td class="entah"> Nama Pelajar </td>
                    <td><input require type="text" name="namapelajar"></td>
                </tr>
                <tr>
                    <td class="entah"> No Kad Pengenalan </td>
                    <td><input require type="text" name="nokp"></td>
                </tr>
                <tr>
                    <td class="entah"> Jantina </td>
                    <td><input require type="text" name="jantina"></td>
                </tr>
                <tr>
                    <td class="entah"> No Handphone</td>
                    <td><input require type="text" name="nohp"></td>
                </tr>

            </table>
            <button><a href="index.php" type="submit">SUBMIT</a></button>
        </form>

    </center>
    
    
</body>
</html>