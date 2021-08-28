<?php

    class login extends controller
    {
        public $UserModel;

        public function __construct()
        {
            $this->UserModel = $this->model("userModel");
        }

        function defaultPage() 
        {
            $this->view("login");
        }

        function processLogin()
        {
            if( isset($_POST["sbmLogin"]) && $_POST["txtEmail"] != '' && $_POST["txtPass"] != '' )
            {
                $email = $_POST["txtEmail"];
                $password = $_POST["txtPass"];
                // $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                $kq = $this->UserModel->TestInput( $email,  $password);
                // $this->view("admin", [
                //     "result" => $kq
                // ]);
                header("location:  http://localhost:8080/project--ttu/admin/ ");
            }else{
                header("location:  http://localhost:8080/project--ttu/home/ ");
            }



        }

    }

?>