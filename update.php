<!--Done by Samarth Nehe-->
<?php
    $username=$_POST['username'];
    $age=$_POST['age'];
    $std=$_POST['std'];

    if (!empty($username)){
        $host="localhost";
        $dbUsername="root";
        $dbPassword="";
        $dbname="newdata";

        $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{

            $sql = "UPDATE project SET age='$age',std='$std' WHERE username='$username'";

            if ($conn->query($sql) === TRUE) {
              echo "Record updated successfully";
             
            }
            else{
                echo "No such entry exists!!";
            }
            $conn->close(); 
        }
    }
        

?>