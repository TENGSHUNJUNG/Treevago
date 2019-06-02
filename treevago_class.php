<?php require __DIR__. '/__connect_db.php';
$page_name = 'class';
$sql = sprintf("SELECT * FROM `treevago_class` ORDER BY `sid`");
$rs = $mysqli->query($sql);

//unset($_SESSION["class"]);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>課程選購</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
    <style>
<?php include __DIR__. '/__style_navfooterWithMember.php'; ?>
        * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        font-family: '微軟正黑體', calibri;
        background: url(images/bg_main.jpg) repeat 0 0;
    }

    a {
        text-decoration: none;
    }

    ul>li {
        list-style-type: none;
        text-decoration: none;
    }

    .clearfix:after {
        clear: both;
        content: ".";
        display: block;
        height: 0;
        visibility: hidden;
    }

    select:invalid {
        color: gray;
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
    /********************nav_bar*********************/

    .nav {
        max-width: 100%;
        height: 120px;
        background: #ff931e;
    }

    .main_menu {
        max-width: 1180px;
        height: 120px;
        margin: 0 auto;
    }

    .logo {
        width: 180px;
        height: 100px;
        background: url(images/TREEVAGO_logo.png) no-repeat 0 0;
        background-size: contain;
        float: left;
        margin-top: 20px;
    }
button{

    outline:none;

}

    .menu_01>ul>li {
        width: 120px;
        text-align: center;
        float: left;
    }

    .menu_01>ul>li>a {
        color: white;
        text-decoration: none;
        font-family: '微軟正黑體';
        /*margin-left: 20px;*/
        font-size: 15px;
        padding: 20px;
    }

    .menu_01 {
        position: relative;
        float: right;
        margin-top: 79px;
    }

    .booking {
        margin-left: 80px;
    }

    .bar_box {
        display: none;
    }
    /******************nav_bar***********************/
.footer_icon_last {
    margin-top:5px;
}
    /*********************nav_rwd************************/

    @media only screen and (max-width:1250px) {
        /*      .menu_page{
                        padding: 0;
                        margin:0; 
                        background:rgba(0,0,0,.3);
                        z-index: 103;
                        width: 100%;
                        height: 500px;
                        text-align:center; 
                    }
                    .menu_page_li>a{
                        line-height: 80px;
                        font-size: 36px;
                        color: #fff;
                        float: none;
                        display: block;
                    }*/
        .menu_01 {
            display: none;
        }
        .header {
            width: 100%;
            /*  height: 180px;*/
            height: 80px;
            background: rgba(0, 0, 0, .5);
        }
        .logo {
            width: 200px;
            height: 80px;
            position: absolute;
            top: 1%;
            left: 50%;
            margin: 10px 0 0 -80px;
        }
        .menu_page {
            position: absolute;
            right: 0;
            top: 120px;
            width: 100%;
            text-align: center;
            z-index: 999;
            display: block;
            opacity: 0;
            max-height: 0px;
            overflow: hidden;
        }
        .menu_page_li>a {
            background: #ff931e;
            line-height: 100px;
            font-size: 18px;
            color: #fff;
            float: none;
            display: block;
            text-decoration: none;
        }
        .menu_page_li>a:hover {
            background: #ffaa1e;
        }
        .bar_box {
            float: right;
            /*position: absolute;
                        top:10%;*/
            margin-top: 70px;
            cursor: pointer;
            display: block;
        }
        .nav_active .bar1 {
            transform: rotate(-45deg) translate(-9px, 7px);
        }
        .nav_active .bar2 {
            opacity: 0;
        }
        .nav_active .bar3 {
            transform: rotate(45deg) translate(-9px, -8px);
        }
        .bar {
            width: 36px;
            height: 6px;
            background: #ccc;
            margin: 6px 10px;
            border-radius: 3px;
        }
        .bar_box .nav_active {
            opacity: 1;
            max-height: 500px;
        }
        .transition {
            transition: all .5s;
        }
    }
    /****************main-nav************************/
    /*******************sub_nav*************************/

    .menu_01>ul>li:hover .sub_nav {
        max-height: 1000px;
    }

    .sub_nav {

        position: absolute;
        background: #ff931e;
        top: 41px;
        width: 120px;
        overflow: hidden;
        max-height: 0px;
    }

    .sub_nav a {
        color: white;
        text-decoration: none;
        padding: 15px 10px;
        display: block;
    }

    .sub_nav a:hover {
        background: #ffaa1e;
    }

    .sub_transition {
        transition: .5s;
    }
    /********************sub_nav***********************/

    .h1_div {
        width: 100%;
        height: 135px;
        margin: 0 auto;
    }

    .h1_div h1 {
        text-align: center;
        line-height: 170px;
    }
    /*********************main_area01*****************************/

    .container {
        width: 1262px;
        max-width: 100%;
        margin: 0 auto;
        /*border: solid 1px #000;*/
        padding: 52px 0;
    }

    .room1 {
        width: 100%;
        height: 260px;
        background-color: #f2f2f2;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
    }

    .room1_left {
        margin-left: 120px;
        width: 380px;
        display: flex;
        justify-content: flex-end;
    }

    .room1_img {
        width: 380px;
        height: 260px;
        overflow: hidden;
    }

    .room1_img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .room1_right {
        width: 480px;
        height: 260px;

    }

    .room1_right_price {
        float: right;
        margin-top: 60px;
        margin-right: 80px;
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
        padding: 15px 30px;
    }

    .room1_button:hover {
        background-color: #ff931e;
        transition: all .5s;
    }

    .room1_button:hover a {
        color: #fff;
        transition: all .5s;
    }


    .price_c>span {
        font-size: 1.5em
    }

    .price_c {
        float: right;
    }

    .btn_relative {
        position: relative;
    }

    .btn-y-1 {
        position: absolute;
        width: 50px;
        height: 50px;
        overflow: hidden;
        left: 627px;
        top: 290px;
        cursor: pointer;
    }

    .btn-y-2,
    .btn-y-3,
    .btn-y-4 {
        position: absolute;
        width: 50px;
        height: 50px;
        overflow: hidden;
        left: 627px;
        top: 290px;
        cursor: pointer;
    }

    .btn-y img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .togobox1,
    .togobox2,
    .togobox3,
    .togobox4 {
        width: 1262px;
        min-height: 100px;
        background: #f2f2f2;
        display: block;
        transition: all 0.5s;
    }
    .btn_box{
        display: flex;
        justify-content: center;
        align-items: center;
        margin:20px 0 0 70px ;
    }
    .product-img{
        margin:5px 0;
}
    .btn-enter {
        cursor: pointer;
        width: 116px;
        height: 36px;
        float: right;
        margin-top: 8px;
        margin-right: 36px;
        border: 1px solid #ff931e;
        border-radius: 18px;
        text-align: center;
        line-height: 33px;
        font-weight: bold;
        transition: 0.5s;
        background-color: #ff931e;
        color:#fff;
    }
.btn-enter2 {
    background-color: transparent;
    cursor: pointer;
    width: 116px;
    height: 36px;
    float: right;
    margin-top: 8px;
    margin-right: 36px;
    border: 1px solid #ff931e;
    border-radius: 18px;
    text-align: center;
    line-height: 33px;
    font-weight: bold;
    transition: 0.5s;
}
.btn-enter2 a{
    color:#ff931e;
    padding: 10px 28px;
    transition:all 0.5s;
}

    .btn-enter:hover {
        border:2px solid #fff;
        transition: 0.5s;
    }
    .btn-enter:hover a{
        color:#fff;
        transition: 0.5s;
}
.btn-enter2:hover {
    border:2px solid #ff931e;
    transition:all 0.5s;
}
    .downbox-1_active {
        display: block;
    }

    .ipbox {
        height: 36px;
        float: right;
        margin-right: 50px;
        background: #FFFFFF;
        width: 200px;
        margin-top: 10px;
    }

    .btn-y-1-active {
        top: 383;
    }
    /*********************main_area01*****************************/
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
            height: auto;
            margin-left: 0px;
        }
        .room2_left {
            width: 550px;
        }
        .room2_left_box {
            justify-content: center;
            align-items: center;
        }
    }

    @media only screen and (max-width:650px) {
        .room1 {
            height: 500px;
        }
        .room1_left img{
            margin:0 auto;
            width: 90%;
            margin-left: 5%;
        }
        .room1_right {
            max-width: 80%;
            margin-top: -80px;
        }
        .room1_img {
            width: 80%;
            height: auto;
        }
        .room1_right_price{
            margin-right: 0px;
    }
        .room1 {
            width: 90%;
        }
        .btn-y {
            position: absolute;
            width: 50px;
            height: 50px;
            overflow: hidden;
            left: 170px;
            top: 530px;
        }
        .btn-y-1,
        .btn-y-2,
        .btn-y-3,
        .btn-y-4 {
            position: absolute;
            width: 50px;
            height: 50px;
            overflow: hidden;
            left: 162px;
            top: 527px;
        }
        .togobox1,
        .togobox2,
        .togobox3,
        .togobox4 {
            min-width: 339px;
            width: 90%;
            height: 150px;
            margin: 0 auto;
        }

        .ipbox {
            height: 36px;
            float: right;
            margin-right: 70px;
            background: #FFFFFF;
            width: 200px;
            margin-top: 10px;
        }
        .product-img {
            width: 80%;
        }
        .h1_div{
            padding: 0;
            margin-top:-52px;
        }
    }
    /*******************footer*********************/

    .footer {
        max-width: 100%;
        height: 250px;
        background: #ff931e;
    }

    .footer_box {
        margin: 0 auto;
        width: 1000px;
        height: 250px;
        /*  background: #cccccc;*/
    }

    .footer_left {
        float: left;
        padding-top: 40px;
        width: 350px;
        height: 250px;
        /*          background: #666666;
*/
    }

    .footer_logo {
        width: 350px;
        height: 150px;
        background: url(images/TREEVAGO_logo.png) no-repeat 0 0;
        background-size: contain;
    }

    .footer_menu>ul>li>a {
        color: white;
        text-decoration: none;
        float: left;
        padding: 10px;
    }

    .footer_right {
        float: right;
        padding-top: 60px;
        width: 350px;
        height: 250px;
        /*          background: #666666;
*/
    }

    .white_p {
        color: white;
    }

    .footer_info {
        line-height: 20px;
        font-family: '微軟正黑體';
    }

    .footer_icon {
        height: 80px;
        padding-top: 15px;
    }

    .footer_last {
        font-weight: bold;
        font-family: '微軟正黑體';
        font-size: 14px;
    }

    .footer_icon>ul>li>a {
        float: left;
        width: 30px;
        height: 30px;
        /*  background: #cccccc;*/
        margin-right: 10px;
        border-radius: 3px;
        object-fit: cover;
    }

    .footer_icon_last {
        margin-left: 80px;
    }
    /********************************footer************************************/

    #gotop {
        position: fixed;
        right: 40px;
        bottom: 40px;
    }

    #gotop img {
        width: 40px;
        height: 40px;
        overflow: hidden;
        object-fit: cover;
        cursor: pointer;
    }
    /***************************footer_rwd*************************************/

    @media screen and (max-width:620px) {
        #gotop {
            position: fixed;
            right: 10px;
            bottom: 10px;
        }
        .btn_box{
            margin:20px 0 0 30px ;
        }
    }

    @media only screen and (max-width:1250px) {

        .footer {
            max-width: 100%;
            height: 350px;
            background: #ff931e;
        }
        .footer_box {
            margin: 0 auto;
            width: 100%;
            height: 350px;
            overflow: hidden;
            /*  background: #cccccc;*/
        }
        .footer_logo {
            margin: 0 auto;
            width: 200px;
            object-fit: contain;
        }
        .footer_left {
            margin: 0 auto;
            float: none;
            padding-top: 40px;
            width: 200px;
            height: 100px;
            /*          background: #666666;
        */
        }
        .footer_right {
            margin: 0 auto;
            float: none;
            padding-top: 60px;
            width: 100%;
            height: 200px;
            /*          background: #666666;
*/
        }
        .footer_info {
            margin: 0 auto;
            width: 280px;
        }
        .footer_icon {
            width: 350px;
            margin: 0 auto;
        }


        .footer_icon>ul>li>a {
            padding: 10px;
            float: left;
            width: 30px;
            height: 30px;
            /*  background: #cccccc;*/
            border-radius: 3px;
            object-fit: cover;
        }
        .footer_menu {
            display: none;
        }
        .footer_icon_last {
            margin-left: 80px;
        }
        .footer_last {
            width: 300px;
            margin: 0 auto;
        }

        /***************************footer_rwd*************************************/
    </style>
<?php include __DIR__. '/_navbarWithMember.php'; ?>
</head>

<body>
    <!--navbar-->
    <!--********************************************************navbar***************************************-->
    <div class="container">
        <div class="h1_div">
            <h1>課程加購</h1></div>
        <form name="form1" action="" method="post"  onsubmit="return add_class()" >
        <?php while($row = $rs->fetch_assoc()): ?>
            <div class="container btn_relative transition">
                <div class="room1">
                    <div class="room1_left">
                        <a href="treevago_class_info.php#sec1" target="_blank"><img class="product-img" src="./images/c<?= $row['sid'] ?>.png" ></a>
                    </div>

                    <div class="room1_right">
                        <div class="room1_right_price">
                            <h4><?= $row['classname'] ?></h4>
                            <p class="room1_p1">
                                <?= $row['detail'] ?>
                            </p>
                            <!-- room1_p1 -->
                            <br>
                            <p class="price_c">價錢:<span><?= $row['price'] ?></span>/人</p>
                        </div>
                        <!-- room1_right_price -->
                    </div>
                    <!-- room1_right -->

                </div>

                <!-- room1 -->
                <div id="" class="togobox1">
                    <div style="height: 50px;">
                        <input type="hidden" name="sid[]" value="<?= $row['sid'] ?>">
                        <select class="ipbox" name="people[]" id="people<?= $row['sid'] ?>">
                            <option value="0" selected>選擇人數</option>
                            <option value="1">1人</option>
                            <option value="2">2人</option>
                            <option value="3">3人</option>
                            <option value="4">4人</option>
                        </select>
                        <select class="ipbox" name="time[]" id="time<?= $row['sid'] ?>">
                            <option value=""  selected>選擇時段</option>
                            <option value="入住當日10:00~12:00">入住當日10:00~12:00</option>
                            <option value="入住當日14:00~16:00">入住當日14:00~16:00</option>
                            <option value="入住隔日10:00~12:00">入住隔日10:00~12:00</option>
                            <option value="入住隔日14:00~16:00">入住隔日14:00~16:00</option>

                        </select>
                    </div>
                </div>
<!--                <div id="" class="btn-y-1"><img src="images/classicon.png" alt=""></div>-->
            </div>
        <?php endwhile; ?>
        <div class="btn_box">
            <button class="btn-enter" type="submit" >下一步</button>
<!--            <button class="btn-enter2"><a href="order-member.php">不要加購</a></button>-->
        </div>
        </div>
    </form>
    <!-- container -->





    <!--****************************************************footer*******************************************-->
    <div class="footer">
        <div class="footer_box">
            <div id="gotop"><img src="images/go_top.svg" alt=""></div>
            <div class="footer_left">
                <div class="footer_logo"></div>
                <div class="footer_menu">
                    <ul>
                        <li><a href="treevago_room.php">房型介紹</a></li>
                        <li><a href="treevago_class_info.php">親子課程</a></li>
                        <li><a href="treevago_parkGuide.php">園區總覽</a></li>
                        <li><a href="treevago_activity.php">限時活動</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_right">
                <div class="footer_info white_p">
                    <p>T : 08-886-2345 F : 08-886-2222</p>
                    <p>Add:宜蘭縣大同鄉太平村太平巷58號</p>
                    <p>Email:Treevago@treevago.com.tw</p>
                </div>
                <div class="footer_icon">
                    <ul>
                        <li><a href=""><img src="images/line-01.png" alt="" width="30px"></a></li>
                        <li><a href=""><img src="images/line-02.png" alt="" width="30px"></a></li>
                        <li><a href=""><img src="images/note.png" alt="" width="110px" class="cooking_logo"></a></li>
                        <li><a href=""><img src="images/inneed_logo.svg"  width="110px" class="cooking_logo footer_icon_last"></a></li>
                    </ul>
                </div>
                <div class="footer_last">
                    <p>@ 2017 Treevago Co.Ltd All right reserved.</p>
                </div>
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
    <!--footer-->
    <!--************************script************************-->
    <script src="js/jquery.min.js"></script>
    <!--************************script************************-->
    <!--****************************nav_rwd(script)*****************************-->
    <script>
    $(".bar_box").click(function() {
        $(this).toggleClass("nav_active");
    });
    </script>
    <script>
    $(".bar_box").click(function() {
        $(".menu_page").toggleClass("nav_active");
    });
    </script>
    <!--****************************nav_rwd*****************************-->
    <script>

    $("#gotop").click(function() {
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });

    function add_class() {

        $.post('add_to_cart_class.php', $(document.form1).serialize(), function(data){

            location.href = "order-member.php";

        },  'json');

        return false;
    };

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

</body>

</html>