<?php require __DIR__. '/__connect_db.php';

if( !isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}


?>

<?php include __DIR__. '/__htmlhead.php'; ?>
    <title>訂單資訊</title>
    <link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
<meta name="format-detection" content="telephone=no">
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
    margin: 12px 10px 20px 15px;
    transition: all 0.5s;
}
.btn_login a{
    color:#ff931e;
    transition: all 0.5s;
    padding:4px 15px;
}
.btn_back_box{
    max-width: 100%;
    margin-top: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
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
    font: bold;
    font-size: 20px;
}



h1{
    text-align: center;
}
.h1_div{
    margin: 0 auto;
    margin-top: 50px;
    width: 100%;
    text-align: center;
    padding: 20px;
}

.care-box {
    max-width: 100%;
    margin: 120px 0 40px 0 ;
    text-align: left;
    background-color: #fff;
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
.total{
    float: right;
    width: 280px;
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
    .btn_back_box{
        margin-left: -8px;
        margin-bottom: 50px;
    }
}
@media only screen and (max-width:650px) {

    .btn_login {
        margin: 4px 10px 20px 15px;
    }

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

    <div class="h1_div">
        <h1>訂單資訊</h1>
    </div>
    <div class="box-1">
        <div class="title">
            <h3>訂單已清空</h3>
        </div>
        <div class="btn_back_box">
            <div class="btn_back"><a href="treevago_room.php">重選房型</a></div>
        </div>
    </div>
    <div class="care-box">
        <h2>【訂房須知】</h2>
        <p>若持特殊優惠價格入住請在辦理進房手續時檢附證明文件。
            為保障您個人訂房權益，訂房人應與辦理住宿（check in）者資料相符，
            並須於辦理入住(Check in)手續時提供相同身份證明文件，以便查核登記。
            入住時間(Check in)：PM15：00，敬請依飯店之規定辦理入住；
            若您無法在PM20:00前辦理入住手續，請事先與飯店電話確認保留， 否則飯店將視為取消訂房，恕不退費，
            飯店可將房間開放予其他候補旅客。 退房時間(Check out)：12:00以前。</p>
        <h2>【線上訂房相關流程與注意事項】</h2>
        <p>需先加入會員方可訂房。 使用本網站線上訂房系統訂房者，需同意支付預定金額，
            以保留線上訂房之權利。 您於網站上完成之信用卡付款，將立即由您所提供之信用卡帳號扣款。
            您若選擇ATM付款，房間會為您保留24小時，請於24小時內完成匯款動作， 並於匯款完成後，
            請與飯店聯絡並確認匯款人金額、資訊，為保留您的權益，匯款明細請自行保存。 透過線上訂房確認後，
            若您需要更改住房時間，請使用訂單修改， 或於上班時間內直撥訂房專線洽詢：0800-000-000為您更改日期之服務，
            上班時間(08:00-20:00)。 網路上之價格皆含稅及服務費。 各房型均有取得數量限制，建議儘早規劃、即早訂房，以確保假期順利。
        </p>

        <h2>【訂房取消規定】</h2>
        <p>若於進住日期前14天(不含進住當天)通知本飯店，
            本筆訂金保留三個月有效，或可辦理全額退款。 若於進住日前10~13天內通知，
            本酒店有權沒收本筆訂金總額之30%。 若於進住日前7~9天內通知，本酒店有權沒收本筆訂金總額之50%。
            若於進住日前4~6天內通知，本酒店有權沒收本筆訂金總額之60%。 若於進住日前2~3天內通知，本酒店有權沒收本筆訂金總額之70%。
            若於進住日前1天前通知，本酒店有權沒收本筆訂金總額之80%。 若於進住當天(24小時內)通知取消或更改進住日期者，
            恕不保留亦不退還本筆訂金。
        </p><div id="check_alert"></div>

    </div>
    <form id="form1" name="form1" method="post" action="">
    <div class="checkbox">
        <div id="check_alert"></div>
        <label for="checkbox"><input id="checkbox" type="checkbox" name="agree" value="agree">我已詳細閱讀並同意上列訂房流程、退費規定。</label>
    </div>
    <div class="btn-control-enter">
        <div class="btn_login-enter checkbox_enter"><a href="order-member-ATM.php">ATM轉帳</a></div>
        <div class="btn_first-enter checkbox_enter"><a href="order-member-VISA.php">線上刷卡</a></div>
    </div>
</div>
    </form>


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
    $(".checkbox_enter").click(function(){
        var check=$("input[name='agree']:checked").length;
        if(check==0){
            $('#check_alert').html("請詳閱說明後，勾選同意。");
            return false;
        }else{
            $('#check_alert').html("");
            return true;
        }
    })
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
