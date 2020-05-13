<!--Done by Samarth Nehe-->
<?php
    $username=$_POST['username'];

    
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

            $sql = "DELETE FROM project WHERE username='$username'";

            if ($conn->query($sql) === TRUE) {
              echo "Record deleted successfully";
             
            }
            else{
                echo "No such entry exists!!";
            }
            $conn->close(); 
        }
    }
        

?>