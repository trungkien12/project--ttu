<?php
    class register extends controller {

        public $UserModel;

        public function __construct()
        {
            $this->UserModel = $this->model("userModel");
        }

        function defaultPage()
        {
            $this->view("register");
        }

        function processRegister()
        {
            // 1. GET date từ form đăng ký 
            if( isset($_POST["sbmRegister"])){
                $fullname = $_POST["txtFullname"];
                $email    = $_POST["txtEmail"];
                $username = $_POST["txtUsername"];
                $password = $_POST["txtPass"];
                // $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                $location = $_POST["txtLocation"];
            }
            // 2. INSERT databse vào bảng users
            $kq = $this->UserModel->InsertNewUser($fullname, $email, $username, $password, $location);

            $this->view("register", [
                "result" => $kq
            ]);

        }
    }
?>