<?php
$con = mysqli_connect('localhost', 'root', '','emp_connect');

$txtNamee = $_POST['txtName'];
print"{$txtNamee}";

$sql = 'SELECT * FROM tbl_contact WHERE id="{$txtNamee}";
$rs = mysqli_query($con,$sql);
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
include"index.html";
?>