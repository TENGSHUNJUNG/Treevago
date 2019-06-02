<?php require __DIR__. '/__connect_db.php';

if(empty($_SESSION['room']) or !isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}


$t = time() - 180*24*60*60;
$t2 = date('Y-m-d', $t);
/*
$sql = sprintf("SELECT * FROM `orders` WHERE `member_sid`=%s AND `order_date` > '%s' ORDER BY `order_date` DESC",
        $_SESSION['user']['id'],
        $t2
    );
*/

$sql = sprintf("SELECT
o.`orderdate`,
d.`ordersid`,
d.`roomsid`,
d.`checkin`,
d.`checkout`,
r.`roomname`,
r.`price`,
r.`people`,
r.`deposit`
FROM `orders` o
JOIN `orderdetail` d ON o.sid=d.ordersid
JOIN `room_detail` r ON d.roomsid=r.sid
WHERE o.`membersid`=%s
ORDER BY o.`orderdate` DESC;",
    $_SESSION['user']['id']
);
//JOIN `treevago_class` c ON d.classsid=c.sid

$rs = $mysqli->query($sql);

$data = array();

while($r=$rs->fetch_assoc()){
    $data[] = array(
    'ordersid' => $r['ordersid'],
    'orderdate' => $r['orderdate'],
    'roomsid' => $r['roomsid'],
    'checkin' => $r['checkin'],
    'checkout' => $r['checkout'],
    'roomname' => $r['roomname'],
    'price' => $r['price'],
    'people' => $r['people'],
     'deposit' => $r['deposit']

);
}
//------------------------------------------------
$c_sql = sprintf("SELECT
o.`orderdate`,
d.`ordersid`,
d.`classsid`,
d.`people`,
d.`time`,
c.`classname`,
c.`price`
FROM `orders` o
JOIN `orderdetail` d ON o.sid=d.ordersid
JOIN `treevago_class` c ON d.classsid=c.sid
WHERE o.`membersid`=%s
ORDER BY o.`orderdate` DESC;",
    $_SESSION['user']['id']
);
//echo $c_sql;
$c_rs=$mysqli->query($c_sql);
$c_data = array();


while($c_r=$c_rs->fetch_assoc()){
    $c_data[] = array(
        'classsid' => $c_r['classsid'],
        'people' => $c_r['people'],
        'time' => $c_r['time'],
        'classname'=> $c_r['classname'],
        'price'=> $c_r['price']
    );
}

?>

<?php include __DIR__. '/__htmlhead.php'; ?>
    <title>歷史訂單</title>
    <link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
<style>
<?php include __DIR__. '/__style_navfooterWithMember.php'; ?>
/*********************main_area01*****************************/

a{
    text-decoration: none;
}
.container{
    margin: 0 auto;
    max-width: 100%;
    width:784px ;
}
.box-1 {
    max-width: 100%;
    min-height: 320px;
    background: #FFFFFF;
    margin: 40px 0 60px;
    height: auto;
}

.box-1-1,
.box-2-1 {
    width: 320px;
    min-height: 200px;
    margin: 23px 19px 25px 38px;
    overflow: hidden;
    float: left;
}

.box-1-2,
.box-2-2 {
    width: 320px;
    min-height: 150px;
    margin: 23px 19px 0px 55px;

    float: left;
}

.box-1-3,
.box-2-3 {
    width: 320px;
    min-height: 38px;
    margin: 12px 19px 0px 55px;
    float: left;
}

.box-2 {
    max-width: 100%;
    height: 100%;
    min-height: 300px;
    background: #FFFFFF;
    margin: 40px 0 60px;
}

.title {
    color: #333333;
    text-align: center;
    max-width: 784px;
    height: 30px;
    line-height: 60px;
    margin-bottom: 10px;
}

.title>h3 {
    color: #348631;
    font-size: 20px;
}

.btn_first,
.btn_login {
    width: 97px;
    height: 30px;
    border-radius: 15px;
    color: #ff931e;
    border: 1px solid #ff931e;
    text-align: center;
    line-height: 30px;
    margin: 12px 10px 0 15px;
    transition: all 0.5s;
}
.btn_login a{
    color:#ff931e;
    transition: all 0.5s;
    padding:4px 15px;
}
.btn_back{
    width: 97px;
    height: 30px;
    border-radius: 15px;
    border: 1px solid #ff931e;
    text-align: center;
    line-height: 30px;
    margin: 30px 10px 0 15px;
    background-color: #fff;
}
.btn_back a{
    padding:4px 15px;
    color:#ff931e;
}
.btn_first:hover,
.btn_login:hover {
    background: #ff931e;
    border: 1px solid #ff931e;
    transition: all 0.5s;
    color:#fff;
}
.btn_login:hover a{
    color: #FFFFFF;
    transition: all 0.5s;
}
.btn-control {
    display: flex;
    justify-content: center;
    max-width: 684px;
    height: 40px;
}

span{
    color:#348631;
    font-size: 18px;
}
.checkbox{
    margin: 0 auto;
    text-align: center;
    margin-bottom:20px;
}
#check_alert{
    text-align: center;
    max-width: 200px;
    left: 50%;
    margin: 30px 0 0 -100px ;
    position: absolute;
    color:red;
}

.room1_right_price span {
    color: red;
    font-weight: bold;
    font-size: 20px;
}



h1{
    text-align: center;
}
.h1_div{
    margin: 0 auto;
    width: 100%;
    text-align: center;
    padding: 20px;
}

