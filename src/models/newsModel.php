<?php

class newsModel extends DB {

    public function insertNews($idgr, $title, $excerpt, $img_excerpt, $content) {
        $qr = "INSERT INTO `news` (`id_groupnews`, `news_title`, `news_excerpt`, `news_imgexcerpt`, `news_content`) VALUES ('${idgr}', '${title}', '${excerpt}', '${img_excerpt}', '${content}'); ";
        return mysqli_query($this->con, $qr);
    }

    public function selectNews(){
        $qr = "SELECT * FROM news ORDER BY id_groupnews ASC";
        return mysqli_query($this->con, $qr);
    }

    public function selectNewsWithId($id){
        $qr = "SELECT * FROM news WHERE id_news='$id'";
        return mysqli_query($this->con, $qr);
    }

    public function updateNews($id, $idgr, $title, $excerpt, $img, $content){
        $qr = "UPDATE `news` SET `id_groupnews` = '$idgr', `news_title` = '$title', `news_excerpt` = '$excerpt', `news_imgexcerpt`='$img', `news_content`='$content' WHERE `news`.`id_news`='$id'";
        return mysqli_query($this->con, $qr);
    }

    public function deleteNews($id){
        $qr = "DELETE FROM news WHERE id_news='$id'";
        return mysqli_query($this->con, $qr);
    }

    public function selectOneNews(){
        $qr = "SELECT * FROM news";
        return mysqli_query($this->con, $qr);
    }

    }

?>