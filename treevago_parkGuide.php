<?php require __DIR__. '/__connect_db.php';
$page_name = 'parkGuide';




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TreeVaGo園區導覽</title>
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

    .white_p p{
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

    .footer_last p{
        font-weight: bold;
        font-family: '微軟正黑體';
        font-size: 14px;
        color:#000;
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
/********************************go_topWithRwd************************************/
    #gotop {
        position: fixed;
        z-index: 99;
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
@media screen and (max-width:620px) { #gotop { position: fixed; right: 10px; bottom: 10px; } }
/********************************go_topWithRwd************************************/


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

        .footer_icon > ul > li > a {
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
    }
        /***************************footer_rwd*************************************/

        /***************************parkGuide_Css*************************************/
        .container {
            max-width: 100%;
            margin: 0 auto;
        }
        .center{
            text-align: center;
        }
/***************************area01*************************************/
        .cont_bg{
            max-width: 1600px;
            background: #ccc;
            height: 740px;
            position: relative;
            overflow: hidden;
        }
        .cont_bg>img {
            position: absolute;
            max-width:100%;
            height: 100%;
            object-fit:cover;
            z-index: 7;
        }
        .cont_bg>a>img{
            position: absolute;
            max-width:100%;
            object-fit:cover;
            z-index: 7;
        }
        .building{
            z-index: 11;
            transform: scale(.6);
        }
        .room{
            transform: scale(.7);
        }
        .room:hover{
            transform: scale(.76);
            transition: all .9s;
        }
        .building:hover{
            transform: scale(.66);
            transition:all .9s;
        }
        .bonbibi{
            left: 24%;
            top:-5%;
        }
        .burl{
            left:78%;
            top: 38%;
        }
        .cedar{
            left: 24%;
            top: 42%;
        }
        .nest{
            left: 44%;
            top:3%;
        }
        .tempo{
            left: -8%;
            top: 14%;
        }
        .trillum{
            left: 50%;
            top: 44%;
        }
        .checkingHouse{
            left: 74%;
            top: 5%;
        }
        .restaurant{
            left: 85%;
            top: 23%;
        }
        .spa{
            left: 82%;
            top: 11%;
        }
/***************************area01*************************************/
/***************************area02*************************************/
    p{
        color:#666666;
    }
#arrondissements a:hover path {
    fill: #ff931e;
}

#arrondissements a:hover text {
    fill: white;
}

#arrondissements text {
    font-family: "Poller One", "Arial black", arial;
    font-size: 20px;
    font-weight: bold;
    fill: #585858;
}

/* The page */
#arr-descriptions>div>h2 {
    font-family: '微軟正黑體',calibri;
    font-size: 44px;
    font-weight: 100;
    margin-bottom: 40px;
    color:#333333;
}
#arr-descriptions>div>p {
    text-align: left;
    line-height: 36px;
    font-size: 18px;
    font-weight: lighter;
    margin-top: 20px;
    font-family: '微軟正黑體';
}

#arr-descriptions {
    margin-bottom: 7em;
}
.content_box{
    margin: 0 auto;
    margin-top: 180px;
    max-width: 1170px;
    height: 840px;
    text-align: center;
}
.content_box_large{
    overflow: hidden;
    max-width: 100%;
    margin: 0 auto;
    margin-top: 100px;
    height: 1440px;
    text-align: center;
}
.content_box_large>img{
    max-width: 1600px;
}
.content_box>img{
    max-width: 1170px;
    max-height: 600px;
}
.fristBox{
    margin-top: 200px;
}
.content_box_a{
    float: right;
    margin-top: -45px;
    text-decoration: none;
    color: #ff931e;
    padding: 10px 30px;
    border-radius: 25px;
    /*background: white;*/
    border: 1px solid #ff931e;
}
.content_box_large a{
    float: right;
    margin-top: -45px;
    text-decoration: none;
    color: #ff931e;
    padding: 10px 30px;
    border-radius: 25px;
    /*background: white;*/
    border: 1px solid #ff931e;
}
.content_box_a:hover{
    background: #ff931e;
    border: 1px solid transparent;
    color: white;
    transition: all .3s;
}
.content_box_large a:hover{
    background: #ff931e;
    border: 1px solid transparent;
    color: white;
    transition: all .3s;
}
.large_box_article{
    margin: 0 auto;
    text-align: left;
    max-width: 1170px;
    height: 200px;
    margin-top: -40px;
}
.large_box_article>p{
    line-height: 36px;
    font-size: 18px;
    font-weight: lighter;
    margin-top: 50px;
    font-family: '微軟正黑體';
}

/***************************area02*************************************/
/*************************************scroll_pic*******************************************/
.park_pic{
    transition: all .5s;
    opacity: 0;
    margin-top: 600px;
}
.park_pic>img{
    max-width: 1170px;
}
.show{
    margin-top: 300px;
    opacity: .3;
}
.active{
    margin-top: 0px;
    opacity: 1;
}
/*************************************scroll_pic*******************************************/

/***************************parkGuide_Css*************************************/
    </style>
    <?php include __DIR__. '/_navbarWithMember.php'; ?>
