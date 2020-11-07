<?php

include "./db_conn.php";

$query="select * from shop_data order by no desc";
$result = mysqli_query($conn, $query);

//한화면에 보여질 게시글 수
$page_num = 10;

//맨 처음 접속할 경우 처음부터 출력하기 위한 값
if(!$start) $start = 0;

//현재 테이블의 전체 개수
$query = "select * from shop_data";
$result = mysqli_query($conn, $query);
$tmp = mysqli_fetch_array($result);
$cnt = mysqli_num_rows($result);
$total = $tmp[$cnt];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1>상품목록</h1>
        <table width="800px">
        <tr>
            <td colspan="4" align="right" style="padding-bottom:10px">
            <input type="button" value="상품추가" onClick="location.href='shop_add.php?np<?=$data[no] ?>">
            <input type="button" value="주문내역" onClick="location.href='order_list.php'">
            <a href="shop_add.php?id=">[상품추가]</a>
            <a href="order_list.php">[주문내역]</a>
            </td>
        </tr>
        <tr>
            <th>상품명</th>
            <th>상품이미지</th>
            <th>가격</th>
            <th>기타</th>
        </tr>
        <?php
        $query = "select * from shop_data order by id desc limit $start, $page_num";

        $result = mysqli_query($conn, $query);
        while($data = mysqli_fetch_array($result)){ 
        ?>
        <tr>
            <td align="center"><?= $data['name'] ?></td>
            <td width = "400px" align="center">
            <img src="data/<? $data['img'] ?>" width="70%" height="70%"></td>
            <td width+"100px" align="center">\<?= number_format($data['price']) ?></td>
            <td align="center">
            <a href="shop_edit.php?no<?=$data['no']?>" style="text-decoration:none;">상품수정</a><br>
            <a href="shop_list_del.php?no=<?=$data['no']?>" style="text-decoration:none;">상품삭제</a></td>
        </tr>

        <tr>
            <td colspan="5" height="1px">
        <?php 
        } ?>
            </td>
        </tr>
        </table><br>
    <?php
    $pages = $total/$page_num;
    for($i=0; $i<$pages; $i++){
        $assa = $page_num * $i;
        echo "<a href=$PHP_SELF?start=$assa>⬛</a>";
    }
    ?>
    <table>
        <tr>
            <td align="center">[페이지더보기]
        </tr>
    </table>
    </body>