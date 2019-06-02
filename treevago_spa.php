<?php require __DIR__. '/__connect_db.php';
$page_name = 'spa';




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TreeVaGo精油SPA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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

    #gotop img {
        width: 40px;
        height: 40px;
        overflow: hidden;
        object-fit: cover;
        cursor: pointer;
    }

    .container {
        max-width: 100%;
        margin: 0 auto;
    }

    .cont_bg {
        margin: 0 auto;
        max-width: 100%;
        height: 100%;
        margin-left: -1px;
        overflow: hidden;
    }

    .cont_bg img,
    .cont_bg2 img,
    .cont_bg3 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .spa1,
    .spa2 {
        margin: 0 auto;
        max-width: 1580px;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .spa1-1,
    .spa2-1 {
        width: 300px;
        height: 500px;
        text-align: center;
        margin-right: 350px;
        line-height: 36px;
    }

    .spa1-2,
    .spa2-2 {
        width: 300px;
        height: 500px;
        text-align: center;
        line-height: 36px;
    }

    .spa1 p,
    .spa2 p {
        color: #666666;
    }

    h3 {
        color: #333333;
    }

    strong {
        color: red;
        font-size: 20px;
    }

    .spa2-1,
    .spa2-2 {
        height: 300px;
    }

    .cont_bg2 {
        margin: 0 auto;
        max-width: 100%;
        height: 100%;
        margin-left: -2px;
        overflow: hidden;
    }

    .cont_bg3 {
        margin: 0 auto;
        max-width: 100%;
        height: 100%;
        overflow: hidden;
    }

    hr {
        visibility: hidden;
    }

    .spa1-1_img img:hover {
        transform: scale(1.2,1.2);
        overflow: hidden;
        transition: all 2s;
    }

    .spa1-1_img {
        margin-: 0 auto;
        width: 210px;
        height: 86px;
        margin: 0 45px;
        overflow: hidden;
    }


    @media screen and (max-width:1024px) {
        .spa1-1,
        .spa2-1 {
            margin-right: 100px;
        }
    }

    @media screen and (max-width:720px) {
        .spa1-1,
        .spa2-1 {
            margin-right: 0px;
        }
    }

    @media screen and (max-width:620px) {
        .spa1-1,
        .spa2-1 {
            margin-right: 0px;
        }
        .spa1,
        .spa2 {
            height: 1200px;
        }
        hr {
            visibility: visible;
            margin-top: 80px;
        }
        .spa2-1 hr {
            margin-top: 120px;
        }
    }

 @media screen and (max-width:620px) { #gotop { position: fixed; right: 10px; bottom: 10px; } }


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
    <!--navbar-->
    <div class="container">
        <div class="cont_bg"><img src=images/SPA00.png alt=""></div>
        <div class="spa1">
            <div class="spa1-1">
                <h2>泰式古法舒壓按摩</h2>
                <div class="spa1-1_img"><img src="images/spa1.png" alt=""></div>
                <p>2HR /
                    <del>NT$2,400</del>
                    <br>住房優惠價 <strong>NT$2,000</strong></p>
                <br>
                <h3>整套療程</h3>
                <p>足部去角質舒壓 (免費贈送)
                    <br>全身泰式古法舒壓
                    <br>背部強化精油SPA
                    <br>頭頸筋絡加強舒壓
                    <br>肩頸背藥草球熱敷
                    <hr>
                </p>
            </div>
            <div class="spa1-2">
                <h2>泰式芳療油壓療程系列</h2>
                <div class="spa1-1_img"><img src="images/spa2.png" alt=""></div>
                <p>2HR /
                    <del>NT$1,700</del>
                    <br>住房優惠價 <strong>NT$1,500</strong></p>
                <br>
                <h3>整套療程</h3>
                <p>頭/臉SPA
                    <br>全身被動式瑜珈
                    <br>背部強化精油SPA
                    <br>頭頸筋絡加強舒壓
                    <br>(贈)足部清潔舒壓 10~15Min </p>
            </div>
        </div>
        <div class="cont_bg2"><img src=images/SPA001.png alt=""></div>
        <div class="spa2">
            <div class="spa2-1">
                <h2>特定部位加強療程系列</h2>
                <div class="spa1-1_img"><img src="images/spa3.png" alt=""></div>
                <p>臉部療程
                    <br>包含頭、頸、肩
                    <br>1HR / <strong>NT$1,500</strong></p>
                <br>
                <p>足部舒壓護理
                    <br>1HR / <strong>NT$1,500</strong>
                    <hr>
                </p>
            </div>
            <div class="spa2-2">
                <h2>東方指壓療程系列</h2>
                <div class="spa1-1_img"><img src="images/spa4.jpg" alt=""></div>
                <p>全身療程
                    <br>包含頭、頸、肩、腿
                    <br>(贈) 足部清潔舒壓 10~15Min
                    <br>
                    <br> 1HR / <strong>NT$1,250</strong>
                    <br>2HR / <strong>NT$2,400</strong></p>
                <br>
            </div>
        </div>
        <div class="cont_bg3"><img src=images/SPA02.png alt=""></div>
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