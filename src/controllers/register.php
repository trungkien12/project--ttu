<?php
    class register extends controller {

        public $UserModel;
        public $GroupNewsModel;

        public function __construct()
        {
            $this->UserModel = $this->model("userModel");
            $this->GroupNewsModel = $this->model("groupnewsModel");
        }

        function defaultPage()
        {
            $gr = $this->GroupNewsModel->selectGroupnews();
            $this->view("register", [
                "gr" => $gr 
            ]);
        }

        function processRegister()
        {
            // 1. GET date từ form đăng ký 
            if( isset($_POST["sbmRegister"]) && $_POST["txtFullname"] != '' && $_POST["txtEmail"] != '' && $_POST["txtUsername"] != '' && $_POST["txtPass"] != ''){
                $fullname = $_POST["txtFullname"];
                $email    = $_POST["txtEmail"];
                $username = $_POST["txtUsername"];
                $password = $_POST["txtPass"];
                // $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                $location = $_POST["txtLocation"];
                $kq = $this->UserModel->InsertNewUser($fullname, $email, $username, $password, $location);

                header("location:  http://localhost:8080/project--ttu/login/ ");
            }else{
                header("location:  http://localhost:8080/project--ttu/home/ ");
            }
            // 2. INSERT databse vào bảng users


        }
    }
?>