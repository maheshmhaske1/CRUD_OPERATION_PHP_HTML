<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','emp_connect');


$txtNamee = $_POST['txtName'];
$txtEmaile = $_POST['txtEmail'];
$txtPhonee = $_POST['txtPhone'];
$txtMessagee = $_POST['txtMessage'];


if(empty($txtNamee) || empty($txtEmaile) || empty($txtPhonee) || empty($txtMessagee))
{
    echo '<script type="text/JavaScript">  
    alert("EMPTY FIELD NOT ALLOWED");
    </script>' 
    ;
    include"index.html";
}
else{
$sql = "INSERT INTO tbl_contact (fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtNamee', '$txtEmaile', '$txtPhonee', '$txtMessagee')";

$rs = mysqli_query($con, $sql);

    if($rs)
    {
        echo '<script type="text/JavaScript">  
        alert("INSERTED succssesful");
        </script>' 
        ;
    }
    //include"index.html";
}

// database insert SQL code
//$sql = "INSERT INTO tbl_contact (fldName, fldEmail, fldPhone, fldMessage) VALUES ('$txtNamee', '$txtEmaile', '$txtPhonee', '$txtMessagee')";
// insert in database 


include"index.html";
?>
