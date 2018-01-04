<?php
/**
 * Created by PhpStorm.
 * User: 19205
 * Date: 2018/1/3
 * Time: 22:55
 */
require_once 'config.php';

function connectDB(){
    return mysqli_connect(servername,username,passwd);
}
function createDB(){
    $conn = connectDB();
    $sql = "CREATE DATABASE mydb"; //将mydb替换成想要创建的数据库名字
    if (!mysqli_query($conn,$sql)){
        echo '创建数据库失败'.mysqli_connect_error();
    }
    else{
        echo '数据库创建成功';
    }
}
function create_tatble(){
    $conn = new mysqli(servername, username, passwd, dbname);
    if (!$conn) {
        die('连接数据库失败' . mysqli_connect_error());
    } else {
        $sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(20) NOT NULL,
password VARCHAR(15) NOT NULL
)";
        if ($conn->query($sql) === TRUE) {
            echo "Table users created successfully";
        } else {
            echo "创建数据表错误: " . $conn->error;
        }
    }
}
create_tatble();
