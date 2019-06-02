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


?>

<?php include __DIR__. '/__htmlhead.php'; ?>
    <title>線上刷卡</title>
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
    width:784px ;
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
.btn_box{
    max-width:250px;
    margin: 0 auto;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-bottom: 50px;
}
.btn_enter{
    background: #ffffff;
    max-width: 100%;
    margin: 10px auto;
    width: 97px;
    height: 30px;
    border-radius: 15px;
    color: #ff931e;
    border: 1px solid #ff931e;
    line-height: 30px;
    transition: all 0.5s;
    cursor: pointer;
}
.btn_enter a{
    color: #ff931e;
    padding: 8px 20px;
    cursor: pointer;
}
.btn_enter:hover a{
    color: #fff;
    cursor: pointer;
    transition: all 0.5s;
}

.btn_enter:hover{
    color: #FFFFFF;
    background: #ff931e;
    border: 1px solid #ff931e;
    transition: all 0.5s;
}
.btn_enter:hover{
    color: #FFFFFF;
    background: #ff931e;
    border: 1px solid #ff931e;
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

.input-box {
    line-height: 37px;
    height: 37px;
    margin: 15px 10px;
}
.iput1 {
    margin-top: 5px;
    float: right;
    height: 25px;
    width: 200px;
}
.iput2 {
    margin-top: 5px;
    float: right;
    height: 25px;
    width: 80px;
}
.form_box{
    max-width: 784px;
    margin: 0 auto;
    text-align: end;
    display: flex;
    justify-content: center;
    align-items: center;
}
.hint{
    color:red;
}
label{
    float: left;
    margin-right: 20px;
}
span{
    color:red;
    font-weight: bold;
    font-size: 20px;
}
.img_box{
    margin-left: 180px;
    margin-bottom: 15px;
    width: 130px;
    overflow: hidden;
}
.img_box img{
    width: 100%;
    height: 100%;
    overflow: hidden;
}
button{

    outline:none;

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
    .iput1{
        width: 150px;
    }
}

</style>

<?php include __DIR__. '/_navbarWithMember.php'; ?>
<div class="container">
    <?php while($row = $rs->fetch_assoc()): ?>
    <div class="member">
        <h2>線上刷卡</h2>
    </div>
    <div class="box-1">
        <div class="form_box">
                <form name="form1"  method="post" onsubmit="return checkForm()">

                    <div class="form-group input-box">
                        <label for="name">持卡人姓名</label>
                        <input type="text" class="form-control iput1" id="name" name="name"
                               maxlength="4" placeholder="">

                    </div>
                    <div class="form-group input-box">
                        <label for="ic">卡號(16碼)</label>
                        <input type="text" class="form-control iput1" id="ic" name="ic" maxlength="16" placeholder="">

                    </div>
                    <div class="form-group input-box">
                        <label  for="email">卡片到期日</label>
                            <select name="month">
                                <option value="00" selected disabled="disabled">月</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <select name="year">
                                <option value="00" selected disabled="disabled">年</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
<!--                        <input type="" class="form-control iput1" id="email" name="email" placeholder="">-->

                    </div>
                    <div class="form-group input-box">
                        <label for="password">安全碼(卡片背面，共三碼)</label>
                        <input type="password" class="form-control iput2" id="password" name="password" maxlength="3" placeholder="">
                    </div>

                    <div class="form-group input-box">
                        <label for="phone">訂金金額</label>
                         <span><?= $row['deposit'] ?></span>&nbsp;元
                    </div>
                    <div class="img_box">
                        <img src="images/Visa.png" alt="">
                    </div>


                    <div class="btn-control">
                        <button type="submit" class="btn_enter">送出</button>
                    </div>
                    <div id="my-alert" class="alert alert-success" role="alert"></div>

                </form>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="btn_box">
        <button type="submit" class="btn_enter"><a href="treevago_index.php">返回首頁</a></button>
        <button type="submit" class="btn_enter"><a href="history.php">查詢訂單</a></button>
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
<?php include __DIR__. '/__htmlfoot.php'; ?>
