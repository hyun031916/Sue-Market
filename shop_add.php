<?php
include "./main.php";
include "./db_conn.php";
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
    <h1>상품추가</h1>
    <form action="shop_add_post.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>상품명</td>
            <td><input type="text" name = "name" size="30"></td>
        </tr>
        <tr>
            <td>상품 소개</td>
            <td><input type="text" name="coment" size="50"></td>
        </tr>
        <tr>
            <td>금액</td>
            <td><input type="text" name="price" size="50"></td>
        </tr>
        <tr>
            <td>상품설명</td>
            <td><textarea name="memo" cols="50" rows="10"></textarea></td>
        </tr>
        <tr>
        <td style="padding-top:20px">상품사진</td>
        <td style="padding-top:20px"><input type="file" name="img"></td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="padding-top:20px">
            <input type="submmit" value="상품등록">
            <input type="button" onClick="location.href='shop_list.php'" value="등록취소">
            </td>
        </tr>
    </table>
    </form>
    </body>
</html>