<?php require __DIR__. '/__connect_db.php';
$page_name = 'afternoontea';




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TreeVaGo森林下午茶</title>
    <link href="css/lightbox.css" rel="stylesheet" />
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
    a{
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
    /******************nav_bar***********************/
.footer_icon_last {
    margin-top:5px;
}
.cookie_title{
    width: 100%;
    margin: 0 auto;
    text-align: center;
    position: absolute;
    margin-top: 350px;
}
.cookie_title h2{
    font-size:30px;
    color:#fff;
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
        .cookie_title{
            margin-top: 250px;
        }
    }
@media only screen and (max-width:1000px) {
    .cookie_title{
        margin-top: 200px;
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
    /********************container***********************/

    h2 {
        color: #333333;
    }

    .container p {
        color: #666666;
    }

    .bg1 {
        margin: 0 auto;
        max-width: 100%;
    }

    .bg1 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .container {
        max-width: 100%;
        margin: 0 auto;
        position: relative;
    }

    .cont1 {
        margin: 0 auto;
        padding-top: 40px;
        max-width: 100%;
        width: 630px;
        height: 280px;
        text-align: center;
        line-height: 24px;
    }

    .cont2 {
        max-width: 100%;
        height: 100%;
        display: flex;
        flex-wrap: nowrap;
    }

    .cont2-1,
    .cont2-2,
    .cont2-3,
    .cont2-4 {
        float: left;
        margin-right: 20px;
        max-width: 100%;
    }

    .cont2-1 {
        margin-top: 255px;
    }

    .cont2-2 {
        margin-top: 170px;
        margin-bottom: 100px;
    }

    .cont2-3 {
        margin-top: 85px;
        margin-bottom: 200px;
    }

    .cont2-4 {
        margin-bottom: 300px;
        margin-right: 0;
    }

    .cont2-1 img,
    .cont2-2 img,
    .cont2-3 img,
    .cont2-4 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .radius_box,
    .radius_box2 {
        background: url(images/bg_main.jpg) repeat 0 0;
        height: 400px;
        width: 100%;
        position: relative;
        text-align: center;
        display: flex;
        justify-content: center;
    }

    .cake_h2,
    .drink_h2 {
        margin: 0 auto;
        text-align: center;
        position: relative;
        margin-bottom: 40px;
    }

    .radius {
        background: url(images/bg_main.jpg) repeat 0 0;
        position: absolute;
        left: 400px;
        width: 650px;
        height: 600px;
        border-radius: 50%;
        margin: 0 auto;
        margin-top: -300px;
        overflow: hidden;
    }

    .cake_menu1 {
        margin-right: 60px;
    }

    .cake_menu1 li,
    .cake_menu2 li {
        border-bottom: 3px solid #666666;
        line-height: 26px;
        margin-bottom: 60px;
        display: flex;
        justify-content: space-between;
    }

    .cake_menu1 li:hover,
    .cake_menu2 li:hover {
        border-bottom: 3px solid #ff931e;
        transition: all .8s;
    }


    .cake_menu1,
    .cake_menu2 {
        width: 300px;
        text-align: left;
    }

    .bg2 {
        max-width: 100%;
        display: flex;
        align-items: center;
    }

    .bg2>img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cookie_box {
        position: absolute;
        left: 50%;
        margin-left: -335px;
        max-width: 100%;
        width: 670px;
        height: 525px;
        margin-top: 120px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .cookie img {
        width: 80%;
        object-fit: cover;
    }

    .cookie {
        transform-style: preserve-3d;
        width: 200px;
        position: relative;
    }

    .cookie1 {
        margin-top: 150px;
    }

    .cookie2 {
        margin-top: 75px;
    }

    .cookie3 {
        margin-top: 0px;
    }

    .cookie4 {
        margin-top: 30px;
    }

    .cookie5 {
        margin-top: -45px;
    }

    .cookie6 {
        margin-top: -120px;
    }

    .cookie:hover img {
        transform: rotateY(360deg);
        transition: all .5s;
        opacity: .2;
    }

    .cookie:hover i {
        transition: all .5s;
        opacity: 1;
    }

    i {
        opacity: 0;
        color: #fff;
        position: absolute;
        left: 50%;
        top: 50%;
        text-align: center;
        width: 100%;
        z-index: 10;
    }

    .c2_display {
        display: none;
    }

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
    .drink_h2{
        display: inline-block;
        cursor: pointer;
        margin-left: 30px;
    }
    .drink_h2_frist{
        margin-left: 0px;
    }
    .drink_h2:hover{
        color: #ff931e;
        transition: all .3s;
    }
    .drink_h2_title{
        max-width: 300px;
        height: 40px;
        /*background: #ccc;*/
        text-align: center;
        margin: 0 auto;
        margin-bottom: 20px;
    }
    .list_hide{
        display: none;
    }
    .list_show{
        display: inline;
    }
    .drink_title_now{
        border-bottom: 3px solid #ff931e;
    }


    /***************************container-rwd****************************/

    @media screen and (max-width:1500px) {
        .radius{
            display: none;
        }
    }

    @media screen and (max-width:1300px) {
        .cookie img {
            width: 60%;
            object-fit: cover;
        }
        .cookie_box {
            left: 50%;
            margin-left: -335px;
            width: 670px;
            height: 300px;
            margin-top: 20px;
        }
        .cookie {
            width: 200px;
        }
    }

    @media screen and (max-width:950px) {
        .cookie img {
            width: 50%;
            object-fit: cover;
        }
        .cookie_box {
            left: 50%;
            margin-left: -335px;
            width: 670px;
            height: 300px;
            margin-top: 20px;
        }
    }

    @media screen and (max-width:800px) {
        .cookie img {
            width: 80%;
            object-fit: cover;
        }
        .cookie_box {
            margin-left: -175px;
            width: 350px;
            height: 200px;
            margin-top: 20px;
            flex-wrap: wrap;
        }
        .cookie {
            width: 100px;
        }
        .cookie1,
        .cookie2,
        .cookie3,
        .cookie4,
        .cookie5,
        .cookie6 {
            margin: 0 auto;
        }
        .cookie_title{
            margin-top: 150px;
        }
    }

    @media screen and (max-width:700px) {
        .cookie img {
            width: 70%;
        }
        .cookie_box {
            margin-top: 40px;
        }
        .cookie_title{
            margin-top: 100px;
        }
    }

    @media screen and (max-width:620px) {
        #gotop {
            position: fixed;
            right: 10px;
            bottom: 10px;
        }
    }

    @media screen and (max-width:525px) {
        p {
            margin: 0 20px;
        }
        .footer_box p{
            margin: 0 ;
    }
        .p1 {
            display: none;
        }
        .cont2 {
            max-width: 100%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
        }
        .cont2-1 {
            width: 180px;
            margin: 30px 15px 430px 0;
        }
        .cont2-2 {
            width: 180px;
            margin: -20px 0 480px 0;
        }
        .cont2-3 {
            width: 180px;
            margin: -400px 15px 800px 0;
        }
        .cont2-4 {
            width: 180px;
            margin: -450px 0 850px 0;
        }
        .cake_h2 {
            margin: -750px 0 800px 0;
            position: relative;
        }
        .drink_h2 {
            margin: 20px 0 60px 0;
            position: relative;
        }
        .radius_box,
        .radius_box2 {
            background: url(images/bg_main.jpg) repeat 0 0;
            height: 450px;
            width: 100%;
            position: relative;
            text-align: center;
            display: flex;
            justify-content: center;
            margin: -750px 0px 50px 0px;
            padding: 0 10px 0 10px;
            overflow: hidden;
        }
        .cake_menu1 {
            margin-right: 60px;
        }
        .cake_menu1 li,
        .cake_menu2 li {
            border-bottom: 3px solid #666666;
            line-height: 26px;
            margin-bottom: 60px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .cake_menu1,
        .cake_menu2 {
            width: 300px;
            text-align: left;
        }
        .cookie img {
            width: 60%;
            object-fit: cover;
        }
        .radius_box2 {
            margin: 0;
        }
        i {
            font-size: 12px;
            margin: 0 auto;
            margin: -20px 0 0 -80px;
        }
        .cookie_title h2{
            font-size: 20px;
        }

    }

    @media screen and (max-width:480px) {
        .cookie {
            margin-left: 15px;
        }
        .cookie img {
            width: 40%;
            object-fit: cover;
        }
        .cookie_box {
            left: 50%;
            margin-left: -175px;
            width: 350px;
            height: 150px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        .c1_display {
            display: none;
        }
        .drink_h2{
            font-size: 24px;
            margin-left:10px ;

        }
        .drink_h2_title{
            margin-bottom: 50px;
        }
        .cookie_title{
            margin-top:65px;
        }　
    }
    /*******************container*********************/
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

        /***************************footer_rwd*************************************/
    </style>
<?php include __DIR__. '/_navbarWithMember.php'; ?>
</head>

<body>
    <!--navbar-->
    <!--********************************************************navbar***************************************-->
    <div class="bg1"><img src="images/AT0-03.png" alt=""></div>
    <div class="container">
        <div class="cont1">
            <h2>下午茶</h2>
            <br>
            <p>無論生活多麼地平凡，或不平凡，都別錯過難得的假日時光。<br>
                <br>TreevagoTable為您計畫了專屬午茶，不需要與紛擾的城市人云亦云，<br>
                <br>提供您當天的 最佳伴飲。還有堅持當日製做的精製手工糕點。<br><br>
                <p class="p1">限定的可口滋味，同時滿足了心情與味蕾。<br>
                    <br>放心任由甜蜜的滋味，拉近家人間的距離。<br></p>
            </p>
        </div>
        <!-- cont1 -->
        <div class="cont2 c1_display">
            <div class="cont2-1"><a href="lightbox_img/la0.png" rel="lightbox[roadtrip]">
                <img src="images/AT2-04.png" alt=""></a></div>
            <div class="cont2-2"><a href="lightbox_img/la1.png" rel="lightbox[roadtrip]">
                <img src="images/AT2-05.png" alt=""></a></div>
            <div class="cont2-3"><a href="lightbox_img/la2.png" rel="lightbox[roadtrip]">
                <img src="images/AT2-06.png" alt=""></a></div>
            <div class="cont2-4"><a href="lightbox_img/la3.png" rel="lightbox[roadtrip]">
                <img src="images/AT2-07.png" alt=""></a></div>
        </div>
        <div class="cont2 c2_display">
            <div class="cont2-1">
                <img src="images/AT2-04.png" alt=""></a>
            </div>
            <div class="cont2-2">
                <img src="images/AT2-05.png" alt=""></a>
            </div>
            <div class="cont2-3">
                <img src="images/AT2-06.png" alt=""></a>
            </div>
            <div class="cont2-4">
                <img src="images/AT2-07.png" alt=""></a>
            </div>
        </div>
        <!-- cont2 -->
        <div class="radius"></div>
        <h2 class="cake_h2">點心</h2>
        <div class="radius_box">
            <div class="cake_menu1">
                <ul>
                    <li>
                        <p>英式點心塔</p>
                        <p>NT/350元</p>
                    </li>
                    <li>
                        <p>熔岩巧克力</p>
                        <p>NT/120元</p>
                    </li>
                    <li>
                        <p>法式檸檬塔</p>
                        <p>NT/130元</p>
                    </li>
                    <li>
                        <p>草莓海綿蛋糕</p>
                        <p>NT/100元</p>
                    </li>
                </ul>
            </div>
            <!-- cake_menu 1-->
            <div class="cake_menu2">
                <ul>
                    <li>
                        <p>夏洛特花園</p>
                        <p>NT/350元</p>
                    </li>
                    <li>
                        <p>金芒拿破崙</p>
                        <p>NT/130元</p>
                    </li>
                    <li>
                        <p>焦糖瑪奇朵</p>
                        <p>NT/120元</p>
                    </li>
                    <li>
                        <p>提拉米蘇</p>
                        <p>NT/110元</p>
                    </li>
                </ul>
            </div>
            <!-- cake_menu 2-->
        </div>
        <!-- radius_box -->
        <div class="cookie_title"><h2>手工餅乾</h2></div>
        <div class="bg2"><img src="images/AT3-14.png" alt="">
            <div class="cookie_box">
                <div class="cookie cookie1">
                    <img src="images/cookie-08.png" alt=""><i>蔓越莓果乾</i></div>
                <div class="cookie cookie2">
                    <img src="images/cookie-09.png" alt=""><i>惡魔熔岩</i></div>
                <div class="cookie cookie3">
                    <img src="images/cookie-10.png" alt=""><i>經典黃油</i></div>
                <div class="cookie cookie4">
                    <img src="images/cookie-11.png" alt=""><i>巧克力軟曲奇</i></div>
                <div class="cookie cookie5">
                    <img src="images/cookie-12.png" alt=""><i>M&M巧克力</i></div>
                <div class="cookie cookie6">
                    <img src="images/cookie-13.png" alt=""><i>童趣貓頭鷹</i></div>
            </div>
        </div>
        <div class="drink_h2_title">
            <h2 class="drink_h2 drink_h2_frist tea_menu drink_title_now">茶品</h2>
            <h2 class="drink_h2 coffe_menu">咖啡</h2>
            <h2 class="drink_h2 soft_menu">現榨果汁</h2>
        </div>
        <div class=" radius_box2">
            <div class="cake_menu1 tea_list list_show">
                <ul>
                    <li>
                        <p>特選英式伯爵</p>
                        <p>NT/130元</p>
                    </li>
                    <li>
                        <p>特選金萱烏龍</p>
                        <p>NT/130元</p>
                    </li>
                    <li>
                        <p>印度阿薩姆</p>
                        <p>NT/130元</p>
                    </li>
                </ul>
            </div>
            <!-- cake_menu 1-->
            <div class="cake_menu2 tea_list list_show">
                <ul>
                    <li>
                        <p>嚴選鐵觀音</p>
                        <p>NT/120元</p>
                    </li>
                    <li>
                        <p>錫蘭頂級烏巴</p>
                        <p>NT/120元</p>
                    </li>
                    <li>
                        <p>大吉嶺紅茶</p>
                        <p>NT/120元</p>
                    </li>
                </ul>
            </div><!-- tea-->
            <div class="cake_menu1 coffe_list list_hide"><!--coffe-->
                <ul>
                    <li>
                        <p>白巧克力摩卡</p>
                        <p>NT/130元</p>
                    </li>
                    <li>
                        <p>黑糖卡布奇諾</p>
                        <p>NT/130元</p>
                    </li>
                    <li>
                        <p>義式濃縮</p>
                        <p>NT/130元</p>
                    </li>
                </ul>
            </div>
            <!-- cake_menu 1-->
            <div class="cake_menu2 coffe_list list_hide"><!--coffe-->
                <ul>
                    <li>
                        <p>黃金曼特寧</p>
                        <p>NT/120元</p>
                    </li>
                    <li>
                        <p>拿鐵咖啡</p>
                        <p>NT/120元</p>
                    </li>
                    <li>
                        <p>海鹽焦糖拿鐵</p>
                        <p>NT/120元</p>
                    </li>
                </ul>
            </div><!--coffe-->
            <div class="cake_menu1 soft_list list_hide"><!--soft-->
                <ul>
                    <li>
                        <p>鮮榨柳橙汁</p>
                        <p>NT/130元</p>
                    </li>
                    <li>
                        <p>鮮榨葡萄汁</p>
                        <p>NT/130元</p>
                    </li>
                    <li>
                        <p>鮮榨西瓜汁</p>
                        <p>NT/130元</p>
                    </li>
                </ul>
            </div>
            <!-- cake_menu 1-->
            <div class="cake_menu2 soft_list list_hide">
                <ul>
                    <li>
                        <p>鮮榨蘋果汁</p>
                        <p>NT/120元</p>
                    </li>
                    <li>
                        <p>鮮榨葡萄汁</p>
                        <p>NT/120元</p>
                    </li>
                    <li>
                        <p>鮮榨芒果汁</p>
                        <p>NT/120元</p>
                    </li>
                </ul>
            </div><!--soft-->
            <!-- cake_menu 2-->
        </div>
        <!-- radius_box -->
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
    <!--************************script************************-->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
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
    $("#gotop").click(function() {
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
    </script>
    <!--****************************nav_rwd*****************************-->
<!--*****************drink_list***********************-->
    <script>

        $(".tea_menu").click(function() {
            $(".coffe_list").addClass("list_hide");
        });
        $(".tea_menu").click(function() {
            $(".soft_list").addClass("list_hide");
        });
        $(".tea_menu").click(function() {
            $(".tea_list").removeClass("list_hide");
            $(".tea_list").addClass("list_show");
        });


        $(".coffe_menu").click(function() {
            $(".tea_list").removeClass("list_show");
            $(".tea_list").addClass("list_hide");
        });
        $(".coffe_menu").click(function() {
            $(".soft_list").addClass("list_hide");
        });
        $(".coffe_menu").click(function() {
            $(".coffe_list").removeClass("list_hide");
        });


        $(".soft_menu").click(function() {
            $(".coffe_list").addClass("list_hide");
        });
        $(".soft_menu").click(function() {
            $(".tea_list").removeClass("list_show");
            $(".tea_list").addClass("list_hide");
        });
        $(".soft_menu").click(function() {
            $(".soft_list").removeClass("list_hide");
        });

        $(".tea_menu").click(function() {
            $(".tea_menu").addClass("drink_title_now");
            $(".coffe_menu").removeClass("drink_title_now");
            $(".soft_menu").removeClass("drink_title_now");
        });
        $(".coffe_menu").click(function() {
            $(".coffe_menu").addClass("drink_title_now");
            $(".tea_menu").removeClass("drink_title_now");
            $(".soft_menu").removeClass("drink_title_now");
        });

        $(".soft_menu").click(function() {
            $(".soft_menu").addClass("drink_title_now");
            $(".tea_menu").removeClass("drink_title_now");
            $(".coffe_menu").removeClass("drink_title_now");
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
    <!--*****************drink_list***********************-->
</body>

</html>