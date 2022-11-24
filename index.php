<?php
include ('conn.php');
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
        <table border="1">
            <caption>SENARAI NAMA PELAJAR</caption>
            <tr>
                <td class="head">Id</td>
                <td class="head">Nama Pelajar</td>
                <td class="head">Nombor Kad Pengenalan</td>
                <td class="head">Jantina</td>
                <td class="head">Nombor Handphone</td>
            </tr>
            <?php
            $sql = "SELECT * FROM datapelajar ORDER BY id ASC";
            $data = mysqli_query($conn, $sql);
            $bil = 1;
            while ($pelajar = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class="bilnum"><?php echo $bil; ?></td>
                    <td><?php echo $pelajar['id']; ?></td>
                    <td><?php echo $pelajar['namapelajar']; ?></td>
                    <td><?php echo $pelajar['nokp']; ?></td>
                    <td><?php echo $pelajar['jantina']; ?></td>
                    <td><?php echo $pelajar['nohp']; ?></td>
                    <td>
                        <a href="updatepelajar.php?nokp=<?php echo $pelajar['nokp'];?>">
                            <button> <a href="pelajarupdate.php">UPDATE</a></button>
                        <a href="padampelajar.php?nokp=<?php echo $pelajar['nokp'];?>">
                            <button> <a href="padampelajar.php">DELETE</button>

                    </td> 
                </tr> 
            <?php $bil = $bil + 1; 
            } 
            ?> 
        </table>
        <button><a href="tambahpelajar.php">Tambah pelajar</a></button>
    </center>
</body>