<!doctype html>
<html>
	<head>
		<title>Đăng kí</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
	</head>
	<body>
		<form action="reg.php" method="post">
		<div class="to">
			<div class="form" >
				<h2>Đăng ký tài khoản</h2>
				<label style="margin-left: -116px;">Tên đăng nhập</label>
				<input type="text" name="user">
				<label style="margin-left: -152px;">Mật khẩu</label>
				<input type="text" name="pass">
				<label>Số điện thoại</label>
				<input type="tel" name="sdt" maxlength="10" style="width: 255px;">	
				<input id="submit" type="submit" name="submit" value="Gửi">
			</div>				
		</div>
		</form>
	</body>
<style>
	*{
    margin:0;
    padding:0;
    border:none;
    font-family: 'Open Sans', sans-serif;
	}
	body {
		overflow: hidden;
		background-color: #ededed;
	}
	.to {
		display: grid;
		grid-template-columns: repeat(12,1fr);
		grid-template-rows: minmax(100px,auto);
	}

	.form {
		border: 1px solid #80808000;
		grid-column: 6/9;
		grid-row: 3;
		height: 391px;
		width: 350px;
		display: flex;
		flex-direction: column;
		align-items: center;
		position: relative;
		border-radius: 15px;
		box-shadow: 0px 0px 14px 0px grey;
		background-color: white;
	}
	h2 {
		margin-top: 50px;
		margin-bottom: 30px;
	}


	label {
		margin-left: -126px;
		display: block;
		font-weight: lighter;

	}
	input{
		display: block;
		border-bottom: 2px solid #00BCD4;
		margin-top: 6px;
		margin-bottom: 10px;
		outline-style: none;
	}
	input[type="text"] {
		padding: 5px;
		width: 70%;
	}

	input#submit {
		padding: 7px;
		width: 50%;
		border-radius: 10px;
		border: none;
		position: absolute;
		bottom: 10px;
		cursor: pointer;
		background: linear-gradient(to right, #fc00ff, #00dbde);
	}
	input#submit:hover{

		background: linear-gradient(to right, #fc466b, #3f5efb); 
	}
</style>
</html>