<?php

include "./db_conn.php";
include "./main.php";
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
    <?php

        if($img_name){
            move_uploaded_file($img, "data/".$img_name);
        }
        $query="insert into shop_data(name, comment, price, memo, img) values('$name', '$comment', '$memo', '$img_name')";
        $result = sql_query($query);
    ?>
    <script>
        alert("상품이 등록되었습니다.");
        location.href="shop_list.php";
    </script>
</html>