<?php

class news extends controller
{

    public $GroupNewsModel;

    public function __construct()
    {
        $this->GroupNewsModel = $this->model("groupnewsModel");
    }

    
    function defaultPage()
    {
        $gr = $this->GroupNewsModel->selectGroupnews();
        $this->view("news", [
            "gr" => $gr 
        ]);
    }

    
}

?>