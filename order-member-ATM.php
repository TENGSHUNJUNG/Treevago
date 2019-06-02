<?php require __DIR__. '/__connect_db.php';

if(empty($_SESSION['room']) or !isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}

    $keys = array_keys($_SESSION['room']);

    $sql = sprintf("SELECT * FROM `room_detail` WHERE sid IN (%s)", implode(',', $keys));

     $rs = $mysqli->query($sql);
//   $row = $rs->fetch_assoc();

//-------------------class

    $c_sql = "SELECT * FROM `treevago_class`";
    $c_rs = $mysqli->query($c_sql);
    $c_data = array();

    while($c_row = $c_rs->fetch_assoc()){
        $c_data[$c_row['sid']] = $c_row;
    }
//---------------------------------order
//第一章表單


////----------- 1. 寫入 orders 表
//------------ 送出表單部分
$sql = sprintf("INSERT INTO `orders`(
    `membersid`, `orderdate`
    ) VALUES ( %s, NOW())",
    $_SESSION['user']['id']
);

$mysqli->query($sql);
$order_sid = $mysqli->insert_id;
//-------------送出表單尾



////-------------------------------orderdetail
foreach($keys as $k){

    $checkin = explode('/', $_SESSION['room'][$k][0]);
    $checkout = explode('/', $_SESSION['room'][$k][1]);

        $d_sql = sprintf("INSERT INTO `orderdetail`
        (`ordersid`, `roomsid`, `checkin`, `checkout`)
        VALUES (%s, %s, '%s', '%s')",
        $order_sid,
        $mysqli->escape_string($k),
            $checkin[2]. '-'. $checkin[0]. '-'. $checkin[1] ,
            $checkout[2]. '-'. $checkout[0]. '-'. $checkout[1]

        );

    $mysqli->query($d_sql);
}

if(! empty($_SESSION['class'])) {
    foreach($_SESSION['class']['sid'] as $k=>$sid){
        if(!empty($_SESSION['class']['people'][$k]) and !empty($_SESSION['class']['time'][$k])){
            $c_sql = sprintf("INSERT INTO `orderdetail`
        (`ordersid`, `classsid`, `people`, `time`)
        VALUES (%s, %s, %s, '%s')",
                $order_sid,
                $mysqli->escape_string($sid),
                $mysqli->escape_string($_SESSION['class']['people'][$k]),
                $mysqli->escape_string($_SESSION['class']['time'][$k])
            );
            $mysqli->query($c_sql);
        }

    }
}







?>

<?php include __DIR__. '/__htmlhead.php'; ?>
    <title>ATM轉帳</title>
    <link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
<meta name="format-detection" content="telephone=no">
<style>
<?php include __DIR__. '/__style_navfooterWithMember.php'; ?>
/*********************main_area01*****************************/
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

a{
    text-decoration: none;
}
.container{
    margin: 0 auto;
    max-width: 100%;
    width:500px ;
}
.box-1 {
    max-width: 100%;
    background: #FFFFFF;
    margin: 20px 0 60px;
    border:1px solid #ff931e;
}
.btn_login a{
    color:#ff931e;
    transition: all 0.5s;
    padding:4px 15px;
}

.btn_login:hover a{
    color: #FFFFFF;
    transition: all 0.5s;
}
.room1_right_price span {
    color: red;
    font: bold;
    font-size: 20px;
}
h1{
    text-align: center;
}
.btn-control{
    max-width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.btn_enter{
    background: #ffffff;
    max-width: 100%;
    margin: 20px auto 30px;
    width: 97px;
    height: 30px;
    border-radius: 15px;
    color: #ff931e;
    border: 1px solid #ff931e;
    line-height: 30px;
    transition: all 0.5s;
    cursor: pointer;
}
.btn_box{
    max-width:250px;
    margin: 0 auto;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 20px;
    margin-bottom: 50px;
}

.btn_enter:hover{
    background: #ff931e;
    border: 1px solid #ff931e;
    transition: all 0.5s;
}
.btn_enter a{
    color:#ff931e;
    padding: 8px 20px;
}
.btn_enter:hover a{
    color:#fff;
    padding: 8px 20px;
    transition: all 0.5s;
}
.btn_first-enter a,
.btn_login-enter a {
    color: #ff931e;
    padding: 4px 13px;
    cursor: pointer;
}
.btn_first-enter:hover a,
.btn_login-enter:hover a{
    color: #FFFFFF;
    transition: all 0.5s;
}
#gotop {
    position: fixed;
    right: 40px;
    bottom: 40px;
    z-index: 999;
}

#gotop img {
    width: 40px;
    height: 40px;
    overflow: hidden;
    object-fit: cover;
    cursor: pointer;
}
.member {
    clear: both;
    text-align: center;
    color: #333333;
    max-width:100%;
    height: 100px;
    line-height: 100px;
    margin-top: 50px;
}


.form_box{
    max-width: 500px;
    margin: 0 auto;
    text-align: end;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 15px;
}

