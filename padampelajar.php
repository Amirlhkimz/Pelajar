<?php
 include('conn.php');
 $nokp = $_GET['nokp'];
 $sql = "DELETE FROM datapelajar WHERE nokp= '$nokp'";
 $result = mysqli_query($conn, $sql);
 if ($result)
     echo "<script>alert('Rekod Berjaya Dipadam')</script>";
else 
   echo "<script>alert('Rekod Tidak Berjaya Dipadam')</script>";
echo "<script>window.location='index.php'</script>";
?>