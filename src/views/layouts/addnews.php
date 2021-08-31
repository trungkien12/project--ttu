<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style--header.css">
    <link rel="stylesheet" href="../public/css/style--footer.css">
    <link rel="stylesheet" href="../public/css/slider.css">
    <link rel="stylesheet" href="../public/font/fontawesome-free-5.15.2-web/css/all.min.css">
    <!-- <script type="text/javascript" src="../public/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="../public/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../public/ckeditor/ckfinder/ckfinder.js"></script> -->
    <title>Document</title>

    <style>
        input,
        textarea {
            border: 1px solid #CCC;
        }


        .td,.th {
            border: 2px solid black;
            min-width: 100px;
            min-height: 50px;
            text-align: center;
        }

        .tbl {
            margin-top: 70px;
        }

        h3 {
            margin-top: 50px;
            text-align: center;
        }

        form {
            margin-top: 50px;
            padding: 30px;        
            border: 2px solid black;    
            min-width: 500px;
            display: flex;
            flex-direction: column;
        }

        .td a {
            color: black;
        }

        h3 {
            background-color: #CCC;
            height: 50px;
            line-height: 50px;
        }
    </style>
</head>
<body>
<?php require_once "./src/views/partial/headerAdmin.php" ?>

<h3>Danh sách bài viết</h3>
<table class='tbl' >
    <tr class='tr'>
        <th class='th'>ID tin</th>
        <th class='th'>ID nhóm tin</th>
        <th class='th'>Tiêu đề</th>
        <th class='th'>Mô tả</th>
        <th class='th'>Ảnh mô tả</th>
        <th class='th'>Nội dung</th>
        <!-- <th class='th'>Chức năng</th> -->
    </tr>


    <?php
        $i = 0;
        while($r = mysqli_fetch_array($data["news"]))
        {
            $i++;
            $idnews = $r["id_news"];
            $idnhom = $r["id_groupnews"];
            $titlenews = $r["news_title"];
            $excerptnews = $r["news_excerpt"];
            $img = $r["news_imgexcerpt"];
            $content = $r["news_content"];

            echo "<tr>";
                echo "<td class='td'>$idnews</td>";            
                echo "<td class='td'>$idnhom</td>";
                echo "<td class='td'>$titlenews</td>";
                echo "<td class='td'>$excerptnews</td>";
                echo "<td class='td'>$img</td>";
                // echo "<td class='td'>$content</td>";
                
                echo "<td class='td'>";
                    echo "<a href='http://localhost:8080/project--ttu/admin/UpdateNews/$idnews'> Sửa </a>";
                    echo " | <a href='http://localhost:8080/project--ttu/admin/processDeleteNews/$idnews'> Xoá </a>";
                echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>


<div class="container">
    
    <form action="../admin/processInsertNews" method="POST">
    <h3>Thêm mới bài viết</h3>
        <h4>ID nhóm tin:</h4>
        <input type='text' name='idgr' size='198'>
        <h4>Tiêu Đề bản tin:</h4>
        <input type='text' name='title' size='198'>
        <h4>Mô tả ngắn:</h4>
        <textarea type='text' name='excerpt' cols='200' rows='0'></textarea>
        <h4>Ảnh trích dẫn:</h4>
        <input type="text" name='img_excerp' size="198">
        <h4>Nội dung</h4>
        <textarea name="content" id="content" cols='200' rows="5"></textarea>
        <br>
        <input type="submit" name="insert" value="Chấp nhận">
    </form>

</div>

<?php require_once "./src/views/partial/footer.php" ?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>