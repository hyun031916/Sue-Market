<?php
$id = $_GET['idx'];
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <title>게시글 상세보기</title>
    </head>
    <body>
        <?php
        include './db_conn.php';

        $sql = "select * from board where id=$id";
        $result = mysqli_query($conn, $sql);
        $hit = mysqli_fetch_array($result);
        $hit = $hit['hit']+1;

        $sql1 = "update board set hit = '$hit' where id='$id'";
        $result = mysqli_query($conn, $sql1);

        $sql2 = "select * from board where id=$id";
        $result2 = mysqli_query($conn, $sql2);
        $row = mysqli_fetch_row($result2);
        ?>
        <table class="table table-hover">
        <tr>
            <td scope='col' class='text-center'>제목</td>
            <td scope='col' class='text-center'><?php echo $row[3];?></td>
        </tr>
        <tr>
            <td scope='col' class='text-center'>작성자</td>
            <td scope='col' class='text-center'><?php echo $row[1];?></td>
        </tr>
        <tr>
            <td scope='col' class='text-center'>작성일</td>
            <td scope='col' class='text-center'><?php echo $row[5];?></td>
            <td scope='col' class='text-center'>조회수</td>
            <td scope='col' class='text-center'><?php echo $row[6];?></td>
        </tr>
        <tr>
            <td scope='col' class='text-center'>내용</td>
            <td scope='col' class='text-center'><?php echo $row[4];?></td>
        </tr>
</table>
        <article>
            <div class="container" role="main">
                <h2>board Form</h2>
                <form name="form" id="form" role="form" method="post" action="list.php">
                    <div class="mb-3">
                        <label for="title">제목</label>
                        <?php echo $row[3];?>
                    </div>
                    <div class="mb-3">
                        <label for="title">글쓴이</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo $row[1];?>">
                    </div>
                    <div class="mb-3">
                        <label for="title">작성일</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo $row[5];?>">
                    </div>
                    <div class="mb-3">
                        <label for="title">조회수</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo $row[6];?>">
                    </div>
                    <div class="mb-3">
                        <label for="content">내용</label>
                        <textarea class="form-control" rows="5" name="content" id="content" placeholder="<?php echo $row[4];?>" ></textarea>
                    </div>
                    <div >
                        <input type="submit" class="btn btn-sm btn-primary" id="btnSave"></button>
                    </div>  
                </form>
            </div>
        </article>
    </body>
</html>