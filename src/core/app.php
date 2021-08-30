<?php
    class App
    {
        protected $controller = "home";
        protected $action = "defaultPage";
        protected $params=[];

        function __construct()
        {
          $arr = $this->UrlProcess();  
        // xử lý controller
        // hàm file_exists dùng để kiểm tra file có tồn tại hay không

        // controler/method
        //news1/new12

        if(isset($arr[0])){
            if( file_exists("./src/controllers/" . $arr[0] . ".php") ){
                $this->controller = $arr[0];
                unset($arr[0]);
            }
        }
        require_once "./src/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;


        // xử lý action
        // hàm method_exists kiểm tra xem một fuciton có tồn tại hay không
        // hàm isset kiểm tra xem phần tử có tồn tại hay không
        if(isset($arr[1])){
           if ( method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
           }
           unset($arr[1]);
         }
         
        // xử lý params
        $this->params = $arr?array_values($arr):[];

        call_user_func_array([$this->controller,$this->action], $this->params);
    }
        
        function UrlProcess()  
        {
            if (isset($_GET["url"]) )
            {
                return explode("/", filter_var(trim($_GET["url"], "/")) );
                // return explode("/", trim($_GET["url"]) );
                // hàm trim để loại bỏ khoảng trắng.
                // hàm explode dùng để cắt url theo dấu /
    
            }
        }
    }
?>