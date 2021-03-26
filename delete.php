<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','emp_connect');


$txtNamee = $_POST['txtName'];

// database insert SQL code
//$sql = "INSERT INTO tbl_contact (fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtNamee', '$txtEmaile', '$txtPhonee', '$txtMessagee')";
// insert in database 
$sql = "DELETE FROM `tbl_contact` WHERE fldName='$txtNamee'";


$rs = mysqli_query($con, $sql);
echo"{$rs}";

if($rs)
{
	echo '<script type="text/JavaScript">  
    alert("deleted succssesful");
     </script>' 
     ;
    
}

include "index.html"
?>