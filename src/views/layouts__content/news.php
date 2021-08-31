
<head>
<link rel="stylesheet" href="../public/css/news.css">
</head>

<?php
    $r = $data["news"];
    // $img = $data["news_imgexcerpt"];
    // $title = $data["news_title"];
    // $excerpt = $data["news_excerpt"];
?>

<div class="newsPage">

    <div class="entry__crumbs--container">
        <div class="entry__crumbs">
            <img src="" alt="">
            <a href="http://localhost:8080/project--ttu/home/" class="entry__crumb--backhome">Home</a>
            <i class="fas fa-angle-right"></i>
            <p>Tin tức & sự kiên</p>
        </div> 
    </div>

</div>

<div class="category">
    <div class='category__left'>
    
    <?php
        $i =0;
        while($data = mysqli_fetch_array($r)){
            $i ++;
            $img = $data["news_imgexcerpt"];
            $title = $data["news_title"];
            $excerpt = $data["news_excerpt"];

            echo "<table width='100'>";
                echo "<tr>";
                    echo "<td id='post'>";
                        echo "<img src='$img' alt=''>";
                    echo "</td>";

                    echo "<td id='extit'>";
                        echo "<a>$title</a>";
                        echo "<p>$excerpt</p>";
                    echo "</td>";
                echo "</tr>";
            echo "</table>";

        }
    ?>

    </div>
    
    <div class="category__right" col-3>
        <div class="AdmissionsInfo" >
            <p>Thông tin tuyển sinh</p>
        </div>

        <div class="AdmissionsInfoImg">
            <img src="../public/image/hd1.jpg" alt="">
            <img src="../public/image/hd2.jpg" alt="">
            <img src="../public/image/hd3.jpg" alt="">
            <img src="../public/image/hd4.jpg" alt="">
            <img src="../public/image/hd5.jpg" alt="">
            <img src="../public/image/hd6.jpg" alt="">
            <img src="../public/image/hd9.jpg" alt="">
            <img src="../public/image/hd8.jpg" alt="">
        </div>

        <div class="activate" >
            <p>Các hoạt động</p>
        </div>

        <div class="ActivateImg">
            <img src="../public/image/ts1.jpg" alt="">
            <img src="../public/image/ts2.jpg" alt="">
            <img src="../public/image/ts3.jpg" alt="">
            <img src="../public/image/ts4.jpg" alt="">
            <img src="../public/image/ts5.jpg" alt="">
        </div>
    </div>

</div>
