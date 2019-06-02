<?php require __DIR__. '/__connect_db.php';
$page_name = 'class_info';





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TreeVaGo課程資訊</title>
    <meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--************************lightBoxcss*****************************-->
	<link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	<!--************************lightBoxcss*****************************-->
	<style>
        <?php include __DIR__. '/__style_navfooterWithMember.php'; ?>
		*{
			padding: 0;
			margin:0;
			box-sizing: border-box; 
		}
        a{
            text-decoration: none;
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
			max-width: 100%;
			background:url(images/bg_main.jpg) repeat 0 0; 
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

        /*********************main_area01*****************************/
		h2{
		    color:#333333;
		}
		p{
			color:#666666;
		}
		.bg1{
			margin: 0 auto;
			max-width:100%;
		}
		.bg1 img{
			margin: -1px auto 0;
			width: 100%;
			height:100%;
			object-fit: cover;
		}
		.container{
			max-width: 100%;
			margin: 0 auto;
		}
        .classtxt_01{        	
        	text-align: center;
            margin:0 auto;
        }
        .cont2{        	
			max-width: 100%;
			height: 100%;
			display: flex;
			flex-wrap:nowrap; 
		}
		.cont2-1,.cont2-2,.cont2-3,.cont2-4{ 
			float: left;
			margin-right: 20px;
			max-width: 100%;
		}
		.cont2-1{
			margin-top:255px;
		}
		.cont2-2{
			margin-top:170px;
			margin-bottom: 100px;
		}
		.cont2-3{
			margin-top:85px;
			margin-bottom: 200px;
		}
		.cont2-4{
			margin-bottom: 300px;
			margin-right: 0;
		}
		.cont2-1 img , .cont2-2 img , .cont2-3 img , .cont2-4 img{
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
        .circle{
           width: 650px;
           height: 600px;
           border-radius: 50%;
           margin:0 auto;
           position: absolute;
           left: 490px;
           top:-300px;
           background:url(images/bg_main.jpg) repeat 0 0; );
		   z-index: 77;
        }

        .circle_relative{
           position: relative;
        }
       .txtcontrol{
       		width: 300px;
        	height: 600px;
       	    position: absolute;
       	    left: 660px;
            top:-160px;
            text-align: center;
            line-height: 40px;
            z-index: 99;
       }
      .footer_block{
      	    height: 300px;
      }
        .white_p p {
            color:#fff;
            text-align: left;
        }
        .footer_last{
            text-align: left;
        }
        .footer_last p{
            color:#000;
        }

    /*********************main_area01*****************************/
    /*********************main_area01_rwd*****************************/
        	@media screen and (max-width:525px){
			p{
				margin:0 10px;
			}
			.p1{
				display: none;
			}
			.cont2{
			   padding-top: 50px;
			   max-width: 100%;
			   height: 1250px;
			   display: flex;
			   flex-wrap:wrap; 
			   overflow: hidden;
		    }
			.cont2-1{
				width: 47%;
				margin:24px 15px 430px 0 ;
			}
			.cont2-2{
				width: 47%;
				margin:-19px 0 480px 0 ;
			}
			.cont2-3{
				width: 47%;
				margin:-399px 15px 800px 0 ;
			}
			.cont2-4{
				width: 47%;
				margin:-449px 0 850px 0 ;
			}

			h4{
				align-self:flex-start;
			}
            .circle{
        	    display: none;
        	    border: 1px  solid #0B0A0A;
            }

       	
	       	.txtcontrol{
	       		width: 375px;
	        	height: 300px;
	       	    position: absolute;
	       	    left:0;
	            top:-300px;
	            text-align: center;
	        }
	        .txtcontrol>p{
	            line-height: 30px;
	        }
			 .footer_block{
			      	display: none;
			      }
             .footer_last p{
                    margin:0;
             }

		}
		/*********************main_area01_rwd*****************************/

	/*****************************動態效果***************************************/	
    .pic_hover img:hover{
    	transform: scale(1.03);
    	transition: all .7s;
    }
   	.pic_hover{
   		cursor: pointer;
   	}
	@media only screen and (min-width:1250px){
		.cont2_small{
			display: none;
		}

	}
	@media only screen and (max-width:1249px){
		.cont2_big{
			display: none;
		}
	}
	/*****************************動態效果***************************************/
	/**********************gotop*****************************/
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
        @media only screen and (max-width:545px){
            #gotop {
                position: fixed;
                right: 10px;
                bottom: 50px;
            }
            .footer_info{
                width: 300px;
            }
            .footer_last p{
                text-align: left;
            }
        }
        .menu_page{
            margin-top: -2px;
        }
    /********************************gotop***********************************/
	</style>