</head>

<body>
    <div class="container">
        <div class="cont_bg">
            <img src=parkImg/mapWithoutBuilding001.png alt="">
            <a href="#arrondissement1"><img class="room bonbibi" src="parkImg/bonbibi2.png" alt=""></a>
            <a href="#arrondissement2"><img class="room burl" src="parkImg/burl.png" alt=""></a>
            <a href="#arrondissement3"><img class="room cedar" src="parkImg/cedar1.png" alt=""></a>
            <a href="#arrondissement4"><img class="room nest" src="parkImg/nest.png" alt=""></a>
            <a href="#arrondissement5"><img class="room tempo" src="parkImg/tempo2.png" alt=""></a>
            <a href="#arrondissement6"><img class="room trillum" src="parkImg/trillum.png" alt=""></a>
            <a href="#arrondissement7"><img class="building checkingHouse" src="parkImg/checkingHouse.png" alt=""></a>
            <a href="#arrondissement8"><img class="building restaurant" src="parkImg/restaurant.png" alt=""></a>
            <a href="#arrondissement9"><img class="building spa" src="parkImg/spa.png" alt=""></a>
        </div>
        <section id="arr-descriptions">
            <div class="content_box fristBox">
                <h2 id="arrondissement1">Bonbibi</h2>
                <a href="/treevago/treevago_roomdetail.php?sid=1"><img class="park_pic park_pic1" src="parkImg/biger/bonbibi_large.png" alt=""></a>
                <p>小屋採光充足、視野開闊，留宿於此的旅人們 可以在充滿陽光綠意的窗邊或坐或臥，<br> 隨心所欲的放鬆。
                    讓全家大小擁有一個靜謐的空間盡情享受身心靈沉靜的假期。</p>
                <a href="/treevago/treevago_roomdetail.php?sid=1" class="content_box_a">查看更多</a>
            </div>
            <div class="content_box">
                <h2 id="arrondissement2">Burl</h2>
                <a href="/treevago/treevago_roomdetail.php?sid=2"><img class="park_pic park_pic2" src="parkImg/biger/burl_large.png" alt=""></a>
                <p>小屋的建築外觀猶如一輪優美的半月灣，靜靜佇立在原始森林的懷抱中。<br>屋子採用環型窗戶的設計，
                    讓旅客可欣賞戶外恬靜的景緻，暢享自然的恩惠。</p>
                <a href="/treevago/treevago_roomdetail.php?sid=2" class="content_box_a">查看更多</a>
            </div>
            <div class="content_box">
                <h2 id="arrondissement3">Cedar</h2>
                <a href="/treevago/treevago_roomdetail.php?sid=6"><img class="park_pic park_pic3" src="parkImg/biger/cedar_large.png" alt=""></a>
                <p>木屋充滿現代感與自然風格，採用較為低調及沉穩的配色， 簡單俐落的室內設計搭配大隔間<br>，液晶電視及寬頻網路等配備齊全，
                    適合大全家出外旅遊的住宿空間。</p>
                <a href="/treevago/treevago_roomdetail.php?sid=6" class="content_box_a">查看更多</a>
            </div>
            <div class="content_box">
                <h2 id="arrondissement4">Nest</h2>
                <a href="/treevago/treevago_roomdetail.php?sid=3"><img class="park_pic park_pic4" src="parkImg/biger/nest_large.png" alt=""></a>
                <p>小屋取鳥巢之寓意，低調簡約的室內設計， 融入了在地自然風格並穿插著暖色調的元素，<br> 讓舒適的住宿環境作您享樂旅遊疲累後的
                    最佳後盾。</p>
                <a href="/treevago/treevago_roomdetail.php?sid=3" class="content_box_a">查看更多</a>
            </div>
            <div class="content_box">
                <h2 id="arrondissement5">Tempo</h2>
                <a href="/treevago/treevago_roomdetail.php?sid=5"><img class="park_pic park_pic5" src="parkImg/biger/temple_large.png" alt=""></a>
                <p>位於整個園區的最深處，門前的木橋更是為小屋增添一筆淡淡的神秘色彩， <br>結合戶外的原始景色及屋的禪風意境，創造出不一
                    樣的寧靜與奢華。</p>
                <a href="/treevago/treevago_roomdetail.php?sid=5" class="content_box_a">查看更多</a>
            </div>
            <div class="content_box">
                <h2 id="arrondissement6">Trillum</h2>
                <a href="/treevago/treevago_roomdetail.php?sid=4"><img class="park_pic park_pic6" src="parkImg/biger/trillium_large.png" alt=""></a>
                <p>小屋名取自延齡草，花語是『美麗，優雅的人』。 小屋設計極具現代氣息，<br>四面環窗的巧思提供您絕妙的視野， 讓您與家人沐浴在恬靜的陽光底下，享
                    受這專屬的靜逸空間。</p>
                <a href="/treevago/treevago_roomdetail.php?sid=4" class="content_box_a">查看更多</a>
            </div>
            <div class="content_box_large">
                <h2 id="arrondissement7">精緻會館</h2>
                <img src="parkImg/HuiGuan.png" alt="">
                <div class="large_box_article">
                <p class="center">太平山區的主要餐飲住宿區，住宿房型依紅檜、香杉、台灣杉建造，<br>太平山以南湖大山為最高峰3,740公尺。地勢西南高而東北，<br>地形多變，兼具高山與河谷
                    之美。</p>
                </div>
            </div>
            <div class="content_box_large">
                <h2 id="arrondissement8">森林餐廳</h2>
                <img src="parkImg/R9.png" alt="">
                <div class="large_box_article">
                <p>盡情享用來自森林的美好料理，我們提供您活力早餐、午、晚餐套餐以及單點服務，<br>由來自法國的Paco親自掌廚
                    ，滿足您味蕾的美味享受，<br>一飽無國界的美食盛宴。</p>
                <a href="treevago_restaurant_info.php">查看更多</a>
                </div>
            </div>
            <div class="content_box_large">
                <h2 id="arrondissement8">下午茶</h2>
                <img src="images/AT3-14.png" alt="">
                <div class="large_box_article">
                    <p>無論生活多麼地平凡，或不平凡，都別錯過難得的假日時光。<br>TreevagoTable為您計畫了專屬午茶，不需要與紛擾的城市人云亦云，<br>
                        提供您當天的 最佳伴飲。還有堅持當日製做的精製手工糕點。</p>
                    <a href="treevago_AfternoonTea.php">查看更多</a>
                </div>
            </div>
            <div class="content_box_large">
                <h2 id="arrondissement9">休閒SPA</h2>
                <img src="parkImg/SPA001.png" alt="">
                <div class="large_box_article">
                <p>偉大媽媽的假日小確幸，就是找間SPA館按摩放鬆一下~使用Boutique SPA精油，融合中式及泰式專業技巧，<br>從一般的「中式穴道推拿」到遵循古法的「泰式紓壓按摩」通通有
                輕柔而精準的手技，<br>加上六星級的VILLA，享受最深層的身心靈舒暢。</p>
                <a href="treevago_spa.php">查看更多</a>
                </div>
            </div>
        </section>
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

    <!--****************************parck_scroll_js*****************************-->
    <script>

        /*

        The following script isn't absolutely necessary to the map functionalities.
        It was added in order to enable the pointing to IDs INSIDE the HTML document (the smooth scrolling is a nice bonus).

        For more information, please look at this pen's infos or ask me directly on Twitter : https://twitter.com/GyombGraphics
        */


        // thanks to Geoffrey Crofte for this jquery smooth scroll script :
        // http://www.creativejuiz.fr/blog/tutoriels/jquery-effet-smooth-scroll-defilement-fluide

        // pointing from the svg object to fragments in the HTML doc.
        $('#arrondissements a').click(function(){
            if ($(this).attr("xlink:href").substring(0,1) == "#"){
                var the_id = $(this).attr("xlink:href");
                $('html, body').animate({
                    scrollTop:$(the_id).offset().top
                }, 'slow');
            }
            return false;
        });/**/


        // Smoothscrolling for standards anchors
        $('a[href^="#"]').click(function(){
            var the_id = $(this).attr("href");
            $('html, body').animate({
                scrollTop:$(the_id).offset().top
            }, 'slow');
            return false;
        });
    </script>

    <!--****************************parck_scroll_js*****************************-->

    <!--************************************parallax***************************************-->
    <script>
        $(window).scroll(function(event){
            var st = $(this).scrollTop();
            if(st>300){
                $(".park_pic1").addClass('show');
            }else{
                $(".park_pic1").removeClass('show');
            }
            if(st>900){
                $(".park_pic1").addClass('active');
            }else{
                $(".park_pic1").removeClass('active');
            }

            if(st>1040){
                $(".park_pic2").addClass('show');
            }else{
                $(".park_pic2").removeClass('show');
            }
            if(st>1640){
                $(".park_pic2").addClass('active');
            }else{
                $(".park_pic2").removeClass('active');
            }

            if(st>2080){
                $(".park_pic3").addClass('show');
            }else{
                $(".park_pic3").removeClass('show');
            }
            if(st>2680){
                $(".park_pic3").addClass('active');
            }else{
                $(".park_pic3").removeClass('active');
            }

            if(st>3020){
                $(".park_pic4").addClass('show');
            }else{
                $(".park_pic4").removeClass('show');
            }
            if(st>3620){
                $(".park_pic4").addClass('active');
            }else{
                $(".park_pic4").removeClass('active');
            }

            if(st>3960){
                $(".park_pic5").addClass('show');
            }else{
                $(".park_pic5").removeClass('show');
            }
            if(st>4560){
                $(".park_pic5").addClass('active');
            }else{
                $(".park_pic5").removeClass('active');
            }

            if(st>4900){
                $(".park_pic6").addClass('show');
            }else{
                $(".park_pic6").removeClass('show');
            }
            if(st>5500){
                $(".park_pic6").addClass('active');
            }else{
                $(".park_pic6").removeClass('active');
            }
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
        <!--************************************parallax***************************************-->

</body>
</html>