<?php
 $firstname = filter_input(INPUT_POST, 'firstname');
 $lastname = filter_input(INPUT_POST, 'lastname');
 $username = filter_input(INPUT_POST, 'username');
 $email = filter_input(INPUT_POST, 'email');
 $password = filter_input(INPUT_POST, 'password');
 $confirmpassword = filter_input(INPUT_POST, 'confirmpassword');


 if(!empty($firstname)){
if(!empty($lastname)){
    if(!empty($username)){
        if(!empty($email)){
            if(!empty($password)){
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "lms";

                //create connection
                $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

                if(mysqli_connect_error()){
                    die('connect Error ('.mysqli_connect_errno().')' .mysqli_connect_error());
                }
                else{
                    $sql = "INSERT INTO student_registration (firstname,lastname,username,email,password,confirmpassword) values ('$firstname',' $lastname','$username',' $email','$password','$confirmpassword')";
                    if($conn->query($sql)){
                        echo "New record is inserted successfully";
                    }
                    else{
                        echo "Error:".$sql."<br>".$conn->error;
                    }
                    $conn->close();
                }

            }
            else{
                echo "email should not be empty";
                die();
            }

        }
        else{
            echo "email should not be empty";
            die();
        }

    }
    else{
        echo "Username should not be empty";
        die();
    }
    
}
else{
    echo "Lastname should not be empty";
    die();

 }
}

 else{
     echo "Firstname shoukd not be empty";
     die();
 }

?>