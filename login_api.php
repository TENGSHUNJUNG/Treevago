<?php
require __DIR__. '/__connect_db.php';

$result = array(
    'success' => false,
);

if(!empty($_POST['email']) and !empty($_POST['password'])) {

    $pass = sha1($_POST['password']);

    $sql = sprintf("SELECT 
`id`, `name`, `ic`, `email`, `password`, `phone`
 FROM `member` WHERE `email`='%s' AND `password`='%s'",
        $mysqli->escape_string($_POST['email']),
        $pass
    );
//    echo $sql;
//
//    exit;
    $rs = $mysqli->query($sql);



    if($rs->num_rows){
        $row = $rs->fetch_assoc();
        // unset($row['password']);

        $result['success'] = true;
        $result['data'] = $row;

        $_SESSION['user'] = $row;

    }
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);


