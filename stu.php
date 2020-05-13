<!--Done by Samarth Nehe-->
<?php
    $username=$_POST['username'];
    $age=$_POST['age'];
    $std=$_POST['std'];

    
    if (!empty($username) && !empty($age) && !empty($std)  ){
        $host="localhost";
        $dbUsername="root";
        $dbPassword="";
        $dbname="newdata";

        $conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            
            $INSERT = "INSERT Into project (username,age,std)values(?,?,?)";

    
            
                $stmt=$conn->prepare($INSERT);
                $stmt->bind_param("sii",$username,$age,$std);
                $stmt->execute();
                echo "Your message has been sent!!";
                $stmt->close();
                $conn->close();
        }
        
    }else{
        echo "All feilds required";
    }
?>