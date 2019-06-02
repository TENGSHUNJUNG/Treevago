<?php require __DIR__. '/__connect_db.php';
$page_name = 'park_rwd';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TreeVaGo園區總覽</title>
    <link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
/*a{
        font-family: '微軟正黑體''calibri';
    }*/

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

h2 , h3{
color:#333333;
}

.container{
    max-width: 100%;
    height: auto;
    overflow: hidden;
    margin: 0 auto;
}

.sec0, .sec1 , .sec2 , .sec3 , .sec4{
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
}
.sec0 img , .sec1 img , .sec2 img , .sec3 img , .sec4 img{
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.sec0 img{
    width: 124%;
}

.sec1_cont , .sec2_cont , .sec3_cont , .sec4_cont{
    max-width: 80%;
    margin: 0 auto;
    overflow: hidden;
    text-align: center;
    margin-bottom: 20px;
}
.sec1_cont p, .sec2_cont  p, .sec3_cont  p, .sec4_cont  p{
    color:#666666;
}

.sec1_cont p, .sec2_cont  p{
    text-align: justify;
}


.h1_div{
    margin:0 auto;
    width: 100%;
    text-align: center;
    line-height: 50px;
    padding: 50px;
}
.sec0_cont{
    margin:20px 0;
}
.sec0_main{
    margin: 0 auto;
    max-width: 100%;
    width: 200px;
    margin-bottom: 10px;
}
.sec0_main img{
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.sec0_main_cont{
    max-width: 80%;
    margin: 0 auto;
    overflow: hidden;
    text-align: center;
    margin-bottom: 10px;
}
.sec0_main_cont h3{
    padding-bottom: 10px;
}
.sec0_ul{
    max-width: 90%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}
.sec0_ul li{
    width: 150px;
    margin-bottom: 20px;
}
.sec0_ul li img{
    width: 100%;
    height: 100%;
    overflow: hidden;
}
.sec0_ul li h3{
    text-align: center;
}
.sec0_btn , .sec1_btn , .sec2_btn , .sec3_btn , .sec4_btn{
    margin: 0 auto;
    text-align: center;
    width: 160px;
    height: 40px;
    border-radius: 30px;
    border:1px solid #ff931e;
    line-height: 40px;
    margin-top:20px;
    margin-bottom:80px;
}
.sec0_btn a , .sec1_btn a , .sec2_btn a , .sec3_btn a , .sec4_btn a{
    text-decoration: none;
    color:#ff931e;
    padding: 10px 47px;
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
    z-index: 999;
}

#gotop img {
    width: 40px;
    height: 40px;
    overflow: hidden;
    object-fit: cover;
    cursor: pointer;
}

/***************************footer_rwd*************************************/

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
    @media screen and (max-width:620px) {
        #gotop {
            position: fixed;
            right: 10px;
            bottom: 10px;
        }
    }
/***************************footer_rwd*************************************/






</style>
<?php include __DIR__. '/_navbarWithMember.php'; ?>
</head>

<body>

<div class="container">
    <div class="sec0">
        <img src="images/park.jpg" alt="">
        <div class="h1_div">
            <h1>園區總覽</h1>
        </div>
        <div class="sec0_main">
            <img src="images/treehouse_rwd/tree_main_rwd.png" alt="">
        </div>
        <div class="sec0_main_cont">
            <h3>園區會館</h3>
            <p>此會管位於本園區入口處，負責處理住宿check in、check out，以及旅客的所有問題，並提供園區內所有設施、環境相關資訊，訂房時加購的「親子課程」也會在此會館的不同教室內進行。</p>
        </div>
    </div>
    <div class="sec0_cont">
        <ul class="sec0_ul">
            <li><img src="images/treehouse_rwd/tree_1_rwd.png" alt=""><h3>BONBIBI</h3></li>
            <li><img src="images/treehouse_rwd/tree_2_rwd.png" alt=""><h3>BURL</h3></li>
            <li><img src="images/treehouse_rwd/tree_3_rwd.png" alt=""><h3>NEST</h3></li>
            <li><img src="images/treehouse_rwd/tree_4_rwd.png" alt=""><h3>TRILLIUM</h3></li>
            <li><img src="images/treehouse_rwd/tree_5_rwd.png" alt=""><h3>TEMPO</h3></li>
            <li><img src="images/treehouse_rwd/tree_6_rwd.png" alt=""><h3>CEDAR</h3></li>
        </ul>
    </div>
    <div class="sec0_btn"><a href="treevago_room.php">更多資訊</a></div>

    <div class="sec1">
        <img src="images/rwd1.png" alt="">
    </div>
    <div class="sec1_cont">
        <h2>Treevago table</h2>
        <h3>主廚：Louise Paco</h3><br>
        <p>盡情享用來自森林的美好料理，我們提供您活力早餐、午、晚餐套餐以及單點服務，由來自法國的Paco親自掌廚 </p>
    </div>
    <div class="sec1_btn"><a href="treevago_restaurant_info.php">更多資訊</a></div>

    <div class="sec2">
        <img src="images/rwd2.png" alt="">
    </div>
    <div class="sec2_cont">
        <h2>下午茶</h2><br>
        <p>TreevagoTable為您計畫了專屬午茶，不需要與紛擾的城市人云亦云，
            提供您當天的 最佳伴飲。還有堅持當日製做的精製手工糕點。</p>
    </div>
    <div class="sec2_btn"><a href="treevago_AfternoonTea.php">更多資訊</a></div>

    <div class="sec3">
        <img src="images/rwd3.png" alt="">
    </div>
    <div class="sec3_cont">
        <h2>SPA</h2><br>
        <p>泰式古法舒壓按摩<br>泰式芳療油壓療程系列<br>東方指壓療程系列</p>
    </div>
    <div class="sec3_btn"><a href="treevago_spa.php">更多資訊</a></div>

    <div class="sec4">
        <img src="images/rwd4.png" alt="">
    </div>
    <div class="sec4_cont">
        <h2>交通資訊</h2><br>
        <p>Treevago免費提供，每日一班，<br>座位有限，建議可提早向飯店預訂。</p>
        <p>《時刻表》</p>
        <p>羅東車站→Treevago發車時間：<br>13:50　抵達時間約 16:00<br><br>
            Treevago →羅東車站發車時間：<br>11:00　抵達時間約 13:10<br><br>
            *抵達時間依當日路況為準。<br>
            *接駁車上車處：羅東後火車站口</p>
    </div>
    <div class="sec4_btn"><a href="treevago_Traffic.php">更多資訊</a></div>
</div><!--container-->







<!--footer-->
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
                    <li><a href=""><img src="images/inneed_logo.svg" alt="" width="110px" class="cooking_logo footer_icon_last"></a></li>
                </ul>
            </div>
            <div class="footer_last">
                <p>@ 2017 Treevago Co.Ltd All right reserved.</p>
            </div>
        </div>
    </div>
</div>
<!--footer-->

    <script src="js/jquery.min.js"></script>

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
<script>
    $(".card").hover(function() {
        $(".car_img").toggleClass("active");
    });
    $(".card1").hover(function() {
        $(".train_img").toggleClass("active");
    });
    $("#gotop").click(function() {
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
</script>


    </body>

</html>