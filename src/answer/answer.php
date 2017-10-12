<?php

 namespace App\answer;
 use App\database\database;
class answer
{
    private $u_answer;
    private $question_id;

    public function addAnswer($data1 = '')
    {
        $this->u_answer = $data1['u_answer'];
        $this->question_id = $data1['question_id'];


        return $this;

    }

    public function storeAnswer()
    {
        session_start();
        $row = $_SESSION['userid'];
        if($_POST) {
            if (empty($this->u_answer)) {
                $_SESSION['Message'] = "<div style='color:darkblue;font-weight: bold;font-size:18px;'>Answer cannot be empty</div>";
                header("location: ../single_question.php?id=" . $this->question_id);
            } else {
                $db = database::getInstance();
                $query = "INSERT INTO answer_tbl(u_answer,q_id,u_id,a_date) values(:a, :q_id, :u_name,  :d)";
                $stmt = $db->prepare($query);
                $status = $stmt->execute(
                    array(
                        ':a' => $this->u_answer,
                        ':q_id' => $this->question_id,
                        ':u_name' => $row['id'],
                        ':d' => date('Y-m-d h:m:s'),


                    ));
                if ($status) {
                    $_SESSION['Message'] = "<div style='color: green;font-weight: bold;font-size:30px;'>Answer post successfully.</div>";

                    header("location: ../single_question.php?id=" . $this->question_id);
                } else {
                    echo "something is wrong";
                }

            }
        }
    }


    public function getAlldata()
    {

        try {


            $db =  database::getInstance();
            $query = "SELECT * FROM `answer_tbl` where q_id=? ";
            $stmt = $db->prepare($query);
            $stmt->execute(array($_GET['id']));
            $data = $stmt->fetchAll();


        } catch (PDOException $e) {
            echo "Error" . $e->getMessage();
        }
        return $data;
    }
    public function showAnswer($id = '')
    {

        $db =  database::getInstance();
        $query = "SELECT * FROM `answer_tbl` WHERE id=?";
        $stmt = $db->prepare($query);
        $stmt->execute(array($id));
        $data = $stmt->fetch();
        return $data;
    }

    public function updateAnswer($id = '')
    {
        $db =  database::getInstance();
        $query = "UPDATE answer_tbl SET u_answer WHERE id=?";
        $stmt = $db->prepare($query);
        $status = $stmt->execute(
            array($id));
        if ($status) {
            $_SESSION['Message'] = "<div style='color: green;font-weight: bold;font-size: 30px;'>Update successfully.</div>";

            header("location:../index.php");
        } else {
            echo "something is wrong";
        }

    }

    public function count()
    {

        $db =  database::getInstance();

        $statement= $db->prepare("SELECT * FROM answer_tbl WHERE q_id=?");
        $statement->execute(array($this->question_id));
        $result2= $statement->rowCount();
        //echo $result2;


        return $result2;
    }
}
?>