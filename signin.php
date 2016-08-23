<?php
	include "func/config.php";
    include "func/s-header.php";
?>

      <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
         <a class="nav-brand" href="index.html">todo</a> 
         <div class="row m-n">
            <div class="col-md-4 col-md-offset-4 m-t-lg">
               <section class="panel">
                  <header class="panel-heading text-center"> Вход</header>    	

          <?php 
					if(isset($_POST['submit'])){

					   $username = trim(mysqli_real_escape_string($link,$_POST['username'])); 
					   $password = trim(mysqli_real_escape_string($link,$_POST['password']));
                        $sql1 = mysqli_query($link,"SELECT * FROM users_table WHERE user_name='$username' LIMIT 1");
					   $row2 = mysqli_fetch_assoc($sql1);
					   $pass = $row2['password'];

					if (password_verify($password, $pass)) {

					        session_start(); 
					        $_SESSION['user_info'] = $row2; 
					        $_SESSION['is_logged'] = TRUE; 
					        header("Location: index.php"); 
					        exit; 
					          
					} else {
					echo '
					<br />
  					<div class="alert alert-danger" style="width: 95%; margin: 0 auto;">
                <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                <i class="fa fa-ban-circle"></i>
                <strong>Грешно потребителско име или парола!</strong>
            </div>
					';
					}
					}
					?>




                  <form action="" method="POST" class="panel-body">
                     <div class="form-group"> <label class="control-label">Потребителско име</label> <input type="text" name="username"placeholder="Username" class="form-control"> </div>
                     <div class="form-group"> <label class="control-label">Парола</label> <input type="password" name="password" id="inputPassword" placeholder="Password" class="form-control"> </div>
                     <div class="checkbox"> <label> <input type="checkbox"> Запомни ме </label> </div>
                     <a href="signin.php#" class="pull-right m-t-xs"><small>Забравена парола?<small></a> <button type="submit" class="btn btn-info" name="submit">Вход</button>
                     <div class="line line-dashed"></div>
                     <a href="signin.php#" class="btn btn-facebook btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a> <a href="signin.html#" class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
                     <div class="line line-dashed"></div>
                     <p class="text-muted text-center"><small style="font-size: 13px;">Все още нямаш акаунт?</small></p>
                     <a href="signup.php" class="btn btn-white btn-block">Регистрирай се</a>
                  </form>
               </section>
            </div>
         </div>
      </section>
      <!-- footer --> 
      <footer id="footer">
         <div class="text-center padder clearfix">
            <p> <small>Mobile first web app framework base on Bootstrap<br>&copy; <?php echo date("Y"); ?></small> </p>
         </div>
      </footer>
      <!-- / footer --><script src="js/app.v2.js"></script> <!-- Bootstrap --> <!-- app --> 
   </body>
</html>