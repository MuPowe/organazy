<?php

    function dailyMessage()
    {
        $mysqli = new mysqli(DBHOST,DBUSER, DBPASS, DBDB);

        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);

            exit();
        }

        $time = date("H");
        $message = array(0, 0, 0, 0, 0, 0, 0);
        $type = 0;
        $msg = "";
        $query = 'SELECT * FROM users_table WHERE id = ' . $_SESSION['user_info']['id'] . ' LIMIT 1';
        if ($result = $mysqli->query($query)) {

            $user_info = $result->fetch_assoc();
            $result->free();

            if ($time > "4" && $time < "12" && $user_info['type_1'] == 0) {
                $type = 1;
                $message[1] = 1;

            } elseif ($time >= "12" && $time < "17" && $user_info['type_2'] == 0) {
                $type = 2;
                $message[2] = 1;
            } elseif ($time >= "17" && $time < "22" && $user_info['type_3'] == 0) {
                $type = 3;
                $message[3] = 1;
            } elseif ($time >= "22" && $user_info['type_4'] == 0) {
                $type = 4;
                $message[4] = 1;
            }

            $query = 'SELECT * FROM dailymsg WHERE type = ' . $type . ' LIMIT 1';
            if ($result1 = $mysqli->query($query)) {

                while ($row = $result1->fetch_assoc()) {
                    $msg = str_replace("=name=", $_SESSION['user_info']['f_name'], $row["msg"]);

                    $update_views = 'UPDATE users_table SET type_' . $type . ' = ' . $message[$type] . ' WHERE id = ' . $_SESSION['user_info']['id'];
                    $update_views = $mysqli->query($update_views);


                }
                $result1->free();
                return $msg;
            }

        }
    }
?>