<?php require __DIR__. '/__connect_db.php';
$page_name = 'room_detail';

$sid = isset($_GET['sid']) ? (int)$_GET['sid'] : 0;

$sql = "SELECT * FROM `room_detail` WHERE `sid`=$sid";
$rs = $mysqli->query($sql);
$row = $rs->fetch_assoc();


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone=no">
        <title><?= $row['roomname'] ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
        <link rel="stylesheet" href="css/room_detail_slider1.css">
        <link rel="stylesheet" href="css/room_detail_slider2.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="css/date_new.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <link rel="stylesheet" href="css/pygments.css" />
        <link rel="stylesheet" href="css/easyzoom.css" />
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
        button{

            outline:none;

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
        /******************nav_bar***********************/
.footer_icon_last {

    margin-top:5px;
    margin-left: 80px;

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

        .bg1 {
            width: 100%;
            margin: 0 auto;
        }

        .bg1 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .container {
            max-width: 100%;
            width: 1180px;
            margin: 0 auto;
        }
        /*********************main_area01*****************************/

        .top_box {
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .top_left,
        .top_right {
            width: 590px;
            height: 100px;
        }

        .top_right {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .top_button_left,
        .top_button_right {
            width: 200px;
            height: 50px;
            margin: 10px 10px 0;
            border: 1px solid #ff931e;
            border-radius: 30px;
            text-align: center;
            line-height: 50px;
            cursor: pointer;
        }


        .top_button_active {
            background-color: #ff931e;
            color: #ffffff;
        }
        /*********************main_area01*****************************/
        /*********************main_area02*****************************/

        .cont_box {
            max-width: 100%;
            width: 1180px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .cont_left {
            max-width: 100%;
            width: 575px;
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
        }

        .cont_left_1 {
            width: 575px;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .cont_left_imgbox {
            max-width: 100%;
            width: 575px;
            display: flex;
        }

        .cont_left_2,
        .cont_left_3 {
            width: 280px;
            overflow: hidden;
        }

        .cont_left_2 {
            margin-right: 15px;
        }
        .cont_left img{
            object-fit:cover;
            cursor: pointer;
            /*height: 100%;*/
        }
        .cont_left>.cont_left_imgbox img {
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .cont_right {
            width: 560px;
            height: 560px;
            background-color: #f2f2f2;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .cont_right_1 {
            width: 430px;
            height: 160px;
            overflow: hidden;
        }

        .cont_right_2 {
            max-width: 100%;
            width: 430px;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            color: #333333;
        }

        .cont_right_2-0 {
            width: 100%;
        }

        .cont_right_2-1,
        .cont_right_2-2,
        .cont_right_2-3 {
            width: 125px;
            height: 140px;
        }

        .cont_right_3 {
            width: 430px;
            color: #333333;
        }

        .cont_right_3-1 {
            width: 100%;
            height: 100px;
        }

        .room_facilities {
            width: 430px;
            max-width: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-wrap: wrap;
        }

        .room_facilities img {
            padding: 5px;
        }

		.icon_box{
			width: 140px;
			display: flex;
			text-align: center;
            align-items: center;
        }



        .room1_right_price {
            float: right;
            margin-right: 10px;
            color: #333333;
        }

        .room1_right_price b {
            font-size: 30px;
            color: #E01800;
        }

        h4,
        h3 {
            line-height: 30px;
        }

        h4 {
            color: #348631;
        }

        h3 {
            color: #333333;
        }

        .more_room {
            margin: 0 auto;
            max-width: 100%;
            width: 1180px;
            height: 100px;
            border-bottom: 2px solid #666666;
        }

        .more_room>h5 {
            line-height: 150px;
            font-family: '微軟正黑體';
            font-size: 26px;
            font-weight: bold;
            color: #333333;
        }

        .room1_p1 {
            font-size: 14px;
            color: #666666;
        }

        .hidden {
            display: none;
        }

        .show {
            display: flex;
        }

        .date_box {
            width: 100%;
            display: flex;
            height: 200px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            /*    margin-top: 80px;*/
            margin-bottom: 20px;
        }

        .date_1 {
            width: 180px;
            margin-right: 20px;
        }

        .date_1:hover , .date_2:hover{
            cursor: pointer;
        }
        .date_2 {
            width: 180px;
            margin-right: 20px;
        }

        .datepicker_box {
            margin: auto;
            width: 60%;
            position: relative;
            margin-bottom: 330px;
            margin-top: -60px;
            /* float: left;*/
        }

        .datepicker {
            position: absolute;
            left: 43%;
            margin-left: -250px;
        }

        .date_button_box {
            width: 200px;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 25px;
        }

        .date_button {
            width: 600px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border: 1px solid #ff931e;
            border-radius: 30px;
            color:#ff931e;
            cursor: pointer;
        }


        .date_button:hover {
            background-color: #ff931e;
            transition: all .5s;
            color:#fff;
        }


        .z-index {
            z-index: 99;
        }

        .text {
            color: #333333;
        }

        b {
            color: #333333;
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

/*********************date*****************************/

        .start-range .ui-state-default {
            background-color: #ff931e;
            color: #ffffff;
        }

        .dp-highlight .ui-state-default {
            background-color: #348631;
            color: #ffffff;
        }

        .end-range .ui-state-default {
            background-color: #ff931e;
            color: #ffffff;
        }

        .datecircle {
            transition: .3s;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: url(images/calendar.png) 0 0 no-repeat;
            float: left;
            margin-right: 10px;
            cursor: pointer;
        }

        .ordercheck {
            transition: .3s;
            background: url(images/checkword.png) 0 0 no-repeat;
        }

        .datehide {
            display: none;
            transition: .5s;
        }

        #input1,
        #input2 {
            height: 35px;
            border: 2px solid #ff931e;
            background: white;
        }

        #input1::placeholder,
        #input2::placeholder {
            font-size: 15px;
            font-family: '微軟正黑體';
        }

        .area01 {
            width: 100%;
            height: 400px;
            background: black;
        }

        .orderbutton02 {
            left: 23%;
        }
        .orderbutton02_1{
            left: 23%;
        }

        .orderbuttonhide {
            width: 60px;
            height: 1px;
            background: transparent;
        }

        label {
            color: #ff931e;
            font-family: '微軟正黑體';
            line-height: 25px;
            font-size: 14px;
        }
        .date_button {
            background-color: transparent;
        }
        .date_hide{
        opacity: 0;
        }

        /*********************date*****************************/
        /*********************date*****************************/
        /*********************date_picker_rwd*****************************/

        @media only screen and (max-width:816px) {
            .date_box {
                position: relative;
                top: 50px;
            }
            .orderbutton02 {
                display: none;
            }
            .orderbutton01 {
                position: absolute;
                top: -28px;
                left: 75px;
            }
            .datepicker {
                top: -50px;
            }
            .date_button_box {
                margin-bottom: 0;
                position: absolute;
                top: 180px;
                right: 50px;
            }
            .date_button {
                width: 160px;
            }
            .date_1 {
                margin-top: 40px;
            }
            .date_button a{
                padding: 12px 52px;
        }
        }
        /*********************date_picker_rwd*****************************/
        /*********************main_area02*****************************/
        /*********************content-rwd*****************************/

        @media only screen and (max-width:1200px) {
            .top_left {
                display: none;
            }
            .cont_box {
                flex-wrap: wrap-reverse;
                justify-content: center;
            }
            .cont_left {
                margin-top: 20px;
            }
            .cont_left img{
                object-fit: cover;
                height: 100%;
                width: 100%;
            }

            .cont_right {
                width: 575px;
            }
        }

        @media only screen and (max-width:816px) {
            .date_box {
                margin-top: 50px;
            }
            .date_1,
            .date_2 {
                width: 100%;
                text-align: center;
            }

            .date_button_box {
                margin-top: -200px;
            }
            .datepicker {
                margin-left: -150px;
            }
        }

        @media screen and (max-width:620px) {
            #gotop {
                position: fixed;
                right: 10px;
                bottom: 10px;
            }
        }

        @media only screen and (max-width:450px) {
            .top_button_left,
            .top_button_right {
                width: 150px;
                height: 50px;
                margin: 10px 5px 0;
                line-height: 50px;
            }
            .cont_left,
            .cont_right_1,
            .cont_right_2,
            .cont_right_3,
            .cont_right2-1,
            .cont_right2-2 {
                width: 90%;
            }
            .cont_right_2-1,
            .cont_right_2-2,
            .cont_right_2-3 {
                width: 100px;
            }
            .room_facilities img {
            padding: 2px;
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
        /*******************************slider css rwd*****************************************/

        @media only screen and (max-width:1200px) {
            .slider1_rwd {
                display: none;
            }
            .more_room h5 {
                text-align: center;
            }
            .more_room {
                border-bottom: none;
            }
            .slider {
                margin-bottom: 20px;
            }
        }

        @media only screen and (min-width:1201px) {
            .slider {
                display: none;
            }
        }
        /*******************************slider css rwd*****************************************/
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

        <!--********************************************************navbar***************************************-->
        <div class="bg1"><img src="images/room/RD<?= $row['sid'] ?>.png" alt=""></div>
        <div class="container">
            <div class="top_box">
                <div class="top_left"></div>
                <div class="top_right">
                    <div class="top_button_left top_button_active box">房型介紹</div>
                    <div class="top_button_right box">訂房須知</div>
                </div>
            </div>
            <div class="cont_box">
                <div class="cont_left ">
                    <div class="cont_left_1 easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                        <a id="zoom_img" href="images/room/<?= $row['room_img1']?>_large.png">
                         <img class="cont_left_1" src="images/room/<?= $row['room_img1']?>.png" height="100%"/>
                        </a>
                    </div>
                    <div class="cont_left_imgbox thumbnails">
                        <div class="cont_left_2 z-index"><a class="btnFollow1"><img src="images/room/<?= $row['room_img1'] ?>.png" alt=""></a></div>
                        <div class="cont_left_2 z-index"><a class="btnFollow2"><img src="images/room/<?= $row['room_img2'] ?>.png" alt=""></a></div>
                        <div class="cont_left_3 z-index"><a class="btnFollow3"><img src="images/room/<?= $row['room_img3'] ?>.png" alt=""></a></div>
                    </div>
                </div>
                <div class="cont_right cont_right1 show">
                    <div class="cont_right_1">
                        <div class="room1_right_price">森林價：<b><?= $row['price'] ?></b> /天</div>
                        <h3><?= $row['roomname'] ?></h3>
                        <h4><?= $row['people'] ?></h4>
                        <p class="room1_p1"><?= $row['detail'] ?></p>
                    </div>
                    <div class="cont_right_2">
                        <div class="cont_right_2-0">【設施說明】</div>
                        <div class="cont_right_2-1">家&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;具：
                            <br><?= $row['bed'] ?></div>
                        <div class="cont_right_2-2">Mini Bar：
                            <br><?= $row['mini_Bar'] ?></div>
                        <div class="cont_right_2-3">網&nbsp;&nbsp;路：
                            <br>免費無線網路</div>
                    </div>
                    <div class="cont_right_3">【客房服務】
                        <div class="cont_right_3-1">
                            <div class="room_facilities">
                                <div class="icon_box"><img src="images/icon/bottle.png" alt=""><p>親子友善房型</p></div>
                                <div class="icon_box"><img src="images/icon/hair-dryer.png" alt=""><p>吹風機</p></div>
                                <div class="icon_box"><img src="images/icon/hanger.png" alt=""><p>衣架、衣櫃</p></div>
                                <div class="icon_box"><img src="images/icon/ironing.png" alt=""><p>冷氣設備</p></div>
                                <div class="icon_box"><img src="images/icon/toilet.png" alt=""><p>廁所、浴室</p></div>
                                <div class="icon_box"><img src="images/icon/wifi.png" alt=""><p>WIFI</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cont_right cont_right2 hidden">
                    <div class="cont_right_1 cont_right2-1">
                        <h3>【訂房需知】</h3>
                        <p class="room1_p1">若持特殊優惠價格入住請在辦理進房手續時檢附證明文件。為保障您個人訂房權益，訂房人應與辦理住宿（check in）者資料相符，並須於辦理入住(Check in)手續時提供相同身份證明文件，以便查核登記。<br> 入住時間(Check in)&nbsp;&nbsp;：PM&nbsp;15：00以後<br> 退房時間(Check out)：AM 11：00以前
                        </p>
                    </div>
                    <div class="cont_right_2 cont_right2-2">
                        <div class="cont_right_2-0">
                            <h3>【線上訂房相關流程與注意事項】</h3></div>
                        <p class="room1_p1">需先加入會員方可訂房。
                            <br> 使用本網站線上訂房系統訂房者，需同意支付預定金額，以保留線上訂房之權利。 您於網站上完成之信用卡付款，將立即由您所提供之信用卡帳號扣款。
                            <br> 您若選擇ATM付款，房間會為您保留24小時，請於24小時內完成匯款動作，並於匯款完成後，請與飯店聯絡並確認匯款人金額、資訊，為保留您的權益，匯款明細請自行保存。 透過線上訂房確認後，若您需要更改住房時間，請使用訂單修改，或於上班時間內直撥訂房專線洽詢：0800-000-000為您更改日期之服務，上班時間(08:00-20:00)。
                            <br> 網路上之價格皆含稅及服務費。 各房型均有取得數量限制，建議儘早規劃、即早訂房，以確保假期順利。
                        </p>
                    </div>
                </div>
            </div>

            <form action="treevago_class.php">
            <div class="date_box roomenter">
                <div class="datecircle orderbutton01 orderbutton01_show"></div>
                <div class="date_1">
                    <label>入住時間:</label>
                    <input type="text" class="input1" id="input1" name="input1" disabled="disabled" placeholder="選擇日期">
                </div>
                <div class="datecircle orderbutton02 orderbutton02_show"></div>
                <div class="date_2">
                    <label>退房時間:</label>
                    <input type="text"  class="input2" id="input2" name="input2" disabled="disabled" placeholder="選擇日期">
                </div>
                <div class="date_button_box">
                    <button class="date_button buy_btn" onclick='processFormData()' data-sid="<?= $row['sid'] ?>">
                        立即訂房
                    </button>
                </div>
            </div>
            </form>


            <div class="datepicker_box datehide">
                <div class="datepicker"></div>
            </div>
        </div>
        <!--container-->
        <div class="more_room">
            <h5>更多房型</h5></div>
        <section class="row">
            <!-- slider -->
            <div class="nine columns slider1_rwd">
                <div class="coverflow top10 bot10">
                    <!--   <a class="prev-arrow"></a> -->
                    <a class="img_a" href="/treevago/treevago_roomdetail.php?sid=1"><img src="images/slider_img/1.png" class="coverflow__image" /></a>
                    <a class="img_a" href="/treevago/treevago_roomdetail.php?sid=2"><img src="images/slider_img/2.png" class="coverflow__image" /></a>
                    <a class="img_a" href="/treevago/treevago_roomdetail.php?sid=5"><img src="images/slider_img/3.png" class="coverflow__image" /></a>
                    <a class="img_a" href="/treevago/treevago_roomdetail.php?sid=6"><img src="images/slider_img/4.png" class="coverflow__image" /></a>
                    <a class="img_a" href="/treevago/treevago_roomdetail.php?sid=4"><img src="images/slider_img/5.png" class="coverflow__image" /></a>
                    <!--  <a class="next-arrow"></a> -->
                </div>
            </div>
        </section>
        <!-- slider -->
        <div class="slider">
            <!-- slider2 -->
            <ul>
                <li>
                    <a href="/treevago/treevago_roomdetail.php?sid=1"><img src="images/slider_img/1.png" class="moreRoom01"></a>
                </li>
                <li>
                    <a href="/treevago/treevago_roomdetail.php?sid=2"><img src="images/slider_img/2.png" class="moreRoom02"></a>
                </li>
                <li>
                    <a href="/treevago/treevago_roomdetail.php?sid=5"><img src="images/slider_img/3.png" class="moreRoom03"></a>
                </li>
                <li>
                    <a href="/treevago/treevago_roomdetail.php?sid=6"><img src="images/slider_img/4.png" class="moreRoom04"></a>
                </li>
            </ul>
            <!-- left -->
            <button></button>
            <!-- right -->
            <button></button>
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
        <!-- slider2 -->
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
        <script src="js/jquery.min.js"></script>
<!--        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <!--************************script************************-->
        <script src="js/roomdetail_slider.js"></script>
        <!--************************************************slider1****************************-->
        <!--***********************************slider2****************************-->
        <script src="js/roomdetail_slider2.js"></script>
        <!--************************************************slider2****************************-->
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
        $(".box").click(function() {
            $(this).toggleClass("top_button_active")
                .siblings().toggleClass("top_button_active");
        });
        $(".top_button_right").click(function() {
            $(this).addClass("top_button_active")
                .siblings().removeClass("top_button_active");
            $(".cont_right2").addClass("show");
            $(".cont_right1").addClass("hidden");
            $(".cont_right1").removeClass("show");
        });
        $(".top_button_left").click(function() {
            $(this).addClass("top_button_active")
                .siblings().removeClass("top_button_active");
            $(".cont_right1").addClass("show");
            $(".cont_right2").removeClass("show");
        });

        $(function() {
            $(".datepicker").datepicker();
        });
        </script>
        <!--***********************點擊換圖************************-->
        <script>
            $(".btnFollow1").click(function() {
            $(".cont_left_1").attr("src", "images/room/<?= $row['room_img1'] ?>.png");
            $("#zoom_img").prop("href","images/room/<?= $row['room_img1'] ?>_large.png");
        });
        $(".btnFollow2").click(function() {
            $(".cont_left_1").attr("src", "images/room/<?= $row['room_img2'] ?>.png");
            $("#zoom_img").prop("href","images/room/<?= $row['room_img2'] ?>_large.png");
        });
        $(".btnFollow3").click(function() {
            $(".cont_left_1").attr("src", "images/room/<?= $row['room_img3'] ?>.png");
            $("#zoom_img").prop("href","images/room/<?= $row['room_img3'] ?>_large.png");
        });
        </script>
        <!--************************點擊換圖************************-->
        <!--************************時間選擇************************-->
        <script>
        var startDate = "";
        var endDate = "";
        $(".datepicker").datepicker({
            minDate: 0,
            numberOfMonths: 1,
            beforeShowDay: function(date) {
                var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, startDate);
                var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, endDate);
                var isHightlight =
                    date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2));
                if (isHightlight && date1.getTime() == date.getTime()) {
                    return [true, "start-range"]
                } else if (isHightlight && date2.getTime() == date.getTime()) {
                    return [true, "end-range"]
                }
                return [true, isHightlight ? "dp-highlight" : ""];
            },
            onSelect: function(dateText, inst) {
                var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, startDate);
                var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, endDate);
                var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);

                if (!date1 || date2) {
                    startDate = dateText;
                    endDate = "";
                    FillTextBoxes();
                } else if (selectedDate < date1) {
                    endDate = startDate;
                    startDate = dateText;
                    FillTextBoxes();
                } else {
                    endDate = dateText;
                    $("#input2").val(endDate);
                }

                $(this).datepicker();
            }
        });

        function FillTextBoxes() {
            $("#input1").val(startDate);
            $("#input2").val(endDate);
        }
        </script>
        <script>
            if($(window).width() < 767){
                $(".datecircle").click(function () {
                    $(".datepicker_box").toggleClass("datehide");
                });
                $(".datecircle").click(function () {
                    $(this).toggleClass("ordercheck");
                });
                $(".orderbutton02").click(function () {
                    $('.datepicker_box').toggleClass("orderbutton02");
                });
                $(".orderbutton02_show").click(function () {
                    $('.orderbutton01').toggleClass("orderbuttonhide");
                });
                $(".orderbutton01_show").click(function () {
                    $('.orderbutton02').toggleClass("orderbuttonhide");
                });
                $(".date_1").click(function () {
                    $(".datepicker_box").toggleClass("datehide");
                    $(".orderbutton01").toggleClass("ordercheck");
                    $(".orderbutton02").toggleClass("orderbuttonhide");
                });
                $(".date_2").click(function () {
                    $(".datepicker_box").toggleClass("datehide");
                    $(".orderbutton01").toggleClass("ordercheck");
                });
            }
            else {
                $(".datecircle").click(function () {
                    $(".datepicker_box").toggleClass("datehide");
                });
                $(".datecircle").click(function () {
                    $(this).toggleClass("ordercheck");
                });
                $(".orderbutton02").click(function () {
                    $('.datepicker_box').toggleClass("orderbutton02");
                });
                $(".orderbutton02_show").click(function () {
                    $('.orderbutton01').toggleClass("orderbuttonhide");
                });
                $(".orderbutton01_show").click(function () {
                    $('.orderbutton02').toggleClass("orderbuttonhide");
                });
                $(".date_1").click(function () {
                    $(".datepicker_box").toggleClass("datehide");
                    $(".orderbutton01").toggleClass("ordercheck");
                    $(".orderbutton02").toggleClass("orderbuttonhide");
                });
                $(".date_2").click(function () {
                    $(".datepicker_box").toggleClass("datehide");
                    $('.datepicker_box').toggleClass("orderbutton02");
                    $(".orderbutton02").toggleClass("ordercheck");
                    $(".orderbutton01").toggleClass("orderbuttonhide");
                });
            }
        $("#gotop").click(function() {
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
        </script>
        <script>
            function processFormData() {
                var input1_element = document.getElementById('input1');
                var input1 = input1_element.value;
                var input2_element = document.getElementById('input2');
                var input2 = input2_element.value;
                alert('您所選擇的\n'+'訂房日期：'+input1+'\n退房日期：'+input2);
            }

        </script>
        <!--************************時間選擇************************-->
    <!--********************zoomin*************************-->
        <script src="js/easyzoom.js"></script>
        <script>
            // Instantiate EasyZoom instances
            var $easyzoom = $('.easyzoom').easyZoom();

            // Setup thumbnails example
            var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

           $('.thumbnails').on('click', 'a', function(e) {
               var $this = $(this);
              e.preventDefault();

                // Use EasyZoom's `swap` method
                api1.swap($this.data('standard'), $this.attr('href'));
            });

            // Setup toggles example
            var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

            $('.toggle').on('click', function() {
                var $this = $(this);

                if ($this.data("active") === true) {
                    $this.text("Switch on").data("active", false);
                    api2.teardown();
                } else {
                    $this.text("Switch off").data("active", true);
                    api2._init();
                }
            });
        </script>
        <script>
            $('.buy_btn').click(function(){
                var sid = $(this).attr('data-sid');

                var input1 = $(this).closest('.roomenter').find('.input1').val();
                var input2 = $(this).closest('.roomenter').find('.input2').val();
                $.get('add_to_cart.php', {sid:sid,input1:input1,input2:input2},'json');

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
   
        <!--********************zoomin*************************-->
    </body>

    </html>