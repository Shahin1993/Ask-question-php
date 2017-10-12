<?php

 namespace App\update;
 use App\database\database;
 session_start();
class update
{

   private $email;

    public function setData($data = '')
    {
        $u_id=$_SESSION['userid'];

       $this->email = $data['email'];
        $this->id = $u_id['id'];
        return $this;
    }


    public function update()
    {
        $db = database::getInstance();
        $query = "UPDATE user_tbl SET email=:e, update_at=:update_at WHERE id=$this->id";
        $stmt = $db->prepare($query);
        $status = $stmt->execute(
            array(
               // ':u' => $this->username,
                ':e' => $this->email,

                ':update_at' => date('Y-m-d h:m:s'),
            ));
        if ($status) {
            $_SESSION['Message'] = "<div style='color: green;font-weight: bold;font-size: 30px;'>Update successfully.</div>";

            header("location:../index.php");
        } else {
            echo "something is wrong";
        }

    }
    public function addPost($data1='')
    {
        $this->u_answer = $data1['u_answer'];
        $this->answer_id = $data1['answer_id'];
       $this->question_id=$data1['question_id'];

        return $this;
    }
    public function updateAnswer()
    {
        $db = database::getInstance();
        $query = "UPDATE answer_tbl SET u_answer=:u WHERE id=$this->answer_id";
        $stmt = $db->prepare($query);
        $status = $stmt->execute(
            array(
                // ':u' => $this->username,
                ':u' => $this->u_answer,
            ));
        if ($status) {
            $_SESSION['Message'] = "<div style='color: green;font-weight: bold;font-size: 30px;'>Update successfully.</div>";

            header("location:../single_question.php?id=".$this->question_id);
        } else {
            echo "something is wrong";
        }

    }
}