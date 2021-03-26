<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','emp_connect');


$txtNamee = $_POST['txtName'];
$txtEmaile = $_POST['txtEmail'];
$txtPhonee = $_POST['txtPhone'];
$txtMessagee = $_POST['txtMessage'];

// database insert SQL code
//$sql = "INSERT INTO tbl_contact (fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtNamee', '$txtEmaile', '$txtPhonee', '$txtMessagee')";
// insert in database 
$sql = "UPDATE `tbl_contact` SET fldEmail='$txtEmaile',fldPhone='$txtPhonee',fldMessage='$txtMessagee' WHERE fldName='$txtNamee'";

$rs = mysqli_query($con, $sql);

if($rs)
{
    echo '<script type="text/JavaScript">  
    alert("UPDATED succssesful");
     </script>' 
     ;
}

include"index.html";

?>