<?php

    class admin extends controller
    {
        function defaultPage() 
        {
            $this->view("login");
        }

        function login() 
        {
            $this->view("login");
        }
    }

?>