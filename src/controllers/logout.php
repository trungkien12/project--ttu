<?php
if (session_id() === '') session_start();
class logout extends controller
{


    function defaultPage()
    {
        session_destroy();
        header("Location:http://localhost:8080/project--ttu/home/");
    }
}
