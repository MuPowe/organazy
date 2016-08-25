<?php
include('func/config.php');
$mysqli = new mysqli(DBHOST,DBUSER, DBPASS, DBDB);

$post_date = file_get_contents("php://input");
$data = json_decode($post_date);
$now = new DateTime();
if($data->type == 1) {

    $query = 'INSERT INTO `notes` (`usr_id`, `note`, `type`, `created`, `expired`, `project_id`) VALUES (\''.$data->id.'\', \''.$data->msg.'\', \'1\', \''.$now->format('Y-m-d H:i:s').'\', \'\', \'1\');';
    $mysqli->set_charset("utf8");
    if ($result = $mysqli->query($query)) {
        echo '
            <div ng-controller="" >
                  <div class="alert alert-info" id="div2">
                    Бележката беше добавена успешно! 
                  </div>
            </div>  <script>location.reload();</script>
            ';


    } else {
        echo $mysqli->error;
    }


}
?>