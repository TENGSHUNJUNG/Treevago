*{
padding: 0;
margin:0;
box-sizing: border-box;
}
body{
font-family:'微軟正黑體',calibri;
background:url(images/bg_main.jpg) repeat 0 0;
}
/*a{
font-family: '微軟正黑體''calibri';
}*/
ul>li{
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
.container{
max-width: 784px;
width: 100%;
margin: 45px auto;
}
/********************nav_bar*********************/
.nav{
max-width: 100%;
height: 120px;
background:#ff931e;
}
.main_menu{
max-width: 1180px;
height: 120px;
margin: 0 auto;
}
.logo{
width: 180px;
height: 100px;
background:url(images/TREEVAGO_logo.png) no-repeat 0 0 ;
background-size: contain;
float: left;
margin-top:20px;
}
.menu_01>ul>li{
width: 120px;
text-align: center;
float: left;
}
.menu_01>ul>li>a{
color: white;
text-decoration: none;
font-family: '微軟正黑體';
/*margin-left: 20px;*/
font-size: 15px;
padding: 20px;
}
.menu_01{
position: relative;
float: right;
margin-top: 79px;
}
.booking{
margin-left:80px;
}
.bar_box{
display: none;
}
/******************nav_bar***********************/

/*********************nav_rwd************************/
@media only screen and (max-width:1250px){
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
.menu_01{
display: none;
}
.header{
width: 100%;
/*	height: 180px;*/
height: 80px;
background: rgba(0,0,0,.5);
}
.logo{
width: 200px;
height: 80px;
position: absolute;
top:1%;
left: 50%;
margin:10px 0 0 -80px;
}
.menu_page{
position: absolute;
right:0;
top:120px;
width: 100%;
text-align: center;
z-index: 999;
display: block;
opacity: 0;
max-height: 0px;
overflow: hidden;
}
.menu_page_li>a{
background: #ff931e;
line-height: 100px;
font-size: 18px;
color: #fff;
float: none;
display: block;
text-decoration: none;
}
.menu_page_li>a:hover{
background: #ffaa1e;
}
.bar_box{
float:right;
/*position: absolute;
top:10%;*/
margin-top: 70px;
cursor: pointer;
display: block;
}
.nav_active .bar1{
transform:rotate(-45deg) translate(-9px, 7px);
}
.nav_active .bar2{
opacity: 0;
}
.nav_active .bar3{
transform:rotate(45deg) translate(-9px, -8px);
}
.bar{
width: 36px;
height: 6px;
background:#ccc;
margin:6px 10px;
border-radius: 3px;
}
.bar_box .nav_active{
opacity: 1;
max-height: 500px;
}
.transition{
transition:all .5s;
}
}


/****************main-nav************************/

/*******************sub_nav*************************/
.menu_01>ul>li:hover .sub_nav{
max-height:1000px;
}

.sub_nav{

position: absolute;
background: #ff931e;
top:41px;
width:120px;
overflow: hidden;
max-height: 0px;
}
.sub_nav a{
color: white;
text-decoration: none;
padding: 15px 10px;
display: block;
}
.sub_nav a:hover{
background: #ffaa1e;
}
.sub_transition{
transition: .5s;
}


/********************sub_nav***********************/


/*********************main_area01*****************************/
.main_area01{
max-width: 100%;
height:90vh;
background: black;
}











/*********************main_area01*****************************/
/*********************main_area02*****************************/
.main_area02{
max-width: 100%;
height: 100vh;
background: gray;
}










/*********************main_area02*****************************/
/*********************main_area02*****************************/
.main_area03{
max-width: 100%;
height: 100vh;
background: #ccc;
}










/*********************main_area02*****************************/

/*******************footer*********************/
.footer{
max-width: 100%;
height: 250px;
background: #ff931e;
}
.footer_box{
margin:0 auto;
width: 1000px;
height: 250px;
/*	background: #cccccc;*/
}
.footer_left{
float: left;
padding-top: 40px;
width: 350px;
height: 250px;
/*			background: #666666;
*/		}
.footer_logo{
width: 350px;
height: 150px;
background: url(images/TREEVAGO_logo.png) no-repeat 0 0;
background-size: contain;
}
.footer_menu>ul>li>a{
color: white;
text-decoration: none;
float: left;
padding: 10px;

}
.footer_right{
float: right;
padding-top: 60px;
width: 350px;
height: 250px;
/*			background: #666666;
*/		}
.white_p{
color: white;
}
.footer_info{
line-height:20px;
font-family: '微軟正黑體';
}

.footer_icon{
height: 80px;
padding-top: 15px;
}

.footer_last{
font-weight:bold;
font-family: '微軟正黑體';
font-size: 14px;
}
.footer_icon>ul>li>a{
float: left;
width: 30px;
height: 30px;
/*	background: #cccccc;*/
margin-right: 10px;
border-radius:3px;
object-fit: cover;
}
.footer_icon_last{
margin-left: 80px;
}
/********************************footer************************************/
/***************************footer_rwd*************************************/
@media only screen and (max-width:1250px){

.footer{
max-width: 100%;
height: 350px;
background: #ff931e;
}
.footer_box{
margin:0 auto;
width: 100%;
height: 350px;
overflow: hidden;
/*	background: #cccccc;*/
}
.footer_logo{
margin:0 auto;
width:200px;
object-fit:contain;
}
.footer_left{
margin: 0 auto;
float:none;
padding-top: 40px;
width: 200px;
height: 100px;
/*			background: #666666;
*/		}
.footer_right{
margin: 0 auto;
float:none;
padding-top: 60px;
width: 100%;
height: 200px;
/*			background: #666666;
*/		}
.footer_info{
margin: 0 auto;
width: 280px;
}
.footer_icon{
width: 350px;
margin: 0 auto;
}


.footer_icon>ul>li>a{
padding: 10px;
float: left;
width: 30px;
height: 30px;
/*	background: #cccccc;*/

border-radius:3px;
object-fit: cover;
}
.footer_menu{
display: none;
}
.footer_icon_last{
margin-left: 80px;
}
.footer_last{
width: 300px;
margin: 0 auto;
}
}
/***************************footer_rwd*************************************/
