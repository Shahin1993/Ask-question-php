<?php

namespace App\signup;
use App\database\database;
session_start();
class signup
{
    private $username;
    private $email;
    private $password;

    public function setData($data = '')
    {
        $this->username = $data['username'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        return $this;
    }

    public function store()
    {
        if($_POST) {

            if (empty($this->username)) {
                $_SESSION['Message'] = "<div style='color:darkblue;font-weight: bold;font-size:18px;'>Username cannot be empty</div>";
                header("location:../index.php");
            } elseif (empty($this->email)) {
                $_SESSION['Message'] = "<div style='color:darkblue;font-weight: bold;font-size:18px;'>Email cannot be empty</div>";
                header("location:../index.php");
            } elseif (empty($this->password)) {
                $_SESSION['Message'] = "<div style='color:darkblue;font-weight: bold;font-size:18px;'>Password cannot be empty</div>";
                header("location:../index.php");
            } else {
                $db = database::getInstance();
                $query = "INSERT INTO user_tbl(username,email,password,create_at) values(:u, :e, :p, :c)";
                $stmt = $db->prepare($query);
                $status = $stmt->execute(
                    array(
                        ':u' => $this->username,
                        ':e' => $this->email,
                        ':p' => $this->password,
                        ':c' => date('Y-m-d h:m:s'),
                    ));
                if ($status) {
                    $_SESSION['Message'] = "<div style='color: green;font-weight: bold;font-size: 30px;'>Sign up successfully.</div>";

                    header("location:../index.php");
                } else {
                    echo "something is wrong";
                }

            }
        }
    }

    public function getusers()
    {
        try{

            $db = database::getInstance();
            $query = "SELECT * FROM `user_tbl`  ";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
        }
        catch (PDOException $e)
        {
            echo 'Error' . $e->getMessage();
        }
        return $data;

    }
    public function view($id='')
    {

        $db = database::getInstance();
        $query = "SELECT * FROM `user_tbl` WHERE id=$id";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }
    public function delete($id='')
    {
        $db = database::getInstance();
        $statement= $db->prepare("DELETE FROM user_tbl WHERE id=?");
        $statement->execute(array($id));

        header("location: view_users.php");
    }


}
?>