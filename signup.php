<?php
	include "func/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Organazy - Уеб органайзер за вашето ежедневие</title>
    <meta name="description"
          content="app, web app, responsive, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" />
    <link rel="stylesheet" href="js/fullcalendar/fullcalendar.css" type="text/css" />
    <link rel="stylesheet" href="css/app.v2.css" type="text/css"/>
    <link rel="stylesheet" href="css/font.css" type="text/css" cache="false"/>
</head>
<body>
	<section id="content" class="m-t-lg wrapper-md animated fadeInDown"> <a class="nav-brand" href="index.html">todo</a>
		<div class="row m-n">
			<div class="col-md-4 col-md-offset-4 m-t-lg">
				<section class="panel">
					<header class="panel-heading bg bg-primary text-center"> Регистрация </header>
					<?php 
if(isset($_POST['submit'])){ 
    $query = sprintf("SELECT * FROM users_table WHERE user_name='%s' LIMIT 1",trim(mysqli_real_escape_string($link,$_POST['user_name']))); 
    $sql = mysqli_query($link,$query); 
    $row = mysqli_fetch_array($sql); 

    if($row||empty($_POST['username'])|| empty($_POST['email'])||empty($_POST['password'])|| empty($_POST['re_password'])||$_POST['password']!=$_POST['re_password']){ 
        $error = '<p>'; 
        if(empty($_POST['username'])){ 
            $error .= 'User Name can\'t be empty<br>'; 
        } 
        if(empty($_POST['email'])){ 
            $error .= 'Email can\'t be empty<br>'; 
        } 
        if(empty($_POST['password'])){ 
            $error .= 'Password can\'t be empty<br>'; 
        } 
        if(empty($_POST['re_password'])){ 
            $error .= 'You must re-type your password<br>'; 
        } 
        if($_POST['password']!=$_POST['re_password']){ 
            $error .= 'Passwords don\'t match<br>'; 
        } 
        if($row){ 
            $error .= 'User Name already exists<br>'; 
        } 
        $error .= '</p>'; 
    }else{ 

        $query = sprintf("INSERT INTO users_table(`user_name`,`email`,`password`,`regdate`) 
            VALUES('%s','%s','%s','%s')", 
            trim(mysqli_real_escape_string($link,$_POST['username'])), 
            trim(mysqli_real_escape_string($link,$_POST['email'])), 
            password_hash($_POST['password'], PASSWORD_DEFAULT),
         $regdate = time())or die(mysql_error()); 
        $sql = mysqli_query($link,$query); 

        header("Location: login.php"); 
        exit; 
    } 
} 

if(isset($error)){ 
    echo $error; 
    unset($error); 
} 
?> 
					<form action="" method="POST" class="panel-body">
						<div class="form-group">
							<label class="control-label">Потребителско име</label>
							<input type="text" placeholder="Потребителско име" name="username" class="form-control"> </div>
						<div class="form-group">
							<label class="control-label">Email адрес</label>
							<input type="email" placeholder="test@example.com" name="email" class="form-control"> </div>
						<div class="form-group">
							<label class="control-label">Парола</label>
							<input type="password" id="inputPassword" name="password" placeholder="Password" class="form-control"> </div>
							<div class="form-group">
							<label class="control-label">Повтори парола</label>
							<input type="password" id="inputPassword" name="re_password" placeholder="Password again" class="form-control"> </div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Съгласен съм с<a href="signup.html#">общите правила</a> </label>
						</div>
						<button type="submit" name="submit" class="btn btn-info">Регистрация</button>
						<div class="line line-dashed"></div>
						<p class="text-muted text-center"><small>Вече имаш акаунт?</small>
						</p> <a href="signin.php" class="btn btn-white btn-block">Вход</a> </form>
				</section>
			</div>
		</div>
	</section>
	<!-- footer -->
	<footer id="footer">
		<div class="text-center padder clearfix">
			<p> <small>Mobile first web app framework base on Bootstrap<br>&copy; 2013</small> </p>
		</div>
	</footer>
	<!-- / footer -->
	<script src="js/app.v2.js"></script>
	<!-- Bootstrap -->
	<!-- app -->
</body>

</html>