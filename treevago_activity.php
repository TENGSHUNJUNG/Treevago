<?php require __DIR__. '/__connect_db.php';
$page_name = 'spa';




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TreeVaGo限時活動</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mountains+of+Christmas:400,700">
    <link rel="stylesheet" href="css/oldman.css">
    <style>
        <?php include __DIR__. '/__style_navfooterWithMember.php'; ?>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: '微軟正黑體', calibri;
            background:url("images/mxbg.png") center center no-repeat fixed;
            background-color: rgba(0,0,0,.9);
        }
        .wrap{
            max-width: 100%;
            overflow: hidden;
        }
        a{
                text-decoration: none;
            }

        ul>li {
            list-style-type: none;
            text-decoration: none;
        }
        h1 , h2{
            text-align: center;
            color: #fff;
        }
        h1{
            padding: 30px;
        }
        .rect{
            margin: 0 auto;
            max-width: 100%;
            width: 800px;
            height: 80px;
            background-color: rgba(241, 230, 217,.9);
            border-radius: 10px;
            margin-top:10px;
            color:#E74700;
            text-align: center;
            line-height: 80px;
            font-size: 36px;
            font-weight:bold ;
        }
        .cont{
            margin: 0 auto;
            max-width: 100%;
            width: 80%;
            height: auto;
            border-radius: 10px;
            background-color: rgba(0,0,0,.3);
            margin-top: 30px;
        }
        .cont>h2{
            padding: 40px 0 20px 0;
            font-size: 36px;
        }
        .cont>p{
            padding: 5px;
            font-size: 16px;
            text-align: center;
            color:#fff;
        }
        .title{
            margin-top: -80px;
        }
        .title>h2{
            color:#F2C2A0;
        }

        .clearfix:after {
            clear: both;
            content: ".";
            display: block;
            height: 0;
            visibility: hidden;
        }
        .btn{
            margin: 0 auto;
            text-align: center;
            width: 160px;
            height: 40px;
            border-radius: 30px;
            border:1px solid #ff931e;
            line-height: 40px;
            margin-top:20px;
            margin-bottom:80px;
            position: relative;
            z-index: 999;
        }
        .btn a{
            text-decoration: none;
            color:#ff931e;
            padding: 10px 47px;
        }
        .btn:hover{
            background-color: #ff931e;
            transition: all .5s;
        }
        .btn:hover a{
            color:#fff;
            transition: all .5s;
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
            color:#000;
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

        @keyframes anima1{
            0%{
                transform: translate(-120%,30px);
            }
            100%{
                transform: translate(20%,600px);
            }
        }
        .oldman{
            animation: anima1 8s infinite reverse;
            width: 100%;
            height: 200px;
            margin-top: 50px;
        }
        .oldman img{
            float: right;
            transform:rotate(20deg);
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
        /*********************nav_rwd************************/
        @media only screen and (max-width:870px) {
            .santa {
                display: none;
            }
            .main , .clearfix{
                max-width: 100%;
                margin: 0 auto;
                overflow: hidden;
            }
            .gift-holder{
                max-width: 100%;
                margin-top: 50px;
                margin-left: -50px;
        }

        }
        @media only screen and (max-width:415px) {
            .orange{
                margin-left: -25px;
            }
            .oldman{
                animation: none;
                width: 100%;
                height: 200px;
                margin-top: 50px;
                margin-left: -50px;
            }
            .gift:last-child{
                margin-left: -45px;
            }
        }


        @media only screen and (max-width:1250px) {
            /*		.menu_page{
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
                /*	height: 180px;*/
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
            .rect{
                margin: 0 auto;
                max-width: 80%;
                width: 800px;
                height: 60px;
                background-color: rgba(241, 230, 217,.9);
                border-radius: 10px;
                margin-top:10px;
                color:#E74700;
                text-align: center;
                line-height: 60px;
                font-size: 20px;
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
            /*	background: #cccccc;*/
        }

        .footer_left {
            float: left;
            padding-top: 40px;
            width: 350px;
            height: 250px;
            /*			background: #666666;
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
            /*			background: #666666;
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
            /*	background: #cccccc;*/
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

        #gotop svg {
            width: 40px;
            height: 40px;
            overflow: hidden;
            object-fit: cover;
            cursor: pointer;
            fill:#fff;
        }
        .text {
            text-align: center;
            font-family: 'Mountains of Christmas', cursive;
            font-size: 50px;
            font-weight: bold;
            margin-top: -65px;
            color:#FFF1C8;
        }
        .container {
            max-width: 100%;
            width: 1180px;
            height: auto;
            margin: 0 auto;
            margin-bottom: 50px;
        }




        @media screen and (max-width:620px) {
            #gotop {
                position: fixed;
                right: 10px;
                bottom: 10px;
            }
            .text {
                margin-top: 40px;
            }
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
                /*	background: #cccccc;*/
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
                /*			background: #666666;
            */
            }
            .footer_right {
                margin: 0 auto;
                float: none;
                padding-top: 60px;
                width: 100%;
                height: 200px;
                /*			background: #666666;
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
                /*	background: #cccccc;*/
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
<div class="wrap">
<div class="modal" id="myModal">
    <div class="oldman"><img src="images/oldman.png" alt=""></div>
    <div class="container">
        <p class="text">Merry Christmas</p>
        <div class="title">
            <h1>~聖誕月＊限時活動~</h1>
            <h2>優惠時間：12/1(五) ~ 12/31(日)</h2>
            <h2>活動時間：11/10(五) ~ 12/10(日)</h2>
        </div>
        <div class="rect"></div>
        <div class="cont">
            <h2>活動內容</h2>
            <p>於活動時間內，預定12/1~12/31(優惠時間)，任一種房型，並完成付款。</p>
            <p>1.流程中所加購的「親子課程」，人數達兩人，其中一位由Treevago招待。</p>
            <p>2.每一位來到Treevago森林園區住宿的小朋友，都可獲得「聖誕禮物乙份」。</p>
            <h2>注意事項</h2>
            <p>＊加購親子課程，人數至多四人同行兩人免費，不限課程。</p>
            <p>＊折扣、優惠、各行銷活動恕不合併使用。</p>
            <p>＊課程優惠費用將於check in當日，支付尾款時折抵。</p>
            <p>＊本公司保留活動變更及調整之權利，如有變動請以Treevago網站公告為主。</p>
            <br><br>
        </div>
        <div class="btn"><a href="treevago_room.php">立即訂房</a></div>
    </div><!--container-->
        <div class="main clearfix">
            <div class="santa">
                <div class="cap"></div>
                <div class="face">
                    <div class="eyes">
                        <div class="left">
                            <span></span>
                        </div>
                        <div class="right">
                            <span></span>
                        </div>
                    </div>
                    <div class="mouth">
                        <div class="nose"></div>
                    </div>
                </div>
                <div class="body">
                    <div class="left-hand"></div>
                    <div class="right-hand"></div>
                    <div class="belt">
                        <div class="buckle"></div>
                    </div>
                    <div class="legs">
                    </div>
                </div>
            </div>
            <div class="gift-holder">
                <div class="gift">
                    <div class="ribbon"></div>
                </div>
                <div class="gift purple">
                    <div class="ribbon"></div>
                </div>
                <div class="gift orange">
                    <div class="ribbon"></div>
                </div>
            </div>
        </div>

</div><!-- /.modal -->
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

<!--****************************************************footer*******************************************-->
<div class="footer">
    <div class="footer_box">
        <div id="gotop"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="438.533px" height="438.533px" viewBox="0 0 438.533 438.533" style="enable-background:new 0 0 438.533 438.533;"
                             xml:space="preserve">
<g>
    <path d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0
		c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267
		c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407
		s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062
		C438.533,179.485,428.732,142.795,409.133,109.203z M361.449,231.831l-25.981,25.981c-3.613,3.613-7.901,5.42-12.847,5.42
		c-4.948,0-9.229-1.807-12.847-5.42l-53.954-53.961v143.32c0,4.948-1.813,9.232-5.428,12.847c-3.613,3.62-7.898,5.427-12.847,5.427
		h-36.547c-4.948,0-9.231-1.807-12.847-5.427c-3.617-3.614-5.426-7.898-5.426-12.847v-143.32l-53.959,53.961
		c-3.431,3.425-7.708,5.133-12.85,5.133c-5.14,0-9.423-1.708-12.85-5.133l-25.981-25.981c-3.422-3.429-5.137-7.714-5.137-12.852
		c0-5.137,1.709-9.419,5.137-12.847l103.356-103.353l25.981-25.981c3.427-3.425,7.71-5.14,12.847-5.14
		c5.142,0,9.423,1.715,12.849,5.14l25.98,25.981l103.35,103.353c3.432,3.427,5.14,7.71,5.14,12.847
		C366.589,224.117,364.881,228.402,361.449,231.831z"/>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
        </div>
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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<script>
    $(".bar_box").click(function() {
        $(this).toggleClass("nav_active");
    });
    $(".bar_box").click(function() {
        $(".menu_page").toggleClass("nav_active");
    });
</script>
<script>
    var rect = $('.rect');

    var deadline = new Date(2017,11,10);

    function runClock(){
        var now = new Date();
        var diff = deadline.getTime() - now.getTime();

        var diff_secs = parseInt(diff/1000);
        var diff_days = parseInt(diff_secs/(24*60*60));
        var diff_hrs = diff_secs % (24*60*60);
        diff_hrs = parseInt(diff_hrs/(60*60));

        var diff_mins = diff_secs % (60*60);
        diff_mins = parseInt(diff_mins/60);

        diff_secs = diff_secs % 60;

        rect.html(
            '剩餘時間：' +
            diff_days + '天 ' +
            diff_hrs + '時 ' +
            diff_mins + '分 ' +
            diff_secs + '秒'
        );
    }
    //runClock();



    setInterval(runClock, 1000);
</script>



<script>


    $('#myModal').modal('show');

    var particleCount = 300;
    var particleMax   = 1000;
    var sky           = document.querySelector('.modal');
    var canvas        = document.createElement('canvas');
    var ctx           = canvas.getContext('2d');
    var width         = sky.clientWidth;
    var height        = sky.clientHeight;
    var i             = 0;
    var active        = false;
    var snowflakes    = [];
    var snowflake;

    canvas.style.position = 'absolute';
    canvas.style.left = '0';
    canvas.style.top = '120px';

    var Snowflake = function () {
        this.x = 0;
        this.y = 0;
        this.vy = 0;
        this.vx = 0;
        this.r = 0;

        this.reset();
    };

    Snowflake.prototype.reset = function() {
        this.x = Math.random() * width;
        this.y = Math.random() * -height;
        this.vy = 1 + Math.random() * 3;
        this.vx = 0.5 - Math.random();
        this.r = 1 + Math.random() * 2;
        this.o = 0.5 + Math.random() * 0.5;
    };

    function generateSnowFlakes() {
        snowflakes = [];
        for (i = 0; i < particleMax; i++) {
            snowflake = new Snowflake();
            snowflake.reset();
            snowflakes.push(snowflake);
        }
    }

    generateSnowFlakes();

    function update() {
        ctx.clearRect(0, 0, width, height);

        if (!active) {
            return;
        }

        for (i = 0; i < particleCount; i++) {
            snowflake = snowflakes[i];
            snowflake.y += snowflake.vy;
            snowflake.x += snowflake.vx;

            ctx.globalAlpha = snowflake.o;
            ctx.beginPath();
            ctx.arc(snowflake.x, snowflake.y, snowflake.r, 0, Math.PI * 2, false);
            ctx.closePath();
            ctx.fill();

            if (snowflake.y > height) {
                snowflake.reset();
            }
        }

        requestAnimFrame(update);
    }

    function onResize() {
        width = sky.clientWidth;
        height = sky.clientHeight;
        canvas.width = width;
        canvas.height = height;
        ctx.fillStyle = '#FFF';

        var wasActive = active;
        active = width > -1000;

        if (!wasActive && active) {
            requestAnimFrame(update);
        }
    }

    // shim layer with setTimeout fallback
    window.requestAnimFrame = (function() {
        return  window.requestAnimationFrame       ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame    ||
            function( callback ){
                window.setTimeout(callback, 1000 / 60);
            };
    })();

    onResize();
    window.addEventListener('resize', onResize, false);

    sky.appendChild(canvas);

    var gui = new dat.GUI();
    gui.add(window, 'particleCount').min(1).max(particleMax).step(1).name('Particles count').onFinishChange(function() {
        requestAnimFrame(update);
    });










</script>

<script>
    $("#gotop").click(function(){
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
</body>

</html>