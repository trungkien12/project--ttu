<?php
    $r = $data["namenews"];

    $id = $r["id_news"];
    $idgr = $r["id_groupnews"];
    $title = $r["news_title"];
    $excerpt = $r["news_excerpt"];
    $img = $r["news_imgexcerpt"];
    $content = $r["news_content"];
?>

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
</style>

<form  action="../processUpdateNews/<?php echo $id ?>" method="POST">
    <h3>Chỉnh sửa bài viết</h3>
        <h4>ID nhóm tin:</h4>
        <input type='text' name='idgr' size='198' value="<?php echo $idgr ?>">
        <h4>Tiêu Đề bản tin:  </h4>
        <input type='text' name='title' size='198' value="<?php echo $title ?>">
        <h4>Mô tả ngắn:</h4>
        <textarea type='text' name='excerpt' cols='200' rows='0'><?php echo $excerpt ?></textarea>
        <h4>Ảnh trích dẫn:</h4>
        <input type="text" name='img_excerp' size="198" value="<?php echo $img ?>">
        <h4>Nội dung:</h4>
        <textarea name="content" id="content" cols='200' rows="5"><?php echo $content ?></textarea>
        <br>
        <input type="submit" name="updateNews" value="Chấp nhận">
</form>