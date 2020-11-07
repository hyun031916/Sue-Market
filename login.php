<?php
session_start();

include "./db_conn.php";

$userid = $_POST['userId'];
$userpwd = $_POST['userPwd'];

$sql = "SELECT * FROM register where userid='$userid' and passwd='$userpwd'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if($num!=0){
    $_SESSION['userid']=$userid;
    $_SESSION['userpwd']=$userpwd;
    echo"<meta http-equiv='refresh' content='0;url=main.php'>";
}else{
    echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.'); history.go(-1);</script>";
}
?>