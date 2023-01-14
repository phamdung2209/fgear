<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Practice Database</title>
	<link rel="stylesheet" href="database.css">
</head>
<body>
    <form action="" method="POST" class="form">
    	<div class="form__row">
    		<label for="" class="form__label">User Name: </label>
    		<input type="text" name="username">
    	</div>

    	<div class="form__row">
    		<label for="" class="form__label">Pass Word: </label>
    		<input type="text" name="password">
    	</div>

    	<div class="form__row">
    		<input type="submit" name="result">
    	</div>
    </form>

	<?php
    $connect = mysqli_connect('localhost','root','','learnmysql');
    if($connect == true){
        echo "Kết nối thành công";
    }
    else{
        echo "Kết nối thất bại";
    }

    if(isset($_POST['result'])){
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	$sql = "SELECT * FROM user WHERE User_Name ='$username' AND Pass_word ='$password'"; 

    	$result = mysqli_query($connect,$sql);
        //B4: Nhận được kết quả và xử lý
        //Đếm số dòng
        $count = mysqli_num_rows($result);
        if($count==0){
            echo "Đăng nhập thất bại";
        }
        else{
            echo "Đăng nhập thành công";
        }
    }
    ?>
    <br><br><br>
    <div>Đăng ký tài khoản, mật khẩu</div>
	<form action="" method="POST" class="form-r">
		<div class="form__row">
			<label for="" class="form__label">Tên tài khoản: </label>
			<input type="text" name="register__username">
		</div>

		<div class="form__row">
			<label for="" class="form__label">Mật khẩu: </label>
			<input type="text" name="register__password">
		</div>

		<div class="form__row">
			<input type="submit" name="register">
		</div>
	</form>
	<?php
	if (isset($_POST['register'])) {
		$register__username = $_POST["register__username"];
		$register__password = $_POST["register__password"];
		$sql__r = "INSERT INTO user('ID', 'User_Name', 'Pass_Word') VALUES ($_POST["register__username"], $_POST["register__password"])";
		$result__r = mysqli_query($connect,$sql__r);
		$count__r = mysqli_num_rows($result__r);
        if($count__r==0){
            echo "Đăng ký thất bại!";
        }
        else{
            echo "Đăng ký thành công!";
        }
	}
	?>
</body>
</html>