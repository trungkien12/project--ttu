<?php

class home extends controller
{

    public $GroupNewsModel;

    public function __construct()
    {
        $this->GroupNewsModel = $this->model("groupnewsModel");
    }

    
    function defaultPage()
    {
        $gr = $this->GroupNewsModel->selectGroupnews();

        // while($r = mysqli_fetch_array($gr)) {
        //     $id = $r['id_groupnews'];
        //     $name = $r['name_groupnews'];
        //     echo "<li> <a> $name </a> </li>";
        // }
        $this->view("home", [
            "gr" => $gr 
        ]);
    }
    
}

?>