<?php

    // if (session_start() == false) session_start();

    class login extends controller
    {
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
            $this->view("login", [
                "gr" => $gr 
            ]);
        }

        function processLogin()
        {
            if( isset($_POST["sbmLogin"]) && $_POST["txtEmail"] != '' && $_POST["txtPass"] != '' )
            {
                $email = $_POST["txtEmail"];
                $password = $_POST["txtPass"];
                // $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                $kq = $this->UserModel->TestInput( $email,  $password);

                if(isset($kq)) 
                { 
                        if($kq == "true"){
                            // $_SESSION["user"] = $email;
                            header("location:  http://localhost:8080/project--ttu/admin/ ");
                        }else{
                            header("location:  http://localhost:8080/project--ttu/home/ ");
                        }
                } 
            }else{
                header("location:  http://localhost:8080/project--ttu/home/ ");
            }



        }

    }

?>