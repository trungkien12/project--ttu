<?php

class UserModel extends DB {
    public function InsertNewUser($fullname, $email, $username, $password, $location) {
        $qr = "INSERT INTO users VALUE(null, '$fullname', '$email', '$username', '$password', '$location')";
        
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return json_encode( $result );
    }

    public function TestInput($email, $password){

        $qr = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
        $user = mysqli_query($this->con, $qr);
        $result = false;
        if( mysqli_num_rows($user) > 0){
            $result = true;
        }
        return json_encode( $result );
    }
}

?>