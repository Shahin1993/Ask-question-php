<?php

namespace App\question;
use App\database\database;
 session_start();
class question
{
    private $q_title;
    private $q_description;

    public function addquestion($data1 = '')
    {
        $u_id = $_SESSION['userid'];
        $this->q_title = $data1['q_title'];
        $this->q_description = $data1['q_description'];
        $this->username = $u_id['username'];

        return $this;
    }

    public function storequestion()
    {
        if($_POST) {
            if (empty($this->q_title)) {
                $_SESSION['Message'] = "<div style='color:red;font-weight: bold;font-size:18px;'>Title cannot be empty</div>";
                header("location: ../ask_question.php");
            } elseif (empty($this->q_description)) {
                $_SESSION['Message'] = "<div style='color:red;font-weight: bold;font-size:18px;'>Question description cannot be empty</div>";
                header("location: ../ask_question.php");
            } else {

                $db = database::getInstance();
                $query = "INSERT INTO question_tbl(title,q_description,p_date,username) values(:t, :q, :d, :u)";
                $stmt = $db->prepare($query);
                $status = $stmt->execute(
                    array(
                        ':t' => $this->q_title,
                        ':q' => $this->q_description,
                        ':d' => date('Y-m-d'),
                        ':u' => $this->username
                    ));
                if ($status) {
                    $_SESSION['Message'] = "<div style='color: green;font-weight: bold;font-size: 30px;'>Question add successfully.</div>";

                    header("location: ../ask_question.php");
                } else {
                    echo "something is wrong";
                }
            }
        }

    }

    public function getquestion()
    {

        try {


            $db = database::getInstance();

            $query = "SELECT * FROM `question_tbl` ORDER BY id DESC ";
            $stmt = $db->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();


        } catch (\PDOException $e) {
            echo "Error" . $e->getMessage();
        }
        return $data;
        //return $result;
    }

    public function show($id = '')
    {

        $db = database::getInstance();
        $query = "SELECT * FROM `question_tbl` WHERE id=$id";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function q_delete($id = '')
    {
        $db = database::getInstance();
        $statement = $db->prepare("DELETE FROM question_tbl WHERE id=?");
        $status = $statement->execute(array($id));

        if ($status) {
            $_SESSION['Message'] = "<div class='success'>Deleted  successfully.</div>";

            header("location: question_view.php");
        }


    }
}
?>