<?php

    class groupnewsModel extends DB {

        public function selectGroupnews() {
            $qr = "SELECT * FROM groupnews ORDER BY id_groupnews ASC";
             return mysqli_query($this->con, $qr);
        }

        public function insertGroupnews($id, $name) {
            $qr = "INSERT INTO groupnews(id_groupnews, name_groupnews) VALUE ('$id', '$name') ";
             return mysqli_query($this->con, $qr);
        }

        public function insertGroupnewsWithId($id) {
            $qr = "SELECT * FROM groupnews WHERE id_groupnews='$id'";
             return mysqli_query($this->con, $qr);
        }
        
        public function updateNameGroupNews($id, $name)
        {
            $qr = "UPDATE groupnews SET name_groupnews='$name' WHERE id_groupnews='$id'";
            return mysqli_query($this->con, $qr);
        }

        public function deleteGroupNews($id){
            $qr = "DELETE FROM groupnews WHERE id_groupnews='$id'";
            return mysqli_query($this->con, $qr);
        }
    }

?>