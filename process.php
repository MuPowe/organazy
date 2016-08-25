<?php
include('func/config.php');
$mysqli = new mysqli(DBHOST,DBUSER, DBPASS, DBDB);



$post_date = file_get_contents("php://input");
$data = json_decode($post_date);

$query = 'INSERT INTO `notes` (`id`, `usr_id`, `note`, `type`, `created`, `expired`, `project_id`) VALUES (NULL, \'1\', \'Да не забравя да забравя всичко!\', \'1\', \'\', \'\', \'1\');';
if ($result = $mysqli->query($query)) {

    $user_info = $result->fetch_assoc();
    $result->free();
}



echo '
<div ng-controller="" >
      <div class="alert alert-info" id="div2">
        
        <?php echo $data->id; ?>
      </div>
</div>
';


?>