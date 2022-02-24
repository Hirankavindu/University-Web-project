<?php
$amount = filter_input(INPUT_POST,'amount');
$cardnumber = filter_input(INPUT_POST,'cardnumber');
$holdername = filter_input(INPUT_POST,'holdername');
$month = filter_input(INPUT_POST,'month');
$year = filter_input(INPUT_POST,'year');
$cvv = filter_input(INPUT_POST,'cvv');
if(!empty($amount)){
if(!empty($cardnumber)){
    if(!empty($holdername)){
        if(!empty($month)){
            if(!empty($year)){
                if(!empty($cvv)){
                    $host = "localhost";
                    $dbusername = "root";
                    $dbpassword = "";
                    $dbname = "lms";

                    //create connection
                    $conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

                    if(mysqli_connect_error()){
                        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
                    }
                    else{
                        $sql = "INSERT INTO donationmethod (amount,cardnumber,holdername,month,year,cvv) values ('$amount','$cardnumber','$holdername','$month','$year','$cvv')";
                        if ($conn->query($sql)){
                            echo "New record is inserted succesfully";
                        }
                        else{
                            echo "Error: ". $sql."<br>" .$conn->error;
                        }
                        $conn->close();
                    }

                }
                else{
                    echo "cvv should not be empty";
                    die();
                }

            }
            else{
                echo "year should not be empty";
                die();
            }

        }
        else{
            echo "month should not be empty";
            die();
        }

    }
    else{
        echo "holder name should not be empty";
        die();
    }

}
else{
    echo "card number should not be empty";
    die();
}
}
else{
    echo "amount should not be empty";
    die();
}



?>