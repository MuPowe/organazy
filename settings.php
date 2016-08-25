<?php
	include "func/header.php"
?>
			<section id="content">
				<section class="vbox">
					<header class="header bg-light bg-gradient b-b">
						<p><strong>Профил</strong></p>
					</header>
					<section class="scrollable wrapper">
						<div class="container">
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" style="margin: 0 auto;" alt="avatar">
          <h6>Качи друга снимка...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Лична информация</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Име:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Фамилия:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Поле:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)" selected="selected">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
          	<br /><br />
          <div class="form-group">
            <label class="col-md-3 control-label">Парола:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Запази">
              <span></span>
              <input type="reset" class="btn btn-default" value="Отмяна">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
					</section>
				</section>
			</section>
			<!-- /.vbox --> 
		</section>
		<script src="js/app.v2.js"></script> <!-- Bootstrap --> <!-- App --> <!-- Sortable --> <script src="js/jquery-ui-1.10.3.custom.min.js" cache="false"></script> <script src="js/jquery.ui.touch-punch.min.js" cache="false"></script>
	</body>
</html>