</head>
<body>
<?php include __DIR__. '/_navbarWithMember.php'; ?>
    

    <div class="bg1"><img src="baby-info/baby_big.png" alt=""></div>
    <div class="container">
			    	<div class="classtxt_01">
				    	<h2>小小孩親子教室</h2><br>
				    	<h4>「方法、想法、做法」</h4><br><br>
				        <p>是每一個孩子在面對生命裡所有學習與生活時<br><br>
				         很重要且珍貴的過程<br><br>
				         我們重視孩子們在藝術創作的每一個過程<br><br>
				         也尊重每一個孩子面對創作的態度<br><br>
				         而非刻意的模仿與過度在意作品的結果。<br><br>
				        </p>
				    </div><!-- classtxt_01-->
    </div>
  <div  class="cont2 cont2_small">
    		<div class="cont2-1"><img src="baby-info/baby1.png" alt=""></div>
    		<div class="cont2-2"><img src="baby-info/baby2.png" alt=""></div>
    		<div class="cont2-3"><img src="baby-info/baby3.png" alt=""></div>
    		<div class="cont2-4"><img src="baby-info/baby4.png" alt=""></div>
  </div>
  <div class="cont2 cont2_big" id="sec1">
    		<div class="cont2-1 pic_hover"><a href="baby-info/big_pic/baby1.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby1.png" alt=""></a></div>
    		<div class="cont2-2 pic_hover"><a href="baby-info/big_pic/baby2.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby2.png" alt=""></a></div>
    		<div class="cont2-3 pic_hover"><a href="baby-info/big_pic/baby3.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby3.png" alt=""></a></div>
    		<div class="cont2-4 pic_hover"><a href="baby-info/big_pic/baby4.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby4.png" alt=""></a></div>
  </div>
  <div class="classtxt_01 circle_relative">
         <div class="circle">            
		</div>
	     <div class="txtcontrol">
  	                    <h2>小小捏捏塗鴉課</h2><br>
				    	  
				        <p>在五感啟發中進行藝術體驗與創作。
							提供孩子感官探索與素材運用，
							讓孩子能夠藉由體驗、故事或遊戲來熟悉藝術材料。
							媒材會穿插藝術材料、陶土⋯等基本素材，結合不同主題創作喔！
							最重要的是希望孩子們能夠透過藝術形式來自由地表現自己。
				        </p>
				       </div>	
				       
   </div><!-- classtxt_01-->
<div class="cont2 cont2_small">
    		<div class="cont2-1"><img src="baby-info/baby5.png" alt="" class="pic_hover"></div>
    		<div class="cont2-2"><img src="baby-info/baby6.png" alt=""></div>
    		<div class="cont2-3"><img src="baby-info/baby7.png" alt=""></div>
    		<div class="cont2-4"><img src="baby-info/baby8.png" alt=""></div>
</div>				    
<div class="cont2 cont2_big" id="sec2">
    		<div class="cont2-1 pic_hover"><a href="baby-info/big_pic/baby5.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby5.png" alt=""></a></div>
    		<div class="cont2-2 pic_hover"><a href="baby-info/big_pic/baby6.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby6.png" alt=""></a></div>
    		<div class="cont2-3 pic_hover"><a href="baby-info/big_pic/baby7.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby7.png" alt=""></a></div>
    		<div class="cont2-4 pic_hover"><a href="baby-info/big_pic/baby8.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby8.png" alt=""></a></div>
  </div>


     <div class="classtxt_01 circle_relative">
      <div class="circle">            
		</div>
	     <div class="txtcontrol">
				    	<h2>兒童藝術美感課</h2><br>
				    	
				        <p>創作方式會依照不同單元使用不同的藝術材料進行創作，
							讓孩子們能夠在多元媒材之間發展出自己的藝術性。
							最重要的是，孩子除了學習不同的藝術表現方法，
							也能夠藉由藝術課表達自我，
							而我們相信每一種表達方式都是珍貴而重要的。
				        </p></div>
				    </div><!-- classtxt_01-->

