<?php

class student extends DB {
    public static function get_students() {
        //sau này phải connect database để lấy dữ liệu về
        
        return "Pham trung kien";    
    }

    public static function get_news(){
        return "thethao24/7";
    }

    public function get_user(){
        $qr = "SELECT *FROM users";
        return mysqli_query($this->con, $qr);
    }
}

?>