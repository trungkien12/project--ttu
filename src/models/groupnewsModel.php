<?php

    class groupnewsModel extends DB {

        public function selectGroupnews() {
            $qr = "SELECT * FROM groupnews ORDER BY id_groupnews ASC";
             return mysqli_query($this->con, $qr);
        }


    }

?>