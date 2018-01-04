<?php
require_once 'config.php'
?>
<?php
/**
 * Created by PhpStorm.
 * User: 19205
 * Date: 2018/1/3
 * Time: 23:05
 */
$conn = mysqli_connect(servername, username, passwd, dbname);
if (!$conn) {
    die('连接数据库失败' . mysqli_connect_error());
} else {
    if(isset($_POST['username'])&&!empty($_POST['username'])){
        if(isset($_POST['password'])&&!empty($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$password')";

            if (mysqli_query($conn, $sql)) {
                echo "新记录插入成功";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        else{
            echo "请输入密码";
        }

    }
    else{
        echo"请输入用户名";
    }
}

$conn->close();


?>