<?php
    require 'config.php';

    if(isset($_POST["action"])){
        if(isset($_POST["action"]) == "insert"){
            insert();
        }
        if(isset($_POST["action"]) == "edit"){
            edit();
        }else{
            // delete();
        }
    }

    function insert(){
        global $conn;

        $fname = $_POST["f_name"];
        $lname = $_POST["l_name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];

        $sql = "insert into `guests`(`first_name`,`last_name`,`email`,`gender`)
                            values('$fname','$lname','$email','$gender')";
        $result = $conn->query($sql);

        if($result === true){
            echo "Inserted Successfully.";
        }else{
            echo "Not inserted.";
        }

    }

    function edit(){
        global $conn;

        $id = $_POST["id"];
        $fname = $_POST["f_name"];
        $lname = $_POST["l_name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];

        $sql = "update `guests` 
                set `first_name`='$fname',`last_name`='$lname',`email`='$email',`gender`='$gender'
                where `id`='$id' ";
        $result = $conn->query($sql);

        if($result === true){
            echo "Edit Successfully.";
        }else{
            echo "Not edited.";
        }
    }
?>