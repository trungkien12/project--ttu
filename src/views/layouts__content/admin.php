
    <style>

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
                echo "<td class='td'>$content</td>";
                
                // echo "<td class='td'>";
                //     echo "<a href='http://localhost:8080/project--ttu/admin/UpdateNews/$idnews'> Sửa </a>";
                //     echo " | <a href='http://localhost:8080/project--ttu/admin/processDeleteNews/$idnews'> Xoá </a>";
                // echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
