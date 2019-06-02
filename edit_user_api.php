<?php
require __DIR__. '/__connect_db.php';

if(!isset($_SESSION['user'])){
    echo json_encode(array(
        'success' => false,
        'error' => '沒有登入',
    ));
    exit;
}

$result = array(
    'success' => false,
    'error' => '沒有給足夠的參數',
    'post' => $_POST,
);

if(!empty($_POST['password']) and !empty($_POST['name'])) {
    $pass = sha1($_POST['password']); //破壞性加密

    $sql = "UPDATE `member` SET
            `name`=?,
            `ic`=?,
            `email`=?,
            `phone`=?
            WHERE `id`=? AND `password`=?";



    $stmt = $mysqli->prepare($sql);
    //echo $mysqli->error; //除錯

    $stmt->bind_param('ssssis',
        $_POST['name'],
        $_POST['ic'],
        $_POST['email'],
        $_POST['phone'],
        $_SESSION['user']['id'],
        $pass
    );

    $stmt->execute();

    if($stmt->affected_rows==1) {
        $_SESSION['user']['name'] = $_POST['name'];
        $_SESSION['user']['ic'] = $_POST['ic'];
        $_SESSION['user']['email'] = $_POST['email'];
        $_SESSION['user']['phone'] = $_POST['phone'];

        $result['success'] = true;

    } else {
        $result['error'] = '密碼錯誤或資料未變更';
    }
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);


