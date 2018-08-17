<?php
//Ket noi Database
if(isset($_POST['txtEmail']) && isset($_POST['txtPassword']))
{
    $email=$_POST['txtEmail'];
    $pass=$_POST['txtPassword'];
    $newPass=password_hash($pass,PASSWORD_DEFAULT);


    if($email && $pass){
        $host="localhost";
        $username = "root";
        $password = "";
        $db="Project";
        echo $newPass;
        //1.Ket noi Server
        $conn = new mysqli($host, $username, $password,$db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //2.Truy van Database
        $sql="SELECT * FROM users WHERE email='$email'";
        $result=$conn->query($sql);
        //3. Xu ly ket qua
        if($result->num_rows>0){
            echo 'Email da ton tai. Ban vui long chon dia chi khac';
        }else{
            $sql2="INSERT INTO users value('US003','$email','$email','$newPass')";
            $result2=$conn->query($sql2);
            printf("Affected rows (INSERT): %d\n", $conn->affected_rows);
        }

        //4. Dong ket noi
        $result->close();
        $conn->close();
    }else{
        echo 'Ban phai nhap Username hoac Password';
    }
}else{
    echo 'Username or Password ko xac dinh';
}
?>