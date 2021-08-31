<?php

class news extends controller
{

    public $GroupNewsModel;
    public $NewsModel;

    public function __construct()
    {
        $this->GroupNewsModel = $this->model("groupnewsModel");
        $this->NewsModel = $this->model("newsModel");
    }

    
    function defaultPage()
    {
        $gr = $this->GroupNewsModel->selectGroupnews();
        $news = $this->NewsModel->selectOneNews();
        // $data = mysqli_fetch_array($news);
        $this->view("news", [
            "gr" => $gr,
            "news" => $news
        ]);
    }

    
}

?>