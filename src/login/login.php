<?php

namespace App\login;

use App\database\database;
session_start();
class login
{
    public function login($data='')
    {
        $this->username="'".$data['username']."'";
        $this->password="'".$data['password']."'";

        $db =database::getInstance();
        $query = "SELECT * FROM `user_tbl` WHERE username=$this->username AND password=$this->password";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();
        if(!empty($data))
        {
            $_SESSION['userid']=$data;
            $_SESSION['Message']="<div style='color:darkblue;font-weight: bold;font-size:18px;'>Now you access this page</div>";
            header("location:../index.php");
        }
        else{
            header("location:../login.php");
            $_SESSION['Message']="<div style='color: red;font-weight: bold;font-size: 20px;'>Opps! Username or Password not matching</div>";

        }
    }
}
?>