.care-box {
    max-width: 100%;
    margin: 200px 0 40px 0 ;
    text-align: left;
    border:1px solid #000;
    padding: 20px;
}

.care-box>p,
.care-box>h2 {
    margin: 20px 0;
}

.care-box>h2 {
    text-align: center;
}

.product-img{
    width: 320px;
    height: 200px;
}
.btn_first-enter,
.btn_login-enter {
    width: 97px;
    height: 30px;
    border-radius: 15px;
    border: 1px solid #ff931e;
    text-align: center;
    line-height: 30px;
    margin: 12px 10px 0 15px;
    transition: all 0.5s;
    background: #ffffff;
    color: #ff931e;
}
.btn_first-enter a,
.btn_login-enter a {
    color: #ff931e;
    padding: 4px 13px;
    cursor: pointer;
}
.btn_first-enter:hover,
.btn_login-enter:hover {
    color: #FFFFFF;
    background: #ff931e;
    border: 1px solid #ff931e;
    transition: all 0.5s;
}
.btn_first-enter:hover a,
.btn_login-enter:hover a{
    color: #FFFFFF;
    transition: all 0.5s;
}
.btn-control-enter{
    display: flex;
    justify-content: center;
    max-width: 784px;
    height: 40px;
    margin-bottom: 50px;
}
.total_box{
    max-width: 100%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-bottom: 80px;
}
.total{
    max-width: 100%;
    width: 240px;
    height: 40px;
    border-bottom: 1px solid #ff931e;
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
.total h2{
    color:#348631;
}
.total b{
    font-size: 24px;
}
.total span{
    color:red;
    font-weight: bold;
    font-size: 30px;
}

.room1_right_price{
    float: right;
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
.order_box{
    max-width: 100%;
    text-align: center;
    line-height: 36px;
}
h1{
    max-width: 100%;
    text-align: center;
    height: 150px;
    line-height: 150px;
}
.user{
    color:#ff931e;
    font-size: 24px;
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
        min-height: 570px;
        background: #FFFFFF;
        margin: 37px 0;
        height: 100%;
    }

    .box-1-1,
    .box-2-1 {
        max-width: 320px;
        min-height: 200px;
        margin: 23px 19px 25px 25px;
        float: left;
    }

    .box-1-2,
    .box-2-2 {
        max-width: 320px;
        min-height: 150px;
        margin: 23px 19px 0px 25px;
        float: left;
    }

    .box-1-3,
    .box-2-3 {
        max-width: 320px;
        min-height: 38px;
        margin: 12px 19px 0px 55px;
        float: left;
    }

    .box-2 {
        max-width: 100%;
        height: 100%;
        min-height: 550px;
        background: #FFFFFF;
        margin: 40px 0;
    }

    .btn-control {
        display: flex;
        justify-content: center;
        max-width: 249px;
        height: 40px;
    }

}

</style>
<style>
    lable{
        width: 100px;
        height: 200px;
    }
</style>


<?php include __DIR__. '/_navbarWithMember.php'; ?>


<div class="container">
    <h1>歷史訂單</h1>
    <div class="order_box">
        <?php if(isset($_SESSION['user'])): ?>
        <h3><span class="user"><?= $_SESSION['user']['name'] ?></span>&nbsp;,&nbsp;您的訂單紀錄</h3>
        <?php endif; ?>
        <?php foreach($data as $o_item): ?>
            <h3>訂購日期：&nbsp;<span><?= $o_item['orderdate'] ?></span></h3>
            <h3>訂單編號：&nbsp;<span><?= $o_item['ordersid'] ?></span></h3>
    </div>



    <div class="box-1">
        <div class="title">
            <h3>房間</h3></div>

        <div class="box-1-1">

            <img class="product-img" src="./images/CL/CL<?= $o_item['roomsid'] ?>.png" >
        </div>

        <div class="box-1-2">
            <h3>房型：<span><?= $o_item['roomname'] ?></span></h3>
            <br>
            <h4>人數：<?= $o_item['people'] ?></span></h4>
            <br>
            <h4>入住時間：<?= $o_item['checkin'] ?></h4>
            <h4>退房時間：<?= $o_item['checkout'] ?></h4>
            <br>
            <div class="room1_right_price"><h4>森林價：<span><?= $o_item['price'] ?></span> /天</h4></div>
        </div>
        <div class="box-1-3">
            <div class="btn-control">
            </div>
        </div>
    </div>

    <?php foreach($c_data as $c_item): ?>
        <div class="box-2">
            <div class="title">
                <h3>課程</h3></div>

            <div class="box-2-1">
                <img src="./images/CL/C<?= $c_item['classsid'] ?>.png" alt="">
            </div>
            <div class="box-2-2">
                <h3>課程名稱：<span><?= $c_item['classname'] ?><span></h3>
                <br>
                <h4>人數：<span><?= $c_item['people'] ?></span></h4>
                <br>
                <h4>上課時段：<?= $c_item['time'] ?></h4>
                <br>
                <div class="room1_right_price"><h4>價錢：<span><?= $c_item['price'] ?></span>/人</h4></div>
            </div>
            <div class="box-2-3">
                <div class="btn-control">
                </div>
            </div>
        </div>

    <?php endforeach; ?>
    <?php endforeach; ?>
    <div class="total_box">
        <div class="total">
            <h2>預付訂金：</h2>&nbsp
            <span><?= $o_item['deposit'] ?></span>&nbsp;&nbsp;<b>元</b>
        </div>
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
