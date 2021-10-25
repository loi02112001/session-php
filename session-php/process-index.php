<?php
    //Dich vu bao ve
    session_start();//Cong ty dich vu bao ve    
    if(isset($_POST['txtSubmit'])){
        echo $userName =$_POST['txtUsername'];
        echo $password =$_POST['txtPassword'];
        //Buoc1:Ket noi db sever
        $conn = mysqli_connect('localhost','root','','testcode');
        if(!$conn){
            die('Khong the ket noi');
        }
        //Buoc2: Truy van thong tin
        $sql = "SELECT * FROM db_testcode WHERE userName = '$userName'AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        //Buoc3:Xac thuc>Dang nhap>o tren,tra ve 1 ban ghi thoi
        if(mysqli_num_rows($result)>0){
            
            $_SESSION['LoginOk'] = $userName;//Bao ve cua chinh:kiem tra xac thuc
            header("Location:access.php");
        }else{
            header("Location:index.php");
        }
    }
?>