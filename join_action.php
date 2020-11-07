<?php
include './db_conn.php';

$_userId = $_POST['userId'];
$_userPwd = $_POST['userPwd'];
$_userPwd2 = $_POST['userPwd2'];
$_email = $_POST['email'];
$_tel = $_POST['tel'];
$_city = $_POST['city'];

if($_userPwd==$_userPwd2){
    $sql = "insert into register(userid, passwd, email, tel, city) values('$_userId', '$_userPwd', '$_email', '$_tel', '$_city')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo "<script>
    alert('등록되었습니다.');
    location.href='main.php';
    </script>";
}else{
    echo "<script> alert('비밀번호가 일치하지 않습니다.'); history.go(-1);</script>";
}
?>


