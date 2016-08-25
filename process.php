<?php
include('func/config.php');

$post_date = file_get_contents("php://input");
$data = json_decode($post_date);


echo '
<div ng-controller="" >
      <div class="alert alert-info" id="div2">
        <i class="fa fa-info-sign"></i><strong>
        Heads up!</strong> This <a href="components.html#" class="alert-link">alert needs your attention</a>, but it\'s not super important.
      </div>
</div>
';


?>