.left{
    width: 45%;
    height: 20px;
    padding: 20px;
    font-size: 18px;
    color:#333333;
}
.right{
    width: 55%;
    height: 20px;
    text-align: left;
    padding: 20px;
    font-size: 18px;
}
.right p , span{
    color:red;
    font-weight: bold;
}
.right b{
    color:#333333;
}
.care-box {
    max-width: 100%;
    padding: 20px;
    text-align: center;
}
.care-box p{
    text-align: justify;
    padding:10px 0;
}
button{

    outline:none;

}
.cont_btn_enter_box {
    margin: 0 auto;
    width: 200px;
    height: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.cont_btn_enter{
    background: #ffffff;
    width: 120px;
    height: 30px;
    border-radius: 15px;
    color: #ff931e;
    border: 1px solid #ff931e;
    text-align: center;
    line-height: 30px;
    margin: 20px;
    transition: all 0.5s;
}
.cont_btn_enter a{
    color:#ff931e;
    padding: 4px 10px;
}
.cont_btn_enter:hover{
    background-color: #ff931e;
    transition: all .5s;
}
.cont_btn_enter:hover a{
    color:#fff;
    transition: all .5s;
}
.btn_h2{
    text-align: center;
    width: 100%;
    height: 100px;
    line-height:100px;
}




.bg{
    display:none;
    position:fixed;
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,.8);
    z-index:9999;
    top:0;
    left:0;
}
.content{
    display:none;
    width:450px;
    height:350px;
    position:fixed;
    border:2px solid #ff931e;
    top:50%;
    margin-top:-150px;
    background:#fff;
    z-index:99999;
    left:50%;
    margin-left:-250px;
}
/*------------------------RWD--------------------------------------*/
@media screen and (max-width:620px) {
    #gotop {
        position: fixed;
        right: 10px;
        bottom: 10px;
    }
}
@media only screen and (max-width:650px) {

    .box-1 {
        max-width: 100%;
        background: #FFFFFF;
        margin: 37px 0;
    }
    .left{
        width: 45%;
        height: 20px;
        padding: 20px;
        font-size: 16px;
        color:#333333;
    }
    .right{
        width: 55%;
        height: 20px;
        text-align: left;
        padding: 15px;
        font-size: 14px;
    }
}

</style>

<?php include __DIR__. '/_navbarWithMember.php'; ?>
<div class="container">
    <?php while($row = $rs->fetch_assoc()): ?>
    <div class="member">
        <h2>ATM轉帳資料</h2>
    </div>
    <div class="box-1">
        <div class="form_box">
            <div class="left"><p>銀行代碼：</p></div>
            <div class="right"><p>(013)國泰世華銀行</p></div>
        </div>
        <div class="form_box">
            <div class="left"><p>轉帳帳戶：</p></div>
            <div class="right"><p>1470-5050-5050-5050</p></div>
        </div>
        <div class="form_box">
            <div class="left"><p>帳戶戶名：</p></div>
            <div class="right"><b>TreeVaGo森林園區</b></div>
        </div>
        <div class="form_box">
            <div class="left"><p>訂金金額：</p></div>
            <div class="right"><span><?= $row['deposit'] ?></span>&nbsp;元</div>
        </div>
        <div class="form_box">
            <div class="left"><p>繳費期限：</p></div>
            <div class="right"><p>24小時內</p></div>
        </div>
    </div>
    <?php endwhile; ?>
    <div class="care-box">
                <h2>【ATM轉帳注意事項】</h2>
        <p> 若選擇ATM付款，房間會為您保留24小時，請於24小時內完成匯款動作， 並於匯款完成後，
            飯店聯絡並確認匯款人金額、資訊，為保留您的權益，匯款明細請自行保存。 透過線上訂房確認後，
            若您需要更改住房時間，請使用訂單修改， 或於上班時間內直撥訂房專線洽詢：0800-000-000為您更改日期之服務，
            上班時間(08:00-20:00)。
        </p>
    </div>
    <div class="btn_box">
        <button type="submit" class="btn_enter"><a href="treevago_index.php">返回首頁</a></button>
        <button type="submit" class="btn_enter"><a href="history.php">查詢訂單</a></button>
    </div>
</div>

<div class="bg"></div>
<div class="content">
    <h2 class="btn_h2">會員中心</h2>
    <div class="cont_btn_enter_box">
        <div class="cont_btn_enter"><a href="order-member.php">尚未結帳訂單</a></div>
        <div class="cont_btn_enter"><a href="edit_user.php">編輯會員資料</a></div>
        <div class="cont_btn_enter"><a href="history.php">歷史訂單查詢</div></a>
    </div>
</div>

<div id="gotop"><img src="images/go_top.svg" alt=""></div>
<?php include __DIR__. '/_footer.php'; ?>

<script>
    $("#gotop").click(function() {
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
</script>
<script>
    $(function(){
        $('.booking_lightbox').click(function(){
            $('.bg').fadeIn(200);
            $('.content').fadeIn(600);
        });
        $('.bg').click(function(){
            $('.bg').fadeOut(800);
            $('.content').fadeOut(800);
        });
    });
</script>
<?php include __DIR__. '/__htmlfoot.php'; ?>