<div class="cont2 cont2_small">
    		<div class="cont2-1"><img src="baby-info/baby9.png" alt=""></div>
    		<div class="cont2-2"><img src="baby-info/baby10.png" alt=""></div>
    		<div class="cont2-3"><img src="baby-info/baby11.png" alt=""></div>
    		<div class="cont2-4"><img src="baby-info/baby12.png" alt=""></div>
</div>				    
<div class="cont2 cont2_big" id="sec3">
    		<div class="cont2-1 pic_hover"><a href="baby-info/big_pic/baby9.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby9.png" alt=""></a></div>
    		<div class="cont2-2 pic_hover"><a href="baby-info/big_pic/baby10.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby10.png" alt=""></a></div>
    		<div class="cont2-3 pic_hover"><a href="baby-info/big_pic/baby11.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby11.png" alt=""></a></div>
    		<div class="cont2-4 pic_hover"><a href="baby-info/big_pic/baby12.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby12.png" alt=""></a></div>
  </div>


	  <div class="classtxt_01 circle_relative">
	   <div class="circle">            
		</div>
	     <div class="txtcontrol">
				    	<h2>多元藝術課</h2><br>
				    	
				        <p>藉由平面繪畫、拼貼、陶藝、立體建構...等
							創作形式結合不同主題的探索，
							讓孩子有更多機會動手做！
							除個人作品外亦有集體創作課程，
							希望能讓孩子在心裡能保有創作的熱情。
				    </div><!-- classtxt_01-->
<div class="cont2 cont2_small">
    		<div class="cont2-1"><img src="baby-info/baby13.png" alt=""></div>
    		<div class="cont2-2"><img src="baby-info/baby14.png" alt=""></div>
    		<div class="cont2-3"><img src="baby-info/baby15.png" alt=""></div>
    		<div class="cont2-4"><img src="baby-info/baby16.png" alt=""></div>
</div>				    
<div class="cont2 cont2_big" id="sec4">
    		<div class="cont2-1 pic_hover"><a href="baby-info/big_pic/baby13.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby13.png" alt=""></a></div>
    		<div class="cont2-2 pic_hover"><a href="baby-info/big_pic/baby14.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby14.png" alt=""></a></div>
    		<div class="cont2-3 pic_hover"><a href="baby-info/big_pic/baby15.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby15.png" alt=""></a></div>
    		<div class="cont2-4 pic_hover"><a href="baby-info/big_pic/baby16.png" rel="lightbox[plants]" title="點擊圖片右側即可跳轉下一張"><img src="baby-info/baby16.png" alt=""></a></div>
  </div>

	  <div class="classtxt_01 circle_relative">
	   <div class="circle">            
		</div>
	     <div class="txtcontrol">
				    	<h2>媽媽寶寶藝術遊戲</h2><br>
				        <p>媽媽跟寶寶一起進行體驗遊戲！
							會是以比較簡單有趣的玩法來讓孩子有更多藝術性刺激，
							從認識不同素材的特性和玩法，來進行體驗和遊戲。
							是親子一起玩的體驗課程，所以不一定每次課程都會有具體作品，
							體驗不同的藝術材料遊戲。
				        
				    </div><!-- classtxt_01-->

<div class="footer_block"></div>
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
					<ul >
                        <li><a href="treevago_room.php">房型介紹</a></li>
                        <li><a href="treevago_class_info.php">親子課程</a></li>
                        <li><a href="treevago_parkGuide.php">園區總覽</a></li>
                        <li><a href="treevago_activity.php">限時活動</a></li>
					</ul>
				</div>
			</div>
			<div class="footer_right">
				<div class="footer_info white_p">
					<p>T : 08-886-2345  F : 08-886-2222</p>
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
	</div><!--footer-->

<!--************************script************************-->
 <script src="js/jquery.min.js"></script> 
<!--************************script************************-->
<!--****************************nav_rwd(script)*****************************-->
  <script>
    $(".bar_box").click(function(){
      $(this).toggleClass("nav_active");
    });    
  </script>
  <script>
    $(".bar_box").click(function(){
      $(".menu_page").toggleClass("nav_active");
    });    
 </script>
<!--****************************nav_rwd*****************************-->
<!--***************************lightBOxjs***************************************-->	
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="js/jquery.smooth-scroll.min.js"></script>
<script src="js/lightbox.js"></script>
<script>


  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

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