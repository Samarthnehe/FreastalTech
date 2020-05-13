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

            $sql = "SELECT age,std FROM demo WHERE username='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  echo "The age of $username is: " . $row["age"]. "<br>$username is of ". $row["std"]."th standard";
                }
              } else {
                echo "0 results";
              }
              $conn->close();
              
        }
    }
        

?>