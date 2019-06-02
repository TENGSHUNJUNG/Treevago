<?php
require __DIR__. '/__connect_db.php';


$result = array(
    'success' => false,
    'error' => '沒有給足夠的參數',
);

if(!empty($_POST['name']) and !empty($_POST['ic']) and !empty($_POST['email'])
        and !empty($_POST['password']) and !empty($_POST['phone'])) {

    $pass = sha1($_POST['password']); //破壞性加密

    $sql = "INSERT INTO `member`( `name`, `ic`, `email`, `password`, `phone`) VALUES (
            ?, ?, ?,
            ?, ?)
            ";

    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sssss',
        $_POST['name'],
        $_POST['ic'],
        $_POST['email'],
        $pass,
        $_POST['phone']
    );

    $stmt->execute();

    if($stmt->affected_rows==1) {
        $result = array(
            'success' => true,
            'error' => '',
        );
    } elseif ($stmt->affected_rows==-1) {
        $result['error'] = '此 email 已經被使用過了';
    } else {
        $result['error'] = '發生錯誤';
    }
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);


