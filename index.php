<?php
//require_once 'config.php';
//?>
<?php
///**
// * Created by PhpStorm.
// * User: 19205
// * Date: 2018/1/3
// * Time: 23:05
// */
//$conn = mysqli_connect(servername, username, passwd, dbname);
//if (!$conn) {
//    die('连接数据库失败' . mysqli_connect_error());
//} else {
//	if(isset($_POST['username'])&&isset($_POST['password'])){
//		$username = $_POST['username'];
//		$password = $_POST['password'];
//		$sql = "INSERT INTO users (username, password)
//VALUES ('$username', '$password')";
//
//		if (mysqli_query($conn, $sql)) {
//			echo "新记录插入成功";
//		} else {
//			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//		}
//	}
//}
//
//$conn->close();
//
//
//?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>登录</title>
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/common.css" />
	</head>

	<body>
		<div class="wrap login_wrap">
			<div class="content">

				<div class="logo"></div>

				<div class="login_box">

					<div class="login_form">
						<div class="login_title">
登录
						</div>
						<form action="login.php" method="post">

							<div class="form_text_ipt">
								<input name="username" type="text" placeholder="手机号/邮箱">
							</div>
							<div class="ececk_warning"><span>数据不能为空</span></div>
							<div class="form_text_ipt">
								<input name="password" type="password" placeholder="密码">
							</div>
							<div class="ececk_warning"><span>数据不能为空</span></div>
							<div class="form_check_ipt">
								<div class="left check_left">
									<label><input name="" type="checkbox"> 下次自动登录</label>
								</div>
								<div class="right check_right">
									<a href="#">忘记密码</a>
								</div>
							</div>
							<div class="form_btn">
								<button type="submit">登录</button>
							</div>
							<div class="form_reg_btn">
								<span>还没有帐号？</span><a href="register.html">马上注册</a>
							</div>
						</form>
						<div class="other_login">
							<div class="left other_left">
								<span>其它登录方式</span>
							</div>
							<div class="right other_right">
								<a href="#">QQ登录</a>
								<a href="#">微信登录</a>
								<a href="#">微博登录</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.min.js" ></script>
		<script type="text/javascript" src="js/common.js" ></script>
	</body>
</html>