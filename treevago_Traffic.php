<?php require __DIR__. '/__connect_db.php';
$page_name = 'traffic';




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TreeVaGo交通資訊</title>
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
    /*********************main_area01*****************************/

    .main_area01 {
        max-width: 100%;
        height: 90vh;
        background: black;
    }
    /*********************main_area01*****************************/
    /*********************main_area02*****************************/

    .main_area02 {
        max-width: 100%;
        height: 100vh;
        background: gray;
    }
    /*********************main_area02*****************************/
    /*********************main_area02*****************************/

    .main_area03 {
        max-width: 100%;
        height: 100vh;
        background: #ccc;
    }
    /*********************main_area02*****************************/
/*******************main_footer*********************/
.main_footer{
    overflow: hidden;
    position: relative;
    max-width: 100%;
    height: 900px;
    background: #ff931e;
}
.main_footer_bg{
    position: absolute;
    z-index:33;
    width: 100%;
    height: 390px;
    background: url(images/mainPage/main_footer_bg.png) 0 0 no-repeat;           }
.main_footer>ul{
    display: flex;
    max-width:100%;
    height: 800px;
}
.main_footer>ul>li{
    flex-grow: 1;
    float: left;
}
.main_footer_map{
    margin-top:120px;
}
.main_contact{
    position: relative;
    width: 520px;
    height: 375px;
    /*     	background: #ccc;*/
    margin: 0 auto;
    margin-top: 160px;
    margin-left: 100px;
}
.main_footer_content{
    width: 520px;
    height: 340px;
    /*	background: black;*/
    margin: 0 auto;
    margin-top: 25px;
    margin-right: inherit;
}
.main_footer_logo{
    width: 200px;
    height: 100px;
    background: url(images/TREEVAGO_logo.png) no-repeat 0 0;
    background-size: contain;
}
.main_footer_menu>ul>li{
    float: left;
    padding: 5px;
    margin-top: -20px;
}
.main_footer_menu>ul>li>a{
    color: white;
    text-decoration: none;
    font-size:10px;
}
.main_footer_address>p{
    color: white;
    margin-top: 40px;
}
.main_footer_icon>ul>li{
    float: left;
    padding: 5px;
    margin-top: 30px;
}
.main_footer_right{
    width: 300px;
    height: 50px;
    margin-top: 110px;
}
.cantact_submit{
    color: white;
    padding: 10px 50px;
    border: 1px solid white;
    background: transparent;
    border-radius:25px;
    font-weight: bold;
    margin-top: 15px;
    margin-left: 180px;
    cursor: pointer;
}
.cantact_submit:hover{
    background: white;
    border: 1px solid white;
    color: #ff931e;
    transition: .5s;
}
.cantact_submit>p{
    color: white;
}
.footer_contact_title{
    width: 350px;
    height: 67px;
}
.footer_contact_title>h6{
    font-size:60px;
    color: white;
}
.footer_icon_last{
    margin-left: 0px;
}
.main_contact>form{
    position: absolute;
    z-index: 99;
    margin-top: 20px;
}
.main_contact_form>h4{
    color: white;
    font-size:18px;
    font-weight: normal;
    line-height: 40px;
}
.main_contact_textline{
    width: 300px;
    height: 30px;
    background: transparent;
    border: 0px;
    border-bottom: 1px solid white;

}
/********************************main_footer************************************/
/***************************main_footer_rwd*************************************/
@media only screen and (max-width:1250px){
    .main_footer_bg{
        display: none;
    }
    .main_footer{
        max-width: 100%;
        height: 250px;
        background: #ff931e;
    }
    .main_footer_map{
        width: 0;
        display: none;
    }
    .main_contact{
        display: none;
    }
    .main_footer_menu{
        display: none;
    }
    .main_footer_content{
        max-width:300px;
        margin: 0 auto;
    }
    .main_footer_logo{
        width: 150px;
        height: 75px;
        margin: 0 auto;
        margin-top:20px;
    }
    .main_footer_address>p{
        font-size:14px;
    }
    .main_footer_address{
        text-align: center;
        margin-top:-40px;
    }
    .main_footer_icon>ul>li{
        float: left;
    }
    .main_footer_icon>ul{
        padding: 10px;
    }
    .main_footer_icon{
        width: 270px;
        margin: 0 auto;
        margin-top: -30px;
    }
    .main_footer_right{
        /*   	background: black;*/
        width: 300px;
        height: 30px;
        margin-top: 60px;
        text-align: center;
    }
    .main_footer_right>p{
        font-size:10px;
    }
}
/***************************mainfooter_rwd*************************************/


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

    .car_img,
    .train_img {
        transform-style: preserve-3d;
        transition: all .7s;
    }

    .active {
        transform: rotateY(360deg);
    }

    h3,
    .container p {
        line-height: 30px;
    }

    h1,
    h3,
    h4,
    .container p, {
        color: #333333;
    }

    .cont_li {
        display: none;
        list-style: none;
    }

    .crh3::after {
        content: "羅東火車站 – Treevago";
        font-size: 16px;
    }

    .bg1 {
        margin: 0 auto;
        max-width: 100%;
        height: 100%;
        object-fit: cover;
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
        position: relative;
        margin-bottom: 50px;
    }

    .container::before {
        content: '';
        position: absolute;
        left: 340px;
        top: 0;
        width: 1px;
        height: 100%;
        background: #666666;
    }

    .cont_top {
        max-width: 100%;
        width: 590px;
        position: relative;
        left: 50%;
        margin: 20px 0 60px 0;
    }

    .cont1 {
        max-width: 100%;
        height: 380px;
        margin: 0 auto;
        display: flex;
    }

    .cont2 {
        height: 630px;
        margin-top: 80px;
    }

    .cont1_left {
        float: left;
        width: 220px;
        height: 90px;
        font-size: 24px;
        line-height: 35px;
        text-align: right;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .cont_icon {
        float: left;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 240px;
        height: 90px;
        position: relative;
    }

    .container .cont_icon::before {
        content: '';
        position: absolute;
        z-index: -1;
        left: 20px;
        1 top: 44.5px;
        width: calc(100% - 40px);
        height: 1px;
        background: #666666;
    }

    i {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 90px;
        height: 90px;
        background: #ff931e;
        border-radius: 50%;
    }

    .cont_right {
        float: left;
        width: 720px;
        height: 380px;
    }

    @media screen and (max-width:1180px) {
        .container::before {
            display: none;
        }
    }

    @media screen and (max-width:900px) {
        .cont_top {
            max-width: 100%;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 60px;
            left: 0;
            text-align: center;
        }
        .container {
            max-width: 100%;
            width: 1180px;
            margin: 0 auto;
            position: relative;
        }
        .cont1 {
            max-width: 100%;
            height: 600px;
            margin: 0 auto;
            display: block;
        }
        .cont_li {
            max-width: 80%;
            margin: 0 auto;
            height: 1px;
            border: solid 1px #666666;
            list-style: none;
            display: block;
        }
        .cont2 {
            height: 1000px;
            margin-top: 80px;
        }
        .cont1_left {
            width: 100%;
            text-align: center;
            display: block;
        }
        .cont_icon {
            float: left;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 90px;
            position: relative;
        }
        .container .cont_icon::before {
            display: none;
        }
        .cont_right {
            float: left;
            width: 100%;
            margin: 20px 0 20px 0;
            text-align: center;
        }
    }

    @media screen and (max-width:620px) {
        #gotop {
            position: fixed;
            right: 10px;
            bottom: 10px;
        }
    }

    @media screen and (max-width:545px) {
        .cont1 {
            max-width: 100%;
            height: 800px;
            margin: 0 auto;
            display: block;
        }
        .cont2 {
            height: 1200px;
            margin-top: 80px;
        }
    }
    /*!***************************footer_rwd*************************************!*/

    /*@media only screen and (max-width:1250px) {*/

        /*.footer {*/
            /*max-width: 100%;*/
            /*height: 350px;*/
            /*background: #ff931e;*/
        /*}*/
        /*.footer_box {*/
            /*margin: 0 auto;*/
            /*width: 100%;*/
            /*height: 350px;*/
            /*overflow: hidden;*/
            /*!*  background: #cccccc;*!*/
        /*}*/
        /*.footer_logo {*/
            /*margin: 0 auto;*/
            /*width: 200px;*/
            /*object-fit: contain;*/
        /*}*/
        /*.footer_left {*/
            /*margin: 0 auto;*/
            /*float: none;*/
            /*padding-top: 40px;*/
            /*width: 200px;*/
            /*height: 100px;*/
            /*!*          background: #666666;*/
        /**!*/
        /*}*/
        /*.footer_right {*/
            /*margin: 0 auto;*/
            /*float: none;*/
            /*padding-top: 60px;*/
            /*width: 100%;*/
            /*height: 200px;*/
            /*!*          background: #666666;*/
