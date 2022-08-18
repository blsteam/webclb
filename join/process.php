<?php 
    require_once "config.php";
    if(isset($_POST["submit"]))
    {

        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $cpassword = md5($_POST["cpassword"]);
        $birthday = $_POST["birthday"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $social = $_POST["social"];
        $options = $_POST["option"];
        if($name == "" || $username == "" || $password == ""|| $cpassword == "" || $email == "" || $phone == "" || $options == "")
        {
            echo "<script>alert('Thông tin không được để trống !');</script>";
        }else{
            if($cpassword == $password)
            {
                $sql = "SELECT * FROM users WHERE username = '$username'";
                $result = mysqli_query($conn, $sql);
                if(!$result->num_rows >0)
                {
                    $sql = "INSERT INTO users(name, username, password, birthday, email, phone,social , options) VALUES ('$name', '$username', '$password', '$birthday', '$email', '$phone','$social' ,'$options')" ;
                    $result = mysqli_query($conn, $sql);
                    if($result)
                    {
                        $name = "";
                        $username = "";
                        $_POST['password'] = "";
                        $_POST['cpassword'] = "";
                        $birthday = "";
                        $email = "";
                        $phone = "";
                        $social = "";
                        $options = "";
                        echo "<script>alert('Đăng ký thành công ! Vui lòng kiểm tra lại email trong vòng 24h')</script>";
                        header("refresh:0;url=/SBLC/about/about.html");
                    }
                    else{
                        echo "<script>alert('Đăng ký không thành công ! Lỗi hệ thống')</script>";   
                    }
                }else{
                    echo "<script>alert('$username - Đã tồn tại')</script>";
                }
            }else{
                echo "<script>alert('$password - $cpassword Mật khẩu không khớp')</script>";
            }
        }
    }

?>