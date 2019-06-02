<?php require __DIR__. '/__connect_db.php';
//
//$sql = "SELECT * FROM `room_list`";
//$rs = $mysqli->query($sql);



//$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0; /*分類的*/

//$w = '';
//$param = '';
//$svg = 0;
//
//if(!empty($cate)){
//    $w = "WHERE `categories_id`=$cate";
//    $param = "&cate=$cate";
//}
//
//$t_sql = "SELECT COUNT(1) FROM `room_type` $w";
//$t_rs = $mysqli->query($t_sql);
//$total_rows = $t_rs->fetch_row()[0];
//echo $t_sql;

$sql = sprintf("SELECT * FROM `room_list` ORDER BY `sid`");
$rs = $mysqli->query($sql);








?>
<link rel="stylesheet" href="css/room_hover.css">
<link rel="stylesheet" href="css/room_hover2.css">
<link rel="stylesheet" href="css/room_hover3.css">
<link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
<?php include __DIR__. '/__htmlhead.php'; ?>
<title>TreeVaGo房型介紹</title>
<meta name="format-detection" content="telephone=no">
<style>
    <?php include __DIR__. '/__style_navfooterWithMember.php'; ?>
    .container {
        width: 1180px;
        max-width: 100%;
        margin: 0 auto;
        /*border: solid 1px #000;*/
    }
    a{
        text-decoration: none;
    }
    .room1 {
        width: 100%;
        height: 260px;
        background-color: #f2f2f2;
        margin: 0 auto 40px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }

    .room1_left {
        width: 550px;
        display: flex;
        justify-content: flex-end;
    }

    .room1_img {
        width: 445px;
        height: 220px;
        overflow: hidden;
    }

    .room1_img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .room1_right {
        width: 550px;
        height: 220px;
    }

    .room1_right_price {
        float: right;
        margin-top: 60px;
        margin-right: 10px;
        color: #333333;
    }

    .room1_right_price b {
        font-size: 30px;
        color: #E01800;
    }

    .room1_p,
    h4,
    h3 {
        line-height: 30px;
    }

    .room1_p,
    h4 {
        color: #348631;
    }

    h3 {
        color: #333333;
    }

    .room1_p1 {
        font-size: 14px;
        color: #666666;
    }

    .room1_button {
        margin-top: 20px;
        margin-right: 10px;
        border-radius: 20px;
        border: 1px solid #ff931e;
        float: right;
        text-align: center;
        line-height: 35px;

    }

    .room1_button a {
        color: #333333;
        padding: 10px 20px;
        text-decoration: none;
    }

    .room1_button:hover {
        background-color: #ff931e;
        transition: all .5s;
    }

    .room1_button:hover a {
        color: #fff;
        transition: all .5s;
    }

    .display_none {
        display: none;
    }

    .detail_control{
        max-width:450px;
    }
    .room2_right {
        justify-content: flex-start;
    }
    .room2_left {
        width: 450px;
        margin-left:100px;
    }
    ..room2_left_box{
        display: flex;
        justify-content: flex-end;
    }
    .room2 {
        background-color: rgba(0, 0, 0, 0);
        margin-top: 76px;
        flex-direction: row-reverse;
    }
    .h1_div{
        margin: 0 auto;
        width: 100%;
        text-align: center;
        line-height: 170px;
        padding: 52px;
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
    /*******************content-rwd*********************/

    @media only screen and (max-width:1120px) {
        .room1 {
            width: 80%;
            height: 500px;
            justify-content: center;
        }
        .room1_left {
            justify-content: center;
            align-items: center;
            width: 100%;
            min-width: 350px;
            height: auto;
        }
        .room2_left {
            margin-left:0px;
        }

    }

    @media only screen and (max-width:650px) {
        .room1 {
            height: 540px;
        }
        .room1_right {
            margin-top: -50px;
        }
        .room1_img {
            width: 80%;
        }
        .room1_left {
            display: flex;
            justify-content: center;
        }
        .room2_left {
            width: 100%;
        }
        figcaption{
            display: none;
        }
        .h1_div{
            padding: 0;
        }
        
    }

    @media screen and (max-width:620px) {
        #gotop {
            position: fixed;
            right: 10px;
            bottom: 10px;
        }
    }
</style>


<?php include __DIR__. '/_navbarWithMember.php'; ?>


    <div class="h1_div">
        <h1>房型介紹</h1>
</div>

<div class="container">


    <?php while($row = $rs->fetch_assoc()): ?>

        <?php if($row['sid'] % 2 === 1): ?>
        <div class="room1">
            <div class="room1_left">
                <div class="room1_img snip0019">
                    <a href="/treevago/treevago_roomdetail.php?sid=<?= $row['sid'] ?>"><img src="images/<?= $row['sid'] ?>.png" alt="">
                    <figcaption>
                        <div>
                            <h2>Treevago<br><span><?= $row['name'] ?></span></h2></div>
                        <div>
                            <p>
                                <br>
                                <br>
                                <br><?= $row['hover_detail'] ?></p>
                        </div>
                    </figcaption></a>
                </div>
            </div>
            <div class="room1_right">
                <div class="room1_right_price">森林價：<b><?= $row['price'] ?></b> /天</div>
                <br>
                <h3><?= $row['name'] ?></h3>
                <h4><?= $row['people'] ?></h4>
                <p class="room1_p"><?= $row['bed'] ?></p>
                <div class="detail_control">
                    <p class="room1_p1"><?= $row['detail'] ?>
                    </p>
                </div>
                <div class="room1_button"><a href="/treevago/treevago_roomdetail.php?sid=<?= $row['sid'] ?>">更多資訊</a></div>
            </div>
        </div>
            <?php else: ?>
            <div class="room1 room2">
                <div class="room1_left room2_right">
                        <div class="room1_img snip1401">
                            <a href="/treevago/treevago_roomdetail.php?sid=<?= $row['sid'] ?>"><img src="images/<?= $row['sid'] ?>.png" alt="">
                            <figcaption>
                                <h3><?= $row['name'] ?></h3>
                                <p><?= $row['hover_detail'] ?></p>
                            </figcaption><i class="ion-ios-home-outline"></i></a>
                        </div>
                </div>
                <div class="room1_right room2_left_box">
                    <div class="room2_left">
                        <div class="room1_right_price">森林價：<b><?= $row['price'] ?></b> /天</div>
                        <br>
                        <h3><?= $row['name'] ?></h3>
                        <h4><?= $row['people'] ?></h4>
                        <p class="room1_p"><?= $row['bed'] ?></p>
                        <div class="detail_control">
                            <p class="room1_p1"><?= $row['detail'] ?>
                            </p>
                        </div>
                        <div class="room1_button"><a href="/treevago/treevago_roomdetail.php?sid=<?= $row['sid'] ?>">更多資訊</a></div>
                    </div>
                </div>
            </div> <!--room2right-->
    <?php endif ?>
    <?php endwhile; ?>
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

</div>


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

<?php include __DIR__. '/_footer.php'; ?>
<?php include __DIR__. '/__htmlfoot.php'; ?>