/**!*/
        /*}*/
        /*.footer_info {*/
            /*margin: 0 auto;*/
            /*width: 280px;*/
        /*}*/
        /*.footer_icon {*/
            /*width: 350px;*/
            /*margin: 0 auto;*/
        /*}*/


        /*.footer_icon>ul>li>a {*/
            /*padding: 10px;*/
            /*float: left;*/
            /*width: 30px;*/
            /*height: 30px;*/
            /*!*  background: #cccccc;*!*/
            /*border-radius: 3px;*/
            /*object-fit: cover;*/
        /*}*/
        /*.footer_menu {*/
            /*display: none;*/
        /*}*/
        /*.footer_icon_last {*/
            /*margin-left: 80px;*/
        /*}*/
        /*.footer_last {*/
            /*width: 300px;*/
            /*margin: 0 auto;*/
        /*}*/

        /*!***************************footer_rwd*************************************!*/
    </style>
<?php include __DIR__. '/_navbarWithMember.php'; ?>
</head>

<body>
    <!--navbar-->
    <div class="bg1"><img src=images/T0-02.png alt=""></div>
    <div class="cont_top">
        <h1>探索森林<br>從Treevago開始！</h1></div>
    <div class="container">
        <div class="cont1">
            <div class="cont1_left">
                <h4>搭乘火車或客運至<br>羅東車站</h4></div>
            <div class="cont_icon"><i class="card1 transition"><img  class="train_img"src=images/icon_train.png alt="icon_train"></i></div>
            <div class="cont_right">
                <h3>【大眾交通工具】</h3>
                <p>1.從台北搭乘火車至羅東火車站， 車程約1.5～2小時。【臺灣鐵路管理局】
                    <br> 2.從台北轉運站搭乘客運。車程約50分鐘~1.5小時。【葛瑪蘭汽車客運時刻表】
                </p>
                <br>
                <h3 class="crh3">【飯店接駁服務】</h3>
                <p>Treevago免費提供，每日一班，座位有限，建議可提早向飯店預訂。</p>
                <br>
                <p>《時刻表》
                    <br> 羅東車站→Treevago發車時間 (往Treevago) ：13:50　抵達時間約 16:00
                    <br> Treevago →羅東車站發車時間 (往宜蘭) ：11:00　抵達時間約 13:10
                    <br>*抵達時間依當日路況為準。
                    <br>*接駁車上車處：羅東後火車站口</p>
            </div>
        </div>
        <li class="cont_li"></li>
        <div class="cont1 cont2">
            <div class="cont1_left">
                <h4>自行開車</h4></div>
            <div class="cont_icon"><i class="card transition"><img class="car_img" src=images/icon_car.png alt="icon_train"></i></div>
            <div class="cont_right">
                <h3>從基隆：</h3>
                <p>基隆→省道台2線(濱海公路) →壯圍→省道台7線→省道台7甲線(3.7K)
                    <br>→宜專1線→土場→鳩之澤→太平山→Treevago
                </p>
                <br>
                <h3>從台北：</h3>
                <p>(1.) 台北→國道5號→宜蘭(交流道)→省道台7線→省道台7甲線(3.7K)
                    <br>→宜專1線→土場→鳩之澤→太平山→Treevago
                    <br>
                    <br>(2.) 台北→國道5號→羅東(交流道)→省道台7丙線→省道台7線→
                    <br>省道台7甲線(3.7K)→宜專1線→土場→鳩之澤→太平山→Treevago
                    <br>
                    <br>(3.) 台北→省道台9線(北宜公路)→頭城鎮→宜蘭市→省道台7線→
                    <br>省道台7甲線(3.7K)→宜專1線→土場→鳩之澤→太平山→Treevago</p>
                <br>
                <h3>從桃園：</h3>
                <p>桃園→大溪→省道台7線(北橫公路)→省道台7甲線(3.7K)→宜專1線→土場→鳩之澤→太平山→Treevago</p>
                <br>
                <h3>從花蓮：</h3>
                <p>花蓮→省道台9線(蘇花公路)→省道台7丙線→省道台7線→省道台7甲線(3.7K)
                    <br>→宜專1線→土場→鳩之澤→太平山→Treevago</p>
                <br>
            </div>
        </div>
    </div>
    <div id="gotop"><img src="images/go_top.svg" alt=""></div>
    <div class="bg"></div>
    <div class="content">
        <h2 class="btn_h2">會員中心</h2>
        <div class="cont_btn_enter_box">
            <div class="cont_btn_enter"><a href="order-member.php">尚未結帳訂單</a></div>
            <div class="cont_btn_enter"><a href="edit_user.php">編輯會員資料</a></div>
            <div class="cont_btn_enter"><a href="history.php">歷史訂單查詢</div></a>
        </div>
    </div>
    <!--container-->
    <!--****************************************************main_footer*******************************************-->

    <div class="main_footer footer">
        <div class="main_footer_bg"></div>
        <ul>
            <li class="main_footer_map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.900160576886!2d121.51450861484558!3d24.523536864718178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346870de7779b2bd%3A0x48586a843785487d!2zMjY35a6c6Jit57ij5aSn5ZCM6YSJ5aSq5bmz5p6X6YGTNTjomZ8!5e0!3m2!1szh-TW!2stw!4v1507799012126" width="800" height="980" frameborder="0" style="border:0" allowfullscreen></iframe></li>
            <li class="main_footer_form">
                <div class="main_contact">
                    <div class="footer_contact_title">
                        <h6>Contact us</h6>
                    </div>
                    <form action="get.php" method="get" class="main_contact_form">
                        <h4>姓名：</h4><br><input type='text' class="main_contact_textline"><br>
                        <h4>電話：</h4><br><input type='text' class="main_contact_textline"><br>
                        <h4>請輸入您想說的話：</h4><br><input type='text' class="main_contact_textline"><br>
                        <p><input type='button' value='送出' class="cantact_submit"  onclick="location.href='treevago_index.php'"></p>
                    </form>
                </div>
                <div class="main_footer_content">
                    <div class="main_footer_logo"></div>
                    <div class="main_footer_menu">
                        <ul>
                            <li><a href="treevago_room.php">房型介紹</a></li>
                            <li><a href="treevago_class_info.php">親子課程</a></li>
                            <li><a href="treevago_parkGuide.php">園區總覽</a></li>
                            <li><a href="treevago_activity.php">限時活動</a></li>
                        </ul>
                    </div>
                    <div class="main_footer_address">
                        <p>
                            T : 08-886-2345 F : 08-886-222 <br>
                            ADD : 宜蘭縣大同鄉太平村太平巷58號 <br>
                            E-mail : Treevago@treevago.com.tw <br>
                        </p>
                    </div>
                    <div class="main_footer_icon">
                        <ul>
                            <li><a href=""><img src="images/line-01.png" alt="" width="25px"></a></li>
                            <li><a href=""><img src="images/line-02.png" alt="" width="25px"></a></li>
                            <li><a href=""><img src="images/note.png" alt="" width="80px" class="cooking_logo"></a></li>
                            <li><a href=""><img src="images/inneed_logo.svg" alt="" width="80px" class="cooking_logo footer_icon_last"></a></li>

                        </ul>
                    </div>
                    <div class="main_footer_right">
                        <p>© 2017 Treevago.,Ltd All right reserved.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div><!--main_footer-->




    <!---*************************script*********************************-->
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
    <!---*************************script*********************************-->
</body>

</html>