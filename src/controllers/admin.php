<?php

   
if (session_id() === '' ) session_start();

    class admin extends controller
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
            if (!isset($_SESSION["user"]))
            {
                header("location:  http://localhost:8080/project--ttu/home/ ");
            }

            $news = $this->NewsModel->selectNews();
            $this->view("admin", [
                "news" =>$news
            ]);
        }

        function addgroup() {
            
            $gr = $this->model("groupnewsModel")->selectGroupnews();

            $this->view("addgroup", [
                "gr" => $gr
            ]);

        }

        function processInsertGroupNews(){
            
            if(isset($_POST["add"]) && $_POST["idgr"] != '' && $_POST["namegr"] != ''){
                $id = $_POST["idgr"];
                $name = $_POST["namegr"];

                $this->GroupNewsModel->insertGroupnews($id, $name);
                header("location:  http://localhost:8080/project--ttu/admin/addgroup ");
             }
        }

        function updategroup($id) {
            
            if(isset($id)){
                $gr =  $this->GroupNewsModel->insertGroupnewsWithId($id);
                $namegr = mysqli_fetch_array($gr);                

                $this->view("updategroup",[
                "namegr" => $namegr
                ]);
            }

            // if(isset($_POST["update"])){
            //     $id = $id;
            //     $name = $namegr["name_groupnews"];
            //     echo $id; echo $name;
            // }    
        }

        function processUpdateGroup() {
            if(isset($_POST["update"])){
                $id = $_POST['idnhom'];
                $name = $_POST['tennhom'];
                echo $name;
                echo $id;
                $this->GroupNewsModel->updateNameGroupNews($id, $name);
                header("location:  http://localhost:8080/project--ttu/admin/addgroup ");
            }    
        }

        function deletegroup($id){
            if(isset($id)){
                $this->GroupNewsModel->deleteGroupNews($id);
                echo "Bạn đã xoá nhóm tin thành công!";
            }
        }

        function addnews() {
            $news = $this->NewsModel->selectNews();

            $this->view("addnews",[
                "news" =>$news
            ]);
        }

        function processInsertNews ()
        {
            if(isset($_POST["insert"])){
                $idgr = $_POST['idgr'];
                $title = $_POST['title'];
                $excerpt = $_POST['excerpt'];
                $img_excerp = $_POST['img_excerp'];
                $content = $_POST['content'];

                $this->NewsModel->insertNews($idgr, $title, $excerpt, $img_excerp, $content);
                header("location:  http://localhost:8080/project--ttu/admin/addnews");
            }
        }

        function UpdateNews($id)
        {
            if(isset($id)){
                $gr =  $this->NewsModel->selectNewsWithId($id);
                $namenews = mysqli_fetch_array($gr);                

                $this->view("updatenews",[
                "namenews" => $namenews
                ]);
            }
        }

        function processUpdateNews($id){
            if(isset($_POST["updateNews"]) && isset($id)){
                $idgr = $_POST['idgr'];
                $title = $_POST['title'];
                $excerpt = $_POST['excerpt'];
                $img_excerpt = $_POST['img_excerp'];
                $content = $_POST['content'];

                $this->NewsModel->updateNews($id, $idgr, $title, $excerpt, $img_excerpt, $content);
                header("location:  http://localhost:8080/project--ttu/admin/");
            }else {
                echo "somgthing went wrong";
            }
        }

        function processDeleteNews($id){
            if(isset($id)){
                $this->NewsModel->deleteNews($id);
                echo "Bạn đã xoá bài viết thành công thành công!";
            }
        }
    }

?>