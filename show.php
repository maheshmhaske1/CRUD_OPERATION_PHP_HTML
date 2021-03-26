<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','emp_connect');



// database insert SQL code
//$sql = "INSERT INTO tbl_contact (fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtNamee', '$txtEmaile', '$txtPhonee', '$txtMessagee')";
// insert in database 
$sql = 'SELECT * FROM `tbl_contact';
$rs = mysqli_query($con, $sql);
$rowcount=mysqli_num_rows($rs);

if ($rowcount>0) {
    while ($row=mysqli_fetch_assoc($rs)) {
       echo $row['fldName']."<br>";
       echo $row['fldEmail']."<br>";
       echo $row['fldPhone']."<br>";
       echo $row['fldMessage']."<br>";
       echo $row['id']."<br>";

       print'...................................:'."<br>";
       
    }
}

?>
<button onclick="location.href='http://localhost/app/index.html'" type="button">HOME</button>
</body>
</html>




